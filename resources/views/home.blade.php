@extends('layouts.app')

@section('title', 'Area de cliente')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-info">Bienvenido, {{ Auth::user()->name }}</h1>
        </div>
    </div>
@endsection
