@extends('layouts.form')
@section('title', 'historia')
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
		<div class="card-header bg-gray-500 border-bottom-0">
			<h1 class="font-weight-bold text-lg">{{__('Comienzos')}}</h1>
		</div>
		<div class="card-body border bg-gray-200 border-top-0 rounded-bottom">
			<p>{{__('Gracias a las iniciativas de un grupo de persosan, surge en el añ 1972 la necesidad de la creación del Instituto de Formación Técnica Nº 38, destinado a la enseñanza técnica de nivel superior para los habitantes de nuestra zona.')}}</p>
			<p class="mt-3">{{__('Por entonces se vislumbró que la estructura interna del sector productivo, había alcanzado un grado de heterogeneidad mucho mayor que el que tuviera hasta ese momento, generando en consecuencia, un estancamiento del volumen de mano de obra especializado, para las ramas más dinámicas de la industria y el comercia. Con el objetivo de satisfacer la demanda de ocupaciones que requerían niveles educacionales específicos de alta calificación, se canalizaron los objetivos al sector de servicios. También tuvieron en cuenta la realidad económica y las crecientes aspiraciones de las personas del lugar, que deseaban mejorar su nivel técnico-formativo.')}}</p>
			<p class="mt-3">{{__('Como consecuencia del laboratorio del detenido de la situación económica de nuestra zona y alrededores, cada vez mayor la cantidad de jóvenes egresados de escuelas secundarias que dejaban emigrar hacia las grandes urbes en busca de una Educación Superior, volcándose a las nuevase e interesantes carreras que la región demanda, asegurando amplios campos laborales y futuro a sus egresos. De esta manera, los estudiantes no sol afectaban el presupuesto familiar (viajando, manteniendo viviendas en grandes ciudades) sino también podía contribuir a la economía familiar realizando alguna actividadlaboral.')}} </p>
			<p class="mt-3">{{__('Este cúmulo de circunstancias ayudaron a definir los ejes que permitieron enfocar un nuevo tratamiento de la Educación Superior. Atento a lo expuesto, el 28 de noviembre de 1972 el entonces Ministerio de Educación de la Provincia de Buenos Aires emitió la resolución Nª 2965/72 que dispuso la creación del estableciemiento.')}}</p>
			<p class="mt-3">{{__('Este Instituto superior, se caracterizó por la flexibilidad estructural desde que, en el añ 1973, comenzó su actividad académica con el dictado de la Licenciaturas en Administración de Empresas y en Administración de personal. En 1979, se reestructura con carreras de Técnicos Superiores (Análisis de Sistemas, Administración de Empresas, Seguridad e Higiene Industrial y Mantenimiento Mecánico). A partir de 1982 se inicia el dictado de las carreras de Formación Docente, comenzando con la carrera de Asistente Educacional y, en 1988 Magisterio Especializado en Educación de Adultos. Para los docentes en actividad desde 1985 se implementaron carreras con modalidad "no resistentes" (Actulización Docente, Conducción de Servicios Educativos, Supervisión de servicios educativos, Supervición Educativos y Capacitación Docente Nivel I y Nivel II). Con las mismas caraterísticas se abrió en 1991 la carrera de bibliotecnología (Auxiliar, Escolar y Profesional). Paralelamente desde 1985 se inició el listado de carreras regulares como el Profesorado de Psicopedagogía y en 1992 el Profesorado de Educación Física. En 1994 se dictó Capacitación Docente nivel III, orientada especialmente a los profesores de la casa (egresados universitarios) para mejorar su quehacer pedagógico. En el mismo año se crea la Extensión Ramallo, con el dictao de carreras Técnico Superior en Administración de Empresas y el Profesorado Especializado en jardín maternal. El curso de Operador de PC para los internos de la Unidad Penal Nª3 en la Extensión allí creada en 1991, continúa desarrollándose desde esa fecha.')}}</p>
			<p class="mt-3">{{__('A partir de 1997, el Instituto Superior Nª38 volvió a ser exclusivamente técnico y actualmente se dictan las carreras de Analista de Sistemas de Información y Analista en Administración de Empresas, en la Sede centrar; Analista en Administración de Empresas y Operador de PC, en la extensión Ramallo y Operador de PC, en la Extensión Unidad Penal Nª3. En 1998 se da apertura a la carrera de Técnico Superior en Seguridad, Higiene y Control Ambiental Industrial.')}}</p>
			<p class="mt-3">{{__('La Institución pretende contar con los mejores recursos técnicos pedagógicos, y para llevar a adelante esta propuesta, cuenta con profesores de primer Nivel, una tradición académica de consideración, una creciente actividad en la capacitación de su personal y un incondicionable aopoyo de su asociación Cooperativa y el Centro de Estudiantes.')}}</p>
		</div>
	</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection