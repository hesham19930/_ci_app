	<?php

	
	// BEGIN PAGE SETTINGS 
//	$this->lang->load('business/salary', $this->admin_public->DATA["system_lang"]);

	//$public_data["page_title_formatted"] ='<i class="icon-folder-open big"></i>'.$this_patient->business_data["patient_name"]." ...File #:". $this_patient->business_data["patient_number"].''; //r_langline('page_title',"patient.master.");
	$public_data["page_title"] = "" ;  
	$public_data["page_subtitle"] ='Patient File' ; 
	$public_data["page_description"] = r_langline('page_description',"patient.master.");		  
	$public_data["page_scripts"] = array("bootstrap","chart" ); 	//
	
	// END PAGE SETTINGS  
	
	//$CI =& get_instance();
	//$CI->lang->load("admin_side_menu",$CI->admin_public->DATA["system_lang"]);
	$public_data["auto_print_close"]	=0; 
	$this->load->view($public_data["template_folder"].'header',$public_data);

	//print_r($this_item->business_data) ; 
	/*
	$this_quantity = $this_item->business_data["std_item_quantity"] ; 
	$item_short = $this_item->business_data["std_item_short"] ;
	$item_name =  $this_item->business_data["item_name"] ;
	$item_price =  $this_item->business_data["std_item_sales_price"] ;
	$item_model = $this_item->business_data["std_item_model"] ;
	 * 
	 */
	?>
	<style>
	td {
	text-align: left;
	vertical-align: middle;
	font-weight: bold;
	font-size: 6pt;  
	
	}
	th,td
	 { whsite-space: nowrap;border:#555 1px solid;padding-left:4px;}
	</style>
	
	<?php
	
	$oddslip = 1;
	foreach ($salary_array as $this_salary)
	{
		if ($oddslip == 1)
		{
			?><div align="center" style='page-break-before:always' ><?php 
			$oddslip = 0; 
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";
		}
		else 
		{
			?><div align="center"><?php
			$oddslip = 1;
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";
			
		}
		
	?>
	
	<table  border=1 width=90% style="border:1px solid;">	

		<tr  style="height:80px;"> <td colspan=9 style="font-size:10pt; text-align:center;" > Tawasol for Projects Development</td> 
		<td rowspan=5 style="text-align:center;"><img src='<?php echo base_url("/tawasol.jpg"); ?>' /> </td></tr>
		<tr> <td colspan=9 style="font-size:9pt; text-align:center;" > PAY SLIP </td>
		</tr>


		<tr> <td colspan=5 style= text-align:center;> Salary / Wages Advice for the Month </td>
		 <td  colspan=2 style= text-align:center;>Aug-15</td>
		 <td style= text-align:center;>Employee No. </td>
		 <td style= text-align:center;>4231</td>
		 </tr>
		 <tr>
		 <td> Emp Name </td>
		 <td colspan=8 style= text-align:center; ><?php echo $this_salary["EMPLOYEE_NAME"]; ?> </td> 
		 </tr>
 
		 <tr>
		 <td> Dept.</td>
		 <td colspan=4 style= text-align:center;> LABOUR </td>
		
		 <td colspan=2>Designation</td>
		 <td colspan=2 style= text-align:center;> ELECTRICIAN </td>
		 </tr>
 

		 <tr>
		 <td colspan=2> Salary/Wages</td>
		 <td style= text-align:center;> Overtime</td>
		 <td style= text-align:center;> Basic</td>
		 <td style= text-align:center;>Food / Other Allow</td>
		 <td colspan=2 style= text-align:center;>Attendance /Leave </td>
		 <td colspan=2 style= text-align:center;> Deduction</td>
		 <td style= text-align:center;> Net salary/Wages </td>
		 </tr>
 
		  <tr>
		  <td>Basic/OT </td>
		  <td style = "text-align:center;"> </td>
		 <td style = "text-align:center; background-color:#ffff00;"> OTT </td>
		 <td style = "text-align:center; background-color:#ffff00;"> <?php echo $this_salary["SAL_BASIC"]; ?> </td>
		 <td style = "text-align:center; background-color:#ffff00;"> <?php echo $this_salary["SAL_FOOD_ALLOW"]; ?></td>
		  <td>Days of Current Month </td>
		 <td style = "text-align:center; background-color:#ffff00;"> xxx</td>
		 <td> Cash Advance</td>
		 <td style = "text-align:center; background-color:#ffff00;"> xxx</td>
		 <td rowspan=9 style = "text-align:center; background-color:#ffff00;"> xxx</td>
		 
		 </tr>
		 
		 <tr>
		 <td>Normal OT </td>
		 <td style = "text-align:center;">xx </td>
		 <td style = "text-align:center; background-color:#ffff00;"> xxx</td>
		 <td> </td>
		 <td> </td>
		  <td>Present Day(s) </td>
		 <td style = "text-align:center; background-color:#ffff00;"> xxx</td>
		 <td> Deduction</td>
		 <td style = "text-align:center; background-color:#ffff00;"> xxx</td> 
		 </tr>
 
		  <tr>
		  <td>F/H OT </td>
		   <td style = "text-align:center">xx </td>
		 <td style = "text-align:center;background-color:#ffff00;"> xxx</td>
		 <td> </td>
		 <td> </td>
		  <td>Absent Day(s) </td>
		 <td style = "text-align:center; background-color:#ffff00;"> xxx</td>
		 <td colspan=2> </td>
		
		 </tr>
 
		  <tr>
		   <td colspan=9> </td>
		    
		 </tr>
 
		  <tr >
		  <td  colspan=1>Net Adjust (+) </td>
		   
		 <td style = "text-align:center; background-color:#ffff00;"> </td>
		 <td style = "text-align:center;"></td>
		 <td style = "text-align:center; ;"> </td>
		   <td> </td>
		 <td style = "text-align:center; " colspan=2 ></td>
		 <td> Net Adjust (-)</td>
		 <td style = "text-align:center; background-color:#ffff00;"> </td>
		 </tr>
		 
		   <tr>
		 <td>Prev. NOT </td>
		   <td style = "text-align:center;background-color:#ffff00">xx </td>
		 <td> </td>
		 <td> </td>
		<td></td>
		 <td> Prev. Attendance</td>
		 <td  style = "text-align:center; background-color:#ffff00;"> </td>
		 <td style = "text-align:center; "> </td>
		 <td> </td>
		 
		 </tr>
 
		   <tr>
		 <td>Prev. F/H OT</td>
		   <td style = "text-align:center;background-color:#ffff00">xx </td>
		 <td style = "text-align:center; "> </td>
		 <td> </td>
		 <td> </td>
		  <td>Prev. Absence</td>
		 <td style = "text-align:center; background-color:#ffff00;"> 29</td>
		 <td> </td>
		 <td style = "text-align:center; "> </td>
 
		 </tr>
		 
		 <tr>
		   <td colspan=9> </td> 
		 </tr>
 		<tr>
			<td >Gross Amt </td>
			<td> </td>
			<td style = "text-align:center;background-color:#ffff00;"> xxx</td>
			<td style = "text-align:center; background-color:#ffff00;">xxx </td>
			<td style = "text-align:center; background-color:#ffff00;"> xxx</td>
			<td colspan=2></td>
			<td  > Total Deduct</td>
			<td style = "text-align:center; background-color:#ffff00;"> xxx</td>
		</tr>
 
  		<tr>
			<td colspan=3 style = "text-align:left;" >Net Salary/Wages (in words)   </td>
			<td> </td>
			<td colspan=5  style ="background-color:#ffff00;"> </td>
			<td rowspan=2 style=  text-align:center;>THUMB MARK </td>
	 	</tr>
 
		 <tr  style="height:60px;">
		 	<td  colspan=5 style= "text-align:left;vertical-align:top;">Received by: <br>  </td>
			<td colspan=4 style = "text-align:left;vertical-align:top;"  >Remarks: </td>
		 </tr>
 

	</table>
	</div>
	<?php
	}
	//	$this_counter = 0 ; 
	//	for ($this_counter = 1; $this_counter <= $this_quantity; $this_counter++) {		
	?>  

	
	
	
	
	<?php
						
	$this->load->view($public_data["template_folder"].'footer',$public_data);
		
	