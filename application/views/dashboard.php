
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>dashboard">Inicio</a></li>                    
                    <li class="active">Convoys (Alertas)</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap" id="salastatus">
                    
                    <!-- PAGE TITLE -->
                    <div class="page-title">                    
                        <h2><span class="fa fa-exclamation-triangle"></span> Alertas</h2>
                    </div>
                    <!-- END PAGE TITLE --> 

                    <!-- START WIDGETS -->                    
                    <div class="row" id="resulttable">

                        <div class="col-md-6">
                            <div class="panel panel-default">                            
                                <div class="panel-body" style="padding: 0;">
                                    <div class="widget widget-warning widget-item-icon widget_convoys " onclick="RedireccionarPagina(0);return false;">  
                                        <div class="widget-item-right">
                                            <!-- <span class="fa fa-exclamation-triangle" style="color: #E04B4A;"></span> -->
                                            <span class="fa fa-circle" style="color: #E04B4A;"></span>
                                        </div>
                                        <div class="widget-data-left">
                                            <div class="widget-int num-count">CZC-LBB</div>
                                            <div class="widget-title">Ploteo: AJU-940(863)</div>
                                            <div class="widget-subtitle">Hora de Inicio : 15:05</div>
                                            <div style="color: grey; text-align: right;;">
                                                <span class="fa fa-exclamation-triangle"></span> 3 &nbsp;&nbsp;
                                                <span class="fa fa-camera"></span> 12 &nbsp;&nbsp;
                                                <span class="fa fa-paste"></span> 1 &nbsp;&nbsp;
                                                <span class="fa fa-ban"></span> 36
                                            </div>                                                
                                        </div>                                                                      
                                    </div>
                                </div>
                                <div class="panel-footer text-muted row" style="font-size: 1.2em; text-align: right;">
                                    <div class="col-md-4 col-xs-4 col-sm-3" style="text-align: left;font-size: 0.9em;">                                   
                                        <span class="label label-danger label-form" style="padding:7px; font-size: 0.87em;"><span class="fa fa-file-text"></span> 16:35 p.m.</span>
                                    </div>
                                    <div class="col-md-8 col-xs-8 col-sm-9">
                                        <a href="<?php echo base_url(); ?>convoy/ubicacion" class="btn btn-sm btn-warning" style="width: 75px">
                                            <span class="fa fa-map-marker" style="font-size: 1.4em;"></span> Mapa
                                        </a> 
                                        <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-sm btn-primary" style="width: 75px; background: #0A0F26;" >
                                            <span class="fa fa-info" style="font-size: 1.4em;"></span> Info
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="panel panel-default">                            
                                <div class="panel-body" style="padding: 0;">
                                    <div class="widget widget-warning widget-item-icon widget_convoys " onclick="RedireccionarPagina(0);return false;">  
                                        <div class="widget-item-right">
                                            <span class="fa fa-circle" style="color: #E04B4A;"></span>
                                        </div>
                                        <div class="widget-data-left">
                                            <div class="widget-int num-count">AQP-LBB</div>
                                            <div class="widget-title">Ploteo: ABI-757(852)</div>
                                            <div class="widget-subtitle">Hora de Inicio : 07:30</div>
                                            <div style="color: grey; text-align: right;;">
                                                <span class="fa fa-exclamation-triangle"></span> 1 &nbsp;&nbsp;
                                                <span class="fa fa-camera"></span> 10 &nbsp;&nbsp;
                                                <span class="fa fa-paste"></span> 12 &nbsp;&nbsp;
                                                <span class="fa fa-ban"></span> 2
                                            </div>                                                
                                        </div>                                                                      
                                    </div>
                                </div>
                                <div class="panel-footer text-muted row" style="font-size: 1.2em; text-align: right;">
                                    <div class="col-md-4 col-xs-4 col-sm-3" style="text-align: left;font-size: 0.9em;">                                   
                                        <span class="label label-danger label-form" style="padding:7px; font-size: 0.87em;"><span class="fa fa-file-text"></span> 16:30p.m.</span>
                                    </div>
                                    <div class="col-md-8 col-xs-8 col-sm-9">
                                        <a href="<?php echo base_url(); ?>convoy/ubicacion" class="btn btn-sm btn-warning" style="width: 75px">
                                            <span class="fa fa-map-marker" style="font-size: 1.4em;"></span> Mapa
                                        </a> 
                                        <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-sm btn-primary" style="width: 75px; background: #0A0F26;" >
                                            <span class="fa fa-info" style="font-size: 1.4em;"></span> Info
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END WIDGETS ALERTAS -->    

                    <br>
                    <!-- PAGE TITLE -->
                    <div class="page-title">                    
                        <h2><span class="fa fa-exclamation-circle"></span> Activos</h2>
                    </div>
                    <!-- <div class="hr-page-title"></div> -->
                    <!-- END PAGE TITLE --> 

                    <!-- START WIDGETS -->                    
                    <div class="row" id="resulttable2">                
                    

                        <div class="col-md-6">
                            <div class="panel panel-default">                            
                                <div class="panel-body" style="padding: 0;">
                                    <div class="widget widget-warning widget-item-icon widget_convoys " onclick="RedireccionarPagina(0);return false;">  
                                        <div class="widget-item-right">
                                            <!-- <span class="fa fa-location-arrow" style="color: #B8B8B8; font-size: 0.9em"></span> -->
                                            <span class="fa fa-circle" style="color: #B9E4EE;"></span>
                                        </div>
                                        <div class="widget-data-left">
                                            <div class="widget-int num-count">LBB-CZC</div>
                                            <div class="widget-title">Ploteo: AAX-749(853)</div>
                                            <div class="widget-subtitle">Hora de Inicio : 07:30</div>
                                            <div style="color: grey; text-align: right;;">
                                                <span class="fa fa-exclamation-triangle"></span> 1 &nbsp;&nbsp;
                                                <span class="fa fa-camera"></span> 10 &nbsp;&nbsp;
                                                <span class="fa fa-paste"></span> 12 &nbsp;&nbsp;
                                                <span class="fa fa-ban"></span> 2
                                            </div>                                                
                                        </div>                                                                      
                                    </div>
                                </div>
                                <div class="panel-footer text-muted row" style="font-size: 1.2em; text-align: right;">
                                    <div class="col-md-4 col-xs-4 col-sm-3" style="text-align: left;font-size: 0.9em;">                                   
                                        <span class="label label-primary label-form" style="padding:7px; font-size: 0.87em;"><span class="fa fa-file-text"></span> 16:44p.m.</span>
                                    </div>
                                    <div class="col-md-8 col-xs-8 col-sm-9">
                                        <a href="<?php echo base_url(); ?>convoy/ubicacion" class="btn btn-sm btn-warning" style="width: 75px">
                                            <span class="fa fa-map-marker" style="font-size: 1.4em;"></span> Mapa
                                        </a> 
                                        <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-sm btn-primary" style="width: 75px; background: #0A0F26;" >
                                            <span class="fa fa-info" style="font-size: 1.4em;"></span> Info
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="panel panel-default">                            
                                <div class="panel-body" style="padding: 0;">
                                    <div class="widget widget-warning widget-item-icon widget_convoys " onclick="RedireccionarPagina(0);return false;">  
                                        <div class="widget-item-right">
                                            <span class="fa fa-circle" style="color: #B8B8B8;"></span>
                                        </div>
                                        <div class="widget-data-left">
                                            <div class="widget-int num-count">AQP-LBB</div>
                                            <div class="widget-title">Ploteo: ABI-757(852)</div>
                                            <div class="widget-subtitle">Hora de Inicio : 07:30</div>
                                            <div style="color: grey; text-align: right;;">
                                                <span class="fa fa-exclamation-triangle"></span> 1 &nbsp;&nbsp;
                                                <span class="fa fa-camera"></span> 10 &nbsp;&nbsp;
                                                <span class="fa fa-paste"></span> 12 &nbsp;&nbsp;
                                                <span class="fa fa-ban"></span> 2
                                            </div>                                                
                                        </div>                                                                      
                                    </div>
                                </div>
                                <div class="panel-footer text-muted row" style="font-size: 1.2em; text-align: right;">
                                    <div class="col-md-4 col-xs-4 col-sm-3" style="text-align: left;font-size: 0.9em;">                                   
                                        <span class="label label-primary label-form" style="padding:7px; font-size: 0.87em;"><span class="fa fa-file-text"></span> 16:30p.m.</span>
                                    </div>
                                    <div class="col-md-8 col-xs-8 col-sm-9">
                                        <a href="<?php echo base_url(); ?>convoy/ubicacion" class="btn btn-sm btn-warning" style="width: 75px">
                                            <span class="fa fa-map-marker" style="font-size: 1.4em;"></span> Mapa
                                        </a> 
                                        <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-sm btn-primary" style="width: 75px; background: #0A0F26;" >
                                            <span class="fa fa-info" style="font-size: 1.4em;"></span> Info
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="panel panel-default">                            
                                <div class="panel-body" style="padding: 0;">
                                    <div class="widget widget-warning widget-item-icon widget_convoys " onclick="RedireccionarPagina(0);return false;">  
                                        <div class="widget-item-right">
                                            <span class="fa fa-circle" style="color: #B8B8B8;"></span>
                                        </div>
                                        <div class="widget-data-left">
                                            <div class="widget-int num-count">CZC-LBB</div>
                                            <div class="widget-title">Ploteo: AFJ-887(857)</div>
                                            <div class="widget-subtitle">Hora de Inicio : 12:00</div>
                                            <div style="color: grey; text-align: right;;">
                                                <span class="fa fa-exclamation-triangle"></span> 1 &nbsp;&nbsp;
                                                <span class="fa fa-camera"></span> 10 &nbsp;&nbsp;
                                                <span class="fa fa-paste"></span> 12 &nbsp;&nbsp;
                                                <span class="fa fa-ban"></span> 2
                                            </div>                                                
                                        </div>                                                                      
                                    </div>
                                </div>
                                <div class="panel-footer text-muted row" style="font-size: 1.2em; text-align: right;">
                                    <div class="col-md-4 col-xs-4 col-sm-3" style="text-align: left;font-size: 0.9em;">                                   
                                        <span class="label label-primary label-form" style="padding:7px; font-size: 0.87em;"><span class="fa fa-file-text"></span> 16:30p.m.</span>
                                    </div>
                                    <div class="col-md-8 col-xs-8 col-sm-9">
                                        <a href="<?php echo base_url(); ?>convoy/ubicacion" class="btn btn-sm btn-warning" style="width: 75px">
                                            <span class="fa fa-map-marker" style="font-size: 1.4em;"></span> Mapa
                                        </a> 
                                        <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-sm btn-primary" style="width: 75px; background: #0A0F26;" >
                                            <span class="fa fa-info" style="font-size: 1.4em;"></span> Info
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="panel panel-default">                            
                                <div class="panel-body" style="padding: 0;">
                                    <div class="widget widget-warning widget-item-icon widget_convoys " onclick="RedireccionarPagina(0);return false;">  
                                        <div class="widget-item-right">
                                            <span class="fa fa-circle" style="color: #B8B8B8;"></span>
                                        </div>
                                        <div class="widget-data-left">
                                            <div class="widget-int num-count">CZC-LBB</div>
                                            <div class="widget-title">Ploteo: AJU-940(863)</div>
                                            <div class="widget-subtitle">Hora de Inicio : 15:05</div>
                                            <div style="color: grey; text-align: right;;">
                                                <span class="fa fa-exclamation-triangle"></span> 1 &nbsp;&nbsp;
                                                <span class="fa fa-camera"></span> 10 &nbsp;&nbsp;
                                                <span class="fa fa-paste"></span> 12 &nbsp;&nbsp;
                                                <span class="fa fa-ban"></span> 2
                                            </div>                                                
                                        </div>                                                                      
                                    </div>
                                </div>
                                <div class="panel-footer text-muted row" style="font-size: 1.2em; text-align: right;">
                                    <div class="col-md-4 col-xs-4 col-sm-3" style="text-align: left;font-size: 0.9em;">                                   
                                        <span class="label label-primary label-form" style="padding:7px; font-size: 0.87em;"><span class="fa fa-file-text"></span> 16:30p.m.</span>
                                    </div>
                                    <div class="col-md-8 col-xs-8 col-sm-9">
                                        <a href="<?php echo base_url(); ?>convoy/ubicacion" class="btn btn-sm btn-warning" style="width: 75px">
                                            <span class="fa fa-map-marker" style="font-size: 1.4em;"></span> Mapa
                                        </a> 
                                        <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-sm btn-primary" style="width: 75px; background: #0A0F26;" >
                                            <span class="fa fa-info" style="font-size: 1.4em;"></span> Info
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>






                        

                    </div>
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   



                <script>
                    $(document).ready(function(){
                        // alert('9999');
                        // var refreshId = setInterval(refrescarTablaEstadoSala, 30000);
                        // $.ajaxSetup({ cache: false });
                    });

                    function RedireccionarPagina(id_convoy) {
                        $(location).attr('href','<?php echo base_url(); ?>convoy/info');
                    }

                    function refrescarTablaEstadoSala() {
                        // alert('22222');
                        $("#rolling").toggle();
                        $("#salastatus").css('opacity', 0.4);
                        $("#salastatus").load('estadoSala.do?randval='+ Math.random() + " #resulttable", function(){
                            //aquí puedes meter más código si necesitas;
                            $("#salastatus").css('opacity', 1);
                            $("#rolling").toggle();
                        });
                    }
                </script>                             
            