@extends('layouts.form')
@section('title', 'crear carrera')

<style type="text/css" media="screen">
	.card-header h1{
		font-family: vagrant;
		font-size: 1.5em;
	}
	#tamaño{
		max-width: 80%;
		margin: 5% 10%	;
	}
</style>
@section('content')
	<div class="row" id="tamaño">
		<div class="col-md-12">
			<div class="card-header mx-lg-5 px-lg-5">
				<h1 class="text-lg font-weight-bold">{{__('Ingresa alguna carrera')}}</h1>
			</div>
			<div class="card-body mx-lg-5 px-lg-5 border mt-2 bg-gray-100">
				<form action="{{route('CreateRace')}}" method="POST" role="form" class="border bg-gray-300 rounded py-3 my-3">
					{{-- Mensaje de que se ha creado --}}
					@if(session('RaceSuccess'))
						<div class="alert bg-green-400 text-gray-900 mx-3">{{session('RaceSuccess')}}</div>
					@endif
					{{-- Mensaje de que se ha actualizado --}}
					@if(session('RacePrimary'))
						<div class="alert bg-blue-400 text-gray-900 mx-3">{{session('RacePrimary')}}</div>
					@endif
					{{-- Mensaje de que se ha eleminado --}}
					@if(session('RaceDanger'))
						<div class="alert bg-red-400 text-gray-900 mx-3">{{session('RaceDanger')}}</div>
					@endif
					@csrf
					<div class="row col-md-12">
						<div class="form-group col-md-6">
							<label for="nameCarrera" class="form-label">{{__('Nombre de la carrera')}}</label>
							<input type="text" name="nameCarrera" class="form-control" placeholder="Ingresar carrera">
							<samll class="text-muted text-sm">{{__('No incluir algún carácter que no sea [A-Za-z]')}}</samll>
						</div>
						<div class="form-group col-md-3">
							<label for="ageCarrera" class="form-label">{{__('Duración')}}</label>
							<input type="text" name="ageCarrera" class="form-control" placeholder="Años" maxlength="1">
							<small class="text-muted text-sm">{{__('Solo ingresar 1, 2 o 3')}}</small>
						</div>
						<div class="form-group col-md-3">
							<label for="resolucionCarrera" class="form-label">{{__('Resolución')}}</label>
							<input type="text" class="form-control" placeholder="Resolución" maxlength="8" name="resolucionCarrera">
							<small class="text-muted text-sm">{{__('Example: 875/12')}}</small>
						</div>
					</div>
					<div class="row col-md-12">
						<div class="form-group col-md-4">
							<label for="sedeCarrera" class="form-label">{{__('Elige a la sede que pertenece')}}</label>
							<select name="sedeCarrera" id="sedCarrera" class="form-control">
								<option value="option">{{__('---Seleccionar sede---')}}</option>
								@foreach($sedes as $listSede)
									<option value="{{$listSede->id}}">{{$listSede->SedeDn}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="sedeOptional1" class="form-label">{{__('Elige otra sede')}}</label>
							<select name="sedeOptional1" id="sedeOptional1" class="form-control">
								<option value="">{{__('---Seleccionar otra sede---')}}</option>
								@foreach($sedes as $sedeOptional1)
									<option value="{{$sedeOptional1->id}}">{{$sedeOptional1->SedeDn}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="sedeOptional2" class="form-label">{{__('Elige otra sede')}}</label>
							<select name="sedeOptional2" id="sedeOptional2" class="form-control">
								<option value="">{{__('---Seleccionar otra sede---')}}</option>
								@foreach($sedes as $sedeOptional2)
									<option value="{{$sedeOptional2->id}}">{{$sedeOptional2->SedeDn}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row col-md-12">
						<div class="form-group col-md-12">
							<a href="{{route('FormRace')}}"><input type="submit" name="submit" value="Guardar" class="btn btn-success btn-block my-4"></a>
						</div>
					</div>
				</form>
				{{-- Este dropdown es para ver las carreras que hay y actualizarlas desde acá --}}
				<div class="row">
					<div class="form-group col-md-4">
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle px-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Estos son link para actualizar">
						    {{__('Seleccionar carrera')}}
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    @foreach($carreras as $listaC)
						    	<a href="{{route('EditRace', $listaC->id)}}" class="dropdown-item font-italic">{{$listaC->CarreraDn}}</a>
						    @endforeach
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection

