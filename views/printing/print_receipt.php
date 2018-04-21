	<?php

	
	$public_data["auto_print_close"]=1; 
	
// BEGIN PAGE SETTINGS 
	$this->lang->load('business/item_main', $this->admin_public->DATA["system_lang"]);

	//$public_data["page_title_formatted"] ='<i class="icon-folder-open big"></i>'.$this_patient->business_data["patient_name"]." ...File #:". $this_patient->business_data["patient_number"].''; //r_langline('page_title',"patient.master.");
	$public_data["page_title"] = "" ;  
	$public_data["page_subtitle"] ='Patient File' ; 
	$public_data["page_description"] = r_langline('page_description',"patient.master.");		  
	$public_data["page_scripts"] = array("bootstrap","chart" ); 	//
	
	// END PAGE SETTINGS  
	
	//$CI =& get_instance();
	//$CI->lang->load("admin_side_menu",$CI->admin_public->DATA["system_lang"]);
	$public_data["auto_print_close"] = 0 ; 
	$this->load->view($public_data["template_folder"].'header',$public_data);

	?>

	
	<?php 
		$this_counter = 0 ; 
		//for ($this_counter = 1; $this_counter <= $this_quantity; $this_counter++) {		
	?>  

	<div align="center" style='page-break-before:always' ><br/>
	<table width="92%" style="padding:0px;border:#202020 1px solid;" align="center" cellspacing="0" cellpadding="0" >
		<!--
		<tr>
			<?php
			$i = 0; 
			do {
				echo '<td width="10%" style="text-align:center;font-size:6px;" >|&nbsp</td>' ; 
				$i = 1+$i  ; 
				} while ( $i < 10 )
			?> 
						
		</tr>
		-->
		<tr style="height:5px; border: 2px; border-style: solid;border-color: #DDF;" >
			<td colspan=10 style="text-align:center;font-size:2px;" ></td>
		</tr>
		<tr  style="height:40px;font-size: 20pt;" class="arabic_font" >
			<td colspan=10   style="text-align:center;vertical-align: middle;"  >كازارى</td>
		</tr>
		
	</table>
	
	<?php
						
	$this->load->view($public_data["template_folder"].'footer',$public_data);
		
	