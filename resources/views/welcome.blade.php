@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <header class="page-header">
          <h1 class="text-center"><i class="fa fa-star"></i> Bienvenido a UdoCore <small class="label label-success">V 1.0</small></h1>
        </header>
        <div class="col-sm-3 col-sm-offset-4">
          <a href="{{url('carrera')}}" class="btn btn-lg btn-primary" >Ver Carreras de la UDO-Monagas <i class="fa fa-chevron-right fa-fw"></i> </a>
        </div>
    </div>
</div>
@endsection
