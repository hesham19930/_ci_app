<?php

$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);
if (isset ( $this_lang_file)){
$this->lang->load($this_lang_file, $this->admin_public->DATA["system_lang"]);
 }
$this_title = r_langline("You Have No Access To View This Page")  ; // $this_item->business_data["JOURNAL_TYPE_NAME"] . " : " ;



$public_data["page_title_formatted"] ="" ; //'<i class="icon-file big"></i>'.$this_title ;
$this_title = "" ;
$public_data["page_title"] = $this_title;

$public_data["show_toolbox"]= "yes" ;

$this->load->view($public_data["template_folder"].'header',$public_data);
if (!isset($access_component_name)) $access_component_name = "" ;
if (!isset($access_verb)) $access_verb = "" ;

        //---------------------------------------------------TODAY VISIT SECTION-----------------------
        r_theme_row_start() ;
        r_theme_section_start(12,array());
        say_no_access($access_component_name,$access_verb);
        r_theme_section_end();
				r_theme_row_end() ;


 // ----------------------------------------------  FOOTER -------------------------------------------------------------
   $this->load->view($public_data["template_folder"].'footer',$public_data);

?>
