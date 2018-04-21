  <div class="tabbable tabbable-custom" style="backxground-color: grey;">    
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#patient_information_tab"  data-toggle="tab"  ><?php echo r_langline('Personal'); ?></a></li>
                          
                          <li  >
                          <a href="#patient_notes_tab"  data-toggle="tab" class="ajax_xxaction autoaction " caller_id="notes_tab" caller_verb="reload"
                              
                               ><?php echo r_langline(' Notes'); ?></a></li>
                          
                          <li class=""><a href="#past_visits_tab"  data-toggle="tab"  ><?php echo r_langline('P.Visits'); ?></a></li>
                          
                          <li class=""> <a href="#images_tab"  data-toggle="tab"  ><?php echo r_langline('Imaging'); ?></a></li>
                          
                          <li class=""> <a href="#evals_tab"  data-toggle="tab"  ><?php echo r_langline('Evaluations'); ?></a></li>
                    
<?php
if ($visit_id != "" ) 
{

    ?>
                        <li class="">
                        <a href="#current_visit_tab"  data-toggle="tab"  >
                        
                                    <?php echo r_langline('Last / This Visit'); ?>
                           
                        </a>  </li>
        
<?php  
}

?>
  </ul>

 
       <br>
   
     <div class="tab-content">
      <div class="tab-pane active" id="patient_information_tab">
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
              r_theme_row_start() ;     
                    r_theme_section_start(12 , array(
                      "id"=>"history_edit_section",
                      "attributes"=>array(
                       'class'=>'autoload rezload' ,
                       'url'=>site_url('clinic/history_lines/ajax_edit/0/'.$patient_id.'/0/') ))); 
                      echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                    r_theme_section_end();
                r_theme_row_end() ;
            echo "s" ; 
                r_theme_row_start() ;     
                    r_theme_section_start(12,array("id"=>"history_list_section",
                          "attributes"=>array(
                              'class'=>'autoload reload' ,
                              'url'=>site_url('clinic/history_lines/ajax_table/'.$patient_id) ))); 
                           echo '<div align="right"><img align="right" src='.base_url("loading.gif").'></div>' ;                         
                    r_theme_section_end();
                r_theme_row_end() ; 
                ?>
            </div>
      <div class="tab-pane " id="past_visits_tab">
    <?php  
                r_theme_row_start() ;     
                    r_theme_section_start(12,array("id"=>"visit_list_section",
                                             "attributes"=>array(
                                             'class'=>'autoload' ,
                                             'url'=>site_url('clinic/visits/ajax_table/'.$patient_id."/checked_in/0/patient_visits")  ))); 
                                                 echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                    r_theme_section_end();
                r_theme_row_end() ; 
                                 ?> 
      </div>
      <div class="tab-pane " id="evals_tab">
    <?php  
                r_theme_row_start() ;     
                    r_theme_section_start(12,array("id"=>"evaluation_form_list_section",
                                             "attributes"=>array(
                                             'class'=>'autoload' ,
                                             'url'=>site_url('clinic/evaluation_forms/ajax_table/'.$patient_id."/checked_in/0/patient_visits")  ))); 
                                                 echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                    r_theme_section_end();
                r_theme_row_end() ; 
                                 ?> 
      </div>
      <div class="tab-pane " id="images_tab">
          <button class="ajax_action btn green" caller_id="image_toggle" caller_verb="asd">New</button><br/><br/>
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
                'class'=>'autoload reload' ,
                'url'=>site_url('clinic/images/ajax_table/'.$patient_id) ))); 
             echo '<div align="right"><img align="right" src='.base_url("loading.gif").'></div>' ;                         
r_theme_section_end();
r_theme_row_end() ; 

?>
    </div>
        <div class="tab-pane active" id="evals_tab">
      </div>

      <div class="tab-pane " id="current_visit_tab">
  <?php
    r_theme_row_start() ;     
    r_theme_section_start(12,array("id"=>"visit_edit_section","attributes"=>array(
                                  'class'=>'autoload' ,
                                  'url'=>site_url('clinic/Visits/ajax_edit'). '/' . $visit_id )));  
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
?>
      </div>
      
<?php
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
                                                  
                                                
                                          
?> 
</div>
      </div>
      </div>
      </div>
      
