@extends('layouts.form')
@section('title', 'editar profesor')
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
	<div class="card-header">
		<h1 class="font-weight-bold">{{__('Ingresar profesor')}}</h1>
	</div>
	<div class="card-body border bg-gra-100">
		{{-- Este mensaje se mostrará una vez creado el docente --}}
		@if(session('profesorSuccess'))
			<div class="alert alert-success font-weight-bold">{{session('profesorSuccess')}}</div>
		@endif
		{{-- //////////////////////////////////////////////////////////////////////////////// --}}
		<form action="{{route('UpdateProfesor', $profesores->id)}}" method="POST" role="form" class="border bg-gray-300 rounded py-3 my-3">
			@csrf
			<div class="row col-md-12">
				<div class="form-group col-md-6">
					<label for="lastnameP" class="form-label">{{__('Ingresar apellido del profesor')}}</label>
					<input type="text" name="lastnameP" id="lastnameP" class="form-control" placeholder="Ingresar apellido" maxlength="40" value="{{$profesores->ProfesorApellido}}">
					<small class="text-muted text-sm">{{__('Sólo carácteres de la [A-Za-z]')}}</small>
				</div>
				<div class="form-group col-md-6">
					<label for="nameP" class="form-label">{{__('Ingresar nombre del profesor')}}</label>
					<input type="text" name="nameP" id="nameP" placeholder="Ingresar nombre" class="form-control" value="{{$profesores->ProfesorNombre}}">
					<small class="text-muted text-sm">{{__('Sólo carácteres de la [A-Za-z]')}}</small>
				</div>
			</div>
			<div class="row col-md-12">
				<div class="form-group col-md-12">
					<input type="submit" name="submit" id="submit" value="Actualizar" class="btn btn-primary px-5 my-3 float-left">
				</div>
			</div>
		</form>
		<div class="row col-md-12">
			<div class="form-group col-md-12">
				<form action="{{route('DeleteProfesor', $profesores->id)}}" method="POST" role="form">
					@csrf
					@method('DELETE')
					<input type="submit" class="btn btn-danger px-5 my-3 float-left" value="Eliminar" onclick="confirm('Estás seguro')">
				</form>
			</div>
		</div>
	</div>
 </div>
@endsection

