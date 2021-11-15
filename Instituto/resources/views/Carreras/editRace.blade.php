@extends('layouts.form')
@section('title', 'editar carrera')

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
				<h1 class="text-lg font-weight-bold">{{__('Actualizar carrera carrera')}}</h1>
			</div>
			<div class="card-body mx-lg-5 px-lg-5 border mt-2 bg-gray-100">
				<form action="{{route('UpdateRace', $carreras->id)}}" method="POST" role="form" class="border bg-gray-300 py-3 my-3 rounded">
					@csrf
					<div class="row col-md-12">
						<div class="form-group col-md-6">
							<label for="nameCarrera" class="form-label">{{__('Nombre de la carrera')}}</label>
							<input type="text" name="nameCarrera" class="form-control" placeholder="Ingresar carrera" value="{{$carreras->CarreraDn}}">
							<samll class="text-muted text-sm">{{__('No incluir algún carácter que no sea [A-Za-z]')}}</samll>
						</div>
						<div class="form-group col-md-3">
							<label for="ageCarrera" class="form-label">{{__('Duración')}}</label>
							<input type="text" name="ageCarrera" class="form-control" placeholder="Año" maxlength="1" value="{{$carreras->CarreraAnios}}">
							<small class="text-muted text-sm">{{__('Solo ingresar 1, 2 o 3')}}</small>
						</div>
						<div class="form-group col-md-3">
							<label for="resolucionCarrera" class="form-label">{{__('Resolución')}}</label>
							<input type="text" class="form-control" placeholder="Resolución" maxlength="8" name="resolucionCarrera" value="{{$carreras->CarreraResolucion}}">
							<small class="text-muted text-sm">{{__('Example: 875/12')}}</small>
						</div>
					</div>
					{{-- Otro row --}}
					<div class="row col-md-12">
						<div class="form-group col-md-4">
							<label for="sedeCarrera" class="form-label">{{__('Sede a la que pertenece')}}</label>
							<select name="sedeCarrera" id="sedeCarrera" class="form-control">
			                    <option value="">--Elige el tipo la carrera--</option>
			                    @foreach($sedes as $listSede)
			                        <option value="{{$listSede->id}}"  @if($listSede->id == $carreras->SedeId) selected="selected" 
			                            @endif  
			                            >{{$listSede->SedeDn}}</option>
			                    @endforeach
			                </select>
						</div>
						<div class="form-group col-md-4">
							<label for="sedeOptional1" class="form-label">{{__('Cambiar sede')}}</label>
							<select name="sedeOptional1" id="sedeOptional1" class="form-control">
			                    <option value="">--Elige el tipo la carrera--</option>
			                    @foreach($sedes as $listSede)
			                        <option value="{{$listSede->id}}"  @if($listSede->id == $carreras->SedeOptional1Id) selected="selected" 
			                            @endif  
			                            >{{$listSede->SedeDn}}</option>
			                    @endforeach
			                </select>
						</div>
						<div class="form-group col-md-4">
							<label for="sedeOptional2" class="form-label">{{__('Sede a la que pertenece')}}</label>
							<select name="sedeOptional2" id="sedeOptional2" class="form-control">
			                    <option value="">--Elige el tipo la carrera--</option>
			                    @foreach($sedes as $listSede)
			                        <option value="{{$listSede->id}}"  @if($listSede->id == $carreras->SedeOptional2Id) selected="selected" 
			                            @endif  
			                            >{{$listSede->SedeDn}}</option>
			                    @endforeach
			                </select>
						</div>
					</div>
					<div class="row col-md-12">
						<div class="form-group">
							<a href="{{route('FormRace')}}"><input type="submit" name="submit" value="Actualizar" class="btn btn-primary px-5 mr-4"></a>
						</div>
					</div>
				</form>
				<div class="row col-md-12">
					<div class="form-group col-md-12 mt-4">
						<form action="{{route('DeleteRace', $carreras->id)}}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger px-5" onclick="confirm('¿Estas seguro que quieres eliminar esta carrera?')">{{__('Eliminar')}}</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection
