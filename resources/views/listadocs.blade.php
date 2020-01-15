<div class="container col-lg-12">
    <!--<ol class="breadcrumb">
        <li class="breadcrumb-iteml">
            <a href="#">Bienvenido</a>
        </li>
    </ol>-->
    <!--<a href="#" style="font-size: 12px;"><i class="zmdi zmdi-label-alt"></i> <span class="nav-label">Taxi</span>
        <span class="menu-arrow"></span>
    </a>-->  
    <div class="row">
            <div class="panel panel-default">
                <!--<div class="panel-heading">Correspondencia</div>-->
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
                        
                    <div class="panel-body">

                       <!-- <ul class="nav nav-tabs">
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
                        </ul>-->
                                        <!--<a class="btn btn-primary btn-sm m-b-5" href="" data-toggle="tooltip" data-placement="bottom" data-original-title="Continuar nueva captura en este rubro"><i class="fa fa-plus"></i>&nbsp;Agregar</a>
                                        <a class="btn btn-primary btn-sm m-b-5" href="" data-toggle="tooltip" data-placement="top" data-original-title="Ver documento en formato PDF" target="_blank"><i class="zmdi zmdi-eye"></i>&nbsp;Vista previa</a>
                                        action="{{ url($ruta) }}"
                                    	-->
                                       
                                        {!! $opciones !!}&nbsp;
                                        <form method="POST" class="role" name="frm-docs" id="frm-docs2" onsubmit="return false" action="">
                                         {!! csrf_field() !!}
                                         {{ Form::hidden('doAction','03', array('id' => 'doAction')) }}
                                         {{ Form::hidden('rowid','', array('id' => 'rowid')) }}                                                                                	
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Folio</th>
                                    <th>No. Oficio</th>
                                    <th>Fecha de recepción</th>
                                    <th>Fecha de elaboración</th>
                                    <th>Asunto de documento</th>
                                    <th>Remitente</th>
                                    <th>Instancia</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($docs as $item)
                                <tr id="{{ $item->doc_id }}">
                                    <td>{{ $item->doc_folio }}</td>
                                    <td>{{ $item->doc_num_oficio }}</td>
                                    <td>{{ $item->doc_fecha_elab }}</td>
                                    <td>{{ $item->doc_fecha_recep }}</td>
                                    <td>{{ $item->doc_asunto }}</td>
                                    <td>{{ $item->remitente->crem_nombre."-".$item->remitente->crem_cargo_descripcion }}</td>                                
                                    <td>{{ $item->remitente->instancia->cnv_nom_actual}}</td>
                                    <td class="actions" align="center">                                        
                                        <a href="{{ action('DocumentoManagerController@manager',array('accion'=>'3','id'=> $item->doc_id)) }}" class="on-default edit-row" data-id="0" data-toggle="tooltip" data-placement="top" data-original-title="Editar"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
                                        <a href="javascript:void(0)" class="on-default remove-row" id="{{$item->doc_id}}" data-id="{{$item->doc_id}}" data-toggle="tooltip" data-placement="right" data-original-title="Eliminar"><i class="fa fa-trash-o"></i></a>                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                            <div class="form-group">
                                <div class="col-xs-offset-2 col-xs-6">
                                        <div id="respuesta"></div>
                                </div>
                            </div>                        
                        </form>
                        <div class="pull-right">
                            {!! $docs->render() !!}
                        </div>
                    </div>    
            </div>
    </div>
@push('jscustom')
<script type="text/javascript">
    $(document).ready(function(){
        var vinculo;
        var form = "frm-docs2";
        $("a").click(function(event){        
        vinculo = $(this).data("id");
        //$(this).closest('tr').remove();
        if(vinculo){
                    swal({
                        title: "¿ Desea eliminar la información ? ",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Aceptar",
                        cancelButtonText: "Cancelar",
                        closeOnConfirm: true
                    }, function () {
                       // event.preventDefault();
                        $("#rowid").attr("value",vinculo);
                        $("#"+vinculo).remove();                       
			                $.ajax({
			                    headers:{'X-CSRF-Token':$('input[name="_token"]').val()},
			                    url: 'do-post/'+vinculo,
			                    type:"POST",
			                    data: $('#'+form).serialize(),
			                    success:function(respuesta){
				                    if (respuesta) {
				                        var html;
				                        html = '<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="false">×</button>¡ Información eliminada!</div>'
				                        $("#respuesta").html(html);
				                    } else {
				                        $("#respuesta").html('<div> No se elimino la información</div>');
				                    }
			                    }
			                });
                    });
        }
       });
    });    
</script>
@endpush