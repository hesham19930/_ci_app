<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class comments extends Base_Controller {

    
    function __construct()
    {
        parent::__construct();
        
        $this->concept  = "comment" ; 
        $this->controller = "clinic/comments";    
        
        $this->class_name    = "bi_comment" ; 
        $this->class_path =  "clinic/bi_comment" ; 
 
        $this->view_folder = "clinic"; 
        $this->id_field  = "comment_id"; 
        
        $this->use_lang_files = array("clinic/comment_main") ; 
        $this->security_component = "security.visit" ; 
        $this->use_master = master_type::NoMaster ; 
        
    }
   
    ///_________________________________________________________________________________________________
    public function ajax_edit()
    {
      $access_component_name = $this->security_component ;
        if (!$this->_top_function($access_component_name,'yes')) return ;

        $access_verb="read" ;
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;

        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
            
           
        $this->load->library("form_validation");
        
        
        // load & read Existing object  ----------------------------------------------------
        $this_item = & $this->main_class; 
        $this_item->clear();

        $incoming_id = $this->uri->segment(4, 0);
     
        if ($incoming_id !=0) {
            $this_item->Read($incoming_id,"",1);
            if (!$this_item->is_published )
            {
                //redirect with error not found object  
            }
        }else{
            $visit_id = $this->uri->segment(5, 0); //
        }

        //setting the validation rules ,, 

        $this->form_validation->set_rules("comment","comment", "required") ;
    
        if ($this->form_validation->run() == FALSE )
        {                    
            $data["this_item"] = $this_item ;           
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;
                    
            $template_folder = "_templates/".$this->template_name."/" ;  
            $this->load->helper($this->theme_helper)    ;
            
            if($incoming_id == 0 ){
                $this_item->business_data['comment_visit_id'] = $visit_id;
            }
        
            $this->load->view( 'clc_edit/comment_edit',$data);  
            return ; 
        }else{  
            
            if ($this_item->ID()==0){
                 if ($this->admin_public->verify_access("new",0) == false ) return ;
            }else{
                 if ($this->admin_public->verify_access("edit",0) == false ) return ; 
            }
                $this_item->business_data["date_created"] =  date('Y-m-d H:i:s');
        }
            // ---------------------------------------------------------------------------------------------
            // this assumes that you only expose business_data from editing or filling                      /
            // you may require the input->post manually if you have additional fields , that_               /
            // are not in the data base or the business data                                                /
            // ---------------------------------------------------------------------------------------------
                
            // just a quick fix for boolean // should find a long term solution
            $this_item->business_data["comment_color"] = 0 ; 
            
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
                        $this->load->view( 'clc_edit/comment_edit',$data);   
                        echo "<center><b>".$this_item->error_message."</b></center>" ; 
                            
                    }
                    else
                    {
                        $this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
                        
                        
                        $this_item->update();
                        echo "FINE: OK :"."<a msg=record_update_success /><ID>".$this_item->ID()."</ID>" ; 
                    }
            return;
        }
        
    //_________________________________________________________________________________________________
    public function ajax_table()
    {
        
          $access_component_name = $this->security_component ;
        if (!$this->_top_function($access_component_name,'yes')) return ;

        $access_verb="read" ;
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;

        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
            
         
        $this_item = & $this->main_class; 
        
        $visit_id = $this->uri->segment(4, 0); 
        
        if($visit_id == ""){
            $data["list_table"] = $this_item->list_items_array("all",array() ,"");
            $data["list_table"] = array_reverse($data["list_table"]) ;  
                $data["options"]["hide_add_button"] = false ; 
                $data["options"]["disable_line_add"] = true ; 
                $data["options"]["disable_line_edit"] = false ; 
                $data["options"]["disable_line_delete"] = false ;
                $data["options"]["hide_line_verbs"] = false ; 
                $data["options"]["disable_datatable"] = false ; 
                $data["options"]["line_verbs_colors"] = true ; 
                $data["options"]["line_verbs_buttons"] = true ; 
        }else{
            $data["list_table"] = $this_item->list_items_array( "single_visit",array("visit_id"=>$visit_id) ,"");   
            $data["list_table"] = array_reverse($data["list_table"]) ;  
                
                $data["options"]["hide_add_button"] = true ; 
                $data["options"]["disable_line_add"] = true ; 
                $data["options"]["disable_line_edit"] = false ; 
                $data["options"]["disable_line_delete"] = false ;
                //$data["options"]["hide_line_verbs"] = false ; 
                $data["options"]["disable_datatable"] = true ; 
                $data["options"]["line_verbs_colors"] = true ; 
                $data["options"]["line_verbs_buttons"] = true ;
                //$data["show_box_title"] = "Comments";
                $data["enable_search"] = false ;
                $data["hscroll"] = true ;
                
                //$data["show_box_title"] = "";
                $data["show_table_box"] = "yes" ; 
        
        }
                
        $data["table_purpose"] = ""; 
        
        $data["this_concept"] = $this->concept ; 
        $data["this_controller"] = $this->controller ; 
        $data["this_id_field"] = $this->id_field ; 
        $data["this_lang_file"] = "clinic/comment_main" ;
        
        $data["this_name_field"] = "comment_id" ;
        
            
        $this->view_data = $data ; 
            
        //return parent::ajax_table();
        $this->view_data["public_data"] = $this->admin_public->DATA;    
        $this->view_data["this_name_field"] = $this->id_field;
        $this->view_data["this_name_field_ar"] = $this->id_field; 
        if (!isset ($this->view_data["options"]["show_table_box"]))
        {
            $this->view_data["options"]["show_table_box"]="yes" ; 
        }
        
        if (!isset ($this->view_data["options"]["show_box_title"]))
        {
            $this->view_data["options"]["show_box_title"] ="" ; 
        }
        if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
        
          $this->view_data["columns"] = array("comment_id"=>"#","comment_prefix"=>"type","comment"=>"Info") ; 
               $this->view_data["colorcol"] = "comment_color" ; 
          $this->view_data["verbs"][ "edit"]=array("E " , site_url($this->controller) . "/ajax_edit/vvv_ID_vvv" , "blue" ) ; 
          $this->view_data["verbs"]["delete"]=array("X" , site_url($this->controller) . "/ajax_delete/vvv_ID_vvv" , "red" ) ; 
          
          $template_folder = "_templates/".$this->template_name."/" ;  
          $this->load->helper($this->theme_helper)  ;
          $this->load->view( '_general/compact_table_aj',$this->view_data);
          return ;  


    }

    //_________________________________________________________________________________________________
    
    

}
/* end of file */ 