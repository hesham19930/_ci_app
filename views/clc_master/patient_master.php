<?php

    // BEGIN PAGE SETTINGS 
    $this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
    if (isset ( $this_lang_file)){
    $this->lang->load($this_lang_file, $this->admin_public->DATA["system_lang"]);
     }
    $this_title = "" ; // $this_item->business_data["JOURNAL_TYPE_NAME"] . " : " ; 
    
    if ($this_item->ID() == 0) { $this_title = $this_title." NEW ";} 
    else { $this_title = $this_title . $this_item->ID();} 
    
    $public_data["page_title_formatted"] ="" ; //'<i class="icon-file big"></i>'.$this_title ;
    $this_title = "" ; 
    $public_data["page_title"] = "Patient Profile" ; 
    $public_data["page_subtitle"] =r_langline('page_subtitle',$this_concept.".master.");  
    $public_data["page_description"] = r_langline('page_description',$this_concept.".master.");       
    $public_data["page_scripts"] = array("bootstrap","chart" );     //
    $public_data["bread_crumbs"] = array(
                            "settings"=>array("text"=>r_langline("settings",$this_concept.".bread_crumbs."),"url"=>site_url("account/dashboard/settings")),
                        
                            "country.list"=>array("text"=>r_langline($this_concept."s",$this_concept.".bread_crumbs."),"url"=>site_url($this_controller))) ; 
             
    $tool_box_vars["file_id"]= $this_item->ID();
    $public_data["show_toolbox"]= "yes" ; 
  
    $this->load->view($public_data["template_folder"].'header',$public_data);
        
    ?>

   <!-- BODY --> 
        
    <?php   
    
                    r_theme_row_start() ;   
                    r_theme_section_start(9,array()) ;
                //    echo "<pre>"; 
              //      print_r($this_item) ; 
              //      echo "</pre>" ; 
            //        return ; 
                    if ($this_item->is_published!=true) 
                    {
                    ?>
                    <h3 class="page-title" style="padding-bottom:3px;">
                            <span class="red_color">XXX|</span>
                            <span class="green_color" style="direction:rtl;">NEW PATIENT</span>
                        </h3> 
                     <?php 
                    }
                    else 
                    {    
                    r_theme_row_start() ;
                    $interval = date_diff(date_create($this_item->business_data["patient_birth_date"]), date_create(date('Y-m-d')) );
    
                   $p_age =  $interval->format("%y Y - %m M");
                    ?>
                    <h3 class="page-title" styel="padding-bottom:3px;">
                               <span class="red_color"><?php echo $this_item->business_data["patient_id"]; ?>|</span>
                            <span class="green_color" style="direction:rtl;"><?php echo $this_item->business_data["patient_name"]; ?></span>
                         <br><small><span class="red_color"><b><?php echo $p_age ?> </b>|</span> 
                                            <?php echo $this_item->business_data["patient_birth_date"]; ?> | 
                                            <?php echo $this_item->business_data["company_name"]; ?> </small>
                        </h3> 
                    <?php
                                
                    r_theme_row_end() ;
                    } 
                    ?>
                     <div class="tabbable tabbable-custom" style="backxground-color: grey;">    
                        <ul class="nav nav-tabs">
                          <li 
                          
                          <?php if ($visit_id==0 ) echo 'class="active" ' ; ?> 
                          
                          
                          ><a href="#patient_information_tab"  data-toggle="tab"  ><?php echo r_langline('Personal'); ?></a></li>
                          
                          <li class=""><a href="#patient_notes_tab"  data-toggle="tab"  ><?php echo r_langline(' Notes'); ?></a></li>
                          
                          <li class="ajax_action" caller_id="image_tab" caller_verb="Click"  ><a href="#past_visits_tab"  data-toggle="tab" ><?php echo r_langline('P.Visits'); ?></a></li>
                          
                          <li class=""> <a href="#images_tab"  data-toggle="tab"  ><?php echo r_langline('Imaging'); ?></a></li>
                          
                          <li class=""> <a href="#evals_tab"  data-toggle="tab"  ><?php echo r_langline('Evaluations'); ?></a></li>
                    
<?php
if ($visit_id != "" ) 
{

    ?>
                        <li class="active">
                        <a href="#current_visit_tab"  data-toggle="tab"  >
                        
                                    <?php echo r_langline('Last / This Visit'); ?>
                           
                        </a>  </li>
        
<?php  
}

?>
  </ul>

 
       <br>
   
     <div class="tab-content">
      <div class="tab-pane <?php if ($visit_id==0) echo 'active' ?> " id="patient_information_tab">
   <?php
                r_theme_row_start() ;       
                    r_theme_section_start(12,array("id"=>$this_concept."_edit_section","attributes"=>array(
                            'class'=>'autoload '  ,
                            'url'=>site_url($this_controller.'/ajax_edit/'.$patient_id) )));  
                          echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                    r_theme_section_end();
                r_theme_row_end() ;

           ?>
      </div>
        <div class="tab-pane " id="patient_notes_tab">
            <?php
            
            if ($this_item->ID()==0)
            {
                r_theme_row_start() ;     
                    r_theme_section_start(12 , array()); 
                    echo "Please Save Patient to Be Able To Edit Notes" ; 
                    r_theme_section_end();
                r_theme_row_end() ;
                    
            }
        else {
              r_theme_row_start() ;     
                    r_theme_section_start(12 , array(
                      "id"=>"history_edit_section",
                      "attributes"=>array(
                       'class'=>'autoload rezload' ,
                       'url'=>site_url('clinic/history_lines/ajax_edit/0/'.$patient_id.'/0/') ))); 
                      echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                    r_theme_section_end();
                r_theme_row_end() ;

                r_theme_row_start() ;     
                    r_theme_section_start(12,array("id"=>"history_list_section",
                          "attributes"=>array(
                              'class'=>'autoload reload' ,
                              'url'=>site_url('clinic/history_lines/ajax_table/'.$patient_id) ))); 
                           echo '<div align="right"><img align="right" src='.base_url("loading.gif").'></div>' ;                         
                    r_theme_section_end();
                r_theme_row_end() ;
                } 
                ?>
            </div>
            
      <div class="tab-pane " id="past_visits_tab">
   
    <button class="ajax_action btn blue" caller_id="show_visits" caller_verb="Click">Load Previous Visits</button> 
      <?php if ($visit_id==0) 
     {
         ?>
     
    <!-- <a href= <?php echo site_url('clinic/visits/info/new'.'/'.$patient_id) ?> ><button class="action btn green" >Create New Visit For Patient</button></a> --> 
      
    
    <?php
    }
    ?><br/>
    <hr>
    <?php  
                r_theme_row_start() ;     
                    r_theme_section_start(12,array("id"=>"visit_list_section",
                                             "attributes"=>array(
                                             'class'=>'autoloxad reload' ,
                                             'url'=>site_url('clinic/visits/ajax_listing/'.$patient_id."/checked_in/0/patient_visits")  ))); 
                                                 echo '<div align="center">Click To Show Prev. Visits </div>' ;                         
                    r_theme_section_end();
                r_theme_row_end() ; 
                                 ?> 
      </div>
      <div class="tab-pane " id="evals_tab">
    
    <?php  
           if ($this_item->ID()==0)
            {
                r_theme_row_start() ;     
                    r_theme_section_start(12 , array()); 
                    echo "Please Save Patient to Be Able To Edit Evaluations" ; 
                    r_theme_section_end();
                r_theme_row_end() ;
                    
            }
        else {
            ?>
              <button class="ajax_action btn green" caller_id="Eval_Button" caller_verb="Click">New Evaluation</button>- 
          <button class="ajax_action btn blue" caller_id="show_evals" caller_verb="Click">Load Previous </button>
           <button class="ajax_action btn yellow" caller_id="show_evals_campare" caller_verb="Click">Load Comparing</button> 
          
          <br/><hr/>
          <?php
              r_theme_row_start() ;       
              r_theme_section_start(12,array("id"=>"evaluation_new_section","attributes"=>array(
                      'class'=>'autoload hide '  ,
                      'url'=>site_url('clinic/evaluations/ajax_new/0/'.$patient_id.'/0/') )));  
                    echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
              r_theme_section_end();
          r_theme_row_end() ;
          
              
              r_theme_row_start() ;       
              r_theme_section_start(12,array("id"=>"evaluation_edit_section","attributes"=>array(
                      'class'=>'hide modal container '  ,
                      )));  
                    echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
              r_theme_section_end();
          r_theme_row_end() ;
          
          r_theme_row_start() ;     
          r_theme_section_start(12,array("id"=>"evaluation_list_section",
                      "attributes"=>array(
                          'class'=>'autxoload reload hide' ,
                          'url'=>site_url('clinic/evaluations/ajax_table/'.$patient_id) ))); 
                       echo '<div align="center">Click To Show Previous Evaluations</div>' ;                         
          r_theme_section_end();
          r_theme_row_end() ; 
          
                 r_theme_row_start() ;     
          r_theme_section_start(12,array("id"=>"evaluation_compare_section",
                      "attributes"=>array(
                          'class'=>'autxoload reload hide' ,
                          'url'=>site_url('clinic/evaluations/ajax_compare/'.$patient_id) ))); 
                       echo '<div align="center">Click To Show Previous Evaluations</div>' ;                         
          r_theme_section_end();
          r_theme_row_end() ; 
          }
     ?> 
      </div>
      <div class="tab-pane " id="images_tab">
          <button class="ajax_action btn green" caller_id="image_toggle" caller_verb="asd">New Image</button>
           - <button class="ajax_action btn blue" caller_id="show_images" caller_verb="Click">Load Images</button>
          <br/><br/>
  <?php
  
  
                r_theme_row_start() ;       
r_theme_section_start(12,array("id"=>"image_edit_section","attributes"=>array(
  'class'=>'autoload hide'  ,
  'url'=>site_url('clinic/images/ajax_edit/0/'.$patient_id.'/0/') )));  
echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
r_theme_section_end();
r_theme_row_end() ; 

r_theme_row_start() ;     
r_theme_section_start(12,array("id"=>"image_list_section",
            "attributes"=>array(
                'class'=>'autoloxad reload' ,
                'url'=>site_url('clinic/images/ajax_table/'.$patient_id) ))); 
             echo '<div align="left">Click To Show List of Images</div>' ;                         
r_theme_section_end();
r_theme_row_end() ; 


?>
    </div>
        <div class="tab-pane active" id="evals_tab">
      </div>

      <div class="tab-pane active " id="current_visit_tab">
  <?php
   if ($visit_id!=0)
   {
    r_theme_row_start() ;     
    r_theme_section_start(12,array("id"=>"visit_edit_section","attributes"=>array(
                                  'class'=>'autoload' ,
                                  'url'=>site_url('clinic/Visits/ajax_edit'). '/' . $visit_id )));  
    echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
    r_theme_section_end();
    r_theme_row_end() ;


    r_theme_row_start() ;
    r_theme_section_start(12,array("id"=>"comment_delete_section","attributes"=>array(
                                  'class'=>'container  hide' ,
                                  'url'=>""))); 
    echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
    r_theme_section_end();
    r_theme_row_end() ;
    r_theme_row_start() ; 
    r_theme_section_start(12,array("id"=>"comment_edit_section",
                        "attributes"=>array('class'=>'autoload transparent container' ,
                        'url'=>site_url('clinic/comments/ajax_edit/0/'.$visit_id.'/0' ))));
    echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
    r_theme_section_end();
    r_theme_row_end() ;
        
    r_theme_row_start() ;
    r_theme_section_start(12,array("id"=>"comment_list_section","attributes"=>array(
                                  'class'=>'autoload' ,
                                  'url'=>site_url("clinic/comments/ajax_table/".$visit_id )))); 
    echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
    r_theme_section_end();
    r_theme_row_end() ;
    echo '<br>'
?>
      
   <?php
    r_theme_row_start() ;
    r_theme_section_start(12,array("id"=>"prescription_delete_section","attributes"=>array(
                                  'class'=>'container  hide' ,
                                  'url'=>""))); 
    echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
    r_theme_section_end();
    r_theme_row_end() ;
                                              r_theme_row_start() ;   
                                                   r_theme_section_start(12,array("id"=>"prescription_edit_section",
                                                       "attributes"=>array('class'=>'transparent container autoload',
                                                       'url'=>site_url('clinic/prescriptions/ajax_edit/0/'.$visit_id.'/0' ))));
                                                   echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                                                   r_theme_section_end();
                                                   r_theme_row_end() ;     
                                   
                                   
                                                   r_theme_row_start() ;
                                                   r_theme_section_start(12,array("id"=>"prescription_list_section","attributes"=>array(
                                                                                 'class'=>'autoload' ,
                                                                                 'url'=>site_url('clinic/prescriptions/ajax_table/'.$visit_id ))));    
                                                   echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                                                   r_theme_section_end();           
                                                   r_theme_row_end();

                                                    r_theme_row_start() ;
                                                    r_theme_section_start(12,array()) ; 
                                                    ?>
                                                    <button class="ajax_action btn green"
                                                    caller_id = "print_prescription_button"
                                                    caller_verb="print"
                                                    >Print Prescription </button>
                                                         
    
<?php  
                                                    r_theme_section_end();          
                                                    r_theme_row_end() ; 

                                                   /*r_theme_row_start() ; 
                                                   r_theme_section_start(12,array("id"=>"precription_edit_section",
                                                                       "attributes"=>array('class'=>'autoload transparent container' ,
                                                                       'url'=>site_url('clinic/comments/ajax_edit/0/'.$visit_id.'/0' ))));
                                                   echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                                                   r_theme_section_end();
                                                   r_theme_row_end() ;*/
                                                   
                                                   }
                                                   
?> 
 <div class="tab-pane " id="">
     

      </div>
      </div>
      </div>
      </div>
      
    <?php
   // }
r_theme_section_end();

r_theme_section_start(3,array());


  $this->load->view("_general/title_message",array("title"=>"Arrived Already","content"=>"","color"=>"green_color")) ;
                      
r_theme_row_start() ; 
r_theme_section_start(12,array("id"=>"arrived_visit_list_section","attributes"=>array(
                          'class'=>'autoload hide_with_menu autorefresh ' ,
                          'url'=>site_url('clinic/visits/ajax_table2/0/arrivals/'. date('Y-m-d') .'/day_visits' ) )));   
                            echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;    
                                                 
r_theme_section_end();
r_theme_row_end() ;

echo "<br/>" ; 
$this->load->view("_general/title_message",array("title"=>"Waiting To Arrive","content"=>"Reservations Expected to Arrive","color"=>"blue_color")) ; 
//                       


r_theme_row_start() ; 
r_theme_section_start(12,array("id"=>"today_visit_list_section","attributes"=>array(
                         'class'=>'autoload hide_with_menu autorefresh' ,
                         'url'=>site_url('clinic/visits/ajax_table2/0/appointments/'. date('Y-m-d') .'/day_visits' ) )));   
                           echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                          
r_theme_section_end();
r_theme_row_end() ;


r_theme_section_end();
r_theme_row_end() ;


                    r_theme_row_start() ;
                    r_theme_section_start(12,array("id"=>"image_edit_sectionx","attributes"=>array(
                                                  'class'=>'container modal hide' ,
                                                  'url'=>""))); 
                    echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                    r_theme_section_end();
                    r_theme_row_end() ;

         
    ?>
    
    <a class="r_automation" caller_key = "print_prescription_button" automation_verb="print"
        automation_target = "_blank"
        automation_action ="load_print_page"
        automation_url="<?php echo site_url('clinic/prescriptions/print_prescription/'.$visit_id) ?>"     
        comment ="load and print"
    ></a>
    
    <!-- TABS WORK -->
    
  <a class="r_automation" 
        caller_key = "show_images" 
        automation_verb="Click"
        automation_action ="reload"
        automation_target = 'image_list_section' 
        automation_url=""   
    ></a>
  
  <a class="r_automation" 
        caller_key = "show_visits" 
        automation_verb="Click"
        automation_action ="reload"
        automation_target = 'visit_list_section' 
        automation_url=""   
    ></a>
    
    
    <a class="r_automation" 
        caller_key = "show_evals" 
        automation_verb="Click"
        automation_action ="reload"
        automation_target = 'evaluation_list_section' 
        automation_url=""   
    ></a>
  
    <a class="r_automation" 
        caller_key = "show_evals" 
        automation_verb="Click"
        automation_action ="clear_modal"
        automation_target = 'evaluation_compare_section' 
        automation_url=""   
    ></a>  
    
     <a class="r_automation" 
        caller_key = "show_evals" 
        automation_verb="Click"
        automation_action ="show_section"
        automation_target = 'evaluation_list_section' 
        automation_url=""   
    ></a>  
    
   <a class="r_automation" 
        caller_key = "show_evals_campare" 
        automation_verb="Click"
        automation_action ="clear_modal"
        automation_target = 'evaluation_list_section' 
        automation_url=""   
    ></a>
     
    
     <a class="r_automation" 
        caller_key = "show_evals_campare" 
        automation_verb="Click"
        automation_action ="reload"
        automation_target = 'evaluation_compare_section' 
        automation_url=""   
    ></a>
    
           <a class="r_automation" 
        caller_key = "show_evals_campare" 
        automation_verb="Click"
        automation_action ="show_section"
        automation_target = 'evaluation_compare_section' 
        automation_url=""   
    ></a>
    
     <a class="r_automation" 
        caller_key = "show_evals_campare" 
        automation_verb="Click"
        automation_action ="clear_modal"
        automation_target = 'evaluation_list_section' 
        automation_url=""   
    ></a>
    
    
    
    
    <a class="r_automation" 
        caller_key = "patient_edit_form" 
        automation_verb="post_form"
        automation_action ="post_form"
        automation_target = 'patient_edit_section' 
        automation_url="[get_from_caller]"   
    ></a>
    
    
    <a class="r_automation" 
        caller_key = "patient_edit_form" 
        automation_verb="form_post_success"
        automation_target = 'patient_edit_section' 
        automation_action ="reload"
        automation_url=""   
    ></a>


        <a  
        class="r_automation" 
        
        caller_key = "calendar_day" 
        automation_verb="click"
        automation_target = "appointment_edit_section"
        automation_action ="load_form_modal"
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
        <!-------------------------------- comment Automation------------------------------------------>
       <!-- COMMENT  ACTIONS HANLDERS -->
       <a   class="r_automation"        
            caller_key = "comment_table" 
            automation_verb="edit"      
            
            automation_target = "comment_edit_section"
            automation_action ="load_form"
            automation_url="[get_from_caller]"   
           
        ></a>

       <!-- cancel delete -->   
       <a class="r_automation" 
        
        caller_key = "comment_delete_form" 
        automation_verb="post_form"
        
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
        
        ></a>   
        <a class="r_automation" 
        
        caller_key = "comment_edit_form" 
        automation_verb="form_cancel"
        
        automation_target = "comment_edit_section"
        automation_action ="reload"
        automation_url=""   
    
        ></a>

        <a 
        class="r_automation" 
        
        caller_key = "comment_table" 
        automation_verb="delete"
        
        automation_target = "comment_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>
           <!-- refresh comment list after delete handler -->  
           <a class="r_automation" 
        
            caller_key = "comment_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "comment_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>       

       <a class="r_automation" 
        
            caller_key = "comment_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "comment_edit_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>        

       <!-- post form  comment  handler -->    
       <a class="r_automation"      
        
        caller_key = "comment_edit_form" 
        automation_verb="post_form"             
        
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
    
        ></a>
         
        <a class="r_automation" 
    
            caller_key = "comment_edit_form" 
            automation_verb="form_post_success"     
            automation_target = "comment_edit_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
        
                <!-- refresh comment list handler -->   
            <a class="r_automation" 
        
            caller_key = "comment_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "comment_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
            
        <!-- delete comment handler --> 
        
             
        <!-- cancel delete form  history  handler -->   
        
       
        
 
            <!-------------------------------------------Prescription Automation-------------------------------->
    
       
        
        <!-- edit handler prescription  --> 
        <a 
        class="r_automation" 
        
        caller_key = "prescription_table" 
        automation_verb="edit"
        
        automation_target = "prescription_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>
    
                  <!-- post form  prescription  handler -->   
           <a class="r_automation" 
        
                caller_key = "prescription_edit_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
    
     <!-- refresh prescription edit section handler -->  
            <a class="r_automation" 
        
            caller_key = "prescription_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "prescription_edit_section"  
              automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/prescriptions/ajax_edit/0/'.$visit_id.'/0' ); ?>" 
               
        ></a>
        
  
        
          <!-- refresh prescription list handler -->  
            <a class="r_automation" 
        
            caller_key = "prescription_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "prescription_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
        
      

        
      
          
        
        
       <!-- edit handler prescription  --> 
       <a 
        class="r_automation" 
        
        caller_key = "test_result_table" 
        automation_verb="edit"
        
        automation_target = "test_result_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>
    
                  <!-- post form  test_result  handler -->   
           <a class="r_automation" 
        
                caller_key = "test_result_edit_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
    
     <!-- refresh test_result edit section handler -->  
            <a class="r_automation" 
            
        
            caller_key = "test_result_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_result_edit_section"  
              automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/test_results/ajax_edit/0/'.$visit_id.'/0' ); ?>" 
               
        ></a>
        
  
        
          <!-- refresh test_result list handler -->  
            <a class="r_automation" 
        
            caller_key = "test_result_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_result_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
         
        <a 
        class="r_automation" 
        
        caller_key = "test_result_table" 
        automation_verb="delete"
        
        automation_target = "_delete_section"
        automation_action ="load_form_modal"
        automation_url="[get_from_caller]"   
           
        ></a>

        
        <!-- post form delete test_result  handler --> 
           <a class="r_automation" 
        
                caller_key = "test_result_delete_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
        
               <a class="r_automation" 
        
            caller_key = "test_result_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_result_edit_section"  
              automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/test_results/ajax_edit/0/'.$visit_id.'/0' ); ?>" 
               
        ></a>
        
        <!-- clear delete test_result form handler -->    
        <a class="r_automation" 
            caller_key = "test_result_delete_form"  
            automation_verb="form_post_success"
            
            automation_target = "_delete_section"
            automation_action ="clear_modal"
            automation_url=""   
        ></a>
        
      
        <!-- refresh test_result list after delete handler --> 
            <a class="r_automation" 
        
            caller_key = "test_result_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_result_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a> 
        <!-- refresh prescription list after delete handler --> 
            <a class="r_automation" 
        
            caller_key = "prescription_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "prescription_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>   
        
     
        
    <!-- post appoint form(to press save) handler -->   
       <a class="r_automation"    
        caller_key = "visit_edit_form" 
        automation_verb="post_form"
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
            
        ></a>
    <!-- clear add appoint form (after press save) handler -->     
        <a class="r_automation" 
        caller_key = "visit_edit_form"  
        automation_verb="form_post_success"
        
        automation_target = "appointment_edit_section"
        automation_action ="clear_modal"
        automation_url=""   
        ></a>
    <!-- refresh appoint list (after press save) handler -->    
        <a class="r_automation" 
    
        caller_key = "visit_edit_form" 
        automation_verb="form_post_success"
        
        automation_target = "new_visit_list_section"  
        automation_action ="hide_section"
        automation_url=""
               
        ></a>   
        
   
        

    <!--- cancel handler -->
            <a class="r_automation" 
        
            caller_key = "visit_edit_form" 
            automation_verb="form_cancel"
            
            automation_target = "appointment_edit_section"
            automation_action ="clear_modal"
            automation_url="[get_from_caller]"   
            
            ></a>  
            
             
   <!-- refresh visits list (after add appointment) handler -->    
        <a class="r_automation" 
    
        caller_key = "visit_edit_form" 
        automation_verb="form_post_success"
        
        automation_target = "appointment_list"  
        automation_action ="reload"
        automation_url=""
               
        ></a>         
<!-----------------------------------------Open - delete visit ---------------->
          
    <!-- delete visit handler -->   
        <a 
        class="r_automation"        
        caller_key = "visit_table" 
        automation_verb="delete"        
        automation_target = "new_visit_edit_section"
        automation_action ="load_form_modal"
        automation_url="[get_from_caller]"   
           
        ></a>
        
    <!-- open visit handler --> 
        <a 
        class="r_automation"        
        caller_key = "visit_table" 
        automation_verb="open_document"     
        automation_target = "_self"
        automation_action ="just_go_to_page"
        automation_url="[get_from_caller]"   
           
        ></a>
        <!--------------------------------------------- Test requests Handler-------------------------------------
    
     <!-- edit handler prescription  --> 
     <a 
        class="r_automation" 
        
        caller_key = "test_request_table" 
        automation_verb="edit"
        
        automation_target = "test_request_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>
    
                  <!-- post form  test_request  handler -->   
           <a class="r_automation" 
        
                caller_key = "test_request_edit_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
    
     <!-- refresh test_request edit section handler -->  
            <a class="r_automation" 
        
            caller_key = "test_request_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_request_edit_section"  
              automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/test_requests/ajax_edit/0/'.$visit_id.'/0' ); ?>" 
               
        ></a>
        
  
        
          <!-- refresh test_request list handler -->  
            <a class="r_automation" 
        
            caller_key = "test_request_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_request_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
        
        <a 
        class="r_automation" 
        
        caller_key = "test_request_table" 
        automation_verb="delete"
        
        automation_target = "_delete_section"
        automation_action ="load_form_modal"
        automation_url="[get_from_caller]"   
           
        ></a>

        
        <!-- post form delete test_request  handler --> 
           <a class="r_automation" 
        
                caller_key = "test_request_delete_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
        
               <a class="r_automation" 
        
            caller_key = "test_request_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_request_edit_section"  
              automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/test_requests/ajax_edit/0/'.$visit_id.'/0' ); ?>" 
               
        ></a>
        
        <!-- clear delete test_request form handler -->    
        <a class="r_automation" 
            caller_key = "test_request_delete_form"  
            automation_verb="form_post_success"
            
            automation_target = "_delete_section"
            automation_action ="clear_modal"
            automation_url=""   
        ></a>
        
      
        <!-- refresh test_request list after delete handler --> 
            <a class="r_automation" 
        
            caller_key = "test_request_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_request_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>  
<!------------------------------- delete handler ------------------------------>
    
    <!-- cancel delete form visit handler -->   
       <a class="r_automation"     
        caller_key = "visit_edit_form" 
        automation_verb="form_cancel"       
        automation_target = "new_visit_edit_section"
        automation_action ="clear_modal"
        automation_url="[get_from_caller]"   
            
        ></a>
    
    <!-- post form delete visit  handler -->    
       <a class="r_automation"      
        caller_key = "visit_delete_form" 
        automation_verb="post_form"     
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
            
        ></a>               
        
    <!-- clear delete visit form handler -->       
        <a class="r_automation" 
        caller_key = "visit_delete_form"  
        automation_verb="form_post_success"     
        automation_target = "new_visit_edit_section"
        automation_action ="clear_modal"
        automation_url=""   
        ></a>
        
    <!-- refresh visit list after delete handler -->    
        <a class="r_automation"     
        caller_key = "visit_delete_form" 
        automation_verb="form_post_success"     
        automation_target = "appointment_list"  
        automation_action ="reload"
        automation_url=""
               
        ></a>
<!-----------------------------Appointment Automation------------------------------------------>
          <!-- add new appoint handler -->
        <a  
        class="r_automation" 
        
        caller_key = "new_appointment_button" 
        automation_verb="add_new_appointment"
        automation_target = "new_visit_list_section"
        automation_action ="load_form"
        automation_url="<?php echo site_url('clinic/visits/ajax_schedule/patient_master/'.$patient_id) ; ?>"   
           
        ></a>       
        <a  
        class="r_automation" 
        
        caller_key = "hide_calendar" 
        automation_verb="hide_calendar"
        automation_target = "new_visit_list_section"
        automation_action ="hide_section"
        automation_url=""   
           
        ></a>    
        
      
 
        
<!-----------------------------history Automation------------------------------------------>
        
        <!-- add new history handler -->
        <a  
        class="r_automation" 
        
        caller_key = "new_history_button" 
        automation_verb="add_new_history"
        automation_target = "history_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>
        
        <!-- edit handler history  -->  
        <a 
        class="r_automation" 
        
        caller_key = "history_line_table" 
        automation_verb="edit"
        
        automation_target = "history_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>
        <!-- delete history  handler -->    
        <a 
        class="r_automation" 
        
        caller_key = "history_line_table" 
        automation_verb="delete"
        
        automation_target = "history_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>
        
        <!-- post form  history  handler -->    
       <a class="r_automation" 

        caller_key = "history_line_edit_form" 
        automation_verb="post_form"
        
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
    
        ></a>
     
       
        <!-- cancel delete form  history  handler -->   
      
        <!-- cancel form  history handler -->   
       <a class="r_automation" 
        
        caller_key = "history_line_edit_form" 
        automation_verb="form_cancel"
        
        automation_target = "history_edit_section"
        automation_action ="reload"
        automation_url=""   
    
        >
        </a>
       
        <!-- cancel delete form  history  handler -->   
      
        <!-- post form delete history  handler -->  
       <a class="r_automation" 
        
        caller_key = "history_line_delete_form" 
        automation_verb="post_form"
        
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
        
        ></a>
        
        
        
        <!-- clear  history  form handler --> 
        
        <a class="r_automation" 
        caller_key = "history_line_edit_form"  
        automation_verb="form_post_success"
        
        automation_target = "history_edit_section"
        automation_action ="reload"
        automation_url=""   
        ></a>
        <!-- clear delete history form handler -->     
        <a class="r_automation" 
            caller_key = "history_line_delete_form"  
            automation_verb="form_post_success"
            
            automation_target = "history_edit_section"
            automation_action ="reload"
            automation_url=""   
        ></a>
        
        <!-- refresh history list handler -->   
            <a class="r_automation" 
        
            caller_key = "history_line_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "history_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
        
            <a class="r_automation" 
        
            caller_key = "history_line_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "history_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>   
        
                                          
        <!-- refresh history list after delete handler -->  
            <a class="r_automation" 
        
            caller_key = "visits_tab" 
            automation_verb="refresh"
            
            automation_target = "visit_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>  
        
        <!-- handler toggle -->   
        <a 
        class="r_automation" 
        
        caller_key = "image_toggle" 
        automation_verb="asd"
        
        automation_target = "image_edit_section"
        automation_action ="toggle_section"
        automation_url=""   
           
        ></a>
      
 
       

        <a  
        class="r_automation" 
        
        caller_key = "print" 
        automation_verb="prescription"
        automation_target = "precription_edit_section"
        automation_action ="load_form_modal"
        automation_url="[get_from_caller]"   
        ></a>

       
        <!-- THE POSTING OF THE NEW IMAGE -->   
       <a class="r_automation" 

        caller_key = "new_image_form" 
        automation_verb="post_form"
        
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
    
        ></a>
       

<!-- refresh history list handler -->   
<a class="r_automation" 
        
            caller_key = "new_image_form" 
            automation_verb="form_post_success"
            
            automation_target = "image_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>

        <a class="r_automation" 
        
            caller_key = "new_image_form" 
            automation_verb="form_post_success"
            
            automation_target = "image_edit_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
       

        <!-- NOW THE DELETE OF THE IMAGE -->
        <a 
        class="r_automation" 
        
        caller_key = "image_table" 
        automation_verb="delete"
        
        automation_target = "image_edit_sectionx"
        automation_action ="load_form_modal"
        automation_url="[get_from_caller]"   
           
        ></a>

           
        
       
        <!-- post form delete history  handler -->  
       <a class="r_automation" 
        
        caller_key = "image_delete_form" 
        automation_verb="post_form"
        
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
        
        ></a>
        
       <!-- cancel form  history handler -->   
       <a class="r_automation" 
        
        caller_key = "image_edit_form" 
        automation_verb="form_cancel"
        
        automation_target = "image_edit_sectionx"
        automation_action ="clear_modal"
        automation_url="[get_from_caller]"   
    
        ></a>
        <!-- clear delete history form handler -->     
        <a class="r_automation" 
            caller_key = "image_delete_form"  
            automation_verb="form_post_success"
            
            automation_target = "image_edit_sectionx"
            automation_action ="clear_modal"
            automation_url=""   
        ></a>
     
        
            <a class="r_automation" 
        
            caller_key = "image_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "image_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>   
        
            <!--Visit -->

         <a class="r_automation" 
        
            caller_key = "change_status_button" 
            automation_verb="change_status"
            
            automation_target = "today_visit_list_section"  
            automation_action ="reload"
            automation_url=""
               
            ></a>
           
            <!-- refresh new today visits list handler -->  
            
            <a class="r_automation" 
        
            caller_key = "change_status_button" 
            automation_verb="change_status"
            
            automation_target = "arrived_visit_list_section"  
            automation_action ="reload"
            automation_url=""
               
            ></a>
            <a class="r_automation" 
        
            caller_key = "visit_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "arrived_visit_list_section"  
            automation_action ="reload"
            automation_url=""
               
            ></a>   
            <a 
            class="r_automation" 
            
            caller_key = "change_status_button" 
            automation_verb="change_status"
            
            automation_target = "_"
            automation_action ="post_form"
            automation_url="[get_from_caller]"   
               
            ></a>
            <a class="r_automation" 
        
            caller_key = "change_status_button" 
            automation_verb="change_status"
            
            automation_target = "day_visits_list_section"  
            automation_action ="reload"
            automation_url=""
               
            ></a>
            
            <a 
            class="r_automation" 
            
            caller_key = "change_status_button_to_checked"          
            automation_verb="change_status_to_checked"
            
            automation_target = "_self"
            automation_action ="just_go_to_page"
            automation_url= "[get_from_caller]"
            
               
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
         
            
  <!-- post form delete prescription  handler -->        
        <a class="r_automation" 
        
        caller_key = "prescription_edit_form" 
        automation_verb="form_cancel"
        
        automation_target = "prescription_edit_section"
        automation_action ="reload"
        automation_url=""   
    
        ></a>

        <a 
        class="r_automation" 
        
        caller_key = "prescription_table" 
        automation_verb="delete"
        
        automation_target = "prescription_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>
           <!-- refresh comment list after delete handler -->  
           <a class="r_automation" 
        
            caller_key = "prescription_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "prescription_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>       

       <a class="r_automation" 
        
            caller_key = "prescription_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "prescription_edit_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>        

        <a 
        class="r_automation" 
        
        caller_key = "prescription_table" 
        automation_verb="delete"
        
        automation_target = "prescription_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>        
        <a class="r_automation" 
        
            caller_key = "prescription_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "prescription_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>       

       <a class="r_automation" 
        
            caller_key = "prescription_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "prescription_edit_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>   
        <a class="r_automation" 
        
        caller_key = "prescription_delete_form" 
        automation_verb="post_form"
        
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
        
        ></a>  


        <!------- Evaluation  Automation 
            
      New Eval Button Click                 --  > toggle new eval form 
      New Eval Form Cancel -              --  > toggle new eval form 
      
      New Eval Form Save                    -- > POST and Load Eval Edit Form  
      Eval Edit Form Cancel                --  >  Clear Eval Edit Form
      Eval Edit Form Cancel                --  >  toggle new eval form
      
      Eval Edit Form Save                --  >   POST FORM
      Eval Edit Form Success                --  >   toggle new eval form 
      Eval Edit Form Success                --  >  Clear Eval Edit Form
      Eval Edit Form Success                --  >  RE- Load Evals List 
       
         -->
        
        
        
          <a 
        class="r_automation" 
        
        caller_key = "Eval_Button" 
        automation_verb="Click"
        
        automation_target = "evaluation_new_section"
        automation_action ="toggle_section"
        automation_url=""   
           
        ></a>
        
        
        <a class="r_automation" 
        caller_key = "new_eval_form" 
        automation_verb="post_form"
        automation_action ="post_form_load"
        automation_target = 'evaluation_edit_section' 
        automation_form_success_target= 'evaluation_edit_section' 
        automation_url="[get_from_caller]"   
    ></a>
    
        <a class="r_automation" 
            caller_key = "new_eval_form" 
            automation_verb="form_cancel"
    automation_target = "evaluation_new_section"
        automation_action ="toggle_section"
            automation_url=""   
        ></a>
        
     <a class="r_automation" 
            caller_key = "evaluation_edit_form" 
            automation_verb="form_cancel"
            automation_target = 'evaluation_edit_section' 
            automation_action ="clear_modal"
            automation_url=""   
        ></a>
        
         <a class="r_automation" 
            caller_key = "evaluation_edit_form" 
            automation_verb="form_cancel"
                 automation_target = "evaluation_new_section"
        automation_action ="hide_section"
            automation_url=""   
        ></a>
    
        <!------- Evaluation -->
        <a class="r_automation" 
        caller_key = "evaluation_edit_form" 
        automation_verb="post_form"
        automation_action ="post_form"
        automation_target = 'evaluation_edit_section' 
        automation_url="[get_from_caller]"   
    ></a>
    
    <a class="r_automation" 
        caller_key = "evaluation_edit_form" 
        automation_verb="form_post_success"
        automation_target = 'evaluation_edit_section' 
        automation_action ="clear_modal"
        automation_url=""   
    ></a>
   
    <a class="r_automation" 
        caller_key = "evaluation_edit_form" 
        automation_verb="form_post_success"
        automation_target = 'evaluation_list_section' 
        automation_action ="reload"
        automation_url=""   
    ></a>
     
    
    
     <a class="r_automation" 
        caller_key = "evaluation_edit_form" 
        automation_verb="form_post_success"
         automation_target = "evaluation_new_section"
        automation_action ="toggle_section"
        automation_url=""   
    ></a>
    
    <a   class="r_automation"        
            caller_key = "evaluation_table" 
            automation_verb="edit"      
            
            automation_target = "evaluation_edit_section"
            automation_action ="load_form_modal"
            automation_url="[get_from_caller]"   
           
        ></a>

        <a  
	        class="r_automation" 
	        
	        caller_key = "reserv" 
	        automation_verb="appoint"
	        automation_target = "appointment_edit_section"
	        automation_action ="load_form_modal"
	        automation_url="[get_from_caller]"   
	             
	        ></a>
            <a class="r_automation" 
        caller_key = "visit_edit_form"  
        automation_verb="form_post_success"
        
        automation_target = "appointment_edit_section"
        automation_action ="clear_modal"
        automation_url=""   
        ></a>
              <!-- cancel handler -->
              <a class="r_automation" 
        
            caller_key = "visit_edit_form" 
            automation_verb="form_cancel"
            
            automation_target = "appointment_edit_section"
            automation_action ="clear_modal"
            automation_url="[get_from_caller]"   
            
            ></a>  
            
      <!--
              <a class="r_automation" 
        
            caller_key = "new_evaluation_form" 
            automation_verb="form_post_success"
            
            automation_target = "evaluation_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>  
        -->

            <div class="row-fluid" >
        <div  id="imagemodal"  class="span12 modal transparent container hide  "  style=" position: absolute;    top: 30px;"    >
        <div class="modal-dialog">
   <div class="modal-content">
    
      <div class="modal-body">
            <button type="button" class="btn blue btn-default pull-right" data-dismiss="modal">Close</button>
       
          <h4 class="modal-title" id="myModalLabel"></h4>
       <img  id="imagepreview"  src=""    style="margin:10;width=100% " width=100% />
     
      </div>
      
    </div>
  </div>
  </div></div>       
         
<?php

  // ----------------------------------------------  FOOTER -------------------------------------------------------------       
    echo loadView($public_data["template_folder"].'footer',$public_data);   

?> 