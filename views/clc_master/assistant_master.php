<?php
$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);
if (isset($this_lang_file)) {
    $this->lang->load($this_lang_file, $this->admin_public->DATA["system_lang"]);
}
$this_title = ""; // $this_item->business_data["JOURNAL_TYPE_NAME"] . " : " ; 

if ($this_item->ID() == 0) {
    $this_title = $this_title . " NEW ";
} else {
    $this_title = $this_title . $this_item->ID();
}

$public_data["page_title_formatted"] = ""; //'<i class="icon-file big"></i>'.$this_title ;
$this_title = "";
$public_data["page_title"] = "Patient Profile";
$public_data["page_subtitle"] = r_langline('page_subtitle', $this_concept . ".master.");
$public_data["page_description"] = r_langline('page_description', $this_concept . ".master.");
$public_data["page_scripts"] = array("bootstrap", "chart");  //
$public_data["bread_crumbs"] = array(
    "settings" => array("text" => r_langline("settings", $this_concept . ".bread_crumbs."), "url" => site_url("account/dashboard/settings")),
    "country.list" => array("text" => r_langline($this_concept . "s", $this_concept . ".bread_crumbs."), "url" => site_url($this_controller)));

$tool_box_vars["file_id"] = $this_item->ID();
$public_data["show_toolbox"] = "yes";

$this->load->view($public_data["template_folder"] . 'header', $public_data);

//--------------------------------------------------------------------------------
?>
<!--patient search button handler  -->

<a 
    class="r_automation" 

    caller_key = "search_form" 
    automation_verb="post_form"

    automation_target = "@differ"
    automation_action ="post_form"
    automation_form_fail_target="patient_search_edit_section" 
    automation_form_success_target="patient_search_list_section"

    automation_url="[get_from_caller]"   


    ></a>

<!--ADD NEW patient button handler  -->
<a 
    class="r_automation" 

    caller_key = "add_patient_button" 
    automation_verb="anyverb"

    automation_target = "_blank"
    automation_action ="just_go_to_page"
    automation_url="[get_from_caller]"   

    ></a>

<!----------------------------- Change Status Button Reception------------------------------------------>
<!-- DISABLED BY ANWAR ,, PLEASE REMIND ME TO TELL YOU WHY 
    
<a 
class="r_automation" 

caller_key = "change_status_button" 
automation_verb="change_status"

automation_target = "_"
automation_action ="post_form"
automation_url="[get_from_caller]"   
   
></a>  



<a 
class="r_automation" 

caller_key = "change_status_button" 
automation_verb="change_status"

automation_target = "_"
automation_action ="post_form"
automation_url="[get_from_caller]"   
   
></a>   --> 

<a class="r_automation"

   caller_key = "change_status_button"
   automation_verb="change_status"

   automation_target = "appointmentt_section"
   automation_action ="load_form_modal"
   automation_url="[get_from_caller]"

   ></a>







<a class="r_automation" 

   caller_key = "change_status_form" 
   automation_verb="form_cancel"

   automation_target = "appointmentt_section"
   automation_action ="clear_modal"
   automation_url="[get_from_caller]"   

   ></a> 

<a class="r_automation"
   caller_key = "change_status_form"
   automation_verb="post_form"
   automation_action ="post_form"
   automation_target = 'appointmentt_section'
   automation_url="[get_from_caller]"   
   ></a>


<a class="r_automation"
   caller_key = "change_status_form"
   automation_verb="form_post_success"

   automation_target = "appointmentt_section"
   automation_action ="clear_modal"
   automation_url=""
   ></a>



<a class="r_automation" 

   caller_key = "change_status_form" 
   automation_verb="post_form"

   automation_target = "today_visit_list_section"  
   automation_action ="reload"
   automation_url=""

   ></a>

<a class="r_automation" 

   caller_key = "change_status_form" 
   automation_verb="post_form"

   automation_target = "arrived_visit_list_section"  
   automation_action ="reload"
   automation_url=""

   ></a>



<!-------------------------------------- Change Status Button to checked -------------------------->

<a 
    class="r_automation" 

    caller_key = "change_status_button_to_checked" 			
    automation_verb="change_status_to_checked"

    automation_target = "_self"
    automation_action ="just_go_to_page"
    automation_url= "[get_from_caller]"


    ></a>  


<!---------------------------------- a day visits button handler ------------------------------------->	

<a class="r_automation" 

   caller_key = "calendar_day" 
   automation_verb = "click"

   automation_target = "day_visits_list_section"
   automation_action ="load_form"
   automation_url="[get_from_caller]"   

   ></a>

<a  
    class="r_automation" 

    caller_key = "calendar_day" 
    automation_verb="book"
    automation_target = "appointment_edit_section"
    automation_action ="load_form_modal"
    automation_url="[get_from_caller]"   

    ></a>


<!-- Open visits button  handler -->	
<!--		<a class="r_automation" 
    
        caller_key = "visit_table" 
        automation_verb = "open_document"
        
                automation_target = "_blank"
                automation_action ="just_go_to_page"
                automation_url="[get_from_caller]"   
                
                ></a>
-->


<!----------------------------------- delete visits  handler ----------------------------------->

<a 
    class="r_automation" 

    caller_key = "visit_table" 
    automation_verb="delete"

    automation_target = "visit_edit_section"
    automation_action ="load_form_modal"
    automation_url="[get_from_caller]"   

    ></a>

<!-- cancel delete form  visit handler -->	
<a class="r_automation" 

   caller_key = "visit_edit_form" 
   automation_verb="form_cancel"

   automation_target = "visit_edit_section"
   automation_action ="clear_modal"
   automation_url="[get_from_caller]"   

   ></a>

<!-- post form delete visit (SAVE button)  handler -->	
<a class="r_automation" 

   caller_key = "visit_delete_form" 
   automation_verb="post_form"

   automation_target = "[get_from_caller]"
   automation_action ="post_form"
   automation_url="[get_from_caller]"   

   ></a>

<!-- clear delete visit form after SAVE or CANCEL -->	   
<a class="r_automation" 
   caller_key = "visit_delete_form"  
   automation_verb="form_post_success"

   automation_target = "visit_edit_section"
   automation_action ="clear_modal"
   automation_url=""   
   ></a>

<!-- refresh (waiting to arrive) visit list after delete handler -->	
<a class="r_automation" 

   caller_key = "visit_delete_form" 
   automation_verb="form_post_success"

   automation_target = "today_visit_list_section"  
   automation_action ="reload"
   automation_url=""

   ></a>

<!-- refresh already arrived list after delete handler -->	
<a class="r_automation" 

   caller_key = "visit_delete_form" 
   automation_verb="form_post_success"

   automation_target = "arrived_visit_list_section"  
   automation_action ="reload"
   automation_url=""

   ></a>	






<!-- refresh appointment schedule after delete handler -->	
<a class="r_automation" 

   caller_key = "visit_delete_form" 
   automation_verb="form_post_success"

   automation_target = "new_visit_list_section"  
   automation_action ="reload"
   automation_url=""

   ></a>


<!-- refresh visit list after delete handler from appointments list tab-->	
<a class="r_automation" 

   caller_key = "visit_delete_form" 
   automation_verb="form_post_success"

   automation_target = "day_visits_list_section"  
   automation_action ="reload"
   automation_url=""

   ></a>

<!-- post appoint form(to press save) handler --> 

<!--------------------------------- FULL NEW APPOINTMENT HANDLERS -----------------------------------------------------> 

<a class="r_automation"    
   caller_key = "new_full_visit_form" 
   automation_verb="post_form"
   automation_target = "[get_from_caller]"
   automation_action ="post_form"
   automation_url="[get_from_caller]"   

   ></a>


<!-- cancel handler -->
<a class="r_automation" 

   caller_key = "new_full_visit_form" 
   automation_verb="form_cancel"

   automation_target = "appointment_edit_section"
   automation_action ="clear_modal"
   automation_url="[get_from_caller]"   

   ></a>   
<!-- clear new visit form handler -->	   
<a class="r_automation" 
   caller_key = "new_full_visit_form"  
   automation_verb="form_post_success"

   automation_target = "appointment_edit_section"
   automation_action ="clear_modal"
   automation_url=""   
   ></a>        
<!-- reload appointment scheduele form handler -->	   
<a class="r_automation" 
   caller_key = "new_full_visit_form"  
   automation_verb="form_post_success"

   automation_target = "new_visit_list_section"
   automation_action ="reload"
   automation_url="" 


   ></a>

<a 



    <a class="r_automation" 
   caller_key = "new_full_visit_form"  
   automation_verb="form_post_success"

   automation_target = "today_visit_list_section"
   automation_action ="reload"
   automation_url="" 


   ></a>     
    <!---------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------->
    <?php
    // ----------------------------------------------Patient Search MAIN FORM EDIT SECTION ------------------------------------------------------- 
    //---------------------------------------------------TODAY VISIT SECTION-----------------------
    r_theme_row_start();
    r_theme_section_start(12, array())
    ?>

    <div class="tabbable tabbable-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1_1" data-toggle="tab"><i class=""></i>

                    <?php echo r_langline('patient_find', $this_concept . ".master."); ?>

                </a></li>

            <li><a href="#tab_1_2" data-toggle="tab"><i class=""></i>

                    <?php echo r_langline('today_appointments', $this_concept . ".master."); ?>

                </a></li>

            <li><a href="#tab_1_3" data-toggle="tab"><i class=""></i>

                    <?php echo r_langline('appointments_schedule', $this_concept . ".master."); ?>

                </a></li>

        </ul>

        <div class="tab-content">

            <div class="tab-pane " id="tab_1_2">

                <?php
                //---------------------------------------------------TODAY VISIT TAB-----------------------

                $this->load->view("_general/title_message", array("title" => "Waiting To Arrive", "content" => "Reservations Expected to Arrive"));
//                                        echo r_langline('waiting_to_arrive',$this_concept.".master."); 


                r_theme_row_start();
                r_theme_section_start(12, array("id" => "today_visit_list_section", "attributes" => array(
                        'class' => 'autoload hide_with_menu',
                        'url' => site_url('clinic/visits/ajax_table/0/appointments/' . date('Y-m-d') . '/day_visits'))));
                echo '<div align="center"><img align="center" src=' . base_url("loading.gif") . '></div>';
                r_theme_section_end();
                r_theme_row_end();

                $this->load->view("_general/title_message", array("title" => "Arrived Already", "content" => "", "color" => "green_color"));


                r_theme_row_start();
                r_theme_section_start(12, array("id" => "arrived_visit_list_section", "attributes" => array(
                        'class' => 'autoload hide_with_menu',
                        'url' => site_url('clinic/visits/ajax_table/0/arrivals/' . date('Y-m-d') . '/day_visits'))));
                echo '<div align="center"><img align="center" src=' . base_url("loading.gif") . '></div>';
                r_theme_section_end();
                r_theme_row_end();

                echo "<br><br><br>";
                ?>

            </div> 


            <div class="tab-pane" id="tab_1_3">


                <?php
//---------------------------------------------------Appointments VISIT TAB-----------------------
                r_theme_row_start();
                r_theme_section_start(12, array("id" => "day_visits_list_section", "attributes" => array()));
                r_theme_section_end();
                r_theme_row_end();

                r_theme_row_start();

                r_theme_section_start(12, array("id" => "new_visit_list_section",
                    "attributes" => array(
                        'class' => 'transparent container hxide autoload',
                        'url' => site_url('clinic/visits/ajax_schedule/assistant_master/'))));
                echo '<div align="center"><img align="center" src=' . base_url("loading.gif") . '></div>';
                r_theme_section_end();
                r_theme_row_end();
                ?> 

            </div> 

            <div class="tab-pane active" id="tab_1_1">
                <?php
                // ---------------------------------------------- patients list TAB -------------------------------------------------------

                r_theme_row_start();
                r_theme_section_start(12, array("id" => "patient_search_edit_section", "attributes" => array(
                        'class' => 'autoload hide_with_menu',
                        'url' => site_url('clinic/patients/find_form'))));
                echo '<div align="center"><img align="center" src=' . base_url("loading.gif") . '></div>';
                r_theme_section_end();
                r_theme_row_end();

                // ---------------------------------------------- Patient Search LIST SECTION ------------------------------------------------------            

                r_theme_row_start();
                r_theme_section_start(12, array("id" => "patient_search_list_section", "attributes" => array()));
                r_theme_section_end();
                r_theme_row_end();
                ?>
            </div></div>
    </div>



    <?php
    r_theme_section_end();
    r_theme_row_end();



    // ---------------------------------------------- Patient FORM EDIT SECTION -------------------------------------------------------
    r_theme_row_start();
    r_theme_section_start(12, array("id" => "patient_edit_section", "attributes" => array('class' => 'modal transparent container hide')));
    echo '<div align="center"><img align="center" src=' . base_url("loading.gif") . '></div>';
    r_theme_section_end();
    r_theme_row_end();

    // ---------------------------------------------- visit FORM EDIT SECTION -------------------------------------------------------
    r_theme_row_start();
    r_theme_section_start(6, array("id" => "visit_edit_section", "attributes" => array('class' => 'modal transparent container hide')));
    echo '<div align="center"><img align="center" src=' . base_url("loading.gif") . '></div>';
    r_theme_section_end();
    r_theme_row_end();


    r_theme_row_start();
    r_theme_section_start(12, array("id" => "appointment_edit_section",
        "attributes" => array(
            'class' => 'modal transparent container hide',
    )));
    echo '<div align="center"><img align="center" src=' . base_url("loading.gif") . '>1111</div>';
    r_theme_section_end();
    r_theme_row_end();

    r_theme_row_start();
    r_theme_section_start(8, array("id" => "appointmentt_section",
        "attributes" => array('class' => 'modal hide transparent container',
    )));
    echo '<div align="center"><img align="center" src=' . base_url("loading.gif") . '></div>';
    r_theme_section_end();
    r_theme_row_end();


    // ----------------------------------------------  FOOTER -------------------------------------------------------------		
    $this->load->view($public_data["template_folder"] . 'footer', $public_data);
    ?> 