@extends('layouts.app')

@section('content')
<div class="container">
	<header class="page-header">
		<h2 class="text-center"><i class="fa fa-graduation-cap"></i> Carreras de la Udo <small>monagas</small></h2>
	</header>
		<div class="row">
		@foreach($carreras as $carrera)
		<div class="col-md-3 col-sm-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<i class="glyphicon glyphicon-education"></i> {{ $carrera->name }}
				</div>
				<div class="panel-body list-group">
							<li class="list-group-item">N° Materias: <strong>{{ $carrera->detalles->num_mat }}</strong></li>
							<li class="list-group-item">Total Creditos: <strong>{{$carrera->detalles->cre_obl}}</strong></li>
							<li class="list-group-item">Creditos Socio-Humanisticos: <strong>{{$carrera->detalles->cre_hum}}</strong></li>
							<li class="list-group-item">Creditos Tecnicos: <strong>{{$carrera->detalles->cre_tec}}</strong></li>
				</div>
				<a href="carrera/{{$carrera->abr}}">
					<div class="panel-footer">
					 <i class="fa fa-search"></i> Pensum de Materias <i class="fa fa-chevron-right pull-right"></i>
					</div>
				</a>
			</div>
		</div>
		@endforeach
	</div>

</div>
@endsection
