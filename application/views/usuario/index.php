                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Inicio</a></li>                    
                    <li class="active">Usuarios</li>
                </ul>
                <!-- END BREADCRUMB --> 


                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-truck"></span> Mantenenimiento de Usuarios</h2>
                </div>
                <!-- END PAGE TITLE -->



                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Listado de Usuarios</strong></h3>                                  
                                    
                                </div>
                                <div class="panel-body ">
                                    <div class="table-responsive">
                                    <table id="table_usuarios" align="center" id="customers2" class="table datatable" style="margin-top: 3px; margin-bottom: 5px;">
                                        <thead>
                                            <tr>
                                                <th width="3%">Nro</th>
                                                <th width="20%">DNI</th>
                                                <th width="35%">Apellidos</th>
                                                <th width="15%">Tipo</th>
                                                <th width="10%">Estado</th>                                                
                                                <th width="17%">Detalle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td align="center">11111111</td>
                                                <td>Finn Camacho</td>
                                                <td align="center">Administrador</td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-success btn-xs">Activo</button>
                                                </td>
                                                <td align="center">
                                                    <a href="<?php echo base_url(); ?>usuario/info" class="btn btn-xs btn-primary">Ver</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td align="center">45874596</td>
                                                <td>Zenaida Frank</td>
                                                <td align="center">Operario</td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-success btn-xs">Activo</button>
                                                </td>
                                                <td align="center">
                                                    <a href="<?php echo base_url(); ?>usuario/info" class="btn btn-xs btn-primary">Ver</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td align="center">54741256</td>
                                                <td>Zorita Serrano</td>
                                                <td align="center">Ingeniero</td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-success btn-xs">Activo</button>
                                                </td>
                                                <td align="center">
                                                    <a href="<?php echo base_url(); ?>usuario/info" class="btn btn-xs btn-primary">Ver</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td align="center">85474125</td>
                                                <td>Jennifer Acosta</td>
                                                <td align="center">Ingeniero</td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-danger btn-xs">Inactivo</button>
                                                </td>
                                                <td align="center">
                                                    <a href="<?php echo base_url(); ?>usuario/info" class="btn btn-xs btn-primary">Ver</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td align="center">14525635</td>
                                                <td>Hermione Butler</td>
                                                <td align="center">Ingeniero</td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-success btn-xs">Activo</button>
                                                </td>
                                                <td align="center">
                                                    <a href="<?php echo base_url(); ?>usuario/info" class="btn btn-xs btn-primary">Ver</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td align="center">86547441</td>
                                                <td>Jonas Alexander</td>
                                                <td align="center">Operario</td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-success btn-xs">Activo</button>
                                                </td>
                                                <td align="center">
                                                    <a href="<?php echo base_url(); ?>usuario/info" class="btn btn-xs btn-primary">Ver</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>                                    
                                    </div>
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            
                            

                        </div>
                    </div>

                </div>         
                <!-- END PAGE CONTENT WRAPPER -->