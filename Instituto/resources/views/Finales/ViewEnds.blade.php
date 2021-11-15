@extends('layouts.form')
@section('title', 'finales')
{{-- Estilos css --}}
<style type="text/css" media="screen">
	.card-header h1{
		font-size: 1.3em;
		font-family: vagrant;
	}
	.card-body .card-title{
		border:dotted 1px #000;
	}
	.card-title ul{
		list-style: circle;
	}
</style>
@section('content')
	<div class="card-header bg-gray-500 rounded-top border-bottom-0 mx-lg-5">
		<h1 class="font-weight-bold">{{__('Los finales de todas las carreras')}}</h1>	
	</div>
	<div class="card-body border-top-0 border rounded-bottom mx-lg-5 bg-gray-200">
		@if(session('endSuccess'))
			<div class="alert alert-success mx-4 py-1">{{session('endSuccess')}}</div>
		@endif
		@if(session('EndDanger'))
			<div class="alert alert-danger font-weight-bold">{{session('EndDanger')}}</div>
		@endif
		<div class="card-title p-3 rounded-lg">
			@foreach($llamados as $llamado)
			<table class="table table-border text-center text-light py-5">
				<thead class="bg-dark ">
					<tr>
						<th colspan="4" class="border-bottom-0">{{$llamado->Llamado}}</th>
					</tr>
					<tr class="text-uppercase bg-light text-dark border-dark border border-bottom-0">
						<th>{{__('fecha')}}</th>
						<th>{{__('asignatura')}}</th>
						<th>{{__('profesores')}}</th>
						<th>{{__('Acciones')}}</th>
					</tr>
				</thead>
				@foreach($finales as $listEnds)
				<tbody class="border border-top-0 border-dark">
					@if($llamado->id == $listEnds->Llamado_id)
					<tr class="text-dark">
						<td>{{$listEnds->Fecha}}</td>
						<td>{{$listEnds->materias->MateriaDn}}</td>
						<td>
							{{$listEnds->profesorTitular->ProfesorApellido}}
							 - 
							{{$listEnds->profesorVocal1->ProfesorApellido}} 

							@if($listEnds->id == $listEnds->ProfesorOptativo_id)
							   - {{$listEnds->profesorVocal2->ProfesorApellido}}
							 @else
							 
							 @endif
						</td>
						<td>
							<a hre f="{{route('EditEnd', $listEnds->id)}}">
							<button type="button" class="btn btn-primary">{{__('Editar')}}</button>
							</a>
							<form action="{{route('DeleteEnd', $listEnds->id)}}" method="POST" role="form" class="d-inline">
								@csrf
								@method("DELETE")
								<button type="submit" class="btn btn-danger">{{__('Eliminar')}}</button>
							</form>
						</td>
					</tr>
					@endif
					@endforeach
			</tbody>
		</table>
		@endforeach
		</div>
	</div>
@endsection