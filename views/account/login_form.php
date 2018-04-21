<?php
	$template_name= "metronic_en" ; 
	$template_folder = "_templates/".$template_name."/" ; 
	
	$public_data["page_title"] = "login to my application " ;  
	$this->load->view($template_folder.'login_header',$public_data);
	 
?>

<body class="login">
			
	<!-- BEGIN LOGO -->
	<div class="logo" >
		
		
		<h1 class="araxbic_font" style="color:white;font-size:38pt;">Clinic</h1>
		<h1 class="araxbic_font" style="color:white;font-size:12pt;">Management System</h1>
			
	</div>
	
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content arabic_font">
		<!-- BEGIN LOGIN FORM --><center>
		<img src="<?php echo base_url('logo.jpg') ?>" alt="" wxidth="50" /></center>
			<span>Account/User/Password</span>
		<form class="form-vertical login-form" action="<?php echo site_url('account/login/submit'); ?>" method="post" >
			
			
			<div class="alert alert-error hide ">
				<button class="close" data-dismiss="alert"></button>
				<span>Please Enter User Name and Password.</span>
			</div>
			
			<div class="control-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Account</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-group"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Branch" name="login_account"/>
					</div>
				</div>
			</div>
				
			<div class="control-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="login_username"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="login_password"/>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn green pull-right arabixc_font">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		</form>
		
		<!-- END LOGIN FORM -->
		</div>
		<div class="logo"><br/>
		<h1 class="araxbic_font" style="color:#999;font-size:10pt;">Thank Your for Choosing Resala Solutions<br/>Anwar El-Sherif</h1>
		</div>
		</div>
	
<?php 

	$this->load->view($template_folder.'/bottom'); 
	$this->load->view($template_folder.'/login_footer'); 
	
?>