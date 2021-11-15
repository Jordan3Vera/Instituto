@extends('layouts.form')
@section('title', 'editar sede')

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
				<h1 class="text-lg font-weight-bold">{{__('Editar sede')}}</h1>
			</div>
			<div class="card-body mx-lg-5 px-lg-5 border border-top-0 bg-gray-100">
				<form action="{{route('UpdateSede', $sedes->id)}}" method="POST" role="form" autocomplete="off" class="border bg-gray-300 py-3 my-3">
					@csrf
					<div class="row col-md-12">
						<div class="form-group col-md-4">
							<label for="nombreede" class="form-label">{{__('Nombre de la sede')}}</label>
							<input type="text" name="nombreSede" id="nombreSede" class="form-control" placeholder="Ingresar nombre de la sede" value="{{$sedes->SedeDn}}">
							<samll class="text-muted text-sm">{{__('No incluir algún carácter que no sea [A-Za-z]')}}</samll>
						</div>
						<div class="form-group col-md-4">
							<label for="direSede" class="form-label">{{__('Direcció/calle')}}</label>
							<input type="text" name="direSede" id="direSede" class="form-control" placeholder="Ingresar calle" value="{{$sedes->SedeDireCalle}}">
							<samll class="text-muted text-sm">{{__('No incluir algún carácter que no sea [A-Za-z]')}}</samll>
						</div>
						<div class="form-group col-md-4">
							<label for="alturaSede" class="form-label">{{__('Dirección/altura')}}</label>
							<input type="text" name="alturaSede" id="alturaSede" class="form-control" placeholder="Ingresar altura" value="{{$sedes->SedeDireAltura}}" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
							<samll class="text-muted text-sm">{{__('Incluir solo números')}}</samll>
						</div>
						
					</div>
					<div class="row col-md-12">
						<div class="form-group col-md-8">
							<a href="{{route('FormSede')}}"><input type="submit" name="submit" value="Actualizar" class="btn btn-primary px-5 mr-4"></a>
						</div>
					</div>
				</form>
				<div class="row col-md-12">
					<form action="{{route('DeleteSede', $sedes->id)}}" method="POST">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger px-5 mx-3">{{__('Eliminar')}}</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection
