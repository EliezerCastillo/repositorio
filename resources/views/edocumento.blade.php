<div class="container col-lg-12">
    <ol class="breadcrumb">
        <li class="breadcrumb-iteml">
            <a href="#">Correspondencia externa</a>
        </li>
        <li class="breadcumb-item1 active">registrar</li>
        <li class="breadcumb-item active">editar</li>
    </ol>
    <div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">Modificar correspondencia</div>                
                    <div class="panel-body">
							<form method="POST" class="role" name="frm-docs" id="frm-docs" action='{{ url($ruta) }}'>
									{!! csrf_field() !!}
                                     {{ Form::hidden('doAction','02', array('id' => 'doAction')) }}                                     	
                                     {{ Form::hidden('rowid',$edoc["doc_id"], array('id' => 'rowid')) }}                                                                              
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Información del documento recibido</label>
                                </div>                    	
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-2">Número de folio:</label>
                                    <div class="col-sm-1">
                                        <input type="text" name="no_folio" id="no_folio2" class="form-control input-sm" value="{{ $edoc["doc_folio"] }}" placeholder="Folio">
                                    </div>                                    
                                </div>                    	
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-2">Fecha de elaboración:</label>
                                    <div class="col-sm-2">
										<!--<input type="text" name="fecha_elabora" id="fecha_elabora2" class="form-control input-sm" value="" placeholder="aaaa-mm-dd">-->
										{{ Form::date('fecha_elabora',$edoc["doc_fecha_elab"],array('id' => 'fecha_elabora','class'=>'required form-control input-sm')) }}
									</div>
                                    <label class="control-label col-sm-2">Fecha de recepción:</label>
                                    <div class="col-sm-2">
										<!--<input type="text" name="fecha_recep" id="fecha_recep2" class="form-control input-sm" value="" placeholder="aaaa-mm-dd">-->
										{{ Form::date('fecha_recep',$edoc["doc_fecha_recep"],array('id' => 'fecha_recep1','class'=>'required form-control input-sm')) }}
                                    </div>                                    
                                </div>                              
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-2">Número de oficio:</label>
                                    <div id="especifica_otra_soc" class="col-sm-3">
                                        <input type="text" name="no_oficio" id="no_oficio2" class="form-control input-sm" value="{{ $edoc["doc_num_oficio"] }}" placeholder="No. oficio">

                                    </div>                                    
                                </div>
                                <div class="form-group clearfix">
                                	<label class="control-label col-sm-2">Descripción breve del documento:</label>
                                    <div class="col-sm-5">                                    	
                                        <textarea class="required form-control" rows="3" name="breve_asunto" id="breve_asunto2">{{ $edoc["doc_asunto"] }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-2">Procedencia:</label>
                                    <div class="col-sm-1">
                                        <select name="origen" id="origen2" class="form-control input-sm">
                                            <option value="">- - - - - -</option>
                                            @foreach($origen as $orig)
                                                    @if($orig->ori_ctrlcat_id == $edoc["doc_ctrlcat_ori_id"])
                                                        <td><option value="{{ $orig->ori_ctrlcat_id }}" selected>{{ $orig->ori_descrip }}</option></td> 
                                                    @else                               
                                                        <td><option value="{{ $orig->ori_ctrlcat_id }}">{{ $orig->ori_descrip }}</option></td>
                                                    @endif                                            
                                            @endforeach                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-2">Cantidad de anexos:</label>
                                    <div class="col-sm-1">
                                        {!! Form::number('cantidad',$edoc["doc_cantidad_anexos"], array('id' => 'cantidad2','min' => 0,'max' => 100,'class'=>'required number form-control input-sm','placeholder'=>"anexos")) !!}
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-4">Información del remitente</label>
                                </div>                                                      
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-2">Instancia gubernamental:</label>
                                    <div class="col-sm-3">
                                        <select name="instancia" id="instancia2" class="form-control input-sm">
                                            <option value="">- - - - - - - - - -</option>
                                            @foreach($instancia as $inst)
                                                        <td><option value="{{ $inst->inst_cnv_id }}">{{ $inst->inst_nombre }}</option></td>
                                            @endforeach                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-2">Unidad administrativa:</label>
                                    <div class="col-sm-3">
                                        <select name="unidad" id="unidad2" class="form-control input-sm">
                                            <option value="">- - - - - - - - - -</option>                                     
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="control-label col-sm-2">Remitente:</label>
                                    <div class="col-sm-3">
                                        <select name="remitente" id="remitente2" class="form-control input-sm">
                                            <option value="">- - - - - - - - - -</option>                                        
                                        </select>
                                    </div>
                                </div>
                                <div id="respuesta">
                                </div>
								<div class="form-group">
									<div class="col-xs-offset-4 col-xs-6">
										<input type="submit" class="btn btn-info" value="Modificar documento">
										<!--<input type="reset" class="btn btn-default" value="Limpiar">-->
									</div>
								</div>                                                              
                    		</form>
                    </div>    
            </div>
        </div>
    </div>