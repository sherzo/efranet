<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Curl;

class DomainController extends Controller
{
    public function check(Request $request) 
    {
		$primaryTlds = ['com', 'net', 'biz', 'us', 'info'];
		$api_key = env('RESELLER_CLUB_API_KEY');
		$reseller_id = env('RESELLER_CLUB_ID');
			
		$seach = $request->search;
		$isDomain = strpos($seach, '.');
	
		if($isDomain) { // Si es un dominio con tlds divido y consulto 
			list($domain, $tlds) = explode('.', $seach);
		}else { // Consulto el .com
			$tlds = 'com';
			$domain = $seach;
			$seach .= '.com';
		}
			
		$api_url = env('CHECK_DOMAIN');
		$url = $api_url . "api/domains/available.json?auth-userid=$reseller_id&api-key=$api_key&domain-name=$domain&tlds=$tlds";
		
		$response = Curl::to($url)
			->get();

		$data = collect(json_decode($response));
		
		$status = $data[$seach]->status;
		$available = ($status == 'available');
		
		// Consulto las sugerencias
		$api_url = env('URL_RESELLER_API_TEST');
		$url = $api_url . "api/domains/v5/suggest-names.json?auth-userid=$reseller_id&api-key=$api_key&keyword=$domain";

		$response = Curl::to($url)
			->get();    	

		$unfiltered = collect(json_decode($response));

		$filtered = collect();
		$suggestions = collect();

		foreach($unfiltered as $suggestion => $value) {
			list($domainSuggestion, $tldSuggestion) = explode('.', $suggestion);

			if($domainSuggestion == $domain) { // Si coincide solo el dominio		
				$filtered->push($suggestion);
			}		
		}

		if($filtered->count() > 0) {
			
			foreach($filtered as $suggestion) {
				list($domainSuggestion, $tldSuggestion) = explode('.', $suggestion);

				foreach($primaryTlds as $tld) {	// Si coincide con los tlds principales
					if($tld == $tldSuggestion) {
						$suggestions->push($suggestion);
					}
				}
			}

		}else {
			$suggestions = $unfiltered;
		}
		

		return [
			'available' => $status,
			'isDomain' => $isDomain,
			'suggestions' => $suggestions
		];

    }
}
