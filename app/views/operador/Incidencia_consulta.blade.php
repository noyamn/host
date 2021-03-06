@extends('layouts.master_operador')

@section('ruta')
<li><a href="#"><i class="fa fa-dashboard"></i> Panel</a></li>
<li><a href="#">Listados</a></li>
<li class="active">Incidencias</li>
@stop

@section('content')

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Consulta de Incidencias</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
      <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="row menu-botones">
      <div class="col-md-12">
        <div class="mailbox-controls">
          <button class="btn btn-primary" onclick="javascript:$('#form').submit()">
          <i class="glyphicon glyphicon-search"></i>
          <span> Buscar</span>
          </button>		  
          <button class="btn btn-primary" id="exportExcel">
          <i class="fa fa-table"></i>
          <span> Excel</span>
          </button>	  		  
          <button class="btn btn-primary" onclick="$('#listado-historico').tableExport({type:'excel',escape:'false',tableName:'excel.xls'});">
          <i class="fa fa-print"></i>
          <span> Imprimir</span>
          </button>			  
        </div>
      </div>
    </div>
    <div class="row">
    {{ Form::open(array('url' => 'panel_administrador/incidencias/consulta', 'method' => 'POST', 'id' => 'form')) }}
      <div class="col-md-12 filtros-busqueda">
        <div class="row">
          <div class="form-group col-md-4">
            <label>Nro de Incidencia:</label>
            <input type="text" name="nro_incidencia" class="form-control" placeholder="Nro de Incidencia">
          </div>
          <div class="form-group col-md-4">
            <label>Agente:</label>
            <input type="text" name="nombre_fantasia" class="form-control" placeholder="Agente">            
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label>Fecha Recibido:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="fecha-recibido">
            </div>
          </div>
          <div class="form-group col-md-4">
            <label>Fecha Cierre:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="fecha-cierre">
            </div>
          </div>
        </div>
        </div>
      </div>
      {{ Form::close() }}
      <div class="col-md-12">
        <table id="consulta-incidencias" class="table table-striped">
          <thead>
            <tr>
              <th>Nro</th>
              <th>Tipo</th>
              <th>Descripcion</th>
              <th>Agente</th>
              <th>MTCN</th>              
              <th>Fecha Recibido</th>
              <th>Fecha Cierre</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach ($incidencias as $incidencia)
            <tr>
              <td>
                {{ $incidencia->codigo }}
              </td>                        
              <td class="inbox-tipo">
                {{ $incidencia->apertura->incidente->tipoIncidente->descripcion }}
              </td>
              <td class="inbox-texto">
                <b>{{ $incidencia->apertura->incidente->descripcion }}</b>
                {{ $incidencia->apertura->descripcion }}
              </td>
              <td>
                {{ $incidencia->agente->nombre_fantasia }}
              </td>
              <td>
                {{ $incidencia->mtcn }}
              </td>              
              <td class="inbox-texto">
                {{ $incidencia->fecha_alta }}
              </td>
              <td class="inbox-texto">
                {{ $incidencia->fecha_cierre }}
              </td>
                <td>
                <a class="btn btn-primary btn-sm" href="consultar/{{$incidencia->id}}" data-toggle="tooltip" data-original-title="Consultar">
                <i class="fa  fa-search"></i>
                <span></span>
                </a>					                    
                </td>
            </tr>
            @endforeach
            
          </tbody>
          <tfoot>
            <tr>
              <th>Nro</th>            
              <th>Tipo</th>
              <th>Descripcion</th>
              <th>Agente</th> 
              <th>MTCN</th>                                
              <th>Fecha Recibido</th>
              <th>Fecha Cierre</th>
              <th>Accion</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  <!-- /.box-body -->
  <div class="box-footer">
    Consulta de Incidencias
  </div>
</div>

@stop

@section('javascript') 
$('#consulta-incidencias').dataTable(); 
$('#fecha-recibido').daterangepicker({format: 'DD-MM-YYYY'});
$('#fecha-cierre').daterangepicker({format: 'DD-MM-YYYY'}); 
@stop    
