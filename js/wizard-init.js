/**
* Theme: Velonic Admin Template
* Author: Coderthemes
* Form wizard page
*/

!function($) {
    "use strict";

    var FormWizard = function() {
    };

    /*FormWizard.prototype.createBasic = function($form_container) {
        $form_container.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft"
        });
        return $form_container;
    },*/
    //creates form with validation
    FormWizard.prototype.createValidatorForm = function($form_container) {
        $form_container.validate({
            /*messages: {
                        nombre_entidad: "Obligatorio"
            },*/
            errorPlacement: function errorPlacement(error, element) {
                //element.after(error);
                element.after();
            }
        });
        $form_container.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                $form_container.validate().settings.ignore = ":disabled,:hidden";    
                /*alert(currentIndex+" "+newIndex);
                if(currentIndex == 0){
                   alert("Paso 1"); 
                }
                if (currentIndex == 1) {
                    alert("Paso 2");
                }*/

                /*$.ajax({
                    headers: { 'X-CSRF-Token': $('input[name="_token"]').val()},
                    type: 'POST',
                    dataType: 'json',
                    url: 'wizard',
                    data: $('form').serialize(),
                    success: function (event) {
                        if(event){
                            alert(event.userName) 
                        }else{
                            return $form_container.valid();                              
                        }
                    },
                    error: function () {
                        return $form_container.valid();
                    }                    
                });*/

                return $form_container.valid();
            },
            onFinishing: function (event, currentIndex) {
                $form_container.validate().settings.ignore = ":disabled";
                /*alert("Continuando..." + currentIndex);               
                if (currentIndex == 2) {
                    alert("Paso 3");
                }*/
                return $form_container.valid();
            },
            onFinished: function (event, currentIndex) {

                /*$('#sa-warning').click(function () {

                });*/

                //$form_container.

                /*$('#sa-warning').click(function () {*/
                    swal({
                        title: "¿ Desea guardar la información ? ",
                        text: "¡ Si la información es correcta presione aceptar !",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Aceptar",
                        cancelButtonText: "Cancelar",
                        closeOnConfirm: false
                    }, function () {
                        swal("¡Guardado!", "Tu información ha sido registrada.", "success");
                        $form_container.submit();
                        /*if(isConfirm){
                            $form_container.submit();
                        }*/
                    });
               /* });*/

               /* $.ajax({
                    headers: { 'X-CSRF-Token': $('input[name="_token"]').val() },
                    type: 'POST',
                    dataType: 'json',
                    url: 'wizard',
                    data: $('form').serialize(),
                    success: function (event) {
                        if (event) {
                            alert(event.userName)
                        } else {
                            return $form_container.valid();
                        }
                    },
                    error: function () {
                        return $form_container.valid();
                    }
                });*/
                //$form_container.submit();
                //event.labels.finish = 'xxx';
                

                //alert("Enviando un submit Submitted!");
            }
        });

        //return $form_container;
    },
    //creates vertical form
   /* FormWizard.prototype.createVertical = function($form_container) {
        $form_container.steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            stepsOrientation: "vertical"
        });
        return $form_container;
    },*/
    FormWizard.prototype.init = function() {
        //initialzing various forms

        //basic form
        //this.createBasic($("#basic-form"));

        //form with validation
        this.createValidatorForm($("#wizard-validation-form"));

        //vertical form
        //this.createVertical($("#wizard-vertical"));
    },
    //init
    $.FormWizard = new FormWizard;
    $.FormWizard.Constructor = FormWizard;
}(window.jQuery),

//initializing 

/*settings = {

    labels: {
        finish: "xxx"
    }
}*/

function($) {
    "use strict";
    $.FormWizard.init();
}(window.jQuery);