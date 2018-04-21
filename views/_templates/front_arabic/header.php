<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ar">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php $themefolder="front_arabic/" ?>
	
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		

 		<title><?php echo $page_title ?></title>
 		
		
		<!-- ==================================================================================== 
			STYLES BEGIN 
		===================================================================================== -->
		
		<!-- Global styles -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder.'style.css') ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder.'css/reset.css') ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder.'css/text.css') ?>" />
	
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($themefolder.'buttons.css') ?>" />
		
	  	<script type="text/javascript" src="<?php echo base_url($themefolder.'js/jquery-1.3.2.min.js') ?>"></script>
   		<script type="text/javascript" src="<?php echo base_url($themefolder.'js/radius.js') ?>"></script>
		
    </head>   
<script>
function printpage()
  {
  window.print();
  //window.close() ; 
  }
</script>	
    <body 
    <?php 
    if (isset($auto_print_close))
    {
    	if ($auto_print_close==1)
    	{
    		?>
    		onload="printpage()" 
    		<?php
    	}
	}
    ?> 
    ><div class="main">