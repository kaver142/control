<!DOCTYPE html>
<html lang="es">
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
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url(); ?>dashboard" id="logo_top"></a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo base_url(); ?>recursos/assets/images/users/user6.jpg" alt="Carlos Alberto"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img id="img-usuario" src="<?php echo base_url(); ?>recursos/assets/images/users/user6.jpg" alt="Carlos Alberto" onclick="$(location).attr('href','<?php echo base_url(); ?>usuario/info');"  />
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Millet Figueroa</div>
                                <div class="profile-data-title">Administrador</div>
                            </div>
                            <div class="profile-controls">
                                <a href="<?php echo base_url(); ?>usuario/info" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="<?php echo base_url(); ?>usuario/personalizado" class="profile-control-right"><span class="fa fa-gear"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navegaci&oacute;n</li>
                    <li <?php if($menu == 'dashboard'){echo 'class="active"';} ?> >
                        <a href="<?php echo base_url(); ?>dashboard"><span class="fa fa-desktop"></span> <span class="xn-text">Inicio</span></a>                        
                    </li>  
                    <!-- <li <?php if($menu == 'convoy'){echo 'class="active"';} ?> id="btn_convoys">
                        <a href="<?php echo base_url(); ?>convoy"><span class="fa fa-truck"></span> <span class="xn-text">Convoys</span></a>                        
                    </li> -->  

                    <li class="xn-openable <?php if( ($menu == 'convoy_activos') or ($menu == 'convoy_historial') ){echo 'active';} ?>">
                        <a href="#"><span class="fa fa-truck"></span> <span class="xn-text">Convoys</span></a>
                        <ul>
                            <!-- <li <?php if($menu == 'convoy_activos'){echo 'class="active"';} ?>>
                                <a href="<?php echo base_url(); ?>convoy/activos"><span class="fa fa-user"></span> Convoys Activos</a>
                            </li>   -->
                            <li <?php if($menu == 'convoy_historial'){echo 'class="active"';} ?>>
                                <a href="<?php echo base_url(); ?>convoy"><span class="fa fa-file"></span> Historial Convoys</a>
                            </li>                        
                        </ul>
                    </li> 
                    <li <?php if($menu == 'informes'){echo 'class="active"';} ?> >
                        <a href="<?php echo base_url(); ?>informes"><span class="fa fa-file-o"></span> <span class="xn-text">Informes</span></a>                        
                    </li> 
                    <li class="xn-openable <?php if( ($menu == 'usuario') ){echo 'active';} ?>">
                        <a href="#"><span class="fa fa-gear"></span> <span class="xn-text">Mantenimiento</span></a>
                        <ul>
                            <li <?php if($menu == 'usuario'){echo 'class="active"';} ?>>
                                <a href="<?php echo base_url(); ?>usuario"><span class="fa fa-user"></span> Usuarios</a>
                            </li>                       
                        </ul>
                    </li>                 
                    <!-- <li class="xn-openable">
                        <a href="#"><span class="fa fa-gear"></span> <span class="xn-text">Eventos</span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>dashboard"><span class="fa fa-exclamation-triangle"></span> Incidentes</a></li>
                            <li><a href="<?php echo base_url(); ?>dashboard"><span class="fa fa-paste"></span> Observaciones de Ruta</a></li>
                            <li><a href="<?php echo base_url(); ?>dashboard"><span class="fa fa-ban"></span> Transgreciones</a></li>
                            <li><a href="<?php echo base_url(); ?>dashboard"><span class="fa fa-clipboard"></span> Informe General</a></li>
                            <li><a href="<?php echo base_url(); ?>dashboard"><span class="fa fa-camera"></span> Fatigas</a></li>
                            <li><a href="<?php echo base_url(); ?>dashboard"><span class="fa fa-mobile"></span> Alcoholemia</a></li>                          
                        </ul>
                    </li> -->
                    <li class="active-signout">
                        <a href="#" class="mb-control1" data-box="#mb-signout"><span class="fa fa-sign-out"></span> <span class="xn-text">Cerrar Sesión</span></a>                        
                    </li> 

                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->

                    <li>
                        <span id="nombre_operario"><span class="fa fa-user"></span> &nbsp;&nbsp; Operador: Sadham Flores Cotrado</span>
                    </li> 
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control1" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->

                </ul>
                <!-- END X-NAVIGATION VERTICAL --> 