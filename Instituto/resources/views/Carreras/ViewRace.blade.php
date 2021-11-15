@extends('layouts.form')
@section('title', 'carreras')
{{-- Estilos css --}}
<style type="text/css" media="screen">
	.card-header{
		margin-left: 15%;
		margin-right: 15%;
	}
	.card-body{
		margin-left: 15%;
		margin-right: 15%;
	}
	.card-body h2{
		text-indent: 20px;
		font-family: vagrant;
	}
	.card-body	h4{
		font-family: vagrant;
	}
</style>
{{-- Efectos con jquery --}}
<script type="text/javascript">
	$(document).ready(function(){

	});
</script>
{{-- El contenido del sitio --}}
@section('content')
	<div class="card-header border-bottom-0 bg-gray-400">
		<h1 class="font-weight-bold text-lg text-uppercase">{{__('Todas las carreras del Instituto ISFT38')}}</h1>
	</div>
	<div class="card-body border border-top-0 bg-gray-100">
		<div class="accordion" id="accordionExample">
		@foreach($carreras as $listRaces)
		  <div class="card">
		    <div class="card-title" id="headingOne{{$listRaces->id}}">
		      <h2 class="mb-0">
		        <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne{{$listRaces->id}}" aria-expanded="true" aria-controls="collapseOne{{$listRaces->id}}">
		          {{$listRaces->CarreraDn}}
		        </button>
		      </h2>
		    </div>

		    <div id="collapseOne{{$listRaces->id}}" class="collapse hide border border-1 rounded bg-gray-100 mb-2 mx-4" aria-labelledby="headingOne{{$listRaces->id}}" data-parent="#accordionExample">
		    <small class="text-red-400 text-sm mx-5">{{$listRaces->sedes->SedeDn}}
		    @if($listRaces->SedeOptional1Id <> "")
		    - {{$listRaces->sedesOption1->SedeDn}}
		    @else
		    @endif
		    @if($listRaces->SedeOptional2Id <> "")
		    - {{$listRaces->sedesOption2->SedeDn}}
		    @else
		    @endif
		    </small>
		    <p class="mx-5 py-2">{{__('Resolución: ')}}<span class="text-sm">{{$listRaces->CarreraResolucion}}</span></p>
		    <h3 class="mx-5 font-weight-bold text-lg mt-2">{{__('Materias')}}</h3>
		    @foreach($materias as $listSubject)
        		@if($listSubject->Anio == 1)
	        		{{-- <h4 class="mx-5 mt-3">{{__('Primer año:')}}</h4> --}}
	        		<p class="py-1 text-sm font-italic mx-5">{{$listSubject->MateriaDn}}</p>
	        	@endif
	        	@if($listSubject->Anio == 2)
	        		{{-- <h4 class="mx-5 mt-3">{{__('Segundo año:')}}</h4> --}}
	        		<p class="py-1 text-sm font-italic mx-5">{{$listSubject->MateriaDn}}</p>
	        	@endif
	        @endforeach
		</div>
		@endforeach
	</div>











	
@endsection
