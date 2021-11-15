@extends('layouts.form')
@section('title', 'sedes')
{{-- Estilos css --}}
<style type="text/css" media="screen">
	.card-title{
		font-family: vagrant;
	}
	.card-footer ul li{
		list-style-type: circle;
	}
</style>
@section('content')
	<div class="card-header bg-gray-300">
		<h1 class="font-weight-bold font-italic text-lg">{{__('Todas las sedes asociadas a ISFT38')}}</h1>
	</div>
	<div class="card-group">
		@foreach($sedes as $listSedes)
		<div class="card mx-3 my-3">
			<img src="{{$listSedes->SedeImagen}}" alt="Sede San Nicolás" class="card-img-top border-2 border-gray-800">
			<div class="card-body boder bg-gray-200">
				<h5 class="card-title font-weight-bold">{{$listSedes->SedeDn}}</h5>
				<div class="card-footer border bg-green-300 rounded-lg">
                    @foreach($carreras as $listRaces)
                    	<ul>
                    		@if(($listSedes->id <> $listRaces->SedeId) || ($listSedes->id <> $listRaces->SedeOptional1Id) || ($listSedes->id <> $listRaces->SedeOptional2Id))	
                    		<li class="mx-3 py-2 text-sm font-italic">{{$listRaces->CarreraDn}}</li>
                    		@endif
                    	</ul>
                    @endforeach
				</div>
			</div>
		</div>
		@endforeach
	</div>
@endsection
