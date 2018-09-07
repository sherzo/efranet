<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Saul',
        	'lastname' => 'Florez',
        	'password' => bcrypt('sherzoclient'),
        	'email' => 'sherzo-b@hotmail.com',
            'city' => 'Maracay',
            'country_id' => 1
        ]);
    }
}
