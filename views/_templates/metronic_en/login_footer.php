<!-- BEGIN FOOTER -->
<?php $themefolder="metronic_en/" ?>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="<?php echo base_url($themefolder);?>/assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap/js/bootstrap-rtl.min.js" type="text/javascript"></script>
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
	<script src="<?php echo base_url($themefolder);?>/assets/scripts/app.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>