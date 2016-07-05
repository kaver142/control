

 				<!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>dashboard">Inicio</a></li>                    
                    <li class="active">Informacion Usuario</li>
                </ul>
                <!-- END BREADCRUMB -->  
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">

                        <div class="col-md-6">
                            
                            <form class="form-horizontal">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                	<h3 class="panel-title"><span class="fa fa-info-circle"></span> Informacion del Usuario</h3>    
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">DNI</label>
                                                <div class="col-md-5">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-file-text"></span></span>
                                                        <input type="text" class="form-control"/>
                                                    </div>                                            
                                                    <!-- <span class="help-block">Documento de Identidad</span> -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nombres</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/>
                                                    </div>                                            
                                                    <!-- <span class="help-block">Campo de Nombres completos</span> -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Apellidos</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control"/>
                                                    </div>                                            
                                                    <!-- <span class="help-block">Campo de Apellidos completos</span> -->
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">E-mail</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                        <input type="text" class="form-control"/>
                                                    </div>                                            
                                                    <!-- <span class="help-block">Correo corporativo o personal</span> -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">E-mail(Opcional)</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-envelope-o"></span></span>
                                                        <input type="text" class="form-control"/>
                                                    </div>                                            
                                                    <!-- <span class="help-block">Correo electronico opcional</span> -->
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Estado</label>
                                                <div class="col-md-3">                                            
 
                                                    <select class="form-control select">
		                                                <option selected="selected">Habilitado</option>
		                                                <option>Inhabilitado</option>
		                                            </select>                                           
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tipo Usuario</label>
                                                <div class="col-md-5">                                            
                                                    <select class="form-control select">
		                                                <option selected="selected">Administrador</option>
		                                                <option>Operario</option>
		                                            </select>   
                                                </div>
                                            </div>

                                            <!-- <div class="form-group">
                                                <label class="col-md-3 control-label">Grupo</label>
                                                <div class="col-md-9">                                            
                                                    <select class="form-control select">
		                                                <option selected="selected">Administrador</option>
		                                                <option>Palomino</option>
		                                            </select> 
                                                </div>
                                            </div> -->

                                            <!-- <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Password</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                        <input type="password" class="form-control"/>
                                                    </div>            
                                                    <span class="help-block">Password field sample</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Textarea</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5"></textarea>
                                                    <span class="help-block">Default textarea field</span>
                                                </div>
                                            </div>
                                             -->
                                            
                                        </div>


                                        <!-- <div class="col-md-6">
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Datepicker</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" value="2014-11-01">                                            
                                                    </div>
                                                    <span class="help-block">Click on input field to get datepicker</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tags</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="tagsinput" value="First,Second,Third"/>
                                                    <span class="help-block">Default textarea field</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Select</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                    </select>
                                                    <span class="help-block">Select box example</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Checkbox</label>
                                                <div class="col-md-9">                                                                                                                                        
                                                    <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> Checkbox title</label>
                                                    <span class="help-block">Checkbox sample, easy to use</span>
                                                </div>
                                            </div>
                                            
                                        </div> -->
                                        
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <!-- <button class="btn btn-default">Clear Form</button>                                     -->
                                    <button class="btn btn-primary pull-right">Guardar</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>


                        <!-- FORMULARIO DE RESETEO DE CONTRASEÑA -->

                        <div class="col-md-6">
                            
                            <form class="form-horizontal">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                	<h3 class="panel-title"><span class="fa fa-unlock"></span> Restablecer Contraseña</h3>    
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Contraseña Anterior</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                        <input type="password" class="form-control"/>
                                                    </div>            
                                                    <span class="help-block">Escribir contraseña actual</span>
                                                </div>
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Nueva Contraseña</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                        <input type="password" class="form-control"/>
                                                    </div>            
                                                    <span class="help-block">Nueva contraseña. Minimo 8 caracteres</span>
                                                </div>
                                            </div>
 
                                            
                                        </div>

                                        
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <!-- <button class="btn btn-default">Clear Form</button>                                     -->
                                    <button class="btn btn-danger pull-right">Restablecer</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>

                        <!-- FIN DE FORMULARIO -->
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER --> 