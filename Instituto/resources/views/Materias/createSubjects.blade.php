@extends('layouts.form')
@section('title', 'crear materia')
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
		<div class="card-header bg-gray-400 rounded-lg">
			<h1 class="card-title text-lg font-weight-bold my-2">{{__('Completar el formulario')}}</h1>
		</div>
		<div class="card-body border">
			<form action="{{route('CreateSubject')}}" method="POST" role="form" class="border bg-gray-300 py-4 rounded">
				@csrf
				{{-- Este mensaje se mostrará una vez creada la materia --}}
				@if(session('subjectSuccess'))
					<div class="alert alert-success font-weight-bold mx-3">{{session('subjectSuccess')}}</div>
				@endif
				{{-- Este mensaje se mostrará una vez actualizada la materia --}}
				@if(session('subjectPrimary'))
					<div class="alert alert-primary font-weight-bold mx-3">{{session('subjectPrimary')}}</div>
				@endif
				{{-- Este mensaje se mostrará una vez eleminada la materia --}}
				@if(session('subjectDanger'))
					<div class="alert alert-danger font-weight-bold mx-3">{{session('subjectDanger')}}</div>
				@endif
				<div class="row col-md-12">
					<div class="form-group col-md-6">
						<label for="nameMateria" class="form-label">{{__('Nombre de la materia')}}</label>
						<input type="text" name="nameMateria" id="nameMateria" class="form-control" placeholder="Ingresar materia">
						<small class="text-muted text-sm">{{__('No incluir otro tipo de carácter, solo [A-Za-z]')}}</small>
					</div>
					<div class="form-group col-md-6">
						<label for="nameCarrera" class="form-label">{{__('A que carrera le pertenece')}}</label>
						<select name="nameCarrera" id="nameCarrera" class="form-control">
							<option value="option">{{__('---Elegir carrera---')}}</option>
							@foreach($carreras as $listCarreras)
								<option value="{{$listCarreras->id}}">{{$listCarreras->CarreraDn}}</option>
							@endforeach
						</select>
						<small class="text-muted text-sm">{{__('Lo que elija va a pertenecer a esa asignatura')}}</small>
					</div>
				</div>
				<div class="row col-md-12">
					<div class="form-group col-md-4">
						<label for="ageMateria" class="form-label">{{__('Año de la materia')}}</label>
						<input type="number" name="ageMateria" id="ageMateria" class="form-control" max="3" min="1" maxlength="1" placeholder="Año de la materia" onkeypress="return (event.charCode >= 48 && event.charCode 57)">
						<small class="text-muted text-sm">{{__('Solo número entre 1 hasta 3')}}</small>
					</div>
					<div class="form-group col-md-4">
						<a href="{{route('FormSubject')}}"><input type="submit" name="submit" value="Guardar" class="btn btn-success px-5 ml-5 my-4"></a>
					</div>
					<div class="form-group col-md-4">
						<label for="nameCarrera" class="form-label">{{__('Elige una carrera cambiar sus datos')}}</label>
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle px-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    {{__('--Seleccionar materia--')}}
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    @foreach($materias as $listSubjects)
						    	<a class="dropdown-item" href="{{route('EditSubject', $listSubjects->id)}}">{{$listSubjects->MateriaDn}}</a>
						    @endforeach
						  </div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection

