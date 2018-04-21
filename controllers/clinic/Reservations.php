<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class reservations extends Base_Controller {


function __construct()
    {
        parent::__construct();
    
        $this->concept  = "visit" ; 
        $this->controller = "clinic/reservations";    
        
        $this->class_name    = "bi_visit" ; 
        $this->class_path =  "clinic/bi_visit" ; 
 
        $this->view_folder = "clinic"; 
        $this->id_field  = "visit_id"; 
        
        $this->report_title  = r_langline('reservations_report_title',"visit.master.");
        
        $this->use_lang_files = array("clinic/visit_main") ; 
        $this->security_component = "security.general" ; 
        $this->use_master = master_type::ReportAMaster ; 
        
        
        
        
    }
 
    public function find_form()
    {
    
        $access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="read" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
        $this->load->library("form_validation");
        ///$this_item = & $this->main_class;
        
        $account_id = $this->uri->segment(4) ; 
        $this->load->model("clinic/bi_visit_type") ; 
        //setting the validation rules ,, 
    
        $this->form_validation->set_rules("is_an_action","patient_name", "required") ;
        $this->form_validation->set_rules("visit_date","patient_name", "required") ;
    
                      
        $data["this_concept"] = $this->concept ; 
        $data["this_controller"] = $this->controller ;
        $data["this_lang_file"] = "clinic/visit_main" ;
        
     
        if ($this->form_validation->run() == FALSE)
        {
            //  $data["this_item"] = $this_item ;           
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;
            $data["total_cols"] = array("visit_cost"=>"sum") ;
            
        
            
            $template_folder = "_templates/".$this->template_name."/" ;  
            $this->load->helper($this->theme_helper)    ;
         
            $this->load->view( 'clc_filters/reservation_filters_form',$data); 
           
            return ; 
        }

        else 
        
        {
          
            
            $vst_date = $this->input->post('visit_date');

            $vst_date_to = $this->input->post('visit_date2');
            
      

            if($this->input->post('no_show') =="on") { $no_show =1;  } else $no_show=0 ;
            if($this->input->post('arrival') =="on") { $arrival =2;  } else $arrival=0;
            if($this->input->post('checkedin') =="on") { $checkedin =3;  }else $checkedin=0 ;
            if($this->input->post('cancelled') =="on") { $cancelled =4;  }else $cancelled=0 ;
            $visit_type=$this->input->post('visit_visit_type_id'); 
           $patient_name=$this->input->post('patient_name');

            $filter_data = array() ; 
            $filter_data["1"] = trim($this->input->post("visit_date")) ; 
            $filter_data["2"] = $no_show; 
            $filter_data["4"] = $checkedin ; 
            $filter_data["3"] = $arrival ;
            $filter_data["5"] = "" ;
            $filter_data["6"] = $cancelled ; 
              $filter_data["7"] = $visit_type ;  
            $filter_data["8"] = $patient_name ; 

        if ($this->input->post("visit_date2")) {
                                $filter_data["5"]=trim($this->input->post("visit_date2")) ; } 

                     
                    
       
            $this->load->model("clinic/bi_visit") ; 
            $this_item = $this->bi_visit ; 
            $returned_rtable= $this_item->list_items_rtable( "reservation_report",$filter_data ,0,"reservation_report"); 
            
            
            
            $data["list_table"] = $returned_rtable ;  
            
            
            $data["table_purpose"] ="" ; 
            $data["this_concept"] = $this->concept ; 
            $data["this_controller"] = "clinic/reservations" ; 
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
        
            $data["options"]["enable_open_button"] =false; 
            $data["options"]["open_url_suffix"] = site_url("clinic/patients/info/0/")   ; 
            $data["options"]["open_url_field"] = "visit_id" ; 
            
            
            if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
            $template_folder = "_templates/".$this->template_name."/" ;  
            $this->load->helper($this->theme_helper)    ;
            
            //$data["total_cols"] = array("debit"=>"sum","credit"=>"sum") ; 
       
            
            $data["show_box_title"]="no" ;
                 if (sysDATA("user_group_name") =="DOCTOR")
                 {
            $data["total_cols"] = array("visit_cost"=>"sum","visit_patient_id"=>"count") ;
                 } 
                 else {
                     $returned_rtable->Rows = array_splice($returned_rtable->Rows, 0, 50);  ;
                    $data["list_table"] =$returned_rtable ;    
                     
                 }
                            $this->load->view( '_general/concept_table_aj',$data);
            
            echo "<a msg=record_update_success /></a><ID></ID>" ; 
       
                
            return;
        }
    }
   
   
    
    
}