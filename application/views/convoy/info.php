				<?php
 // echo phpinfo();
?>

				<!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Inicio</a></li>   
                    <li><a href="<?php echo base_url(); ?>convoy">Convoy</a></li>                  
                    <li class="active">Informaci&oacute;n</li>
                </ul>
                <!-- END BREADCRUMB --> 

                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap"> 

                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert">
                                <!-- <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button> -->
                                <strong>Fecha hora de consulta :</strong> 27/06/2016 - 12:04 a.m. 
                            </div>
                        </div>
                    </div>

                    <!-- PAGE TITLE -->
                    <div class="page-title">                    
                        <h2><span class="fa fa-calendar"></span> Informaci&oacute;n</h2>
                    </div>
                    <!-- END PAGE TITLE -->

                    <!-- WIDGETS -->
                    <div class="row scRow">

                        <!-- <div class="col-md-2 col-sm-6 col-xs-6">
                            <div class="widget widget-evento_numero widget-item-icon" style="cursor: default;">
                                <div class="widget-data" style="padding-left: 0px;">
                                    <div class="widget-int num-count" style="text-align: center;">27</div>
                                    <div class="widget-title" style="text-align: center;">Fatigas</div>
                                </div>                                                           
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <div class="widget widget-evento_numero widget-item-icon" style="cursor: default;">
                                <div class="widget-data" style="padding-left: 0px;">
                                    <div class="widget-int num-count" style="text-align: center;">3</div>
                                    <div class="widget-title" style="text-align: center;">Transgreciones</div>
                                </div>                                                           
                            </div>
                        </div> -->

                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <div class="widget widget-evento widget-item-icon" data-toggle="modal" data-target="#modal_incidentes" style="height: 85px;">
                                <div class="widget-item-left" style="padding: 16px 3px;">
                                    <span class="fa fa-exclamation-triangle"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count" style="line-height: 38px;">2</div>
                                    <div class="widget-title">Incidentes</div>
                                </div>                                                           
                            </div>
                        </div>

                        <!-- MODAL INCIDENTES -->
                        <div class="modal" id="modal_incidentes" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                        <h4 class="modal-title" id="largeModalHead">Incidentes</h4>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-actions">
                                                <thead>
                                                    <tr>
                                                        <th width="30">Nro</th>
                                                        <th>Descripcion</th>
                                                        <th width="70">Vehiculo</th>
                                                        <th width="100">Conductor</th>
                                                        <th width="120">Zona</th>
                                                        <th width="100">Fecha</th>
                                                        <th width="100">Hora</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                            
                                                    <tr id="trow_1">
                                                        <td class="text-center">1</td>
                                                        <td>Choque de vehiculos</td>
                                                        <td align="center">C6V-967</td>
                                                        <td align="center">Perez</td>
                                                        <td align="center">Km. 33</td>
                                                        <td align="center"><small>27/06/2016</small></td>
                                                        <td align="center"><small>12:00 a.m.</small></td>
                                                    </tr>
                                                    <tr id="trow_1">
                                                        <td class="text-center">2</td>
                                                        <td>Calentamiento de motor</td>
                                                        <td align="center">C5V-767</td>
                                                        <td align="center">Perez</td>
                                                        <td align="center">Km. 120</td>
                                                        <td align="center"><small>27/06/2016</small></td>
                                                        <td align="center"><small>13:50 a.m.</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> 


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>                        
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <!-- FIN MODAL INCIDENTES -->


                        <!-- onclick="RedireccionarPagina(0,'observacion');return false;" -->
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <div class="widget widget-evento widget-item-icon" data-toggle="modal" data-target="#modal_observacion" style="height: 85px;">
                                <div class="widget-item-left" style="padding: 16px 3px;">
                                    <span class="fa fa-paste"></span>
                                </div>
                                <div class="widget-data" >
                                    <div class="widget-int num-count" style="line-height: 38px;">1</div>
                                    <div class="widget-title">Obs. de Ruta</div>
                                </div>                                                           
                            </div>
                        </div>
                        <!-- MODAL OBSERVACIONES DE RUTA -->
                        <div class="modal" id="modal_observacion" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                        <h4 class="modal-title" id="largeModalHead">Observaciones de Ruta</h4>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-actions">
                                                <thead>
                                                    <tr>
                                                        <th width="30">Nro</th>
                                                        <!-- <th>Descripcion</th> -->
                                                        <th width="70">Vehiculo</th>
                                                        <th width="100">Conductor</th>
                                                        <th width="120">Velocidad</th>
                                                        <th>Razon</th>
                                                        <th width="100">Fecha</th>
                                                        <th width="100">Hora</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                            
                                                    <tr id="trow_1">
                                                        <td class="text-center">1</td>
                                                        <!-- <td>Choque de vehiculos</td> -->
                                                        <td align="center">C6V-967</td>
                                                        <td align="center">Perez</td>
                                                        <td align="center">50 Km/h</td>
                                                        <td>Exceso de velocidad sin permiso.</td>
                                                        <td align="center"><small>27/06/2016</small></td>
                                                        <td align="center"><small>12:00 a.m.</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> 


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>                        
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <!-- FIN MODAL OBSERVACIONES -->
                        
                        <!-- <div class="col-md-2 col-xs-6">
                            <div class="widget widget-evento widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">0</div>
                                    <div class="widget-title">eventorme General</div>
                                </div>                                                           
                            </div>
                        </div> -->
                        
                        <!-- <div class="col-md-2 col-sm-6 col-xs-6">
                            <div class="widget widget-evento widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-mobile"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">0</div>
                                    <div class="widget-title">Alcoholemia</div>
                                </div>                                                           
                            </div>
                        </div> -->

                    <!-- </div> -->
                    <!-- <div class="row scRow">
                        <div class="col-md-2 col-xs-6">                        
                            <a href="#" class="tile tile-default tile-valign">0
                                <div class="informer informer-default dir-tr"><span class="fa fa-exclamation-triangle"></span></div>
                                <div class="informer informer-default dir-bl">Incidentes</div>
                            </a>                                                    
                        </div>
                        <div class="col-md-2 col-xs-6">                        
                            <a href="#" class="tile tile-primary tile-valign">0
                                <div class="informer informer-default dir-tr"><span class="fa fa-paste"></span></div>
                                <div class="informer informer-default dir-bl">Observaciones de Ruta</div>
                            </a>                                                    
                        </div>
                        <div class="col-md-2 col-xs-6">                        
                            <a href="#" class="tile tile-info tile-valign">0
                                <div class="informer informer-default dir-tr"><span class="fa fa-ban"></span></div>
                                <div class="informer informer-default dir-bl">Transgreciones</div>
                            </a>                                                    
                        </div>
                        <div class="col-md-2 col-xs-6">                        
                            <a href="#" class="tile tile-success tile-valign">0
                                <div class="informer informer-default dir-tr"><span class="fa fa-clipboard"></span></div>
                                <div class="informer informer-default dir-bl">Informe General</div>
                            </a>                                                    
                        </div>
                        <div class="col-md-2 col-xs-6">                        
                            <a href="#" class="tile tile-warning tile-valign">0
                                <div class="informer informer-default dir-tr"><span class="fa fa-camera"></span></div>
                                <div class="informer informer-default dir-bl">Fatigas</div>
                            </a>                                                    
                        </div>
                        <div class="col-md-2 col-xs-6">                        
                            <a href="#" class="tile tile-danger tile-valign">0
                                <div class="informer informer-default dir-tr"><span class="fa fa-mobile"></span></div>
                                <div class="informer informer-default dir-bl">Alcoholemia</div>
                            </a>                                                    
                        </div>
                    </div> -->
                    <!-- END WIDGETS -->


                    <!-- PAGE TITLE -->
                    <!-- <div class="page-title">                    
                        <h2><span class="fa fa-info-circle"></span> Informaci&oacute;n</h2>
                    </div> -->
                    <!-- END PAGE TITLE -->   

                	<!-- <div class="row scRow"> -->
                        <div class="col-md-4 col-sm-6  scCol">

                            <div class="panel panel-info" id="grid_block_5">
                                <div class="panel-heading">                                        
                                    <h3 class="panel-title">Hora de Inicio</h3>
                                </div>
                                <div class="panel-body">
                                    27/06/2016 - 12:00 a.m.
                                </div>
                            </div>                        

                        </div>

                        <div class="col-md-4 col-sm-6  scCol">

                            <div class="panel panel-info" id="grid_block_5">
                                <div class="panel-heading">                                        
                                    <h3 class="panel-title">Hora de Llegada Estimada</h3>
                                </div>
                                <div class="panel-body">
                                    27/06/2016 - 18:00 p.m.
                                </div>
                            </div>                        

                        </div>
                    </div>
                    <div class="row scRow">
                        <div class="col-md-12 scCol">

                            <div class="panel panel-info" id="grid_block_5">
                                <div class="panel-heading">                                        
                                    <h3 class="panel-title">Ubicaci&oacute;n Actual</h3>
                                </div>
                                <div class="panel-body">
                                    Chalhuahuacho
                                </div>
                            </div>                        

                        </div>
                    </div>
                    <!-- <div class="row scRow">
                        <div class="col-md-12 scCol">

                            <div class="panel panel-info" id="grid_block_5">
                                <div class="panel-heading">                                        
                                    <h3 class="panel-title">Descripci&oacute;n</h3>
                                </div>
                                <div class="panel-body">
                                    Parada en el Km 3, por cambio de neumático en unidad C6V-967 (805).
                                </div>
                            </div>                        

                        </div>

                    </div> -->

                

                    <!-- PAGE TITLE -->
                    <div class="page-title">                    
                        <h2><span class="fa fa-file-text"></span> Reporte Observaciones</h2>
                    </div>
                    <!-- END PAGE TITLE -->  


                    <div class="row scRow">
                        <div class="col-md-12 scCol">

                            <div class="panel panel-success">
                                <div class="panel-heading">                                        
                                    <h3 class="panel-title">Historial de Observaciones</h3>
                                </div>
                                <div class="panel-body">
                                    
                                    <div >
                                        <table class="table table-bordered table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="30">Nro</th>
                                                    <th>Descripción</th>
                                                    <th width="100">Operador</th>
                                                    <th width="70">Hora</th>
                                                    <!-- <th width="70">Estado</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                <tr id="trow_1">
                                                    <td class="text-center">1</td>
                                                    <td>Control alto de velocidad</td>
                                                    <td class="text-center"><small>Flores Cotrado</small></td>
                                                    <td class="text-center"><small>10:00am</small></td>
                                                    <!-- <td align="center"><span class="label label-success">Correcto</span></td> -->

                                                </tr>
                                                <tr id="trow_2">
                                                    <td class="text-center">2</td>
                                                    <td>Demora en cambio de choferes</td>
                                                    <td class="text-center"><small>Flores Cotrado</small></td>
                                                    <td class="text-center"><small>10:34am</small></td>
                                                    <!-- <td align="center"><span class="label label-success">Correcto</span></td> -->
                                                    
                                                </tr>
                                                <tr id="trow_3">
                                                    <td class="text-center">3</td>                                                    
                                                    <td>Convoys con problemas por incidente en carretera. Bus C6V-967 afectado</td>
                                                    <td class="text-center"><small>Flores Cotrado</small></td>
                                                    <td class="text-center"><small>11:05am</small></td>
                                                    <!-- <td align="center"><span class="label label-danger">Alerta</span></td> -->
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> 

                                </div>
                            </div>                        

                        </div>

                    </div>



                    <!-- PAGE TITLE -->
                    <div class="page-title">                    
                        <h2><span class="fa fa-list"></span> Ploteo</h2>
                    </div>
                    <!-- END PAGE TITLE -->

                    <div class="row">

                        <div class="col-md-12">
                            <!-- START ACCORDION -->        
                            <div class="panel-group accordion">

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#ploteo01">
                                                <strong>
                                                    <table border="0">
                                                        <thead>
                                                            <tr>
                                                                <th width="400">ESCOLTA APERTURA</th>
                                                                <th width="200">AFJ-887</th>
                                                                <th width="200">(857)</th>
                                                            </tr>
                                                        </thead>                                                    
                                                    </table>
                                                </strong>
                                                <!-- <strong>ESCOLTA APERTURA</strong>&nbsp;&nbsp;&nbsp;&nbsp;AFJ-887 (857) -->
                                            </a>
                                            <!-- <span class="fa fa-envelope"></span> -->
                                        </h4>
                                    </div>                               
                                    <div class="panel-body" id="ploteo01">                                    
                                    	<div class="table-responsive">
                                            <table class="table table-bordered table-striped table-actions">
                                                <thead>
                                                    <tr>
                                                        <th width="50">Nro</th>
                                                        <th>Nombre</th>
                                                        <th width="100">Alcoholemia</th>
                                                        <th width="100">Tipo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                            
                                                    <tr id="trow_1">
                                                        <td class="text-center">1</td>
                                                        <td><strong>Juan Perez</strong></td>
                                                        <td align="center"><span class="label label-success">Negativo</span></td>
                                                        <td align="center"><span class="label label-info">Conductor</span></td>
                                                    </tr>
                                                    <tr id="trow_2">
                                                        <td class="text-center">2</td>
                                                        <td><strong>Juan Perez</strong></td>
                                                        <td align="center"><span class="label label-success">Negativo</span></td>
                                                        <td align="center"><span class="label label-info">Conductor</span></td>
                                                    </tr>
                                                    <tr id="trow_3">
                                                        <td class="text-center">3</td>
                                                        <td><strong>Juan Perez</strong></td>
                                                        <td align="center"><span class="label label-success">Negativo</span></td>
                                                        <td align="center"><span class="label label-info">Conductor</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>  
                                    </div>                                
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#ploteo02">
                                                <strong>
                                                    <table border="0">
                                                        <thead>
                                                            <tr>
                                                                <th width="400">ESCOLTA CIERRE</th>
                                                                <th width="200">AJW-754</th>
                                                                <th width="200">(862)</th>
                                                            </tr>
                                                        </thead>                                                    
                                                    </table>
                                                </strong>
                                                <!-- <strong>ESCOLTA CIERRE</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AJW-754 (862) -->
                                            </a>
                                        </h4>
                                    </div>                                
                                    <div class="panel-body" id="ploteo02">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-actions">
                                                <thead>
                                                    <tr>
                                                        <th width="50">Nro</th>
                                                        <th>Nombre</th>
                                                        <th width="100">Alcoholemia</th>
                                                        <th width="100">Tipo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                            
                                                    <tr id="trow_1">
                                                        <td class="text-center">1</td>
                                                        <td><strong>Juan Perez</strong></td>
                                                        <td align="center"><span class="label label-success">Negativo</span></td>
                                                        <td align="center"><span class="label label-info">Conductor</span></td>
                                                    </tr>
                                                    <tr id="trow_2">
                                                        <td class="text-center">2</td>
                                                        <td><strong>Juan Perez</strong></td>
                                                        <td align="center"><span class="label label-success">Negativo</span></td>
                                                        <td align="center"><span class="label label-info">Conductor</span></td>
                                                    </tr>
                                                    <tr id="trow_3">
                                                        <td class="text-center">3</td>
                                                        <td><strong>Juan Perez</strong></td>
                                                        <td align="center"><span class="label label-success">Negativo</span></td>
                                                        <td align="center"><span class="label label-info">Conductor</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>  
                                    </div>                                
                                </div>
                            </div>
                            <!-- END ACCORDION -->                        
                        </div>

                    </div>



                    <!-- PAGE TITLE -->
                    <div class="page-title">                    
                        <h2><span class="fa fa-truck"></span> Buses</h2>
                    </div>
                    <!-- END PAGE TITLE -->

                    <div class="row">

                        <div class="col-md-12">
                            <!-- START ACCORDION -->        
                            <div class="panel-group accordion">

                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#bus01">
                                                <strong>
                                                    <table border="0">
                                                        <thead>
                                                            <tr>
                                                                <th width="400">C6V-967</th>
                                                                <th width="200">805</th>
                                                                <th width="200">9X5</th>
                                                            </tr>
                                                        </thead>                                                    
                                                    </table>
                                                </strong>
                                                <!-- <strong>C6V-967</strong>&nbsp;&nbsp;&nbsp;&nbsp;805&nbsp;&nbsp;&nbsp;&nbsp;9X5 -->
                                            </a>
                                            <!-- <span class="fa fa-envelope"></span> -->
                                        </h4>
                                    </div>                               
                                    <div class="panel-body" id="bus01">

                                        <div class="row">

                                            <div class="col-md-3">


                                                <div class="col-md-12 col-sm-6 col-xs-6">
                                                    <div class="widget widget-evento_numero widget-item-icon" style="cursor: default;">
                                                        <div class="widget-data" style="padding-left: 0px;">
                                                            <div class="widget-int num-count" style="text-align: center;">27</div>
                                                            <div class="widget-title" style="text-align: center;">Fatigas</div>
                                                        </div>                                                           
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-6 col-xs-6">
                                                    <div class="widget widget-evento_numero widget-item-icon" style="cursor: default;">
                                                        <div class="widget-data" style="padding-left: 0px;">
                                                            <div class="widget-int num-count" style="text-align: center;">3</div>
                                                            <div class="widget-title" style="text-align: center;">Transgreciones</div>
                                                        </div>                                                           
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-9">

                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-actions">
                                                        <thead>
                                                            <tr>
                                                                <th width="50">Nro</th>
                                                                <th>Nombre</th>
                                                                <th width="100">Alcoholemia</th>
                                                                <th width="100">Tipo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>                                            
                                                            <tr id="trow_1">
                                                                <td class="text-center">1</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                            <tr id="trow_2">
                                                                <td class="text-center">2</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                            <tr id="trow_3">
                                                                <td class="text-center">3</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                        </div>

                                        	  
                                    </div>                                
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#bus02">
                                                <strong>
                                                    <table border="0">
                                                        <thead>
                                                            <tr>
                                                                <th width="400">C5Z-967</th>
                                                                <th width="200">814</th>
                                                                <th width="200">9X5</th>
                                                            </tr>
                                                        </thead>                                                    
                                                    </table>
                                                </strong>
                                                <!-- <strong>C5Z-967</strong>&nbsp;&nbsp;&nbsp;&nbsp;814&nbsp;&nbsp;&nbsp;&nbsp;9X5 -->
                                            </a>
                                            <!-- <span class="fa fa-envelope"></span> -->
                                        </h4>
                                    </div>                               
                                    <div class="panel-body" id="bus02">                                    
                                    	<div class="row">

                                            <div class="col-md-3">


                                                <div class="col-md-12 col-sm-6 col-xs-6">
                                                    <div class="widget widget-evento_numero widget-item-icon" style="cursor: default;">
                                                        <div class="widget-data" style="padding-left: 0px;">
                                                            <div class="widget-int num-count" style="text-align: center;">29</div>
                                                            <div class="widget-title" style="text-align: center;">Fatigas</div>
                                                        </div>                                                           
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-6 col-xs-6">
                                                    <div class="widget widget-evento_numero widget-item-icon" style="cursor: default;">
                                                        <div class="widget-data" style="padding-left: 0px;">
                                                            <div class="widget-int num-count" style="text-align: center;">11</div>
                                                            <div class="widget-title" style="text-align: center;">Transgreciones</div>
                                                        </div>                                                           
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-9">

                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-actions">
                                                        <thead>
                                                            <tr>
                                                                <th width="50">Nro</th>
                                                                <th>Nombre</th>
                                                                <th width="100">Alcoholemia</th>
                                                                <th width="100">Tipo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>                                            
                                                            <tr id="trow_1">
                                                                <td class="text-center">1</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                            <tr id="trow_2">
                                                                <td class="text-center">2</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                            <tr id="trow_3">
                                                                <td class="text-center">3</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                        </div>  
                                    </div>                                
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#bus03">
                                                <strong>
                                                    <table border="0">
                                                        <thead>
                                                            <tr>
                                                                <th width="400">C5Z-966</th>
                                                                <th width="200">816</th>
                                                                <th width="200">9X5</th>
                                                            </tr>
                                                        </thead>                                                    
                                                    </table>
                                                </strong>
                                                <!-- <strong>C5Z-966</strong>&nbsp;&nbsp;&nbsp;&nbsp;816&nbsp;&nbsp;&nbsp;&nbsp;9X5 -->
                                            </a>
                                            <!-- <span class="fa fa-envelope"></span> -->
                                        </h4>
                                    </div>                               
                                    <div class="panel-body" id="bus03">                                    
                                    	<div class="row">

                                            <div class="col-md-3">


                                                <div class="col-md-12 col-sm-6 col-xs-6">
                                                    <div class="widget widget-evento_numero widget-item-icon" style="cursor: default;">
                                                        <div class="widget-data" style="padding-left: 0px;">
                                                            <div class="widget-int num-count" style="text-align: center;">23</div>
                                                            <div class="widget-title" style="text-align: center;">Fatigas</div>
                                                        </div>                                                           
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-6 col-xs-6">
                                                    <div class="widget widget-evento_numero widget-item-icon" style="cursor: default;">
                                                        <div class="widget-data" style="padding-left: 0px;">
                                                            <div class="widget-int num-count" style="text-align: center;">17</div>
                                                            <div class="widget-title" style="text-align: center;">Transgreciones</div>
                                                        </div>                                                           
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-9">

                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-actions">
                                                        <thead>
                                                            <tr>
                                                                <th width="50">Nro</th>
                                                                <th>Nombre</th>
                                                                <th width="100">Alcoholemia</th>
                                                                <th width="100">Tipo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>                                            
                                                            <tr id="trow_1">
                                                                <td class="text-center">1</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                            <tr id="trow_2">
                                                                <td class="text-center">2</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                            <tr id="trow_3">
                                                                <td class="text-center">3</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                        </div>  
                                    </div>                                
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#bus04">
                                                <strong>
                                                    <table border="0">
                                                        <thead>
                                                            <tr>
                                                                <th width="400">C6W-957</th>
                                                                <th width="200">819</th>
                                                                <th width="200">9X5</th>
                                                            </tr>
                                                        </thead>                                                    
                                                    </table>
                                                </strong>
                                                <!-- <strong>C6W-957</strong>&nbsp;&nbsp;&nbsp;&nbsp;819&nbsp;&nbsp;&nbsp;&nbsp;9X5 -->
                                            </a>
                                            <!-- <span class="fa fa-envelope"></span> -->
                                        </h4>
                                    </div>                               
                                    <div class="panel-body" id="bus04">                                    
                                    	<div class="row">

                                            <div class="col-md-3">


                                                <div class="col-md-12 col-sm-6 col-xs-6">
                                                    <div class="widget widget-evento_numero widget-item-icon" style="cursor: default;">
                                                        <div class="widget-data" style="padding-left: 0px;">
                                                            <div class="widget-int num-count" style="text-align: center;">37</div>
                                                            <div class="widget-title" style="text-align: center;">Fatigas</div>
                                                        </div>                                                           
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-6 col-xs-6">
                                                    <div class="widget widget-evento_numero widget-item-icon" style="cursor: default;">
                                                        <div class="widget-data" style="padding-left: 0px;">
                                                            <div class="widget-int num-count" style="text-align: center;">22</div>
                                                            <div class="widget-title" style="text-align: center;">Transgreciones</div>
                                                        </div>                                                           
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-9">

                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-actions">
                                                        <thead>
                                                            <tr>
                                                                <th width="50">Nro</th>
                                                                <th>Nombre</th>
                                                                <th width="100">Alcoholemia</th>
                                                                <th width="100">Tipo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>                                            
                                                            <tr id="trow_1">
                                                                <td class="text-center">1</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                            <tr id="trow_2">
                                                                <td class="text-center">2</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                            <tr id="trow_3">
                                                                <td class="text-center">3</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                        </div> 
                                    </div>                                
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#bus05">
                                                <strong>
                                                    <table border="0">
                                                        <thead>
                                                            <tr>
                                                                <th width="400">C8H-952</th>
                                                                <th width="200">822</th>
                                                                <th width="200">9X5</th>
                                                            </tr>
                                                        </thead>                                                    
                                                    </table>
                                                </strong>
                                                <!-- <strong>C8H-952</strong>&nbsp;&nbsp;&nbsp;&nbsp;822&nbsp;&nbsp;&nbsp;&nbsp;9X5 -->
                                            </a>
                                            <!-- <span class="fa fa-envelope"></span> -->
                                        </h4>
                                    </div>                               
                                    <div class="panel-body" id="bus05">                                    
                                    	<div class="row">

                                            <div class="col-md-3">


                                                <div class="col-md-12 col-sm-6 col-xs-6">
                                                    <div class="widget widget-evento_numero widget-item-icon" style="cursor: default;">
                                                        <div class="widget-data" style="padding-left: 0px;">
                                                            <div class="widget-int num-count" style="text-align: center;">17</div>
                                                            <div class="widget-title" style="text-align: center;">Fatigas</div>
                                                        </div>                                                           
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-6 col-xs-6">
                                                    <div class="widget widget-evento_numero widget-item-icon" style="cursor: default;">
                                                        <div class="widget-data" style="padding-left: 0px;">
                                                            <div class="widget-int num-count" style="text-align: center;">23</div>
                                                            <div class="widget-title" style="text-align: center;">Transgreciones</div>
                                                        </div>                                                           
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-9">

                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-actions">
                                                        <thead>
                                                            <tr>
                                                                <th width="50">Nro</th>
                                                                <th>Nombre</th>
                                                                <th width="100">Alcoholemia</th>
                                                                <th width="100">Tipo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>                                            
                                                            <tr id="trow_1">
                                                                <td class="text-center">1</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                            <tr id="trow_2">
                                                                <td class="text-center">2</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                            <tr id="trow_3">
                                                                <td class="text-center">3</td>
                                                                <td><strong>Juan Perez</strong></td>
                                                                <td align="center"><span class="label label-success">Negativo</span></td>
                                                                <td align="center"><span class="label label-info">Conductor</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                        </div> 
                                    </div>                                
                                </div>
                            </div>
                            <!-- END ACCORDION -->                        
                        </div>
                    </div>



                </div>


                <script>
                    function RedireccionarPagina(id_convoy,evento) {
                        $(location).attr('href','<?php echo base_url(); ?>convoy/'+evento.toString());
                    }

                </script>     