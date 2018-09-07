@extends('layouts.app')

@section('title', 'Listado de clientes')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-12">
	       <div class="card">
		          <div class="card-header">
		              <h1>Clientes registrados</h1>
		          </div>

	          	<div class="card-body">
					<table class="table table-hover responsive-table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Cliente</th>
					      <th scope="col">Fecha</th>
					      <th scope="col">Servicios</th>
					      <th scope="col">Proximo vencimiento</th>
					      <th scope="col">Acciones</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($clients as $client)
							<tr>
								<th scope="row">{{ $client->id }}</th>
								<td>
									<a href="{{ url('clients', $client->id) }}">
										{{ $client->full_name }}
									</a>
								</td>
								<td>
									{{ $client->register_date }}
								</td>
								<td class="center-align">
									<b>Nimbus</b><br>
									<a href="#">www.saulflorez.com</a>
								</td>
								<td>19/09/2019</td>
								<td>
									<a href="{{ url('clients', $client->id) }}">Ver mas</a>
								</td>
							</tr>
					  	@endforeach
					  </tbody>
					</table>
	          	</div>
	      	</div>
    	</div>
    </div>
</div>
@endsection