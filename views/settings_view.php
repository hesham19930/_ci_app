	<?php

	/*	MAP OF THE CODE 
	 *  Find out langauge of selection of the page ( or set lang to fixed value ) 
	 * 	Find out template based on language or pre-set template   
	 *  Get Page Specific Strings In Selected Langage
	 * 	Load the Template Helper Based On Selected Language
	 * 	Set Tempalate Scripts Loading Varaibles based on needs     
	 *  Load the Tempate Files  // header , etc , sending public data  
	 *  ( DO THE VIEW CODE OR VIEW SUB VIEWS )  
	 *  Load Footer and Post Page Files 
	*/  
	
	
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
    
	
		 
		 
		r_theme_row_start() ;
    
      r_theme_section_start(6);
      ?>
	
			<!--BEGIN TABS-->
                <div class="tabbable tabbable-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1_1" data-toggle="tab">Settings and Tables</a></li>
                        <!--<li><a href="#tab_1_2" data-toggle="tab"><?php echo r_langline("additional_settings"); ?></a></li>
                        <li><a href="#tab_1_3" data-toggle="tab"><?php echo r_langline("options_settings"); ?></a></li>-->
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1_1">
                            <div class="scroller" style="height:290px" data-always-visible="1" data-rail-visible="0">
                                <ul class="feeds">
                            
                                    <li>
                                        <a href='<?php echo site_url('clinic/services'); ?>' tcarget="_blank" >
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-success">                        
                                                            <i class="icon-flag"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Services 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    0 
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                
                                    <li>
                                        <a href='<?php echo site_url("clinic/companys"); ?>' tcarget="_blank" >
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-important">                        
                                                            <i class="icon-hospital"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                                Insurance Companies
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    0 
                                                </div>
                                            </div>
                                        </a>
                                    </li>   

  

                                    
                                    <li>
                                        <a href='<?php echo site_url("clinic/persons"); ?>' tcarget="_blank" >
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-success">                        
                                                            <i class="icon-folder-close"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                                Evaluators 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    0 
                                                </div>
                                            </div>
                                        </a>
                                    </li>   
                                    
                          <li>
                                        <a href='<?php echo site_url("clinic/drugs"); ?>' tcarget="_blank" >
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-info">                        
                                                            <i class="icon-folder-open"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                                Drugs 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    0 
                                                </div>
                                            </div>
                                        </a>
                                    </li>   
                                    
                                      <li>
                                        <a href='<?php echo site_url('clinic/image_types'); ?>' tcarget="_blank" >
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-success">                        
                                                            <i class="icon-flag"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Types Medical Imaging 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    0 
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    
                                             <li>
                                        <a href='<?php echo site_url('clinic/evaluation_forms'); ?>' tcarget="_blank" >
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-success">                        
                                                            <i class="icon-flag"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Evaluation Forms
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    0 
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                          <li>
                                        <a href='<?php echo site_url('clinic/vital_sign_s'); ?>' tcarget="_blank" >
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-success">                        
                                                            <i class="icon-flag"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Vital Signs and Measurments 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    0 
                                                </div>
                                            </div>
                                        </a>
                                    </li> 
                                             <li>
                                        <a href='<?php echo site_url('clinic/blood_groups'); ?>' tcarget="_blank" >
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-success">                        
                                                            <i class="icon-flag"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Blood Groups
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    0 
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_1_2">
                            <div class="scroller" style="height:290px" data-always-visible="1" data-rail-visible="0">
                            
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_1_3">
                        <div class="scroller" style="height:290px" data-always-visible="1" data-rail-visible="0">
                                <ul class="feeds">  
                                </ul>
                        </div>
                    </div>
                    </div>
                </div>
                <!--END TABS-->
       

        <?php   
        
        r_theme_section_end();
        ?> 
        
        
        <?php
        r_theme_section_start(6);
     
        ?>
                <!--BEGIN TABS-->
                <div class="tabbable tabbable-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_2_1" data-toggle="tab"><?php echo r_langline("basic_settings"); ?></a></li>
                        <!--<li><a href="#tab_2_2" data-toggle="tab"><?php echo r_langline("extended_settings"); ?></a></li>
                        <li><a href="#tab_2_3" data-toggle="tab"><?php echo r_langline("user_settings"); ?></a></li>-->
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_2_1">
                            <div class="scroller" style="height:290px" data-always-visible="1" data-rail-visible="0">
                                <ul class="feeds">
                                <?php                          
                                        if(sysDATA("user_group_code") == "sys_admin")       
                                    {
                                        ?> 
                                    <li>
                                        <a href='<?php echo site_url("clinic/departments"); ?>' tcarget="_blank" >
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-success">                        
                                                            <i class="icon-user-md"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                              Departments
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    0 
                                                </div>
                                            </div>
                                        </a>
                                    </li>   
                                        
                                                           <li>
                                        <a href='<?php echo site_url("account/sys_account_s"); ?>' tcarget="_blank" >
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-important">                        
                                                            <i class="icon-flag"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             Accounts 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    0 
                                                </div>
                                            </div>
                                        </a>
                                    </li> 
                                
                                  <?php
                 } 
                            ?>
                                    
                                    <li>
                                        <a href='<?php echo site_url("account/users"); ?>' tcarget="_blank" >
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-flag">                        
                                                            <i class="icon-user-md"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                              Users
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    0 
                                                </div>
                                            </div>
                                        </a>
                                    </li>   
                                        
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_2_2">
                            <div class="scroller" style="height:290px" data-always-visible="1" data-rail-visible="0">
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_2_3">
                        <div class="scroller" style="height:290px" data-always-visible="1" data-rail-visible="0">
                                <ul class="feeds">
                            
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END TABS-->	
				<!-- BEGIN SETTING BOXES -->
                <!-- -------------------------------------------------------------->
          
		         <?php
		   
        r_theme_section_end();
        r_theme_row_end() ; 
            
        ?> 
        
        
        <?php
     
//-----------------------------------------------------------------------------------------------------
	 
		   $this->load->view($public_data["template_folder"].'footer',$public_data);
	?> 