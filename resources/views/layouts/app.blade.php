<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class=" boxed has-top-menu {{--header-fixed--}} sidebar-light">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('APP.NAME','Gestión Documental') }}</title>
    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <!--<link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">-->
    <!--<link href="{{ asset('css/jquery.timepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/component.css') }}" rel="stylesheet"> -->       
   <!-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">    -->
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">

    <!--Animation css-->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <!--Icon-fonts css-->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/material-design-iconic-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery.steps.css') }}" rel="stylesheet">
   <!-- <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">-->

    <!-- Datatable -->
    <link href="{{ asset('css/datatables/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('css/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet">-->
    <link href="{{ asset('css/datatables/datatables.css') }}" rel="stylesheet"> 
    

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweet-alert.min.css') }}" rel="stylesheet">       
</head>
<body class="fixed-nav sticky-footer" id="page-top">

    <aside class="left-panel">
            <!-- brand -->
            <div class="logo">
                <a href="http://localhost" class="logo-expanded">
                    <!--<i class="ion-social-buffer"></i>-->
                    <span class="nav-label">GesDoc</span>
                </a>
            </div>
            <!-- / brand -->

            <!-- Navbar Start -->
            @yield('sidebar')
            <!-- Aside Ends--> 
    </aside>

    <section class="content">
        <!-- header -->
        @include('layouts.header', ['user' => ''])
        <!-- header Ends -->

        <!-- start: page -->
        <div class="wraper container-fluid">
            @yield('content')
        </div>        
        <!-- end: page -->

        <!-- Page Content Start -->
        <!-- ================== -->

        <!-- Footer start -->
        @include('layouts.footer') 
        <!-- Footer ends -->

    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!--<script src="{{ asset('js/jquery.js') }}"></script>-->
    <!--<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>-->
    <!--<script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>-->
    <!--<script src="{{ asset('js/bootstrap.min.js') }}"></script>-->
    <!--<script src="{{ asset('js/pace.min.js') }}"></script>-->
    <!--<script src="{{ asset('js/wow.min.js') }}"></script>-->
    <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <!--<script src="{{ asset('js/select2.min.js') }}"></script>-->
    <script src="{{ asset('js/jquery.app.js') }}"></script>
    <!--<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script> -->
    <script src="{{ asset('js/sweet-alert.min.js') }}" type="text/javascript"></script>
    <!-- datatables -->
    <script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <!--<script src="{{ asset('js/datatables/buttons.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/datatables/buttons.html5.min.js') }}" type="text/javascript"></script>-->
    <script src="{{ asset('js/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <!--<script src="{{ asset('js/datatables/dataTables.buttons.min.js') }}" type="text/javascript"></script>-->
    <script src="{{ asset('js/datatables/dataTables.fixedHeader.min.js') }}" type="text/javascript"></script>
    <!--<script src="{{ asset('js/datatables/dataTables.keyTable.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/datatables/dataTables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/datatables/dataTables.scroller.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/datatables/responsive.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/datatables.init.js') }}" type="text/javascript"></script>-->
   
    <!--Form Wizard-->
    <!--<script src="{{ asset('js/jquery.steps.js') }}" type="text/javascript"></script>-->
    <script src="{{ asset('js/jquery.steps.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-validator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}" type="text/javascript"></script>

    <!--wizard initialization-->
    <!--<script src="{{ asset('js/skycons.min.js') }}" type="text/javascript"></script>-->
    <!--<script src="{{ asset('js/jquery.counterup.min.js') }}" type="text/javascript"></script>-->
    <!--<script src="{{ asset('js/waypoints.min.js') }}" type="text/javascript"></script>-->
    <script src="{{ asset('js/wizard-init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/sweet-alert.init.js') }}" type="text/javascript"></script>
    <!--<script src="{{ asset('js/owl.carousel.js') }}" type="text/javascript"></script>    -->
    <!-- modal
    <script src="{{ asset('js/classie.js') }}" type="text/javascript"></script>
     -->
   <!-- <script src="{{ asset('js/jquery.knob.js') }}" type="text/javascript"></script>-->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable').dataTable({ fixedHeader: true });
        });

    $('#instancia2').change(function(){
       obtenerSeleccion('seleccion',$(this).val(),'inst','No cuenta con unidades asignadas');
    });

    $('#unidad2').change(function(){
       obtenerSeleccion('seleccion',$(this).val(),'rem','No tiene asignado titular');
    });

    function obtenerSeleccion(funcion,idCategoria,tipo,msg){
        datos = { fnc:funcion, tipo:tipo, msg:msg };
        $.ajax({
            headers:{'X-CSRF-Token':$('input[name="_token"]').val()},
            type:'GET',
            data: datos,
            url: '/sidoc/public/ajax/'+idCategoria+'/'+tipo,
            dataType: "json",
            error: function() {
                   console.log(fnc);
                   $("#respuesta").html('<div> Ha surgido un error. </div>');
            },
            success: rendeListaCatalogo
        });
    }

    function rendeListaCatalogo(data){
        //console.log(JSON.stringify(data));
        var contenedor,cargo; 
        switch(datos.tipo){
                case "inst":
                    contenedor = 'unidad2';
                break;
                case "rem":
                    contenedor = 'remitente2';
                break;
        }

        $('#'+contenedor+' option').remove();
        var list = data == null ? [] : (data.datos instanceof Array ? data.datos : [data.datos ]);
        if (list.length < 1) {
           $('#'+contenedor).append('<option>'+datos.msg+'</option>');
        } else {
            $('#'+contenedor).append('<option value="0">-- Seleccionar --</option>');
            $.each(list, function(index, dat) {
                cargo ="";
                if(dat.cargo !== undefined){
                    cargo = " - "+dat.cargo
                }
                $('#'+contenedor).append('<option value='+dat.id+'>'+dat.nombre+cargo+'</option>');
            });
            //$('#'+contenedor).focus();
        }
     }
    </script>

    @stack('jscustom');
</body>
</html>
