@extends('layouts.form')
@section('title', 'objetivos')
{{-- Estilos css --}}
<style type="text/css" media="screen">
	.card-header{
		margin-left:10%;
		margin-right: 10%;
	}
	.card-body{
		margin-left:10%;
		margin-right: 10%;
	}
</style>
@section('content')
	<div class="container">
		<div class="card-header bg-gray-500 font-weight-bold border-bottom-0">
			<h1 class="rounded">{{__('Objetivos generales')}}</h1>
		</div>
		<div class="card-body border bg-gray-200 border-top-0 rounded-bottom">
			<p>{{__('Proporcionar a nuestros estudiantes una adecuada orientación personal y profesional en función de los requerimientos de la empresa, de la ciudad, la zona y la región.')}}</p>
			<p class="mt-2">{{__('Proporcionar a nuestros estudiantes la adquisición de técnicas de trabajo, intelectual que le permita acceder a la información a su uso de manera progresivamente más autónoma.')}}</p>
			<p class="mt-2">{{__('Brindar hábitos de trabajo responsable.')}}</p>
			<p class="mt-2">{{__('Preparar profesionales capacitados para competir en el mercado laboral.')}}</p>
		</div>
		{{-- Otro titulo --}}
		<div class="card-header bg-gray-500 mt-4 font-weight-bold rounded-top border-bottom-0">
			<h1 class="rounded">{{__('Objetivos de las carreras')}}</h1>
		</div>
		<div class="card-body border bg-gray-200 border-top-0 rounded-bottom">
			<p>{{__('Formar recursos humanos capaces de insertarse laboralmente en el mercado.')}}</p>
			<p class="mt-2">{{__('Proporcionar formación especializada y de carácter interdisciplinario en las diferentes áreas de la "Ciencia y Tecnología.')}}</p>
			<p class="mt-2">{{__('Proveer capacitacón, actualización y especialización Técnico - Profesional.')}}</p>
			<p class="mt-2">{{__('Acceder a un permanente incremento de los niveles de calidad y eficacia, de la Educación Superior técnica.')}}</p>
		</div>
		{{-- Otro titulo --}}
		<div class="card-header bg-gray-500 mt-4 font-weight-bold rounded-top border-bottom-0">
			<h1 class="rounded">{{__('Objetivos institucionales')}}</h1>
		</div>
		<div class="card-body border bg-gray-200 border-top-0 rounded-bottom">
			<p>{{__('Proponemos una gestión institucional democrática regida por los principios de participación y transparencia, participando a los estudiantes de reuniones con el CAI, Centro de estudiantes, ya que entendemos que los estudiantes son sijetos activos en los procesos de enseñanza y aprendisaje.')}}</p>
			<p class="mt-2">{{__('Buscamos acomodar las estrategias de enseñanza a las necesidades de nuestros estudiantes, atendiendo las necesidad del alumnado respondiendo también al perfil del egresado que busca el mercado productivo y de servicio local, zonal y regional.')}}</p>
			<p class="mt-2">{{__('Tenemos como objetivo proporcionar a nuestros estudiantes una adecuada orientación profesional y una óptima capacitación.')}}</p>
			<p class="mt-2">{{__('Indicio de todas esta prácticas son los cursos que se dictan en la institución, la mayoría destinado a los estudiantes (también hay abiertos a la comunidad), como por ejemplo el curso de incendio, el de riesgo escolar o los de prevención auditiva.')}}</p>
		</div>
	</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection