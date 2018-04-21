	<?php

	   
    
$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
if (isset ( $this_lang_file)){
$this->lang->load($this_lang_file, $this->admin_public->DATA["system_lang"]);
 }
$this_title = "" ; // $this_item->business_data["JOURNAL_TYPE_NAME"] . " : " ; 

$public_data["page_title_formatted"] ="" ; //'<i class="icon-file big"></i>'.$this_title ;
$this_title = "" ; 
$this->lang->load('config/settings', $this->admin_public->DATA["system_lang"]);
    $public_data["show_toolbox"]= "yes" ; 
    $public_data["page_title"] =r_langline('system_settings'); 
    $public_data["page_description"] = "";
    $public_data["page_subtitle"] ="";    
    $public_data["page_scripts"] = array("bootstrap","chart" );     // 


$this->load->view($public_data["template_folder"].'header',$public_data);
    
		
		r_theme_row_start( ) ;
		r_theme_section_start(12,array(),"background-color:#406090;padding-left:5px;color:white;");
		echo "<h4>Active  Statistics</h4>";
		r_theme_section_end();
		r_theme_row_end() ;
		echo "<br/>";		
		

	
		//-----------------------------------------------------------------------------------------------------
		
		echo '<div class="clearfix"></div><hr/>'  . $this->admin_public->DATA["system_lang"];
		
		?>
				<center><ixmg src="<?php echo base_url('tawasol.jpg') ?>" xwidth=40px; ><br/><br/>
			CLNIC SYSTEM  <br/> By Resala Solutions 
		</center>
		<?php
	//	echo r_langline("dashboard_welcome_message") ; 	
 // ----------------------------------------------  FOOTER -------------------------------------------------------------        
   $this->load->view($public_data["template_folder"].'footer',$public_data);

	?> 