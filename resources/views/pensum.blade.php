@extends('layouts.app')

@section('content')
  <div class="container">
    <header class="page-header">
      <h2 class="text-center"><i class="fa fa-graduation-cap"></i> Pensum de {{$carrera->name}} <i class="fa fa-graduation-cap"></i></h2>
    </header>
    <div class="row pensum">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        @foreach ($pensum as $sem => $materias)
          <div class="panel panel-primary">
            <div class="panel-heading" role="tab" id="heading{{$sem}}">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$sem}}" aria-expanded="true" aria-controls="collapse{{$sem}}">
                <h4 class="panel-title">
                  <i class="fa fa-tags fa-fw"></i> {{App\Semestre::find($sem)->name}}
                </h4>
              </a>
            </div>
            <div id="collapse{{$sem}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$sem}}">
              <div class="panel-body">
                 <table class="table table-striped table-hover">
                   <thead><tr><td class="text-center"><i class="fa fa-book fa-fw"></i> Codigo</td>
                     <td><i class="fa fa-list fa-fw"></i> Asignatura</td>
                     <td class="text-center"><i class="fa fa-calculator fa-fw"></i> U.C.</td>
                     <td class="text-center"><i class="fa fa-code-fork fa-fw"></i> Prelación</td></tr></thead>
                   <tbody>
                     @foreach($materias->sortBy('codigo') as $materia )
                       <tr>
                         <td class="text-center col-xs-2"> {{$materia->codigo}}</td>
                         <td class="col-xs-7">{{$materia->name}}</td>
                         <td class="col-xs-1 text-center" >{{$materia->uc}}</td>
                         <td class="col-xs-2 text-center">
                           @if($materia->pre1)
                             <a tabindex="0" class="btn btn-xs btn-warning" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title=" {{$materia->prelacion1->semestre->name}}"
                               data-content="{{$materia->prelacion1->name}}"><i class="fa fa-search fa-fw"></i> {{$materia->prelacion1->codigo}}</a>
                               @if($materia->isDoble())
                             <a tabindex="0" class="btn btn-xs btn-danger" role="button" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="{{$materia->prelacion2->semestre->name}}"
                               data-content="{{$materia->prelacion2->name}}"><i class="fa fa-search fa-fw"></i> {{$materia->prelacion2->codigo}}</a>
                              @endif
                           @else
                            {{$materia->prelacion1}}
                           @endif
                         </td>
                       </tr>
                     @endforeach
                   </tbody>
                 </table>
              </div>
              <div class="panel-footer">
                <div class="row">
                <div class="col-xs-4">Total de Materias: {{$materias->count()}}</div>
                <div class="col-xs-4 col-xs-offset-4"> Total de Creditos: {{$materias->sum('uc')}}</div>
              </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </div>

@endsection
