@extends('layouts.guest')

@section('title', 'home')

{{-- Estilos css --}}
<style type="text/css" media="screen">
    .card-header{
        font-family: algerian;
    }
    #header{
    	font-family: vagrant;
    }
    .card-body h2{
    	font-family: sans-serif;
    	font-size: 2em;
    	border-radius: 1px 5px 1px 5px;
    	text-indent: 15px;
    }
    /*instrucciones generales para el calendario*/
	/*cabecera de la página*/
	#calender h3 { 
		text-align: center; 
	}
	/*div principal del calendario*/
	#calendario { 
		border: 4px solid black; 
		max-width: 400px;
		height: 300px; 
		background-color:#fffafa; 
		/* text-align: center; */
		margin-top: -30px; 
	}
	/*tabla del calendario*/
	#diasc { 
		border-collapse: separate; 
		border-spacing: 4px; 
	}
	#diasc th, #diasc td { 
		font: normal 14pt arial;
		text-align: center; 
		width: 70px; 
		height: 30px; 
	}
	#diasc th { 
		color: #990099; 
		background-color: #5ecdec; 
	}
	#diasc td { 
		color: #492736; 
		background-color: #9bf5ff 
	}
	/*cabecera del calendario*/ 
	#anterior { 
		float: left; 
		width: 100px; 
		font: bold 12pt arial;
		padding: 0.5em 0.1em; 
		cursor: pointer;
		text-decoration: underline; 
	}
	#posterior { 
		float: right; 
		width: 100px; 
		font: bold 12pt arial; 
		padding: 0.5em 0.1em; 
		cursor: pointer;
		text-decoration: underline;
	}
	#anterior:hover {
		color: blue;
		text-decoration: underline;
	}
	#posterior:hover {
		color: blue; 
		text-decoration: underline;
	}
	#titulos { 
		font: normal 15pt "vagrant gray"; 
		font-size: 1.1em;
		text-align: center;
	}
</style>

{{-- Efectos con javascript --}}
<script type="text/javascript">
	//Arrays de datos:
	meses=[
		"Enero",
		"Febrero",
		"Marzo",
		"Abril",
		"Mayo",
		"Junio",
		"Julio",
		"Agosto",
		"Septiembre",
		"Octubre",
		"Noviembre",
		"Diciembre"];
	lasemana=[
		"Domingo",
		"Lunes",
		"Martes",
		"Miércoles",
		"Jueves",
		"Viernes",
		"Sábado"]
		diassemana=[
					"lun",
					"mar",
					"mié",
					"jue",
					"vie",
					"sáb",
					"dom"];
	//Tras cargarse la página ...
	window.onload = function() {
	//fecha actual
	hoy=new Date(); //objeto fecha actual
	diasemhoy=hoy.getDay(); //dia semana actual
	diahoy=hoy.getDate(); //dia mes actual
	meshoy=hoy.getMonth(); //mes actual
	annohoy=hoy.getFullYear(); //año actual
	// Elementos del DOM: en cabecera de calendario 
	tit=document.getElementById("titulos"); //cabecera del calendario
	ant=document.getElementById("anterior"); //mes anterior
	pos=document.getElementById("posterior"); //mes posterior
	// Elementos del DOM en primera fila
	f0=document.getElementById("fila0");
	// Definir elementos iniciales:
	mescal = meshoy; //mes principal
	annocal = annohoy //año principal
	//iniciar calendario:
	cabecera() 
	primeralinea()
	escribirdias()
	}
	//FUNCIONES de creación del calendario:
	//cabecera del calendario
	function cabecera() {
	         tit.innerHTML=meses[mescal]+" de "+annocal;
	         mesant=mescal-1; //mes anterior
	         mespos=mescal+1; //mes posterior
	         if (mesant<0) {mesant=11;}
	         if (mespos>11) {mespos=0;}
	         ant.innerHTML=meses[mesant]
	         pos.innerHTML=meses[mespos]
	         } 
	//primera línea de tabla: días de la semana.
	function primeralinea() {
	         for (i=0;i<7;i++) {
	             celda0=f0.getElementsByTagName("th")[i];
	             celda0.innerHTML=diassemana[i]
	             }
	         }
	//rellenar celdas con los días
	function escribirdias() {
	         //Buscar dia de la semana del dia 1 del mes:
	         primeromes=new Date(annocal,mescal,"1") //buscar primer día del mes
	         prsem=primeromes.getDay() //buscar día de la semana del día 1
	         prsem--; //adaptar al calendario español (empezar por lunes)
	         if (prsem==-1) {prsem=6;}
	         //buscar fecha para primera celda:
	         diaprmes=primeromes.getDate() 
	         prcelda=diaprmes-prsem; //restar días que sobran de la semana
	         empezar=primeromes.setDate(prcelda) //empezar= tiempo UNIX 1ª celda
	         diames=new Date() //convertir en fecha
	         diames.setTime(empezar); //diames=fecha primera celda.
	         //Recorrer las celdas para escribir el día:
	         for (i=1;i<7;i++) { //localizar fila
	             fila=document.getElementById("fila"+i);
	             for (j=0;j<7;j++) {
	                 midia=diames.getDate() 
	                 mimes=diames.getMonth()
	                 mianno=diames.getFullYear()
	                 celda=fila.getElementsByTagName("td")[j];
	                 celda.innerHTML=midia;
	                 //Recuperar estado inicial al cambiar de mes:
	                 celda.style.backgroundColor="#9bf5ff";
	                 celda.style.color="#492736";
	                 //domingos en rojo
	                 if (j==6) { 
	                    celda.style.color="#f11445";
	                    }
	                 //dias restantes del mes en gris
	                 if (mimes!=mescal) { 
	                    celda.style.color="#a0babc";
	                    }
	                 //destacar la fecha actual
	                 if (mimes==meshoy && midia==diahoy && mianno==annohoy ) { 
	                    celda.style.backgroundColor="#f0b19e";
	                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
	                    }
	                 //pasar al siguiente día
	                 midia=midia+1;
	                 diames.setDate(midia);
	                 }
	             }
	         }
	//Ver mes anterior
	function mesantes() {
	         nuevomes=new Date() //nuevo objeto de fecha
	         primeromes--; //Restamos un día al 1 del mes visualizado
	         nuevomes.setTime(primeromes) //cambiamos fecha al mes anterior 
	         mescal=nuevomes.getMonth() //cambiamos las variables que usarán las funciones
	         annocal=nuevomes.getFullYear()
	         cabecera() //llamada a funcion de cambio de cabecera
	         escribirdias() //llamada a funcion de cambio de tabla.
	         }
	//ver mes posterior
	function mesdespues() {
	         nuevomes=new Date() //nuevo obejto fecha
	         tiempounix=primeromes.getTime() //tiempo de primero mes visible
	         tiempounix=tiempounix+(45*24*60*60*1000) //le añadimos 45 días 
	         nuevomes.setTime(tiempounix) //fecha con mes posterior.
	         mescal=nuevomes.getMonth() //cambiamos variables 
	         annocal=nuevomes.getFullYear()
	         cabecera() //escribir la cabecera 
	         escribirdias() //escribir la tabla
	         }
</script>

{{-- La sección principal --}}
@section('content')
	<div class="card-header bg-gray-400 rounded-top">
		{{__('Tu sección de materias, cursos y otros datos más - "Alumno/a: ')}} {{Auth::user()->name}} {{Auth::user()->lastname}} {{__('"')}}
	</div>
	<div class="card-body border mt-2">
		<h2 class="bg-orange-500">{{__('Vista general de tu progreso')}}</h2>
		<p class="mt-3">{{__('Acá estarán todas tus matriculas a la materias que pertences u estes haciendo.')}}</p>
	</div>
@endsection


@section('aside')
	<div class="card-header text-center bg-gray-500 text-lg" id="header">
		{{__('Archivos privados')}}
	</div>
	<div class="card-body border">
		<h3 class="mb-3">{{__('No hay archivos para disponibles')}}</h3>
		<a href="#" class="text-blue-400">{{__('Gestionar archivos privados')}}</a>
	</div>

	{{-- Otra sección del aside --}}
	<div class="card-header text-center bg-gray-500 mt-5 text-lg" id="header">
		{{__('Línea de tiempo')}}
	</div>
	<div class="card-body border">
		<ul class="nav mr-auto" id="navegacion">
			<li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle text-dark" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopud="true" aria-expanded="false" v-pre><img src="{{asset('icons/reloj.ico')}}" class="d-inline" width="30" height="30"></a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                	<a href="#" class="dropdown-item">{{__('Todos')}}</a>
                	<a href="#" class="dropdown-item">{{__('Atrasados')}}</a>
                	<hr>
                	<p class="disabled text-sm dropdown-item">{{__('Fecha de vencimiento')}}</p>
                	<a href="#" class="dropdown-item">{{__('Próximos 7 días')}}</a>
                	<a href="#" class="dropdown-item">{{__('Próximos 30 días')}}</a>
                	<a href="#" class="dropdown-item">{{__('Próximos 3 meses')}}</a>
                	<a href="#" class="dropdown-item">{{__('Próximos 6 meses')}}</a>
                </div>
			</li>
			<li class="nav-item">
				<p class="text-muted text-dark my-2">{{__('Ver actividades pasadas')}}</p>
			</li>
		</ul>
		<hr>
		<p class="mt-4 text-center text-sm text-muted">
			{{__('No hay actividades previstas')}}
		</p>
	</div>
	{{-- Otra sección del aside --}}
	<div class="card-body border mt-5">
		<h3 class="mb-3 text-lg text-gray-600">{{__('Insignias recientes')}}</h3>
		<p>{{__('No hay insignias que mostrar')}}</p>
	</div>

	{{-- Otra sección del aside --}}
	<div class="card-body border mt-5" id="calender">
		<h3 class="text-left font-weight-bold text-lg">{{__('Calendario')}}</h3>
		<br/><br/>
		<div id="calendario">
		  <div id="anterior" onclick="mesantes()"></div>
		  <div id="posterior" onclick="mesdespues()"></div>
		  <h2 id="titulos"></h2>
		  <table id="diasc">
		    <tr id="fila0"><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>
		    <tr id="fila1"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		    <tr id="fila2"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		    <tr id="fila3"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		    <tr id="fila4"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		    <tr id="fila5"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		    <tr id="fila6"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		  </table>
		</div>
		
	</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection
