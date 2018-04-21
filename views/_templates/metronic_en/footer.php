<!-- BEGIN FOOTER -->
<?php $themefolder="metronic_en/" ?>


		<?php
		// ---------------------------------------------- EDIT SECTION ------------------------------------------------------- 
		r_theme_row_start() ; 	
		r_theme_section_start(12,array("id"=>"quick_add_section","attributes"=>array('class'=>'modal transparent container hide' )));
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
		r_theme_section_end();
		r_theme_row_end() ;	
		?>
		

		<div class="row-fluid">
		<div class="span12">
		
			<div id="select_box" class="modal container hide fade" tabindex="-1">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h3>Full Width</h3>
				</div>
				<div class="modal-body">
					<p>This modal will resize itself to the same dimensions as the container class.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin ipsum ac ante fermentum suscipit. In ac augue non purus accumsan lobortis id sed nibh. Nunc egestas hendrerit ipsum, et porttitor augue volutpat non. Aliquam erat volutpat. Vestibulum scelerisque lobortis pulvinar. Aenean hendrerit risus neque, eget tincidunt leo. Vestibulum est tortor, commodo nec cursus nec, vestibulum vel nibh. Morbi elit magna, ornare placerat euismod semper, dignissim vel odio. Phasellus elementum quam eu ipsum euismod pretium.</p>
				</div>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn">Close</button>
					<button type="button" class="btn green">Save changes</button>
				</div>
			</div>
			
			<div id="delete_message_box" class="modal container hide fade" tabindex="-1">
				
			</div>
		
		</div>
		</div>
		
		
		</div>		
	</div>	

<div class="footer hide_with_menu" >
		<div class="footer-inner " >
	 <span id="session_timer" align="center" style="background-color:#202020;color:white;font-size:14px;font-weight:bold;:50px;padxding:20px;"></span>	    
			- &copy; 2017 | <a href="http://www.resalasolutions.com"  target="_blank" ><span  class="arabic_font"></span><img src="<?php echo base_url();?>/resalasystems.png" width="110" > </a>
		</div>

		<span class="hide" id="processing" style="color:white;" name="processing">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<?php	
						$loafing_message= "<span class='master_font' >جاري تنفيذ الامر</span><img align='center' width='200px;' src='".base_url("loading_bar.gif")."'>" ; 
						echo $loafing_message ; 
						?>
						</span>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/excanvas.min.js"></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
	
	
	
	
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/plugins/select2/select2.js"></script>
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/plugins/data-tables/jquery.dataTables.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/pages/scripts/table-datatables-scroller.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/pages/scripts/dataTables.fixedColumns.min.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/plugins/data-tables/DT_bootstrap.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   


	<!-- END PAGE LEVEL PLUGINS -->
	

	<!-- END PAGE LEVEL SCRIPTS -->

	
	<script src="<?php echo base_url($themefolder);?>/assets/scripts/app.js"></script>      
	<script src="<?php echo base_url($themefolder);?>/assets/scripts/form-validation.js"></script> 
	<script src="<?php echo base_url($themefolder);?>/assets/scripts/form-components.js"></script> 
	<script src="<?php echo base_url($themefolder);?>/assets/scripts/table-managed.js"></script>
	
	
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-daterangepicker/date.js"></script>  
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 

	<script src="<?php echo base_url($themefolder);?>/assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
	
	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="<?php echo base_url($themefolder);?>/assets/plugins/flot/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/flot/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/flot/jquery.flot.crosshair.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url($themefolder);?>/assets/scripts/ui-modals.js"></script>    
	<script type="text/javascript" src="<?php echo base_url($themefolder);?>/assets/scripts/table-editable.js"></script> 

	<?php 
  	$this->load->view("_general/footer_scripts") ;
	?>     
	<!-- END PAGE LEVEL PLUGINS -->
	
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>