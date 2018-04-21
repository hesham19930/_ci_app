            
<?php

    //$this_concept = "item_group" ; 
    //$this_controller = "data/".$this_concept."s";
    //$this_id_field = "item_group_id" ; 
    //$this_name_field = "item_group_name" ; 
    //$this_name_field_ar = "item_group_name" ;
        // BEGIN PAGE SETTINGS
        
    
    $this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
   if (count($list_table->Rows) ==0 )
   {
       $this->load->view( '_general/norecords_message');
   } 
   else 
     {
    $line_verb_attibutes = array(); 
    $line_verbs = array () ;    
    $page_rows = 20 ; 
    if (  !isset(    $header_color )) $header_color = "blue" ; 
    
    if (!isset ($table_purpose)) $table_purpose = "" ; 
    
    //echo "TP:".$table_purpose ; 
    
    $hide_add_button = false ; 
    $hide_line_verbs  = false ; 
    $disable_line_add = false ; 
    $disable_line_edit = false ; 
    $disable_line_delete = false ; 
    $autotable = "autodatatable" ; 
    $line_verbs_buttons = 0 ; 
    $line_verbs_colors = false ; 
$show_all_details = false ; 

     

    
    if (isset($full_item_page))
        {
            $edit_url_segment = "addedit" ; 
        }  
    else
        {   $edit_url_segment = "ajax_edit" ; 
        } 
            
    $add_url_extension = "" ; 
    $edit_url_extension = "" ; 

    
    // open  button Initials   ---------------------------------------------------------------------------------------------------------------------
     $enable_open_button = false ; 
     $open_url_suffix = "" ; 
     $open_url_extension = "" ;
     
    // copy button Inintials  ---------------------------------------------------------------------------------------------------------------------
     $show_line_copy = false ; 
    $copy_url_extension = "" ; 
    $copy_verb = "copy_document";
    $copy_url_suffix = "" ;
     
    if (isset($options))
    {
        
        if (key_exists("enable_open_button", $options)) 
        {
            if ($options["enable_open_button"]==true) {
                $enable_open_button = true ; 
                $open_url_suffix = $options["open_url_suffix"] ; 
                $open_url_field = $options["open_url_field"];
            } 
        }
        
        
        if (key_exists("show_line_copy", $options)) 
        {
            if ($options["show_line_copy"]==true) {
                $show_line_copy = true ; 
                $copy_url_suffix = $options["copy_url_suffix"] ; 
                $copy_url_field = $options["copy_url_field"];
                if (key_exists("copy_url_extension", $options)) $copy_url_extension = $options["copy_url_extension"] ;  
                if (key_exists("copy_verb", $options)) $copy_verb =   $options["copy_verb"] ;  
            } 
        }
        
        
        
        if (key_exists("hide_add_button", $options)) $hide_add_button = $options["hide_add_button"] ; 
        if (key_exists("hide_line_verbs", $options)) $hide_line_verbs = $options["hide_line_verbs"] ;   
        if (key_exists("disable_line_add", $options)) $disable_line_add = $options["disable_line_add"] ;    
        if (key_exists("disable_line_edit", $options)) $disable_line_edit = $options["disable_line_edit"] ;     
        if (key_exists("disable_line_delete", $options)) $disable_line_delete = $options["disable_line_delete"] ; 
        
        
        
        if (key_exists("add_url_extension", $options)) $add_url_extension = $options["add_url_extension"] ;     
    
        if (key_exists("edit_url_extension", $options)) $edit_url_extension = $options["edit_url_extension"] ;  
        if (key_exists("open_url_extension", $options)) $open_url_extension = $options["open_url_extension"] ;
        
        
        
    //      echo "S:".$show_line_copy . ",,," . $options["show_line_copy"];

        if (key_exists("disable_datatable", $options)) {
                if ($options["disable_datatable"]==true) $autotable = "" ; 
            }  
            if (key_exists("show_all_details", $options)) {
                if ($options["show_all_details"]==true) $show_all_details = true ; 
            }  
        if (key_exists("line_verbs_buttons", $options)) {
                if ($options["line_verbs_buttons"]==true) $line_verbs_buttons = 1 ; 
            } 
        if (key_exists("line_verbs_colors", $options)) $line_verbs_colors = $options["line_verbs_colors"] ; 
    }
    //echo  "LE".$disable_line_edit ;   
    if ($table_purpose== "")
    {
//  echo '<div class="clearfix"></div>'; 
    ?>
        <a class="r_automation" caller_key = '<?php echo $this_concept."_table" ?>'  automation_verb="open_document"
                    automation_url="[get_from_caller]"   
                    automation_target = "_self"
                    automation_action ="just_go_to_page"
        ></a>
        
        <a class="r_automation" caller_key = '<?php echo $this_concept."_table" ?>'  automation_verb="copy_document"
            automation_url="[get_from_caller]"   
            automation_target = "_self"
            automation_action ="just_go_to_page"
        ></a>
        
    <?php
        
    //  echo $this_controller ; 
    //  echo $this_id_field;
    //  echo $this_concept ; 
    
    
    
    
   if (key_exists("show_csv", $options))
   {
       if ($options["show_csv"]==true )
       {
           
   
    ?>
        <div class="table-toolbar">
        <div class="btn-group pull-right" id="TTB">
        </div>  
        <div class="btn-group pull-right" >
        <button 
                
                id="export_all"  name="export_all" 
                class="btn green ajax_no_action master_font hide_with_menu" 
                caller_verb="add"
                                
                >
                Prep. CSV  <i class="icon-download-alt"></i>
                </button>   
        </div>  
    <?php
        }
   } 
   
        if (!$hide_add_button)
        {
    ?>

                
        
            <!--
            <div class="btn-group pull-left">
                
                <button class="btn dropdown-toggle blue master_font " data-toggle="dropdown"><?php echo r_langline("general.button_tools") ; ?><i class="icon-angle-down"></i>
                </button>
                
                <ul class="dropdown-menu pull-left master_font">
                    <li><a href="#"
                        class="ajax_action" 
                        caller_url= "<?php echo site_url($this_controller."/ajax_edit/") ; ?>"
                        caller_id= "<?php echo $this_concept.'_table' ;?>" 
                        caller_verb="add"
                        ><i class="icon-plus"></i><?php echo r_langline("general.button_add") ; ?> &nbsp;</a></li>
                </ul>
                
            </div>
                -->
            
            <div class="btn-group pull-right" >
                <button 
                
                id="sample_editable_1_new"  
                class="btn red ajax_action master_font hide_with_menu" 
                caller_url= "<?php echo site_url($this_controller."/".$edit_url_segment."/0/") ; ?>"
                caller_id= "<?php echo $this_concept.'_table' ;?>" 
                caller_verb="add"
                                
                >
                <?php echo r_langline("general.button_add") ; ?>  <i class="icon-plus"></i>
                </button>
            </div>
    
        <?php
            }
        ?>
        <div class="clearfix"></div>  
    <?php
        }

        
    
            
        $line_verbs = array ();
        if (!$hide_line_verbs)
        {
                $line_verb_attibutes["add"] = Array(
                "class"=>"ajax_action master_font ". iif($line_verbs_colors , "btn white","") ,  
                "caller_url" => site_url($this_controller."/".$edit_url_segment."/0/".$add_url_extension) , 
                "caller_id"=>$this_concept."_table" ,
                "caller_verb"=>"add"
        ) ; 
        
        
        $line_verb_attibutes["edit"] = Array(
                "class"=>"ajax_action master_font ". iif($line_verbs_colors , "btn green","") ,  
                "caller_url" => site_url($this_controller."/".$edit_url_segment."/vvv_ID_vvv/".$edit_url_extension) , 
                "caller_id"=>$this_concept."_table" ,
                "caller_verb"=>"edit",
                "caller_target"=>"details_vvv_ID_vvv"
        ) ;
        
        
        $line_verb_attibutes["delete"] = Array(
                "class"=>"ajax_action master_font ". iif($line_verbs_colors , "btn red","") ,  
                "caller_url" => site_url($this_controller."/ajax_delete/vvv_ID_vvv") , 
                "caller_id"=>$this_concept."_table" ,
                "caller_verb"=>"delete",
                        "caller_target"=>"details_vvv_ID_vvv"
                
        ) ;
        

        $line_verb_attibutes["copy"] = Array(
            "class"=>"ajax_action master_font ". iif($line_verbs_colors , "btn yellow","") ,  
            "caller_url" =>$copy_url_suffix."/vvv_ID_vvv/".$copy_url_extension ,  
            "caller_id"=>$this_concept."_table" ,
            "caller_verb"=>$copy_verb , 
             "caller_target"=>"details_vvv_ID_vvv"              
        ) ;
                
        
        
        $line_verb_attibutes["open"] = Array(
                "class"=>"ajax_action master_font ". iif($line_verbs_colors , "btn blue","") ,  
                "caller_url" => $open_url_suffix."/vvv_ID_vvv/".$open_url_extension ,  
                "caller_id"=>$this_concept."_table" ,
                "caller_verb"=>"open_document"  ,
                 "caller_target"=>"details_vvv_ID_vvv"                          
        ) ;
    
        if ($show_line_copy)
            {
                     $line_verbs["copy"] = array(
                                        "caption"=>iif($line_verbs_buttons,"",r_langline("general.button_copy")) ,
                                        "attributes"=>$line_verb_attibutes["copy"] , 
                                        "icon" => "icon-copy",
                                        "id_column"=>$this_id_field);   
            }   
            
            if (!$disable_line_add){
                $line_verbs["add"] =    array(
                                        "caption"=>iif($line_verbs_buttons,"",r_langline("general.button_add")) ,
                                        "attributes"=>$line_verb_attibutes["add"] , 
                                        "icon" => "icon-plus",
                                        "id_column"=>$this_id_field);   
            }
            if (!$disable_line_edit){
                $line_verbs["edit"] =   array(
                                        "caption"=>iif($line_verbs_buttons,"",r_langline("general.button_edit")) ,
                                        "attributes"=>$line_verb_attibutes["edit"] , 
                                        "icon" => "icon-pencil",
                                        "id_column"=>$this_id_field);
            }
            if (!$disable_line_delete){
                $line_verbs["delete"] = array(
                                        "caption"=>iif($line_verbs_buttons,"",r_langline("general.button_del")) ,
                                        "attributes"=>$line_verb_attibutes["delete"] , 
                                        "icon" => "icon-trash",
                                        "id_column"=>$this_id_field) ; 
            }
            if ($enable_open_button) {
                $line_verbs["open"] = array(
                                        "caption"=>iif($line_verbs_buttons,"",r_langline("general.button_open")) ,
                                        "attributes"=>$line_verb_attibutes["open"] , 
                                        "icon" => "icon-file",
                                        "id_column"=>$open_url_field) ; 
            }
            
    
        
    
        }
    $additional_header = "yes"; 
    //echo $table_purpose ; 
    if ($table_purpose== "selector")
    {
                $line_verbs = array(); 
                $line_verbs_buttons = 1;
                $line_verbs_colors =1 ; 
                $line_verb_attibutes["select"] = Array(
                "class"=>"ajax_action master_font ". iif($line_verbs_colors , "btn red","") ,       
                "caller_id"=>$this_concept."_table" , 
                "selected_id"=>"vvv_ID_vvv" , 
                "selected_name"=>"vvv_NAME_vvv", 
                "caller_verb"=>"select"); 
        
                $page_rows = 15 ;       
                $line_verbs = array ("select"=>array(
                                        "caption"=>"" ,
                                        "attributes"=>$line_verb_attibutes["select"] , 
                                        "icon" => "icon-ok",
                                        "id_column"=>$this_id_field,
                                        "name_column"=>r_langcase($this_name_field,$this_name_field_ar)));
                                        
                    if (isset($enlosed_in_div)) { echo "<div id='". $enlosed_in_div ."' >" ;  }
            $additional_header = "" ; 
    }
        
    if (!isset($this_concept)) $this_concept = "" ;     
    if (!isset($hscroll))   $hscroll = false ;
    if (!isset($enable_search)) $enable_search = true ;
    
    if (!isset($total_cols)) {$total_cols = array(""=>"") ;}  
    
    if (!isset($box_color)) $box_color = "blue" ; 
    if (isset($show_box_title))
    {
         if ($show_box_title =="no")
         {
                  
         } 
         else 
             {
        if ($show_box_title ==".") 
        {
            r_theme_box_start
            ("",12,
                array("back_color"=>$box_color)
            );
        }
        else 
       {     
       r_theme_box_start
            ($show_box_title,12,
                array("back_color"=>$box_color)
            ); 
       }
             }
    }
                                              
   // $i_options=array("id_field"=>$this_id_field , "hscroll"=>$hscroll ,"enable_search"=>$enable_search,  "page_rows"=>$page_rows,"class"=>$autotable,"show_verbs"=>true,"header_color"=>$header_color) ; 
    //      echo "<pre>" ; print_r( $i_options); echo "<pre>" ;                                        
  r_theme_draw_table($list_table,$i_options=array("hscroll"=>$hscroll ,"page_rows"=>$page_rows,"class"=>$autotable,"show_verbs"=>true,"header_color"=>$header_color,"show_all_details"=>$show_all_details),$table_id="datatable_of_".$this_concept,$line_verbs,$line_verbs_buttons,$total_cols);
    //r_theme_draw_table($list_table, $i_options,$table_id="datatable_of_me",$line_verbs,$line_verbs_buttons,$total_cols,$additional_header);
     if (isset($show_box_title))
    {
         r_theme_box_end(); 
    }
     
    if (isset($enlosed_in_div))
    {
        echo "</div>" ; 
    }
    }
//echo "post_table_but_in_view" ; 
// end of file 