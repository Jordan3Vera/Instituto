@extends('layouts.form')
@section('title', 'editar materia')
<style type="text/css" media="screen">
	.card-header{
		margin-left: 8%;
		margin-right: 8%;
	}
	.card-body{
		margin-left: 8%;
		margin-right: 8%;
	}
</style>
@section('content')
	<div class="container">
		<div class="card-header bg-gray-400 rounded-top border-bottom-0">
			<h1 class="card-title text-lg font-weight-bold my-2">{{__('Completar el formulario')}}</h1>
		</div>
		<div class="card-body border border-top-0 ">
			<form action="{{route('UpdateSubject', $materias->id)}}" method="POST" role="form" class="bg-gray-400 py-4">
				@csrf
				<div class="row col-md-12">
					<div class="form-group col-md-6">
						<label for="nameMateria" class="form-label">{{__('Nombre de la materia')}}</label>
						<input type="text" name="nameMateria" id="nameMateria" class="form-control" placeholder="Ingresar materia" value="{{$materias->MateriaDn}}">
						<small class="text-muted text-sm">{{__('No incluir otro tipo de carácter, solo [A-Za-z]')}}</small>
					</div>
					<div class="form-group col-md-6">
						<label for="nameCarrera" class="form-label">{{__('A que carrera le pertenece')}}</label>
						<select name="nameCarrera" id="nameCarrera" class="form-control">
							<option value="option">{{__('---Elegir carrera---')}}</option>
							@foreach($carreras as $listCarreras)
								<option value="{{$listCarreras->id}}" @if($listCarreras->id == $materias->CarreraId) selected="selected" @endif>{{$listCarreras->CarreraDn}}</option>
							@endforeach
						</select>
						<small class="text-muted text-sm">{{__('Lo que elija va a pertenecer a esa asignatura')}}</small>
					</div>
				</div>
				<div class="row col-md-12">
					<div class="form-group col-md-3">
						<label for="ageMateria" class="form-label">{{__('Año de la materia')}}</label>
						<input type="number" name="ageMateria" id="ageMateria" class="form-control" max="3" min="1" maxlength="1" placeholder="Año de la materia" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" value="{{$materias->Anio}}">
						<small class="text-muted text-sm">{{__('Solo número entre 1 hasta 3')}}</small>
					</div>
					<div class="form-group col-md-3">
						<input type="submit" name="submit" value="Actualizar" class="btn btn-primary px-5 ml-5 my-4">
					</div>
				</div>
			</form>
			<div class="row col-md-12">
				<form action="{{route('DeleteSubject', $materias->id)}}" method="POST" role="fomr">
					@csrf
					@method("DELETE")
					<input type="submit" name="submit" id="submit" value="Eliminar" class="btn btn-danger px-5">
				</form>
			</div>
		</div>
	</div>
@endsection

