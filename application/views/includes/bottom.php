            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Cerrar <strong>sesi&oacute;n</strong> ?</div>
                    <div class="mb-content">
                        <p>Seguro que desea cerrar sesi&oacute;n?</p>                    
                        <!-- <p>Press No if youwant to continue work. Press Yes to logout current user.</p> -->
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>login" class="btn btn-success btn-lg">Si</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
            
        
    <!-- START SCRIPTS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/tableexport/tableExport.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/tableexport/jquery.base64.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/tableexport/html2canvas.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/tableexport/jspdf/jspdf.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/tableexport/jspdf/libs/base64.js"></script>
        
        
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/rickshaw/rickshaw.min.js"></script>           
        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/daterangepicker/daterangepicker.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>

        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>recursos/js/plugins/jvectormap/jquery-jvectormap-us-aea-en.js'></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/settings.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/actions.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>recursos/js/demo_maps.js"></script>
        
        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->   

        <script>
            $(function(){

                var isMobile = {
                    Android: function() {
                        return navigator.userAgent.match(/Android/i);
                    },
                    BlackBerry: function() {
                        return navigator.userAgent.match(/BlackBerry/i);
                    },
                    iOS: function() {
                        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                    },
                    Opera: function() {
                        return navigator.userAgent.match(/Opera Mini/i);
                    },
                    Windows: function() {
                        return navigator.userAgent.match(/IEMobile/i);
                    },
                };

                if (isMobile.Android()){
                    // $('#btn_convoys').css( "display", "none" ); 
                    $('.dataTables_length').css( "display", "none" );
                    $('.dataTables_filter').css( "display", "none" );                    
                 // alert("Android");
                }
                else if (isMobile.BlackBerry()){
                    // $('#btn_convoys').css( "display", "none" );
                    $('.dataTables_length').css( "display", "none" );
                    $('.dataTables_filter').css( "display", "none" );
                 // alert("BlackBerry");
                }
                else if (isMobile.iOS()){
                    // $('#btn_convoys').css( "display", "none" );
                    $('.dataTables_length').css( "display", "none" );
                    $('.dataTables_filter').css( "display", "none" );
                 // alert("Iphone");
                }
                else if (isMobile.Opera()){
                    // $('#btn_convoys').css( "display", "none" );
                    $('.dataTables_length').css( "display", "none" );
                    $('.dataTables_filter').css( "display", "none" );
                 // alert("Opera");
                }
                else if (isMobile.Windows()){
                    // $('#btn_convoys').css( "display", "none" );
                    $('.dataTables_length').css( "display", "none" );
                    $('.dataTables_filter').css( "display", "none" );
                 // alert("IEMobile");
                }
                else{                
                 // alert("Default");
                }
            });
        </script>

    </body>
</html>






