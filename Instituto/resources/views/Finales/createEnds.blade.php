@extends('layouts.form')
@section('title', 'formulario finales')
{{-- Estilos css --}}
<style type="text/css" medi="screen">
	.card-header{
		font-family: algerian;
	}
</style>
@section('content')
	<script type="text/javascript">
		// $(document).ready(function(){
		// 	$('#nameCarreraId').hide();
		// 	$('#nameMateriaId').hide();
		// 	$('#nameSedeId').change(function(){
		// 		$.ajax({
		// 			url: "ViewRace" + $(this).val(),
		// 			method:'GET',
		// 			success: function(){
		// 				$('#nameCarreraId').html(data.html + '<option value="option">---Seleccionar carrera---</option>'		
		// 			}
		// 		});
		// 	});
		// });

		
	</script>
	<div class="card-header mx-lg-5 bg-gray-500 rounded-top border-bottom-0">
		<h1 class="font-weight-bold">{{__('Crear final')}}</h1>
	</div>
	<div class="card-body border bg-gray-100 mx-lg-5 rounded-bottom border-top-0">
		<form action="{{route('CreateEnd')}}" method="POST" role="form" class="border py-3 rounded-lg border-dark" id="formData">
			@csrf
			<div class="row col-md-12">
				<div class="form-group col-md-4">
					<label for="nameSedeId" class="form-label">{{__('Seleccionar la sede que le pertenece')}}</label>
					<select name="nameSedeId" id="nameSedeId" class="form-control">
						<option value="option">{{__('---Seleccionar sede---')}}</option>
						@foreach($sedes as $listSedes)
							<option value="{{$listSedes->id}}">{{$listSedes->SedeDn}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="nameCarreraId" class="form-label">{{__('A que asginatura pertenece')}}</label>
					<select name="nameCarreraId" id="nameCarreraId" class="form-control">
						<option value="option">{{__('---Seleccionar carrera---')}}</option>
						@foreach($carreras as $listRaces)
							<option value="{{$listRaces->id}}">{{$listRaces->CarreraDn}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="nameMateriaId" class="form-label">{{__('Seleccionar la materia')}}</label>
					<select name="nameMateriaId" id="nameMateriaId" class="form-control">
						<option value="option">{{__('---Seleccionar materia---')}}</option>
						@foreach($materias as $listSubjects)
							<option value="{{$listSubjects->id}}">{{$listSubjects->MateriaDn}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row col-md-12">
				<div class="form-group col-md-5">
					<label for="nameDivisionId" class="form-label">{{__('Seleccionar división')}}</label>
					<select name="nameDivisionId" id="nameDivisionId" class="form-control">
						<option value="option">{{__('---Seleccionar división---')}}</option>
						@foreach($divisiones as $listDivisions)
							<option value="{{$listDivisions->id}}">{{$listDivisions->Division}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-md-2">
					<label for="AnioId" class="form-label">{{__('Año del curso')}}</label>
					<select name="AnioId" id="AnioId" class="form-control">
						<option value="option">{{__('--Select Age--')}}</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>
				<div class="form-group col-md-5">
					<label for="nameLlamadoId" class="form-label">{{__('Seleccionar a que llamado le corresponde')}}</label>
					<select name="nameLlamadoId" id="nameLlamadoId" class="form-control">
						<option value="option">{{__('---Seleccionar llamado---')}}</option>
						@foreach($llamados as $listCalls)
							<option value="{{$listCalls->id}}">{{$listCalls->Llamado}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row col-md-12">
				<div class="form-group col-md-4">
					<label for="nameProfesorId" class="form-label">{{__('Seleccionar el docente particular')}}</label>
					<select name="nameProfesorId" id="nameProfesorId" class="form-control">
						<option value="option">{{__('---Seleccionar particular---')}}</option>
						@foreach($profesores as $listProfesors)
							<option value="{{$listProfesors->id}}">{{$listProfesors->ProfesorApellido}}, {{$listProfesors->ProfesorNombre}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="nameProfesorVoalId" class="form-label">{{__('Elegir el docente vocal')}}</label>
					<select name="nameProfesorVocalId" id="nameProfesorVocalId" class="form-control">
						<option value="option">{{__('---Seleccionar vocal---')}}</option>
						@foreach($profesores as $ProfesorVocal)
							<option value="{{$ProfesorVocal->id}}">{{$ProfesorVocal->ProfesorApellido}}, {{$ProfesorVocal->ProfesorNombre}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="nameProfesorOptativoId" class="form-label">{{__('Elegir o no el docente')}}</label>
					<select name="nameProfesorOptativoId" id="nameProfesorOptativoId" class="form-control">
						<option value="null">{{__('---Seleccionar docente vocal 2---')}}</option>
						@foreach($profesores as $ProfesorVocal2)
						{{-- <option value="{{$ProfesorVocal2->id}}">
							{{$ProfesorVocal2->ProfesorApellido}}, {{$ProfesorVocal2->ProfesorNombre}}
						</option> --}}
						<option value="{{$ProfesorVocal2->id}}">
							{{$ProfesorVocal2->ProfesorApellido}}, {{$ProfesorVocal2->ProfesorNombre}}
						</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row col-md-12">
				<div class="form-group col-md-3">
					<label for="date" class="form-label">{{__('Ingresar fecha de examen')}}</label>
					<input type="date" name="date" id="date" class="form-control" min="2020-11-11">
				</div>
				<div class="form-group col-md-3">
					<label for="sumbit" class="form-label">{{__('Jaja los que les espera!')}}</label>
					<input type="submit" name="submit" id="submit" class="btn btn-success px-5" value="Guardar">
				</div>
			</div>
		</form>
		
	</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection