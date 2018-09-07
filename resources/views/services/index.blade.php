@extends('layouts.app')

@section('title', 'Mis servicios')

@section('content')
    <div class="row justify-content-center">
    	<div class="col-md-12">
    		
	       <div class="card">
		          <div class="card-header">
		              <h1>Mis servicios</h1>
		          </div>

	          	<div class="card-body">
					<table class="table table-hover responsive-table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Cliente</th>
					      <th scope="col">Fecha de registro</th>
					      <th scope="col">Servicios</th>
					      <th scope="col">Tipo Servicios</th>
					      <th scope="col">Servicios Suspendidos</th>
					      <th scope="col">Servicios Activos</th>
					      <th scope="col">Acciones</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td><a href="#">Saul Florez</a></td>
					      <td>13/10/2018</td>
					      <td>6</td>
					      <td>Reseller</td>
					      <td>2</td>
					      <td>4</td>
					      <td><a href="#">Ver mas</></td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td><a href="#">Andres Gonzalez</a></td>
					      <td>13/10/2018</td>
					      <td>6</td>
					      <td>Nimbos</td>
					      <td>2</td>
					      <td>4</td>
					      <td><a href="#">Ver mas</></td>
					    </tr>
					  </tbody>
					</table>
	          	</div>
	      	</div>
    	</div>
    </div>
@endsection