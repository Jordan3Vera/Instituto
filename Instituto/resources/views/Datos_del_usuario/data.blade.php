@extends('layouts.guest')
@section('title', 'datos del usuario')
<style type="text/css" media="screen">
	.card-body h2{
		font-size: 1.5em;
		font-family: vagrant;
		text-decoration: underline;
	}
	h3{
		padding-top: 1em;
	}
</style>
@section('content')
	<div class="card-header shadow text-lg" style="font-family:algerian; text-shadow: 3px 5px 10px #000;">{{Auth::user()->name}} - {{__('acá están todos tus datos')}}</div>
	<div class="card-body border border-top rounded">

		{{-- Muestro un mensaje --}}
		@if(session('dataSuccefully'))
			<div class="alert bg-green-400 text-gray-900">{{session('dataSuccefully')}}</div>
		@endif

		{{-- Muestro los datos --}}
		<h2 class="pt-3 text-green-500">Tus datos al registrarte</h2>
		<h3><span class="font-weight-bold">{{__('Nombre:')}}</span> {{Auth::user()->name}}</h3>
		<h3><span class="font-weight-bold">{{__('Apellido:')}}</span> {{Auth::user()->lastname}}</h3>
		<h3><span class="font-weight-bold">{{__('Correo electrónico:')}}</span> {{Auth::user()->email}}</h3>

		{{-- Muestro los otros datos --}}
		<h2 class="pt-3 text-green-500">{{__('Otros datos personales')}}</h2>
		<p>{{__('Puedes agragar más campos a tu descripción si lo deseas')}}
			<a href="{{route('formProfile')}}" class="border bg-gray-800 mx-4 rounded-lg text-lg text-white text-decoration-none p-1 hover:bg-orange-400">Agregar</a>
		</p>
	
		<div class="card border border-gray-800 mt-4 bg-blue-100">
			@foreach($datos as $yourData)
				<p class="mx-3"><span class="font-weight-bold">{{__('Edad:')}}</span> {{$yourData->age}} {{__('años')}}</p>
				<p class="mx-3"><span class="font-weight-bold">{{__('Fecha de nacimiento:')}}</span> {{$yourData->date}}</p>
				<p class="mx-3"><span class="font-weight-bold">{{__('Sexo:')}}</span> {{$yourData->sex}}</p>
				<p class="mx-3"><span class="font-weight-bold">{{__('País de origen:')}}</span> {{$yourData->country}}</p>
				<p class="mx-3"><span class="font-weight-bold">{{__('Provincia:')}}</span> {{$yourData->province}}</p>
				<p class="mx-3"><span class="font-weight-bold">{{__('Ciudad:')}}</span> {{$yourData->city}}</p>
				<p class="mx-3"><span class="font-weight-bold">{{__('Domicilio:')}}</span> {{$yourData->home}}</p>
				<p class="mx-3"><span class="font-weight-bold">{{__('Estado civil:')}}</span> {{$yourData->civil_status}}</p>
			@endforeach
		</div>






	</div>
@endsection