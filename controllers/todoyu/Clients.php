<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Clients
 *
 * @author Resala
 */
class Clients extends Base_Controller {

    function __construct() {
        parent::__construct();

        $this->concept = "client";
        $this->controller = "todoyu/clients";

        $this->class_name = "bi_client";
        $this->class_path = "todoyu/bi_client";

        $this->view_folder = "todoyu";
        $this->id_field = "client_id";
       // $this->report_title  = r_langline('report_title',"client.master.");
        $this->use_lang_files = array("todoyu/client_main");
        $this->security_component = "security.general";
        $this->use_master = master_type::ReportAMaster ;
    }

  /*  public function ajax_table() {
        
        $access_component_name = $this->security_component;
        if (!$this->_top_function($access_component_name, 'yes'))
            return;

        $access_verb = "read";
        $data = array();
        $data["public_data"] = $this->admin_public->DATA;
       

        if ($this->admin_public->verify_access($access_verb, 0) == false) {
            $data["access_component_name"] = $access_component_name;
            $data["access_verb"] = $access_verb;
            $this->load->view('_general/general/invalid_rights_message', $data);   // takes care of login / header loading
            return;
        }

        $this_item = & $this->main_class;

        $data["list_table"] = $this_item->list_items_rtable("all", array(), "");



        $data["this_concept"] = "client";
        $data["this_controller"] = $this->controller;

        $data["this_lang_file"] = "todoyu/client_main";
        $data["this_id_field"] = "client_id";
        $data["this_name_field"] = "client_name";
        $data["this_name_field_ar"] = "client_name";
        

        $data["options"]["hide_add_button"] = false;
        $data["options"]["disable_line_add"] = false;
        $data["options"]["disable_line_edit"] = false;
        $data["options"]["disable_line_delete"] = false;
        $data["options"]["hide_line_verbs"] = false;
        $data["options"]["disable_datatable"] = false;
        $data["options"]["line_verbs_colors"] = true;
        $data["options"]["line_verbs_buttons"] = true;


        $this->view_data = $data;

        return parent::ajax_table();
    }*/

    public function ajax_edit() {
        $access_component_name = "security.general";
        $access_verb = "read";

        if (!$this->_top_function($access_component_name))
            return;
        $data = array();
        $data["public_data"] = $this->admin_public->DATA;
       
        if ($this->admin_public->verify_access("read", 0) == false) {
            $data["access_component_name"] = $access_component_name;
            $data["access_verb"] = $access_verb;
            $this->load->view('_general/general/invalid_rights_message', $data);   // takes care of login / header loading 
        }

        $this->load->library("form_validation");
        $this->load->model("todoyu/bi_industry");

        // load & read Existing object  ----------------------------------------------------
        $this_item = & $this->main_class;
        $this_item->clear();

        $incoming_id = $this->uri->segment(4, 0);

        if ($incoming_id != 0) {
            $this_item->Read($incoming_id, "", 1);
            if (!$this_item->is_published) {
                //redirect with error not found object  
            }
        }



        $data["this_controller"] = $this->controller;

        

        $this->form_validation->set_rules("client_name", "Client Name", "required");
        $this->form_validation->set_rules("client_phone", "Client Phone", "required|numeric");
        $this->form_validation->set_rules("client_address", "Client Address", "required");
        $this->form_validation->set_rules("client_email", "Client Email", "required");
       $this->form_validation->set_rules("client_industry_id","Client Industry Name", "required") ;


        if ($this->form_validation->run() == FALSE) {

            $data["this_item"] = $this_item;
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;
            $this->load->view('todoyu/client_edit', $data);
            return;
        } else {

            if ($this_item->ID() == 0) {
                if ($this->admin_public->verify_access("new", 1) == false)
                    return;
            }
            else {
                if ($this->admin_public->verify_access("edit", 1) == false)
                    return;
            }

         
           

            foreach ($this_item->business_data as $key => $value) {
                if (key_exists($key, $this->input->post())) {
                    $this_item->business_data[$key] = $this->input->post($key);
                }
            }
            $this_item->business_data['client_last_edit_user_id'] = $this->admin_public->DATA['user_id'];



            // in this moment , where would be the new value of the field before update ?
            $this_item->validate();

            if ($this_item->success == FALSE) {
                //goto redo; 

                $data["this_item"] = $this_item;
                $data["public_data"] = $this->admin_public->DATA;
                $data["disable_edit"] = false;

                $template_folder = "_templates/" . $this->template_name . "/";
                $this->load->helper($this->theme_helper);
                $this->load->view($this->view_folder . '/' . $this->concept . '_edit', $data);


                echo "<b><center>عفوا هذا العميل مسجل من قبل</center></b>";

                return;
            } else {

                //$this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];

                $this_item->update();
                echo "FINE: OK :" . "<a msg=record_update_success /><ID>" . $this_item->ID() . "</ID>";
            }

            return;
        }
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
                $this->load->helper($this->theme_helper);
                $this->load->view( '_general/general/invalid_rights_message',$data);         // takes care of login / header loading 
            }
        
        $this->load->library("form_validation");
        
        $this->load->model("todoyu/bi_client");
   
        
        $this->load->model("todoyu/bi_industry");
		
        
        $account_id = $this->uri->segment(4) ; 
        
        
    
        $this->form_validation->set_rules("is_an_action","is an action", "required") ;
     
            
        
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
                     $filter_data["client_industry_id"]=trim($this->input->post("client_industry_id")) ; }else {$filter_data["client_industry_id"]="";}  
            if ($this->input->post("client_name")) {
                     $filter_data["client_name"]=trim($this->input->post("client_name")) ; }else {$filter_data["client_name"]="";}  
                     
                   
 
            $mytestsring = implode("", $filter_data)  ; 
            if (strlen($mytestsring)==0)
            {
                echo "Nothing Selected" ; 
                echo "<a msg=record_update_success /></a><ID></ID>" ; 
                return ; 
                
            }
                     
          
          
           $this->load->model("todoyu/bi_client") ;
       

            $this_item = & $this->main_class ; 
        
             $data["list_table"] = $this_item->list_items_rtable("filter_client",$filter_data, 0);
        
            
            $data["table_purpose"] ="" ; 
            
            $data["this_concept"] = $this->concept ; 
            $data["this_controller"] = $this->controller ; 
            $data["this_id_field"] = "client_id" ; 
          
                        
      
        
            $data["options"]["hide_add_button"] = false ; 
            $data["options"]["disable_line_add"] = false ; 
            $data["options"]["disable_line_edit"] = false ; 
            $data["options"]["disable_line_delete"] = false ;
            $data["options"]["hide_line_verbs"] = false ; 
            $data["options"]["disable_datatable"] = false ; 
            $data["options"]["line_verbs_colors"] = true ; 
            $data["options"]["line_verbs_buttons"] = true ; 
        
            
          
            if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
            $template_folder = "_templates/".$this->template_name."/" ;  
            $this->load->helper($this->theme_helper)    ;
            
            //$data["total_cols"] = array("debit"=>"sum","credit"=>"sum") ; 
            $this->load->view( '_general/concept_table_aj',$data);
            
            
            echo "<a msg=record_update_success /></a><ID></ID>" ; 
            
            
        }
                    
        return;
    }

    
    
}
