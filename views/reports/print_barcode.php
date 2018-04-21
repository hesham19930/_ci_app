	<?php

	
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
		$public_data["auto_print_close"]	=1; 
	$this->load->view($public_data["template_folder"].'header',$public_data);

	//print_r($this_item->business_data) ; 
	$this_quantity = $this_item->business_data["std_item_quantity"] ; 
	$item_short = $this_item->business_data["std_item_short"] ;
	$item_name =  $this_item->business_data["item_name"] ;
	$item_price =  $this_item->business_data["std_item_sales_price"] ;
	$item_model = $this_item->business_data["std_item_model"] ;
	?>

	
	<?php 
		$this_counter = 0 ; 
		for ($this_counter = 1; $this_counter <= $this_quantity; $this_counter++) {		
	?>  

	<div align="center" style='page-break-before:always' >
	<table width="92%" style="padding:0px;border:#202020 0px solid;" align="center" cellspacing="0" cellpadding="0" >
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
		<tr style="height:5px;">
			<td colspan=10 style="text-align:center;font-size:2px;"></td>
		</tr>
			<tr style="bxorder:#505050 solid 1px; height:20px; "   >
			<td   colspan=10 bgcolor="000000" style="text-align:center;font-size:12px;font-weight: bold;color:#FFFFFF;"><span class="font_english">Price :<?php echo $item_price; ?> L.E. </span></td>
		</tr>
	
		<tr style="height:3px;">
			<td colspan=10 style="text-align:center;font-size:2px;"></td>
		</tr>
	<tr><td colspan=10 style="text-align:right;font-size:12px;"><span style="font-family:Arial;text-align:left;font-size:12px;font-weight: bold;" ><?php echo $supplier_code; ?>-<?php echo $item_model; ?>&nbsp;</span></td>	
			</tr>

		<tr style="height:3px;">
			<td colspan=10 style="text-align:center;font-size:2px;"></td>
		</tr>	<tr>
			<td colspan=10 style="text-align:center;font-size:24px;" nowrap="nowrap"><span class="bar_code">*<?php echo $item_short ; ?>*</span></td>		
					
		</tr>
		
		<tr style="height:2px;">
			<td colspan=10 style="text-align:center;font-size:2px;"></td>
		</tr>
		<tr>
			<td colspan=5 style="font-family:Arial;text-align:left;font-size:12px;font-weight: bold;" nowrap="nowrap" ><span class="font_english">&nbsp;&nbsp;<?php echo $item_short ; ?></span></td>
			<td colspan=5 style="text-align:right;font-size:12px;font-weigxht: boxld;" nowrap="nowrap" ><span class="xarabic_font"><?php echo $item_name ; ?></span></td>			
		</tr>
		<tr style="height:2px;">
			<td colspan=10 style="text-align:center;font-size:2px;"></td>
		</tr>
		</table>
	</div>
	
	<?php
	
		} 
	?>
	
	
	<?php
						
	$this->load->view($public_data["template_folder"].'footer',$public_data);
		
	