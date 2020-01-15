@extends('layouts.app')
@section('sidebar')
 <!--heredamos con parent lo que hay en la plantilla base pero añadimos otro elemento al menú-->
  @include('layouts.menu')
  @parent
@endsection

@section('js')
<script>
    alert("hola");
</script>
@stop

@section('content')
<div class="container col-lg-8">
    <ol class="breadcrumb">
        <li class="breadcrumb-iteml">
            <a href="#">Correspondencia externa</a>
        </li>
        <li class="breadcumb-item1 active">registrar</li>
        <li class="breadcumb-item active">Listado</li>
    </ol>
    <!--<a href="#" style="font-size: 12px;"><i class="zmdi zmdi-label-alt"></i> <span class="nav-label">Taxi</span>
        <span class="menu-arrow"></span>
    </a>-->  
    <div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">Listado de correspondencia externa</div>
                                    <!-- Left Side Of Navbar -->
                   <!-- <ul class="nav navbar-nav">
                        <li><a href="{{ route('usuarios') }}">Usuarios</a></li>
                    </ul>
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @php
                                //echo $usuario;
                            @endphp

                            You are logged in!
                        </div>   
                    <div>-->
                        {{ $origen }}
                    <div class="panel-body">

                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-3">Tipo de sociedad en la que participa o con la que se contrata:</label>
                                    <div class="col-sm-3">
                                        <select name="tipo_sociedad" id="tipo_sociedad2" class="form-control input-sm">
                                            <option value="">- - - - - </option>
                                            @foreach($origen as $orig)
                                                        <td><option value="{{ $orig->ori_id }}">{{ $orig->ori_descrip }}</option></td>                                              
                                            @endforeach                                            
                                        </select>
                                    </div>
                                    <div id="especifica_otra_soc" class="col-sm-3">
                                        <input type="text" name="tipo_sociedad_otra" id="tipo_sociedad_otra2" class="form-control input-sm" value="" placeholder="Especificar">
                                    </div>                                    
                                </div>

<!--                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#home-2" data-toggle="tab" aria-expanded="false" id="edit_opera"> 
                                    <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                    <span class="hidden-xs">Hoy</span> 
                                </a>
                            </li> 
                            <li class=""> 
                                <a href="#profile-2" data-toggle="tab" aria-expanded="false" id="edit_respon"> 
                                    <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                    <span class="hidden-xs">Ayer</span>
                                </a> 
                            </li> 
                            <li class=""> 
                                <a href="#messages-2" data-toggle="tab" aria-expanded="false" id="edit_observ"> 
                                    <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                    <span class="hidden-xs">Anterior</span> 
                                </a> 
                            </li>                            
                        </ul>&nbsp;                    
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Folio</th>
                                    <th>No. Oficio</th>
                                    <th>Fecha de recepción</th>
                                    <th>Fecha de elaboración</th>
                                    <th>Remitente</th>
                                    <th>Instancia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6">No cuenta con información...</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pull-right">
                            paginado
                        </div>
                    -->
                    </div>    
            </div>
        </div>
    </div>
<!--</div>-->
@endsection



