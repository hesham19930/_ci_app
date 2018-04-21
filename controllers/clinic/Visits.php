<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class visits extends Base_Controller {


function __construct()
    {
        parent::__construct();
    
        $this->concept  = "visit" ; 
        $this->controller = "clinic/visits";    
        
        $this->class_name    = "bi_visit" ; 
        $this->class_path =  "clinic/bi_visit" ; 
 
        $this->view_folder = "clinic"; 
        $this->id_field  = "visit_id"; 
        
        $this->report_title  = r_langline('report_title',"visit.master.");
        
        $this->use_lang_files = array("clinic/visit_main") ; 
        $this->security_component = "security.visit" ; 
        $this->use_master = master_type::ReportAMaster ; 
        
      
        
        
    }
    
                
    function ajax_table()
    {   
        $access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="list" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
            
        $this_item = & $this->main_class; 
        
        //--------------when enter the VISIT page direct--------------------------------
        // segment distribution 
        // segment 4 patient 
        // segment 5 status filter  
        // segment 6 date filter  
        // segment 7 specific view name 
                
        $patient_id = $this->uri->segment(4, 0);
        $for_status = $this->uri->segment(5,"") ;
        $for_date  = $this->uri->segment(6,0) ;
        $use_view_name = $this->uri->segment(7,"") ;
        
        // deciding the records filter --------------------------------------------------------------------------------------------- 
        // we send all filters to list_item_extension 
        // we decide the view based on 
        
        if ($patient_id=="0") $patient_id ="" ; 
        if ($for_date=="0") $for_date ="" ; 
         
        $filters ["1"] =$patient_id ;
        $filters ["2"] =$for_status;
        $filters ["3"] =$for_date;
        
              
        // deciding the records viiew name  --------------------------------------------------------------------------------------------- 
        // patient_file_view // no patient mentioned   
        // or appointment_view // no disnoses or visit info mentioned
        // or general_view // all mentioned 
  
        $view_name  = "default" ;      
        if (strlen($use_view_name)!=0)  {$view_name = $use_view_name;}
   
         // for all views   ------------------------------------------------------ 
            $data["options"]["hide_add_button"] = true ;                
            $data["options"]["disable_line_add"] = true ; 
            $data["options"]["disable_line_edit"] = true ; 
            
            $data["options"]["hide_line_verbs"] = false ; 
    
            $data["options"]["line_verbs_colors"] = true ; 
            $data["options"]["line_verbs_buttons"] = true ; 
                
       
           //-------------------------------------------------------------------------------------------------------------------------------------------
            
             if ($view_name=="patient_appointments")
            {
                       $data["options"]["disable_datatable"] = true ; 
                       $data["options"]["enable_open_button"] = false ; 
                      // $data["show_box_title"] = ".";    
            }
            if ($view_name=="patient_visits")
            {
                   $data["show_box_title"] = "";
                       $data["options"]["disable_datatable"] = true ; 
                       $data["options"]["enable_open_button"] = true ; 
                       //$data["show_box_title"] = r_langline('show_box_title',"visit.master.");
                       $data["options"]["disable_line_delete"] = true ;
                         $data["options"]["show_all_details"] = true ;
                       $data["options"]["enable_open_button"] = true ;
                      $data["options"]["open_url_suffix"] = site_url("clinic/visits/info")   ; 
                       $data["options"]["open_url_field"] = $this_item->id_field_name ; 
            }
            if ($view_name=="day_visits")
            {
                 $data["options"]["disable_datatable"] = true ; 
                 //$data["options"]["enable_open_button"] = false; 
                 $data["show_box_title"] = "";
                 //$data["header_color"]="green" ;
                 $data["box_color"]="yellow" ; 
                 
            }
            
            //-------------------------------------------------------------------------------------------------------------------------------------------
         
            // display all visits of all patients with default view  
           //   echo $view_name;
    
        $rTable = $this_item->list_items_rtable( "visits_custom_list",$filters ,0,$view_name); ; 
           
         
         
            
            
             $data["list_table"] = $rTable; 
    
    
        
        $data["this_concept"] = "visit" ;
        $data["this_controller"] = $this->controller; 
        $data["this_lang_file"] = "clinic/visit_main" ;
    
        $data["this_id_field"] = "visit_id" ;
        $data["this_name_field"] = "visit_id" ;
        $data["this_name_field_ar"] = "visit_id" ; 
        
        
          if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
        
          $template_folder = "_templates/".$this->template_name."/" ;  
          $this->load->helper($this->theme_helper)  ;
          
          $data["show_box_title"]="no" ;
          
             if (sysDATA("user_group_name") =="DOCTOR")
                 {
           $data["total_cols"] = array("visit_cost"=>"sum","visit_discount"=>"sum","visit_patient_id"=>"count") ;
                 }
else {
	   $data["total_cols"] = array("visit_patient_id"=>"count") ;
      
}
 
          $this->load->view( '_general/concept_table_aj',$data);
          return ; 
    } 
    
    function ajax_table2()
    {   
        $access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="list" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
            
        $this_item = & $this->main_class; 
        
        //--------------when enter the VISIT page direct--------------------------------
        // segment distribution 
        // segment 4 patient 
        // segment 5 status filter  
        // segment 6 date filter  
        // segment 7 specific view name 
                
        $patient_id = $this->uri->segment(4, 0);
        $for_status = $this->uri->segment(5,"") ;
        $for_date  = $this->uri->segment(6,0) ;
        $use_view_name = $this->uri->segment(7,"") ;
        
        // deciding the records filter --------------------------------------------------------------------------------------------- 
        // we send all filters to list_item_extension 
        // we decide the view based on 
        
        if ($patient_id=="0") $patient_id ="" ; 
        if ($for_date=="0") $for_date ="" ; 
         
        $filters ["1"] =$patient_id ;
        $filters ["2"] =$for_status;
        $filters ["3"] =$for_date;
        
              
        // deciding the records viiew name  --------------------------------------------------------------------------------------------- 
        // patient_file_view // no patient mentioned   
        // or appointment_view // no disnoses or visit info mentioned
        // or general_view // all mentioned 
  
        $view_name  = "default" ;      
        if (strlen($use_view_name)!=0)  {$view_name = $use_view_name;}
   
         // for all views   ------------------------------------------------------ 
            $data["options"]["hide_add_button"] = true ;                
            $data["options"]["disable_line_add"] = true ; 
            $data["options"]["disable_line_edit"] = true ; 
            
            $data["options"]["hide_line_verbs"] = false ; 
    
            $data["options"]["line_verbs_colors"] = true ; 
            $data["options"]["line_verbs_buttons"] = true ; 
                
         /*   $data["options"]["enable_open_button"] = true ; 
            $data["options"]["open_url_suffix"] = site_url("clinic/visits/info")   ; 
            $data["options"]["open_url_field"] = "visit_id" ;*/   
           
           //-------------------------------------------------------------------------------------------------------------------------------------------
            
             if ($view_name=="patient_appointments")
            {
                       $data["options"]["disable_datatable"] = true ; 
                       $data["options"]["enable_open_button"] = false ; 
                      // $data["show_box_title"] = ".";    
            }
            if ($view_name=="patient_visits")
            {
                   $data["show_box_title"] = "";
                       $data["options"]["disable_datatable"] = true ; 
                       $data["options"]["enable_open_button"] = true ; 
                       //$data["show_box_title"] = r_langline('show_box_title',"visit.master.");
                       $data["options"]["disable_line_delete"] = true ;
                         $data["options"]["show_all_details"] = true ;
                       $data["options"]["enable_open_button"] = true ;
                       $data["options"]["open_url_suffix"] = site_url("clinic/visits/info")   ; 
                       $data["options"]["open_url_field"] = $this_item->id_field_name ; 
            }
            if ($view_name=="day_visits")
            {
                 $data["options"]["disable_datatable"] = true ; 
                 //$data["options"]["enable_open_button"] = false; 
                 $data["show_box_title"] = "";
                 //$data["header_color"]="green" ;
                 $data["box_color"]="yellow" ; 
                 
            }
            
            //-------------------------------------------------------------------------------------------------------------------------------------------
         
            // display all visits of all patients with default view  
           //   echo $view_name;
    
        $rTable = $this_item->list_items_array("visits_custom_list",$filters ,1,$view_name);    
           
        
             $data["list_table"] = $rTable; 
             
        
        $data["this_concept"] = "visit" ;
        $data["this_controller"] = $this->controller; 
        $data["this_lang_file"] = "clinic/visit_main" ;
    
        $data["this_id_field"] = "visit_id" ;
        $data["this_name_field"] = "visit_id" ;
        $data["this_name_field_ar"] = "visit_id" ; 
        
        if (!isset ($this->view_data["options"]["show_table_box"]))
        {
            $this->view_data["options"]["show_table_box"]="yes" ; 
        }

        $this->view_data = $data ; 
        
        if (!isset ($this->view_data["options"]["show_box_title"]))
        {
            $this->view_data["options"]["show_box_title"] ="" ; 
        } 
        
        // echo "<pre>" ; 
       //  print_r ($this->view_data) ; 
      //   echo "</pre>" ;    

              if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
              
                $this->view_data["columns"] = array("visit_id"=>"#" ,"XCALCX_PATNAMETIME"=>"name") ; 
                $this->view_data["open_url"] = "clinic/patients/info/0/vvv_ID_vvv/" ;   
                
                $template_folder = "_templates/".$this->template_name."/" ;  
                $this->load->helper($this->theme_helper)  ;
            
                $this->load->view( '_general/compact_table_aj',$this->view_data);
                return ; 
    } 

    function ajax_delete()
    {
        return ; 
    }
    
    function ajax_edit()
    {
        
        $access_component_name = $this->security_component ;
        if (!$this->_top_function($access_component_name,'yes')) return ;

        $access_verb="read" ;
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;

        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
            
              
                 
        $this->load->library("form_validation");
        $this->load->model('clinic/bi_patient');
        $this->load->model('lookup/bi_visit_status');
        
        // load & read Existing object  ----------------------------------------------------
        $this_item = & $this->main_class; 
        $this_item->clear();

        $incoming_id = $this->uri->segment(4, 0);
     

        if ($incoming_id != 0) 
        {
            $this_item->Read($incoming_id,"",1);
            if (!$this_item->is_published )
            {
                echo "code block check number 62198" ; 
                return ;
                //redirect with error not found object  
            }
            
        } 
     
        //------------to hide patient-name
        else 
        {

            if (!$this->input->post())
            {
            $patient_id = $this->uri->segment(5, 0);
            $date_of_visit = $this->uri->segment(6, 0);
            $patient_name=  $this->bi_patient->get_name($patient_id); 
            $incoming_visit_status = $this->uri->segment(7, 0); // used only for creating direct visits on save 
            
            if ($patient_name=="")
                {
                    $patient_name=  $this->bi_patient->get_name($patient_id); 
                        $data["message_text1"] = "Name Missing ";
                        $data["message_text2"] = "Please Update Patient Name and Save Before Creating Appointment ";
                        $data["message_lang_file"] = "business/general" ;   
                        $data["message_type"] = "error" ; 
                        $data["message_modal"] = "yes" ; 
                        //$this->load->view( '_general/general_message',$data);
                        echo"name missing";
                        return ;
            }
            }
        } 
        //----------------------------------------
        
        
        //setting the validation rules ,, 
        

        $this->form_validation->set_rules("visit_date","visit date", "required") ;
        
        if ($this->form_validation->run() == FALSE )
        {                    
            $data["this_item"] = $this_item ;           
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;
            
            //to hide patient name 
            $send_id = false ;
            if($incoming_id == 0 ){
                
                $this_item->business_data['visit_patient_id'] = $patient_id ;
                $this_item->business_data['visit_date'] = $date_of_visit ;
                $this_item->business_data['patient_name'] =$this->bi_patient->get_name($patient_id);
                if ($incoming_visit_status!="")    $this_item->business_data['visit_v_status_id'] = $incoming_visit_status ;
                
            }
            //--------------------------
                    
            $template_folder = "_templates/".$this->template_name."/" ;  
            $this->load->helper($this->theme_helper)    ;
                                        
            $this->load->view( 'clc_edit/visit_edit',$data);    
            return ; 
        }
        else {  
            if ($this_item->ID()==0){
            
                 if ($this->admin_public->verify_access("new",1) == false ) return ;
            }else{
                 if ($this->admin_public->verify_access("edit",1) == false ) return ; 
            }
            
                $this_item->business_data["date_created"] =  date('Y-m-d H:i:s');
                
        }
            // ---------------------------------------------------------------------------------------------
            // this assumes that you only expose business_data from editing or filling                      /
            // you may require the input->post manually if you have additional fields , that_               /
            // are not in the data base or the business data                                                /
            // ---------------------------------------------------------------------------------------------
                
            // just a quick fix for boolean // should find a long term solution
        
                    foreach ($this_item->business_data as $key => $value) {
                            if (key_exists($key, $this->input->post())) // if ($this->input->post($key))
                            { 
                                $this_item->business_data[$key] =$this->input->post($key);      
                            }
                    }
            // ---------------------------------------------------------------------------------------------
                    
                    $this_item->validate();
                
                    if ($this_item->success==FALSE)
                    {
                        $data["this_item"] = $this_item ;           
                        $data["public_data"] = $this->admin_public->DATA;
                        $data["disable_edit"] = false;                      
                        $data['db_validate'] = $this_item->error_message; 
                        $this->load->view( 'clc_edit/visit_edit',$data); 
                        echo "<center><b>".$this_item->error_message."</b></center>" ; 
                    }
                    else
                    {
                        
                        // ? first time save 
                        $this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
                        $this_item->business_data["visit_sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
                       // $this_item->business_data["visit_v_status_id"] = 1 ; //appointment should be default
                            
                        if ($this_item->ID()!=0) 
                       {
                           $this_item->business_data["visit_v_status_id"] = 3  ; //appointment should be default
                        //   $send_id = true ; 
                       } 
                     
                        $this_item->update();
                        $data["this_item"] = $this_item ;           
                        $data["public_data"] = $this->admin_public->DATA;
                        $data["disable_edit"] = false;                      
                        $this->load->view( 'clc_edit/visit_edit',$data);
                        $my_id = "" ;
                        $send_id = false ; 
                         if ($this_item->business_data['visit_v_status_id'] ==3 ) $send_id =true  ;  
                        if ($send_id == true) $my_id = $this_item->ID() ;   
                     
                        echo "UPDATE Successful :"."<a msg=record_update_success /><ID>".$my_id."</ID>" ;
                         
                    }
            return;
        }

    function change_appointment()
    {
        $access_component_name = $this->security_component ;
       // $access_component_name = "security.cost";
        if (!$this->_top_function($access_component_name,'yes')) return ;

        $access_verb="appointment" ;
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;

        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
        
        
        $this->load->model('lookup/bi_visit_status');
        $this->load->model("clinic/Bi_visit_type");
        $this_item = & $this->main_class;
        $this_item->clear();
        
        $incoming_id = $this->uri->segment(4);
        
        if ($incoming_id!=0)
        {
            $this_item->read($incoming_id,"",1);
            if (!$this_item->is_published)
            {
                echo "record not found" ; 
                return ; 
            }
        }
        
      

        $data["this_item"] = $this_item ;

       
        // ------------------------------------------------
        $status = $this->uri->segment(5);
        // ---------------------------------------------------

        $this->load->library("form_validation");
        $this->form_validation->set_rules("visit_cost","visit_cost", "required") ;
        
        if ($this->form_validation->run() == FALSE )
        {                    
            $data["this_item"] = $this_item ;              
            $data["public_data"] = $this->admin_public->DATA;
        $data["enable_date_change"] = 1;
            $data["disable_edit"] = false;
                  if ($this_item->business_data["visit_v_status_id"] == 3) 
                  {$data["disable_edit"] = true;}
                   
            //--------------------------
                    
            $template_folder = "_templates/".$this->template_name."/" ;  
            $this->load->helper($this->theme_helper)    ;
                                        
            $this->load->view( 'clc_edit/appointment_modify',$data);    
            return ; 
        }
        else {  

            $this_item->read($this->input->post("visit_id"),"") ;    
        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
    
            
    
            // ---------------------------------------------------------------------------------------------
            // this assumes that you only expose business_data from editing or filling                      /
            // you may require the input->post manually if you have additional fields , that_               /
            // are not in the data base or the business data                                                /
            // ---------------------------------------------------------------------------------------------
                
            // just a quick fix for boolean // should find a long term solution
          
                $this_item->business_data['visit_v_status_id'] = 1; 
              
         
                    foreach ($this_item->business_data as $key => $value) {
                            if (key_exists($key, $this->input->post())) // if ($this->input->post($key))
                            { 
                                $this_item->business_data[$key] =$this->input->post($key);      
                            }
                    }
            // ---------------------------------------------------------------------------------------------
           
          // return ;    
                    
                     
                        $this_item->update();
                      
                        $my_id = "" ;
                   $my_id = $this_item->ID() ;   
                        echo "UPDATE Successful :"."<a msg=record_update_success /><ID>".$my_id."</ID>" ; 
                    }
                }    

     function change_status()
    {
        $access_component_name = $this->security_component ;
       // $access_component_name = "security.cost";
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="appointment" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
        
        
        $this->load->model('lookup/bi_visit_status');
        $this->load->model("clinic/Bi_visit_type");
        $this_item = & $this->main_class;
        $this_item->clear();
        
        $incoming_id = $this->uri->segment(4);
        $status_id = $this->uri->segment(5) ; 
        
        if ($incoming_id!=0)
        {
            $this_item->read($incoming_id,"",1);
            if (!$this_item->is_published)
            {
                echo "record not found" ; 
                return ; 
            }
        }
        
      

        $data["this_item"] = $this_item ;

       
        // ------------------------------------------------
        $status = $this->uri->segment(5);
        // ---------------------------------------------------

        $this->load->library("form_validation");
        $this->form_validation->set_rules("is_an_action","is_an_action", "required") ;
        
        if ($this->form_validation->run() == FALSE )
        {
            if ($status_id!=0)      $this_item->business_data["visit_v_status_id"] = $status_id ;                      
            $data["this_item"] = $this_item ;              
            
            $data["public_data"] = $this->admin_public->DATA;
      
            $data["disable_edit"] = false;
            if ($this_item->business_data["visit_v_status_id"] == 3) $data["disable_edit"] = true; 
            //--------------------------
                    
            $template_folder = "_templates/".$this->template_name."/" ;  
            $this->load->helper($this->theme_helper)    ;
                                        
            $this->load->view( 'clc_edit/appointment_arrival',$data);    
            return ; 
        }
        else {  

            $this_item->read($this->input->post("visit_id"),"") ;    
             if ($this_item->ID()==0){
                      if ($this->admin_public->verify_access("appointment",0) == false ) return say_no_access($access_component_name,$access_verb) ;
  
            }else{
                     if ($this->admin_public->verify_access("appointment",0) == false ) return say_no_access($access_component_name,$access_verb) ;
  
            }
            
      
            // ---------------------------------------------------------------------------------------------
            // this assumes that you only expose business_data from editing or filling                      /
            // you may require the input->post manually if you have additional fields , that_               /
            // are not in the data base or the business data                                                /
            // ---------------------------------------------------------------------------------------------
                
            // just a quick fix for boolean // should find a long term solution
          
             //   $this_item->business_data['visit_v_status_id'] = 2; //arrived
              
            // should include change to the appointed visit status 
            // also here we can check if the change is valid before contine 
            // no change should be given to checkin status positive or negative  
            // appoint and arrival swapping 
            // appoint and cacellation swapping valid 
             
                    foreach ($this_item->business_data as $key => $value) {
                            if (key_exists($key, $this->input->post())) // if ($this->input->post($key))
                            { 
                                $this_item->business_data[$key] =$this->input->post($key);      
                            }
                    }
            // ---------------------------------------------------------------------------------------------
           
          // return ;    
                    
                     
                        $this_item->update();
                      
                        $my_id = "" ;
                   $my_id = $this_item->ID() ;   
                        echo "UPDATE Successful :"."<a msg=record_update_success /><ID>".$my_id."</ID>" ; 
                    }
                }    
    
    function ajax_schedule()
    {
        $access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="list" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
        
        
        // incoming string analysis 
       // segment 4 view type 
       // segment 5 patient id // for creating new appointments 
       
       
       $view_type = $this->uri->segment(4, "assistant_master");//3 is number of segements in the url after /index.php
       // patient_master=> inside patient master
       // assistant_master =>inside asisstant master 
       
       //echo $view_type ; 
       $patient_id =   $this->uri->segment(5, 0);       
        $this_item = $this->main_class;
        
        $data["this_controller"] = $this->controller; 
        $data["this_lang_file"] = "clinic/visit_main" ;
                    
        $data["public_data"] = $this->admin_public->DATA;
        $data["disable_edit"] = false;  
        $data["this_item"] = $this_item ;
        $data["patient_id"] = $patient_id ; 
        $data["view_type"] = $view_type ;  
        
    //------------------------------------------------Schedule------------------------------------
         
        $today_date =date("Y-m-d");//today date
        $time = strtotime(date("Y-m-d"));
        $today = date('l',$time);//return the name of day
        $week_array = array("Saturday"=>1,"Sunday"=>2,"Monday"=>3,"Tuesday"=>4,
                            "Wednesday"=>5,"Thursday"=>6,"Friday"=>7);
        
        $day_number = $week_array[$today];//return the number of the day
    
        
        
        //$data["max_per_day"] = 17 ;
            
        //-----to get all date on a month later
        $new_day = new DateTime($today_date);
        $new_day->modify('+30 day');
        $new_day = $new_day->format('Y-m-d');//the next day of to_day

        //to load function that returns all required dates
        //$this->load->model("clinic/bi_visit");      
        $reserv_array = $this_item->schedule_data($today_date,$new_day);
        
        
        $data["start_date"] = $today_date;
        $data["start_day_number"] = $day_number ;//number of the day
        $data["reservation"] = $reserv_array;
        
        $this->load->view( 'clc_report/date_schedule',$data); 
                
    }

    function find_form()
    {
    
        $access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="list" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
        $this->load->library("form_validation");
        //$this_item = & $this->main_class;
        
        $account_id = $this->uri->segment(4) ; 
        $this->load->model("clinic/bi_visit_type") ; 
        //setting the validation rules ,, 
    
       // $this->form_validation->set_rules("is_an_action","patient_name", "required") ;
        $this->form_validation->set_rules("is_an_action","hgfjghfjhfgjhfgjh", "required") ;
        
                    
        $data["this_concept"] = $this->concept ; 
        $data["this_controller"] = $this->controller ;
        $data["this_lang_file"] = "clinic/visit_main" ;
        
        $this->load->model("clinic/bi_company") ;
        if ($this->form_validation->run() == FALSE)
        {
            //  $data["this_item"] = $this_item ;           
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;
        
            
            $template_folder = "_templates/".$this->template_name."/" ;  
            $this->load->helper($this->theme_helper)    ;
         
            $this->load->view( 'clc_filters/visit_filters_form',$data); 
              
            return ; 
        }

        else 
        
        {
            
                if($this->input->post("patient_id")) 
            {
            
                $query = $this->db->query ( "select visit_id from visit_s where visit_v_status_id=3 and visit_patient_id =" . $this->input->post("patient_id") . " order by visit_date desc") ; 
                            foreach ( $query->result_array() as $row )
                    {
                        $visit_id = $row["visit_id"] ; 
                        echo $visit_id ;
                                 echo "<a msg=record_update_success /></a><ID></ID><URL>".site_url("clinic/patients/info/0")."/".$visit_id."</URL>" ;  
                        return ; 
                    }
                    
            }
     

            $filter_data = array() ; 
            $filter_data["patient_number"] =trim($this->input->post("patient_id")) ;
            $filter_data["patient_name"] =trim($this->input->post("patient_name"));
            $filter_data["visit_remarks"] =trim($this->input->post("visit_remarks"));
               $filter_data["visit_visit_type_id"] =trim($this->input->post("visit_visit_type_id"));
               $filter_data["first_date"] =trim($this->input->post("visit_date"));
                  $filter_data["second_date"] =trim($this->input->post("visit_date2"));
             
           $comma_separated = implode("", $filter_data);
                if ($comma_separated=="") 
                {
                        say_no_records("Nothing Selected") ; 
                           echo "<a msg=record_update_success /></a><ID></ID>" ; 
                    return  ; 
                    
                }
       
            $this->load->model("clinic/bi_visit") ; 
            $this_item = $this->bi_visit ; 
            $returned_rtable= $this_item->list_items_rtable( "visit_report",$filter_data ,0); ;        
            
            $data["list_table"] = $returned_rtable ;  
            
            
            $data["table_purpose"] ="" ; 
            $data["this_concept"] = $this->concept ; 
            $data["this_controller"] = "clinic/visits" ; 
            $data["this_id_field"] = "visit_id" ;             
            $data["this_name_field"] = "visit_date" ; 
            $data["this_name_field_ar"] = "visit_date" ;
                        
         //  $data["this_lang_folder"] = $this->lang_folder  ;
        
            $data["options"]["hide_add_button"] = true ; 
            $data["options"]["disable_line_add"] = true ; 
            $data["options"]["disable_line_edit"] = true ; 
            $data["options"]["disable_line_delete"] = true ;
            $data["options"]["hide_line_verbs"] = false ; 
            $data["options"]["disable_datatable"] = false ; 
            $data["options"]["line_verbs_colors"] = true ; 
            $data["options"]["line_verbs_buttons"] = true ; 
        
            $data["options"]["enable_open_button"] =true; 
            $data["options"]["open_url_suffix"] = site_url("clinic/patients/info/0/")   ; 
            $data["options"]["open_url_field"] = "visit_id" ; 
            
            
            if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
            $template_folder = "_templates/".$this->template_name."/" ;  
            $this->load->helper($this->theme_helper)    ;
            
            //$data["total_cols"] = array("debit"=>"sum","credit"=>"sum") ; 
       
            
            $data["show_box_title"]="no" ;
            
                 if (sysDATA("user_group_name") =="DOCTOR")
                 {
           $data["total_cols"] = array("visit_cost"=>"sum","visit_discount"=>"sum","visit_patient_id"=>"count") ;
                 }
else {
       $data["total_cols"] = array("visit_patient_id"=>"count") ;
      $returned_rtable->Rows = array_splice($returned_rtable->Rows, 0, 50);  ;
                    $data["list_table"] =$returned_rtable ; 
}

        
                            $this->load->view( '_general/concept_table_aj',$data);
            
            echo "<a msg=record_update_success /></a><ID></ID>" ; 
       
                
            return;
        }
    }
   
    function appointment()
    {
        
        $access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="appointment" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
        $this->load->library("form_validation");
        $this->load->model('clinic/bi_patient');
        $this->load->model('reports/bi_rep_patient');
        $this->load->model('lookup/bi_visit_status');
        $this->load->model('clinic/bi_visit');
        $patient = $this->bi_patient ;
        $patient_id = $this->uri->segment(5, 0);
        $incoming_id = $this->uri->segment(4, 0);
        //$this_visit_status =  $this->load->model('lookup/bi_visit_status');
        
        // load & read Existing object  ----------------------------------------------------
        $this_item = & $this->main_class; 
        $this_item->clear();
        $this->load->model("clinic/bi_visit_type");

        $this->bi_patient->read($patient_id,"") ; 
        $Patient_name = $this->bi_patient->get_name(); 

        //----------------------------------------
        
        //setting the validation rules ,, 
       
        $this->form_validation->set_rules("visit_date","visit date", "required") ;
      ///  $this->form_validation->set_rules("visit_time","visit date", "required") ;
          $this->form_validation->set_rules("visit_visit_type_id","visit xdate", "required") ;
      
      //  echo  date('Y-m-d H:i:s'); 
      $template_folder = "_templates/".$this->template_name."/" ;  
      $this->load->helper($this->theme_helper)    ;
     
        if ($this->form_validation->run() == FALSE )
        {             
            if (!$this->input->post())
            {
                $this_item->business_data["visit_patient_id"]= $patient_id ; 
                $this_item->business_data["patient_name"]= $Patient_name ; 
            
            }   

            $this_item->business_data['visit_time'] =$this->input->post('visit_time');    
            $data["this_item"] = $this_item ;    
                   
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;
            
            $this->load->view( 'clc_edit/appointment_new',$data);   
            return ; 
            
        }
        else
        {
            
            
       //     print_r($this->input->post());
        
 
            foreach ($this_item->business_data as $key => $value) 
            {
                if (key_exists($key, $this->input->post())) 
                {
                    if (key_exists($key,   $this_item->business_data))
                    {
                      $this_item->business_data[$key] =$this->input->post($key);
                    }      
                }
            }
            // ---------------------------------------------------------------------------------------------
           
             $myarr = db_return_array("select visit_id from visit_s where visit_date ='".$this_item->business_data["visit_date"]."' and visit_patient_id = ". $this_item->business_data["visit_patient_id"]. "  and visit_v_status_id <> 4 " ) ;
            
            
            foreach ($myarr as $key => $row) {
                $error_message = "Patient Already Has A Reservation in this Day " ;
                $data["this_item"] = $this_item ;           
                $data["public_data"] = $this->admin_public->DATA;
                $data["disable_edit"] = false;                      
                $data['db_validate'] = $error_message;
                $this->load->view( 'clc_edit/appointment_new',$data); 
                echo "<center><b>".$error_message."</b></center>" ; 
                return ; 
                }
                               
            $this_item->validate();
        
            if ($this_item->success==FALSE)
            {
                $data["this_item"] = $this_item ;           
                $data["public_data"] = $this->admin_public->DATA;
                $data["disable_edit"] = false;                      
                $data['db_validate'] = $this_item->error_message;
                $this->load->view( 'clc_edit/appointment_new',$data); 
                echo "<center><b>".$this_item->error_message."</b></center>" ; 
                return ; 
            }
            
            else
            {
                
                $this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
                $this_item->business_data["visit_sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
                
                $this_item->business_data["visit_v_status_id"] =  1; //appointment
                
                $this_item->update();
                
                 $patient_name=  $this->bi_patient->get_name(); 
                  
                 echo "Appointment Schdeduled For Patient ".$patient_name  ;                  
                 
                 // add url if this is the doctor and the appointment is today
                 $the_url  = "" ; 
                 if (sysDATA("user_group_name") =="DOCTOR")
                 {
                    if ($this_item->business_data["visit_date"]== date("Y-m-d"))//today date
                    { 
                    $the_url = "<URL>".site_url("clinic/patients/info/0/"). "/".$this_item->ID() ."</URL>";
                    }
                 }
                 echo "<a msg=record_update_success  /><span class='hixde'><ID >".$this_item->ID()."</ID></span>".$the_url  ; 
  
            }
            }

    

    
        }

   	function patient_appointment()
        {
            $access_component_name = $this->security_component ;
            if (!$this->_top_function($access_component_name,'yes')) return ;
    
            $access_verb="appointment" ;
            $data = array() ;
            $data["public_data"] = $this->admin_public->DATA;
    
            if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
            $this->load->library("form_validation");
            $this->load->model('clinic/bi_patient');
            $this->load->model('lookup/bi_visit_status');
            $this->load->model("clinic/bi_visit_type") ; 
            $this->load->model("clinic/bi_company") ; 
         
         
            $patient = $this->bi_patient ;
            
            //$this_visit_status =  $this->load->model('lookup/bi_visit_status');
            
            // load & read Existing object  ----------------------------------------------------
            $this_item = & $this->main_class; 
            $this_item->clear();
    
            //----------------------------------------
            
            //setting the validation rules ,, 
           
            $this->form_validation->set_rules("visit_date","Visit Date", "required") ;
              $this->form_validation->set_rules("visit_visit_type_id","Visit Type", "required") ;
            $this->form_validation->set_rules("patient_name","Patient name", "required|is_unique[patient_s.patient_name]") ;
          
            $this->form_validation->set_rules("patient_phone","patient_phone", "is_unique[patient_s.patient_phone]") ;
            
         
  
            if ($this->form_validation->run() == FALSE )
            {                    
                $data["this_item"] = $this_item ;           
                $data["public_data"] = $this->admin_public->DATA;
                $data["disable_edit"] = false;
                
                //to hide patient name 
                 if ($this_item->ID() == 0 )
                {
                   
                    if ($this->input->post()) // should be the only way to run/false and id=0 
                    {
                       
                            $this_item->business_data["visit_time"] = $this->input->post("visit_time") ; // expected because first run is post
                            $this_item->business_data["visit_date"] = $this->input->post("visit_date") ;
                            $this_item->business_data["patient_phone"] = $this->input->post("patient_phone") ; 
                            $this_item->business_data["patient_birth_date"] = $this->input->post("patient_birth_date") ; 
                            $this_item->business_data["patient_sex"] = $this->input->post("patient_sex") ; 
                            $this_item->business_data["patient_company_id"] = $this->input->post("patient_company_id") ; 
                            $this_item->business_data["patient_name"] = $this->input->post("patient_name") ; 
                            $this_item->business_data["visit_cost"] = $this->input->post("visit_cost") ;  
                            $this_item->business_data["visit_visit_type_id"] = "1";  
                           

                    }        
                    //--------------------------
                }             
                $template_folder = "_templates/".$this->template_name."/" ;  
                $this->load->helper($this->theme_helper)    ;
                                            
                $this->load->view( 'clc_edit/appointment_patient',$data);   
                return ; 
              }
      
          //***********************************************************
                  //make sure the patient phone isn't exist 
              //if exist read the old patient id ya fatma 
              // now i know the old patient id 
              
            $phone_entry = $this->input->post("patient_phone") ;
           // $patient->business_data["patient_phone"] = $this->input->post("patient_phone") ;
          
            /* maybe this is not needed because the telephone is validated in the form validation  
            if( $patient->validate_patient_phone($phone_entry) != 0)    
            {
                    
                $patient_phone_id = $patient->validate_patient_phone($phone_entry);
                $data["this_item"] = $this_item ;           
                $data["public_data"] = $this->admin_public->DATA;
                $data["disable_edit"] = true;
                
                $data["message"] = '<a href="'.site_url("/clinic/patients/info/".$patient_phone_id."/").'"> link to the old Patient </a>' ;
                  
                $template_folder = "_templates/".$this->template_name."/" ;  
                $this->load->helper($this->theme_helper)    ;
                                            
                                            
                $this->load->view( 'clc_edit/appointment_patient',$data);   
                
                return ;  
            }   
        */
        
         
    
                if ($this_item->ID()==0)
                {
                    if ($this->admin_public->verify_access("appointment",1) == false ) 
                    return ;
                }
                
                else
                {
                    if ($this->admin_public->verify_access("appointment",1) == false ) 
                    return ; 
                }
                   
                
                // now take the patient name and create new one
                
                
                $patient->business_data["patient_name"] = $this->input->post("patient_name") ;
                $patient->business_data["patient_phone"] = $this->input->post("patient_phone") ; 
                 
                $patient->business_data["patient_birth_date"] = $this->input->post("patient_birth_date") ;
                $patient->business_data["patient_company_id"] = $this->input->post("patient_company_id") ;
                $patient->business_data["patient_sex"]=$this->input->post("patient_sex") ; 
                
                $patient->update() ; 
                $the_patient_id = $patient->ID() ; 
                        
                   // echo "the id = ". $the_patient_id ; 
              
                $this_item->business_data["date_created"] =  date('Y-m-d H:i:s');
                $this_item->business_data["visit_patient_id"]  = $the_patient_id ; 
                    
                // ---------------------------------------------------------------------------------------------
                // this assumes that you only expose business_data from editing or filling                      /
                // you may require the input->post manually if you have additional fields , that_               /
                // are not in the data base or the business data                                                /
                // ---------------------------------------------------------------------------------------------
                    
             
            
                foreach ($this_item->business_data as $key => $value) 
                {
                    if (key_exists($key, $this->input->post())) // if ($this->input->post($key))
                    {
                        if (key_exists($key,   $this_item->business_data))
                        {
                            $this_item->business_data[$key] =$this->input->post($key);
                        }      
                    }
                }
                // ----------------------------------------------------------------------------------------------
                  // this should not happen ,, only a message showing that patient is saved but the appointment is not 
                         
                $this_item->validate();
            
                if ($this_item->success==FALSE)
                {
                   
                    
                    echo '<div class="alert alert-error">'; 
                        echo '<h4><i class="icon-warning-sign big"></i> Problem Saving Appointment</h4><hr/>' ;
                        echo "<h4>[ ". $this_name ." ]</h4><br/>".$this_item->error_message  ;
                        echo '</div></div></div>';
                        echo '<button class="btn blue ajax_action right master_font" caller_verb="form_cancel" caller_id="country_edit_form">';
                        echo r_langline("general.button_close");
                        echo '</button>';
                        return ;
                        
                }
                
                else
                {

                   
                    
                    $this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
                    $this_item->business_data["visit_sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
                    
                    $this_item->business_data["visit_v_status_id"] =  1; //appointment
                    
                    $this_item->update();
                    
                     $patient_name=  $this->bi_patient->get_name(); 
                      
                     echo "Appointment Schdeduled For Patient ".$patient_name  ;             
                     
                      $the_url  = "" ; 
                 if (sysDATA("user_group_name") =="DOCTOR")
                 {
                    if ($this_item->business_data["visit_date"]== date("Y-m-d"))//today date
                    { 
                    $the_url = "<URL>".site_url("clinic/patients/info/0/"). "/".$this_item->ID() ."</URL>";
                    }
                 }
                 echo "<a msg=record_update_success  /><span class='hixde'><ID >".$this_item->ID()."</ID></span>".$the_url  ; 
                      
                     echo "<a msg=record_update_success  /><span class='hixde'><ID >".$this_item->ID()."</ID></span>" ; 
                   
                     return ;
                    
                }
             
                return;
                
        }

  	function ajax_listing()
        {
            
           //$this->load->model("clinic/bi_comment") ;
            //$this->load->model("clinic/bi_prescription") ;

            $access_component_name = $this->security_component ;
            if (!$this->_top_function($access_component_name,'yes')) return ;
    
            $access_verb="read" ;
            $data = array() ;
            $data["public_data"] = $this->admin_public->DATA;
    
            if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
                
            $this_item = & $this->main_class; 
         
        
        //--------------when enter the history page direct--------------------------------
        $patient_id = $this->uri->segment(4, 0);

           $my_data = $this_item->list_items_array( "single_patient",array("patient_id"=>$patient_id), 1  ,"");
           //$data = array_reverse($my_data ) ;
           $this->load->model("clinic/bi_comment") ; 
           $this->load->model("clinic/bi_prescription");
           foreach ($my_data as $key => $value) {
            # code...


            $my_data[$key]["comments"] = $this->bi_comment->list_items_array( "single_visit",array("visit_id"=> $my_data[$key]["visit_id"]) ,1,"");
            $my_data[$key]["prescription"] = $this->bi_prescription->list_items_array( "single_visit",array("visit_id"=> $my_data[$key]["visit_id"]) ,1,"");

        }
          
       
          $data['patient_visit']=$my_data ;
          $this->load->view('clc_report/visit_list',$data); 
           return ; 
        
        }



   
    
    
}