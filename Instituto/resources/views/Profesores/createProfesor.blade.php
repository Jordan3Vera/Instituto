@extends('layouts.form')
@section('title', 'form profesor')
{{-- Estilos css --}}
<style type="text/css" media="screen">
	.card-header{
		margin-left: 10%;
		margin-right: 10%;
	}
	.card-body{
		margin-left: 10%;
		margin-right: 10%;
	}
</style>
@section('content')
 <div class="container">
	<div class="card-header border-bottom-0 bg-gray-400">
		<h1 class="font-weight-bold">{{__('Ingresar profesor')}}</h1>
	</div>
	<div class="card-body border bg-gray-100 border-top-0">
		{{-- Este mensaje se mostrará una vez creado el docente --}}
		@if(session('profesorSuccess'))
			<div class="alert alert-success font-weight-bold mx-3">{{session('profesorSuccess')}}</div>
		@endif
		{{-- /////////////////////////////////////////////////////////////////////////// --}}
		{{-- Este mensaje se mostrará una vez actualizado el docente --}}
		@if(session('profesorPrimary'))
			<div class="alert alert-primary font-weight-bold mx-3">{{session('profesorPrimary')}}</div>
		@endif
		{{-- //////////////////////////////////////////////////////////////////////////////// --}}
		@if(session('profesorDanger'))
			<div class="alert alert-danger font-weight-bold mx-3">{{session('profesorDanger')}}</div>
		@endif
		<form action="{{route('CreateProfesor')}}" method="POST" role="form" class="border bg-gray-300 rounded py-4 my-3">
			@csrf
			<div class="row col-md-12">
				<div class="form-group col-md-6">
					<label for="lastnameP" class="form-label">{{__('Ingresar apellido del profesor')}}</label>
					<input type="text" name="lastnameP" id="lastnameP" class="form-control" placeholder="Ingresar apellido" maxlength="40" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))">
					<small class="text-muted text-sm">{{__('Sólo carácteres de la [A-Za-z]')}}</small>
				</div>
				<div class="form-group col-md-6">
					<label for="nameP" class="form-label">{{__('Ingresar nombre del profesor')}}</label>
					<input type="text" name="nameP" id="nameP" placeholder="Ingresar nombre" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))">
					<small class="text-muted text-sm">{{__('Sólo carácteres de la [A-Za-z]')}}</small>
				</div>
			</div>
			<div class="row col-md-12">
				<div class="form-group col-md-3">
					<input type="submit" name="submit" id="submit" value="Guardar" class="btn btn-success px-5 my-3">
				</div>
				<div class="form-group col-md-3">
					<label for="description" class="form-label border bg-red-300 p-3 rounded font-italic text-sm">{{__('En el select, escoje el docente y edita sus datos')}}</label>
				</div>
				<div class="form-group col-md-6">
					<label for="profesors" class="form-label">{{__('Seleccionar profesor')}}</label>
					<div class="dropdown">
						<button class="btn bg-orange-400 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('---Seleccionar profesor---')}}</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							@foreach($profesores as $listProfesors)
								<a href="{{route('EditProfesor', $listProfesors->id)}}" class="dropdown-item">{{$listProfesors->ProfesorApellido}}, {{$listProfesors->ProfesorNombre}}</a>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
 </div>
@endsection
