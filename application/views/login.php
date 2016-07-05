<!DOCTYPE html>
<html lang="es" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Sistema de Control Vehicular</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url(); ?>recursos/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>recursos/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->    

        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->                                                                
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Bienvenido</strong></div>
                    <form id="login_validate" role="form" action="<?php echo base_url(); ?>dashboard" class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" name="login_dni" class="form-control" maxlength="8" placeholder="DNI"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" name="login_password" class="form-control" placeholder="Contraseña"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <a href="#" data-toggle="modal" data-target="#modal_recuperar" class="btn btn-link btn-block">Olvidaste tu contraseña?</a>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block" style="font-size:12px;" type="submit">Ingresar</button>
                            </div>
                        </div>
                        <div class="login-subtitle">
                            Aun no se ha registrado? <a href="#" data-toggle="modal" data-target="#modal_registrar">Crear una cuenta</a>
                        </div>
                    </form>
                </div>


                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2016
                    </div>
                    <div class="pull-right">
                        <span style="font-size:9px;">Desarrollado por <a href="https://www.gltracker.pe/"><img src="<?php echo base_url(); ?>recursos/img/logo_footer.png" alt="GLTRACKER"></a></span>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="modal" id="modal_registrar" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <form id="jvalidate" role="form" class="form-horizontal" action="javascript:alert('validado2');">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                            <h4 class="modal-title" id="defModalHead">Registro Usuario</h4>
                        </div>
                        <div class="modal-body">                            

                            <div class="form-group">
                                <label class="col-md-3 control-label">Documento de Identidad:</label>  
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="dni" placeholder="12345678" maxlength="8" />
                                    <span class="help-block">Escriba los 8 digitos de su DNI</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Contraseña:</label>                                        
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" id="password2" placeholder="Contraseña"/>                                        
                                    <!-- <span class="help-block">min = 5</span> -->
                                </div>
                            </div>                    
                            <div class="form-group">
                                <label class="col-md-3 control-label">Confirme Contraseña:</label>                                       
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="re-password" placeholder="Confirmacion" />
                                    <!-- <span class="help-block">required same value as Password</span> -->
                                </div>
                            </div>               
                            <div class="form-group">
                                <label class="col-md-3 control-label">E-mail:</label>
                                <div class="col-md-9">
                                    <input type="text" value="" name="email" class="form-control" placeholder="correo@dominio.com" />                                        
                                    <span class="help-block">Ejemplo correo@dominio.com</span>
                                </div>
                            </div> 

                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default" onclick="fnc_LimpiarInputs(); return false;">Limpiar</button>   
                            <button class="btn btn-primary pull-right" type="submit">Registrar</button>
                            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal" id="modal_recuperar" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <form id="jvalidate" role="form" class="form-horizontal" action="javascript:alert('validado4');">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                            <h4 class="modal-title" id="defModalHead">Recuperar Constraseña</h4>
                        </div>
                        <div class="modal-body">                            

                            <div class="form-group">
                                <label class="col-md-3 control-label">Documento de Identidad:</label>  
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="dni" placeholder="12345678" maxlength="8" />
                                    <span class="help-block">Escriba los 8 digitos de su DNI</span>
                                </div>
                            </div>
              
                            <div class="form-group">
                                <label class="col-md-3 control-label">E-mail:</label>
                                <div class="col-md-9">
                                    <input type="text" value="" name="email" class="form-control" placeholder="correo@dominio.com" />                                        
                                    <span class="help-block">Escriba el correo configurado en su cuenta. Le llegar&aacute; un correo de confirmaci&oacute;n</span>
                                </div>
                            </div> 

                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default" onclick="fnc_LimpiarInputs(); return false;">Limpiar</button>   
                            <button class="btn btn-primary pull-right" type="submit">Enviar</button>
                            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!-- START SCRIPTS -->

        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/bootstrap/bootstrap-datepicker.js'></script>        
        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/bootstrap/bootstrap-select.js'></script>        

        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/validationengine/languages/jquery.validationEngine-es.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/jquery-validation/jquery.validate.js'></script>                

        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <!-- END THIS PAGE PLUGINS -->               

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/settings.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/actions.js"></script>
        <!-- END TEMPLATE -->
        
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        dni: {
                                required: true,
                                number: true,
                                minlength: 8                                
                        },
                        password: {
                                required: true,
                                minlength: 5
                        },
                        're-password': {
                                required: true,
                                minlength: 5,
                                equalTo: "#password2"
                        },
                        email: {
                                required: true,
                                email: true
                        }
                    },
                messages: {
                        dni: {
                            required: "Dato obligatorio",
                            minlength: "Minimo de 8 números ",
                            number: "Solo se aceptan caracteres numéricos"
                        },
                        password: {
                            required: "Dato obligatorio",
                            minlength: "Minimo de 5 números "
                        },
                        're-password': {
                            required: "Dato obligatorio",
                            minlength: "Minimo de 5 números ",
                            equalTo: "La contraseña no son iguales"
                        },
                        email: {
                            required: "Dato obligatorio",
                            email: "El correo debe tener el formato de correo@dominio.com"
                        }
                    }                                          
                });                                    


            var jvalidate = $("#login_validate").validate({
                ignore: [],
                rules: {                                            
                        login_dni: {
                                required: true,
                                number: true,
                                minlength: 8                                
                        },
                        login_password: {
                                required: true,
                                minlength: 5
                        }
                    },
                messages: {
                        login_dni: {
                            required: "Dato obligatorio",
                            minlength: "Minimo de 8 números ",
                            number: "Solo se aceptan caracteres numéricos"
                        },
                        login_password: {
                            required: "Dato obligatorio",
                            minlength: "Minimo de 5 números "
                        }
                    }                                          
                });     

            function fnc_LimpiarInputs() {
                $(":text").each(function(){ 
                    $($(this)).val('');
                });
                 $(":password").each(function(){ 
                    $($(this)).val('');
                });

                jvalidate.resetForm();$('#gender').next('.bootstrap-select').removeClass('error').removeClass('valid');
            }
        </script>
        
    <!-- END SCRIPTS -->

    </body>
</html>






