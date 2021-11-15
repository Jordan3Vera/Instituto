@extends('layouts.guest')
@section('title', 'registrar datos')
{{-- Estilos css --}}
<style type="text/css" media="screen">
	.card-header{
		font-family: algerian;
	}
	.card-body div > div{
		font-weight: bold;
	}
</style>
@section('content')
	<div class="card-header bg-gray-400">{{__('Agrega más información así saben quien eres')}}</div>
	<div class="card-body border">
		<form action="{{route('storeProfile')}}" method="POST" role="form">
			{{ csrf_field()}}
			<div class="row sm:mx-5">
				<div class="form-group col-md-2 col-sm-12">
					<label for="age" class="form-label">{{__('Edad')}}</label>
					<input type="number" class="form-control" name="age" placeholder="Ingresar la edad">
					<small class="text-sm text-muted">{{__('¿Qué edad tienes?')}}</small>
				</div>
				<div class="form-group col-md-3 col-sm-12">
					<label for="date" class="form-label">{{__('Fecha de nacimiento')}}</label>
					<input type="date" min="1930-01-01" max="2020-01-01" name="date" class="form-control">
					<small class="text-sm text-muted">{{__('Porque muchas veces no coincide')}}</small>
				</div>
				<div class="form-group col-md-3 col-sm-12">
					<label for="sex" class="form-label">{{__('Sexo')}}</label>
					<select name="sex" id="sex" class="form-control" name="sex" checked>
						<option value="masculino">Masculino</option>
						<option value="femenino">Femenino</option>
						<option value="otro">Otro</option>
					</select>
					<small class="text-sm text-muted">{{__('Respecto a si eres hombre o mujer')}}</small>
				</div>
				<div class="form-group col-sm-12 col-md-3">
					<label for="description" class="form-label underline">{{__('Breve descripción ')}}</label>
					<p class="text-gray-500">{{__('Estos datos se mostrarán abajo del dato principal, y fotografias.')}}</p>
				</div>
			</div>
			{{-- Otra fila  --}}
			<div class="row sm:mx-5">
				<div class="form-group col-md-4 col-sm-12">
					<label for="country" class="form-label">{{__('País')}}</label>
					<input type="text" placeholder="Ingresar país de nacimiento" name="country" class="form-control">
					<small class="text-sm text-muted">{{__('Solo carácteres de la [A-Za-z]')}}</small>
				</div>
				<div class="form-group col-md-4 col-sm-12">
					<label for="province" class="form-label">{{__('Provincia')}}</label>
					<input type="text" placeholder="Ingresar provincia" class="form-control" name="province">
					<small class="text-sm text-muted">{{__('Solo carácteres de la [A-Za-z]')}}</small>
				</div>
				<div class="form-group col-md-4 col-sm-12">
					<label for="city" class="form-label">{{__('Ciudad')}}</label>
					<input type="text" placeholder="Ingresar ciudad" class="form-control" name="city">
					<small class="text-sm text-muted">{{__('Solo carácteres de la [A-Za-z]')}}</small>
				</div>
			</div>
			{{-- Otra fila --}}
			<div class="row sm:mx-5">
				<div class="form-group col-md-4 col-sm-12">
					<label for="home" class="form-label">{{__('Domicilio')}}</label>
					<input type="text" placeholder="Ingresar domicilio" class="form-control" name="home">
					<small class="text-sm text-muted">{{__('Puede incluir cualquier carárter')}}</small>
				</div>
				<div class="form-group col-md-4 col-sm-12">
					<label for="civil" class="form-label">{{_('Estado civil')}}</label>
					<select name="civil" id="civil" class="form-control" name="civil" checked>
						<option value="soltero/a">{{__('Soltero')}}</option>
						<option value="casado/a">{{__('Casado/a')}}</option>
						<option value="novio/a">{{__('Novio')}}</option>
						<option value="viudo/a">{{__('Viudio')}}</option>
					</select>
					<small class="text-sm text-muted">{{__('Elige tu estado civil')}}</small>
				</div>
				<div class="form-group col-md-2 col-sm-12">
					<label for="submit" class="form-label">Guarda datos</label>
					<a href="{{route('profile')}}"><input type="submit" name="submit" class="btn d-block border btn-md px-5 bg-green-500"></a>
				</div>
				<div class="form-group col-md-2 col-sm-12 w-full">
					<img src="{{asset('images/logo.png')}}" alt="Logo del instituto" class="w-40 h-20 border rounded-lg">
				</div>
			</div>
		</form>
	</div>
@endsection
