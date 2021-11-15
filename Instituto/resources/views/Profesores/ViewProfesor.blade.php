@extends('layouts.form')
@section('title', 'ver profesores')
{{-- Estilos css --}}
<style type="text/css" meedia="screen">
	.card-header, .card-body{
		margin-left: 20%;
		margin-right: 20%;
	}
</style>
{{-- La lógica de ajax en laravel --}}
<script type="text/javascript">
	$(document).ready(function(){
		
	});
</script>
@section('content')
	<div class="card-header bg-gray-400 rounded-top">
		<h1 class="font-weight-bold text-lg">{{__('Lista de todos los profesores que asisten a esta institución')}}</h1>
	</div>
	<div class="card-body border border-top-0">
		<div class="card-title">
			<table class="table table-inverse">
				<thead class="bg-red-400 text-uppercase text-center">
					<tr class="bg-dark">
						<td colspan="2">
							<form action="" method="POST">
								<input type="search" name="search" id="search" placeholder="Buscar profesor" class="form-control">
							</form>
						</td>
						<td>
							<input type="submit" name="submit" id="submit" class="btn border bg-green-400 px-3 text-light" value="Buscar">
						</td>
					</tr>
					<tr>
						<th>{{__('Nombre')}}</th>
						<th>{{__('Apellido')}}</th>
						<th>{{__('Acciones')}}</th>
					</tr>
				</thead>
				<tbody id="all-list" name="all-list" class="text-center">
					@foreach($profesores as $data)
						<tr id="all{{$data->id}}">
							<td>{{$data->ProfesorNombre}}</td>
							<td>{{$data->ProfesorApellido}}</td>
							<td>
								<a href="{{route('EditProfesor', $data->id)}}" class="btn-link text-primary">{{__('Editar')}}</a>
								|
								<form action="{{route('DeleteProfesor', $data->id)}}" method="POST" class="d-inline">
									@csrf
									@method('DELETE')
									<input type="submit" class="text-danger bg-light" value="Eliminar">
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
