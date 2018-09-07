@extends('layouts.app')

@section('title', 'Detalle del cliente')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					{{-- <div class="card-title">Datos de {{ $client->full_name }}</div> --}}
					
					<div class="tab-content" id="nav-tabContent">
				      	<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
				      		<h4>Datos de cliente</h4>
				      		<hr>
				      		<form>
				      			<div class="row">
									<div class="col-md-2 mb-4">
			           					<img src="https://picsum.photos/100/100/?person" alt="">				
									</div>
								</div>
								<div class="row">
				                    <div class="form-group col-md-6">
				                        <label for="name">Nombre</label>
				                        <input type="email" class="form-control" id="name" placeholder="Nombre de cliente" value="{{ $client->name }}">
				                    </div>
				                
				                    <div class="form-group col-md-6">
				                        <label for="name">Apellido</label>
				                        <input type="email" class="form-control" id="name" placeholder="Nombre de cliente" value="{{ $client->lastname }}">
				                    </div>
								</div>
								
								<div class="row">
				                    <div class="form-group col-md-6">
				                        <label for="email">Correo electrónico</label>
				                        <input type="email" class="form-control" id="email" value="{{ $client->email }}">
				                    </div>

				                    <div class="form-group col-md-6">
				                        <label for="phone">Phone</label>
				                        <input type="number" class="form-control" id="phone" value="{{ $client->phone }}">
				                    </div>
								</div>

								<div class="row">
									<div class="form-group col-md-6">
				                        <label for="email">Correo electrónico</label>
				                        <input type="email" class="form-control" id="email" value="{{ $client->email }}">
				                    </div>

				                    <div class="form-group col-md-6">
				                        <label for="phone">Phone</label>
				                        <input type="number" class="form-control" id="phone" value="{{ $client->phone }}">
				                    </div>
								</div>
							</form>
				      	</div>
				      	
				      	<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
				      		<h4>Servicios del cliente</h4>
				      		<hr>
				      		<table class="table">
				      			<thead>
				      				<tr>

				      					<th>Servicio</th>
				      					<th>Fecha registro</th>
				      					<th>Proximo vencimiento</th>
				      					<th>Monto</th>
				      					<th>Acciones</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>Nimbus</td>
				      					<td>10/10/2018</td>
				      					<td>10/10/2019</td>
				      					<td>$25,00</td>
				      					<td><a href="#">Ver mas</a></td>
				      				</tr>
				      				
				      			</tbody>
				      		</table>
				      	</div>
				      	
				      	<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
				      	
				      	<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
				    </div>

					

					
				</div>
			</div>
		</div>

		<div class="col-md-4">
			{{-- <div class="card"> --}}
				{{-- <div class="card-body"> --}}
					 <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                        	Información
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                        	Servicios
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">
                        	Tickets
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">
                        	Configuraciones
                        </a>
                    </div>
				{{-- </div> --}}
			{{-- </div> --}}
		</div>
	</div>
</div>
@endsection