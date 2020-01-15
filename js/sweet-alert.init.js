
/**
* Theme: Velonic Admin Template
* Author: Coderthemes
* SweetAlert - 
* Usage: $.SweetAlert.methodname
*/

!function($) {
    "use strict";

    var SweetAlert = function() {};

    //examples 
    SweetAlert.prototype.init = function() {
        
    //Basic
    $('#sa-basic').click(function(){
        swal("Here's a message!");
    });

    //A title with a text under
    $('#sa-title').click(function(){
        swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis")
    });

    //Success Message
    $('#sa-success').click(function(){
        swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis", "success")
    });

    //Warning Message
    $('#sa-warning').click(function(){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            closeOnConfirm: false 
        }, function(){   
            swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
        });
    });

    //Parameter
    $('#sa-params').click(function(){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            cancelButtonText: "No, cancel plx!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {     
                swal("Deleted!", "Your imaginary file has been deleted.", "success");   
            } else {     
                swal("Cancelled", "Your imaginary file is safe :)", "error");   
            } 
        });
    });
    
    $('#eliminardec').click(function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "¿ Esta seguro de eliminar ?",
            text: "¡ La información contenida en la declaración de conflicto de interés será eliminada !",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false           
        }, function (isConfirm) {
            if (isConfirm) {
                swal("Eliminado", "Información eliminada.", "success");
                window.location.href = link;
            } else {
                swal("Cancelado", "Su información no fue eliminada. :)", "error");
            }
            
        });
    });

    $('#iniciardec').on('click', function (e) {
        e.preventDefault();
        swal({
            title: "¿ Está de acuerdo en iniciar su declaración de posible conflicto de interés ?",
            text: "¡ Dar un clic en aceptar para continuar con el proceso !",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                swal("Continuar", "Su declaración ha iniciado.", "success");
                document.getElementById("form-confirma").submit();
            } else {
                swal("Cancelar", "Su declaración no fue iniciada. :)", "error");
            }

        });
    });

    $('#enviardec').on('click', function (e) {
        var respuesta = $("input[name='decpublica']:checked").val();
        e.preventDefault();
        if(typeof($("input[name='decpublica']:checked").val()) == "undefined"){
            swal("¡Verificar la sección de información pública !");
           return false;
        }

        swal({
            title: "¿ Está seguro de enviar su declaración de posible conflicto de interés ?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                swal("Continuar", "Su declaración ya fue recepcionada, gracias. :)", "info");
                document.getElementById("notificar_dpci").submit();
            } else {
                swal("Cancelar", "Su declaración no fue enviada. :(", "error");
            }

        });
    });

    $('#confirmadec').on('click', function (e) {
        var msg = $('#msg2').attr('value');
        var respuesta = $("input[name='conf_confirma']:checked").val();
        var msg_resp="";
        e.preventDefault();
        if(respuesta == 2){
           msg_resp = "no ";        
            if ($("#conf_observa2").val() == ""){
                swal("Exponga el motivo, para continuar");
                return false;
            }
        }
        document.getElementById("form-confirma").submit();
    });

    //Custom Image
    $('#sa-image').click(function(){
        swal({   
            title: "Sweet!",   
            text: "Here's a custom image.",   
            imageUrl: "assets/sweet-alert/thumbs-up.jpg" 
        });
    });

    //Auto Close Timer
    $('#sa-close').click(function(){
         swal({   
            title: "Auto close alert!",   
            text: "I will close in 2 seconds.",   
            timer: 2000,   
            showConfirmButton: false 
        });
    });


    },
    //init
    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.SweetAlert.init()
}(window.jQuery);