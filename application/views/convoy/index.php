                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Inicio</a></li>                    
                    <li class="active">Convoys</li>
                </ul>
                <!-- END BREADCRUMB --> 


                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-truck"></span> Historial de Convoys</h2>
                </div>
                <!-- END PAGE TITLE -->



                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    
                    <!-- <div class="row">
                        <div class="col-md-12">
                            
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Filtro de Busquedas</strong></h3>             
                                </div>
                                <div class="panel-body">
                                    <form id="jvalidate" role="form" class="form-horizontal" action="javascript:alert('validado2');">
                                        <div class="row">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->


                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Listado de Convoys</strong></h3>
                                    <!-- <div class="btn-group pull-right">
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false'});"><img src='<?php echo base_url(); ?>recursos/img/icons/json.png' width="24"/> JSON</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src='<?php echo base_url(); ?>recursos/img/icons/json.png' width="24"/> JSON (ignoreColumn)</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'true'});"><img src='<?php echo base_url(); ?>recursos/img/icons/json.png' width="24"/> JSON (with Escape)</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'xml',escape:'false'});"><img src='<?php echo base_url(); ?>recursos/img/icons/xml.png' width="24"/> XML</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'sql'});"><img src='<?php echo base_url(); ?>recursos/img/icons/sql.png' width="24"/> SQL</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo base_url(); ?>recursos/img/icons/csv.png' width="24"/> CSV</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo base_url(); ?>recursos/img/icons/txt.png' width="24"/> TXT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo base_url(); ?>recursos/img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo base_url(); ?>recursos/img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo base_url(); ?>recursos/img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo base_url(); ?>recursos/img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo base_url(); ?>recursos/img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>  -->                                   
                                    
                                </div>
                                <div class="panel-body ">
                                    <div class="table-responsive">
                                    <table id="table_convoys" align="center" id="customers2" class="table datatable" style="margin-top: 3px; margin-bottom: 5px;">
                                        <thead>
                                            <tr>
                                                <th width="3%">Nro</th>
                                                <th width="20%">Destino</th>
                                                <th width="25%">H. Inicio</th>
                                                <th width="25%">H. LLegada</th>
                                                <th width="10%">Nro Vehiculos</th>
                                                <th width="18%">Detalle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>LBB-CSZ</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>13</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>AQP-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>2</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>CSZ-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>12</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>CSZ-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>22</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>LBB-CSZ</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>13</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>AQP-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>2</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>CSZ-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>12</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>CSZ-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>22</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>LBB-CSZ</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>13</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>AQP-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>2</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>CSZ-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>12</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>CSZ-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>22</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>LBB-CSZ</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>13</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>AQP-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>2</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>CSZ-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>12</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>CSZ-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>22</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>LBB-CSZ</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>13</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>AQP-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>2</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>CSZ-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>12</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>CSZ-LBB</td>
                                                <td>2012/03/29</td>
                                                <td>2012/03/29</td>
                                                <td>22</td>
                                                <td align="left">
                                                    <a href="<?php echo base_url(); ?>convoy/info" class="btn btn-xs btn-primary"><span class="fa fa-info"></span> Info</a>
                                                    <!-- <a href="#" class="btn btn-xs btn-info"><span class="fa fa-file-o"></span> Inf. Gerencial</a> -->
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