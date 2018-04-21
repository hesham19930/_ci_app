<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<?php $themefolder="metronic_en/" ?>
	<?php $this->session->set_userdata($this->admin_public->DATA["system_id"].'_last_url', current_url()); ?> 
	<title><?php echo $this->admin_public->DATA["system_name"] ; ?> : <?php echo $page_title ; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" value="<?php //echo $page_description ; ?>" />
	<meta content="" name="author" value "<?php echo 'resala-solutions.com' ; ?>"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<!--<link href="<?php echo base_url($themefolder);?>/theme_fonts.css" rel="stylesheet" type="text/css"/>-->
	<link href="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>	<link href="<?php echo base_url($themefolder);?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url($themefolder);?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url($themefolder);?>/assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url($themefolder);?>/assets/css/profile.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url($themefolder);?>/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url($themefolder);?>/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url($themefolder);?>/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	
	<link href="<?php echo base_url($themefolder);?>/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/clockface/css/clockface.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-datepicker/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />

	
	<link href="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url($themefolder);?>/assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/jquery-tags-input/jquery.tagsinput.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/jquery-multi-select/css/multi-select-metro.css" />

	<link rel="stylesheet" href="<?php echo base_url($themefolder);?>/assets/plugins/data-tables/DT_bootstrap.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder);?>/assets/plugins/chosen-bootstrap/chosen/chosen.css" />
	

	<!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="<?php echo base_url('gl.ico') ; ?>" > 

	
	<style type="text/css" media="screen">
	    .transparent { 
	    	background:transparent ;	  
	    	border: none;
	    	
	    	}
	    
	    input.ui-select {
    	width: 500px;}
		</style>
		
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-footer-fixed page-full-width" dir="ltr" >
	<!-- BEGIN HEADER -->   

	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a xclass="brand" href="#" target="_blank">
				<ximg src="<?php echo base_url('admin_logo_.png') ?>" alt="logo" xwidth="120" />
				</a>
				<!-- END LOGO -->
				<!-- BEGIN HORIZANTAL MENU -->
				<div class="navbar hor-menu hidden-phone hidden-tablet">
					<div class="navbar-inner">
						<ul class="nav">
							<li class="visible-phone visible-tablet">
								<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
								<!--<form class="sidebar-search">
									<div class="input-box">
										<a href="javascript:;" class="remove"></a>
										<input type="text" placeholder="Search..." />            
										<input type="button" class="submit" value=" " />
									</div>
								</form>
							-->
								<!-- END RESPONSIVE QUICK SEARCH FORM -->
							</li>
							<?php r_theme_draw_top_menu($main_menu,"","records_menu") ?>
							<!--
							<li>
								<span class="hor-menu-search-form-toggler">&nbsp;</span>
								<div class="search-form hidden-phone hidden-tablet">
									<form class="form-search">
										<div class="input-append">
											<input type="text" placeholder="Search..." class="m-wrap">
											<button type="button" class="btn"></button>
										</div>
									</form>
								</div>
							</li>
							-->
						</ul>
					</div>
				</div>
				<!-- END HORIZANTAL MENU -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="<?php echo base_url($themefolder);?>/assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->            
				<!-- BEGIN TOP NAVIGATION MENU -->   
			           
				<ul class="nav pull-right">
					<li>
				      
						</li>
					<!-- BEGIN NOTIFICATION DROPDOWN -->   
					<!--<li class="dropdown" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-warning-sign"></i>
						<span class="badge">6</span>
						</a>
						
					</li>
				-->
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<!--<li class="dropdown" id="header_inbox_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-envelope"></i>
						<span class="badge">5</span>
						</a>
						<ul class="dropdown-menu extended inbox">
							<li>
								<p>You have 12 new messages</p>
							</li>
							<li>
								
							</li>
							<li class="external">
								<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li>
				-->
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<!--<li class="dropdown" id="header_task_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-tasks"></i>
						<span class="badge">5</span>
						</a>
						
					</li>
					-->
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN LANGUAGE DROPDOWN -->
					<!--<li class="dropdown language">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" src="<?php echo base_url('assets/img/flags/eg.png'); ?>" />
						<span class="username arabic-font">عربى</span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">

							<li><a href="#" style="font-family:tahoma;color:red;" ><img alt="" src="<?php echo base_url('assets/img/flags/eg.png'); ?>" /><i class="icon-home"></i> عربى</a></li>
							<li><a href="<?php echo site_url('account/dashboard/change_lang/english');?>"  ><img alt="" src="<?php echo base_url('assets/img/flags/us.png'); ?>" /> English</a></li>
						</ul>
					</li>
				-->
					<!-- END LANGUAGE DROPDOWN -->

					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<!--<span class="username arabic_font"><?php echo $account_name.' | ';  ?></span>-->
						
						<img alt="" src="<?php echo base_url($themefolder);?>/user_blue_32.png" width="28" />
						<span class="username arabic_font"><?php echo  $user_name; ?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
						      <?php
                             foreach ($main_menu as $key => $value) {
                                 //print_r($value) ; 
                                 ?>
                              <li><a href="<?php echo site_url($value[1]) ; ?>" ><i class="icon-cogs">   <?php echo $value[0] ; ?></i> </a></li>
                              <?php
                             }
                             ?>
							<!--<li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>-->
							<!--<li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
							<li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox <span class="badge badge-important">3</span></a></li>
							<li>=<a href="#"><i class="icon-tasks"></i> My Tasks <span class="badge badge-success">8</span></a></li>-->
							<li class="divider"></li>
							<li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a></li>
							<!--<li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>-->
						<!--	 <li><a href="<?php echo site_url("account/dashboard/change_lang/arabic") ; ?>" ><i class="icon-flag"></i>العربية</a></li> -->
							<li><a href="<?php echo site_url("account/login/logout") ; ?>" ><i class="icon-key"></i> Log Out</a></li>
						
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU --> 
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->   
	<div class="page-container row-fluid" >
	
		<!-- BEGIN HORIZONTAL MENU PAGE SIDEBAR 
		<div class="page-sidebar nav-collapse collapse">
			<ul class="page-sidebar-menu hidden-phone hidden-tablet">
				<li>
					<div class="sidebar-toggler hidden-phone"></div>				
				</li>
				<li>
					
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />            
							<input type="button" class="submit" value=" " />
						</div>
					</form>
					
				</li>
				
				<?php //r_theme_draw_side_menu($main_menu,"","branch_new_menu") ?>
			
			</ul>
		
		
			<ul class="page-sidebar-menu visible-phone visible-tablet">
				<li>
					
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />            
							<input type="button" class="submit" value=" " />
						</div>
					</form>
					
				</li>
				
				
				<?php r_theme_draw_side_menu($main_menu,"","records_menu") ;  ?>
				
				
				<?php 
					// place then the top menu in as side bar coall 
					r_theme_draw_side_menu($main_menu,"","") ;     
				 ?>
				
			</ul>
		</div>-->
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->

	<?php //print_r($main_menu); ?>
	<div id="page-content" class="page-content">
			<!-- BIG Tool Bar section -->
			<?php
				$this->load->view("master_toolbox_view") ; 
				//echo "<div class='clearfix'></div>" ; 
				/*r_theme_row_start() ; 	
				r_theme_section_start(12,array("id"=>"general_edit_section","attributes"=>array('class'=>'modal transparent container hide' )));
				r_theme_section_end();
				r_theme_row_end() ;
                 * 
                 */
			?>
			<!-- END BIG Tool Bar section -->
		<!--	<div class='clearfix'></div>-->