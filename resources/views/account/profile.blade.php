@extends('layouts.app')

@section('title', 'Mis datos - area de clientes')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-10">
    		
	       <div class="card">
		          <div class="card-header">
		              <h1>Perfil del cliente</h1>
		          </div>

	          	<div class="card-body">
					<form method="POST" action="{{ url('profile') }}" aria-label="Perfil del cliente">
                        @csrf
						
						<h3>Datos de pricipales</h3>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
							
							<label for="lastname" class="col-md-2 col-form-label  text-md-right">Apellido</label>

                            <div class="col-md-4">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ $user->lastname }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label  text-md-right">Correo electrónico</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="phone" class="col-md-2 col-form-label  text-md-right">Teléfono</label>
                            
                            <div class="col-md-4">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $user->phone }}" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                     
                        <div class="form-group row">
                            <label for="country_id" class="col-md-2 col-form-label text-md-right">Pais</label>

                            <div class="col-md-4">
                                <select name="country_id" id="country_id" class="form-control{{ $errors->has('country_id') ? ' is-invalid' : '' }}">
                                     @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                     @endforeach
                                </select>

                                @if ($errors->has('country_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        	
                        	<label for="city" class="col-md-2 col-form-label text-md-right">Ciudad</label>

                            <div class="col-md-4">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                   
                        </div>    

                        <div class="form-group row">
                            <label for="address" class="col-md-2 col-form-label text-md-right">Dirección</label>

                            <div class="col-md-10">
                                <textarea name="address" id="address" cols="30" rows="2" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}">{{ $user->address }}</textarea>
                            </div>
                        </div>
						
						<hr>
						<h3>Cambio de contraseña</h3>	
                       	<div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">Contraseña nueva</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        	
                        	<label for="password_confirmation" class="col-md-2 col-form-label text-md-right">Contraseña nueva</label>

                            <div class="col-md-4">
                                <input id="password_confirmation" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-12 ">
                                <small class="text-muted justify-content-center">Deje la contraseña en blanco si no desea cambiarla</small>
                            </div>
                   
                        </div> 

                        <hr>
                        <h3></h3>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar perfil
                                </button>
                            </div>
                        </div>
                    </form>
	          	</div>
	      	</div>
    	</div>
    </div>
</div>
@endsection