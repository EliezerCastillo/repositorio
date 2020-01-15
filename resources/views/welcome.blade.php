@extends('layouts.app')
@section('sidebar')
 <!--heredamos con parent lo que hay en la plantilla base pero añadimos otro elemento al menú-->
  @include('layouts.menu')
  @parent
@endsection

@section('content')

    <!--<ol class="breadcrumb">
        <li class="breadcrumb-iteml">
            <a href="#">Bienvenidos</a>
        </li>
    </ol>-->
<div class="row">
        <div class="container">
                <div class="panel panel-default text-center">
                    <div class="panel-heading text-center">Sistema de Gestión Documental</div>                        
                        <div class="panel-body">            
                            <div class="alert">
                                <h3>!Buen dia, {{ \Session::get('usuario') }}!</h3> 
                            </div>       
                            <div class="alert">
                                <h3>! Bienvenido !</h3>
                            </div>       
                        </div>                
        </div>
</div>
@endsection