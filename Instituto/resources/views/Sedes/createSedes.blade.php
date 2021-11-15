@extends('layouts.form')
@section('title', 'crear sede')

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
			<div class="card-header mx-lg-5 px-lg-5 border-bottom-0 bg-gray-400">
				<h1 class="text-lg font-weight-bold">{{__('Ingresa alguna sede')}}</h1>
			</div>
			<div class="card-body mx-lg-5 px-lg-5 border border-top-0 bg-gray-100">
					<form action="{{route('CreateSede')}}" method="POST" role="form" class="border bg-gray-300 py-4 rounded mt-3">
					@csrf
					{{-- Mensaje de que se ha creado --}}
					@if(session('sedeSuccess'))
						<div class="alert bg-green-400 text-gray-900 mx-3">{{session('sedeSuccess')}}</div>
					@endif
					{{-- Mensaje de que se ha actualizado --}}
					@if(session('sedePrimary'))
						<div class="alert bg-blue-400 text-gray-900 mx-3">{{session('sedePrimary')}}</div>
					@endif
					{{-- Mensaje de que se ha eleminado --}}
					@if(session('sedeDanger'))
						<div class="alert bg-red-400 text-gray-900 mx-3">{{session('sedeDanger')}}</div>
					@endif
					<div class="row col-md-12">
						<div class="form-group col-md-4">
							<label for="nombreSede" class="form-label">{{__('Nombre de la sede')}}</label>
							<input type="text" name="nombreSede" id="nombreSede" class="form-control" placeholder="Ingresar nombre de la sede">
							<samll class="text-muted text-sm">{{__('No incluir algún carácter que no sea [A-Za-z]')}}</samll>
						</div>
						<div class="form-group col-md-4">
							<label for="direSede" class="form-label">{{__('Dirección/calle')}}</label>
							<input type="text" name="direSede" id="direSede" class="form-control" placeholder="Ingresar calle">
							<samll class="text-muted text-sm">{{__('No incluir algún carácter que no sea [A-Za-z]')}}</samll>
						</div>
						<div class="form-group col-md-4">
							<label for="alturaSede" class="form-label">{{__('Dirección/altura')}}</label>
							<input type="text" name="alturaSede" id="alturaSede" class="form-control" placeholder="Ingresar altura" maxlength="5" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
							<samll class="text-muted text-sm">{{__('Es el número')}}</samll>
						</div>
					</div>
					<div class="row col-md-12">
						<div class="form-group col-md-6">
							<a href="{{route('FormSede')}}"><input type="submit" name="submit" value="Guardar" class="btn btn-success mr-4 px-5"></a>
						</div>
						<div class="form-group col-md-6">
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle px-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    {{__('Seleccionar sede')}}
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    @foreach($sedes as $listaS)
						    	<a href="{{route('EditSede', $listaS->id)}}" class="dropdown-item font-italic">{{$listaS->SedeDn}}</a>
						    @endforeach
						  </div>
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection
