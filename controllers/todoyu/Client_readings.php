<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



/**
 * Description of Client_readings
 *
 * @author Resala
 */
class Client_readings extends Base_Controller { 
    
    function __construct()
	{
        parent::__construct();
    
        $this->concept  = "client_reading" ; 
        $this->controller = "todoyu/client_readings";    
        
        $this->class_name    = "bi_client_reading" ; 
        $this->class_path =  "todoyu/bi_client_reading" ; 
 
        $this->view_folder = "todoyu"; 
        $this->id_field  = "client_id"; 
        
		$this->report_title  = "Client Report.master";
		
        $this->use_lang_files = array("todoyu/client_reading_main") ; 
        $this->security_component = "security.general" ; 
        $this->use_master = master_type::ReportAMaster ;

	}
        
        
        
        
        public function find_form()
    {
    		
    	$access_component_name = $this->security_component ; 
        $access_verb="list" ;
        
        if (!$this->_top_function($access_component_name)) return ; 
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;           
        if ($this->admin_public->verify_access($access_verb,0) == false ) 
            {
                $data["access_component_name"] = $access_component_name ; 
                $data["access_verb"] = $access_verb ;                   
                $this->load->view( '_general/general/invalid_rights_message',$data);         // takes care of login / header loading 
            }
        
        $this->load->library("form_validation");
        
        $this->load->model("todoyu/bi_client_reading");
   
        
        $this->load->model("todoyu/bi_industry");
		
        
        $account_id = $this->uri->segment(4) ; 
        
        //setting the validation rules ,, 
    
        $this->form_validation->set_rules("is_an_action","is an action", "required") ;
       /* $this->form_validation->set_rules("client_name","Super Unit Size Start To", "required|numeric") ;*/
            
        
        $data["this_concept"] = $this->concept ; 
        $data["this_controller"] = $this->controller ;
      
    
       
        if ($this->form_validation->run() == FALSE )
        {
                             
               
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;
            
            $template_folder = "_templates/".$this->template_name."/" ;  
            $this->load->helper($this->theme_helper)    ;
         
            $this->load->view( 'todoyu/client_reading_filters_form',$data);   
            return ; 
        } 
        
        else 
        {

            
            
            $filter_data = array() ; 
             
            
        
            if ($this->input->post("client_industry_id")) {
                     $filter_data["client_industry_id"]=trim($this->input->post("client_industry_id")) ; }  
            if ($this->input->post("client_name")) {
                     $filter_data["client_name"]=trim($this->input->post("client_name")) ; }  
                     
                   
 
            $mytestsring = implode("", $filter_data)  ; 
            if (strlen($mytestsring)==0)
            {
                echo "Nothing Selected" ; 
                echo "<a msg=record_update_success /></a><ID></ID>" ; 
                return ; 
                
            }
                     

           $this->load->model("todoyu/bi_client_reading") ;
            $this_report =$this->bi_client_reading ;  

            $this_item = & $this->main_class ; 
        
            
            $this_report->set_filters( $filter_data) ;
             
            $returned_rtable = $this_report->run_to_list("") ; 
            
			
			
            $data["list_table"] = $returned_rtable ;  
            
            $data["table_purpose"] ="" ; 
            
            $data["this_concept"] = $this->concept ; 
            $data["this_controller"] = $this->controller ; 
           
          
                        
      
        
            $data["options"]["hide_add_button"] = true ; 
            $data["options"]["disable_line_add"] = true ; 
            $data["options"]["disable_line_edit"] = true ; 
            $data["options"]["disable_line_delete"] = true ;
            $data["options"]["hide_line_verbs"] = false ; 
            $data["options"]["disable_datatable"] = false ; 
            $data["options"]["line_verbs_colors"] = true ; 
            $data["options"]["line_verbs_buttons"] = true ; 
        
            
            if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
            $template_folder = "_templates/".$this->template_name."/" ;  
            $this->load->helper($this->theme_helper)    ;
           
            $this->load->view( '_general/concept_table_aj',$data);
            
            if ($returned_rtable->row_count()==0)
            {
                echo "nothing found" ; 
            }
            echo "<a msg=record_update_success /></a><ID></ID>" ; 
            
        }
                    
        return;
    }
        
}
