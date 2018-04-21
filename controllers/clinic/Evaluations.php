<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class evaluations extends Base_Controller {


	
    function __construct()
	{			
		parent::__construct();
    
        $this->concept  = "evaluation" ; 
        $this->controller = "clinic/evaluations";    
        
        $this->class_name    = "bi_evaluation" ; 
        $this->class_path =  "clinic/bi_evaluation" ; 
 
        $this->view_folder = "clinic"; 
        $this->id_field  = "evaluation_id"; 
        
		$this->report_title  = r_langline('report_title',"evaluation.master.");
		
        $this->use_lang_files = array("clinic/evaluation_main") ; 
        $this->security_component = "security.evaluation" ; 
        $this->use_master = master_type::ReportAMaster ; 
        
       
        
    
        
	}
    
    
    public function ajax_compare()
    {
        
        
        $access_component_name = $this->security_component ;
        if (!$this->_top_function($access_component_name,'yes')) return ;

        $access_verb="read" ;
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;

        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
            
        $this->load->model("clinic/bi_evaluation_data") ;
        $this_item = &$this->main_class;
        $patient_id = $this->uri->segment(4, 0);
       // $this_item->Read($incoming_id,"",1);
        

      
        $this->load->model("clinic/bi_blood_group");

        $data["list_table"] = $this_item->list_items_array( "single_patient",array("patient_id"=>$patient_id)  ,1,"");
      
        foreach ( $data["list_table"] as $key => $value) {
            # code...
            $evalid = $value["evaluation_id"];

            $data["list_table"][$key]["evaluation"] = $this->bi_evaluation_data->get_evaluation_fields ($value["evaluation_eval_form_id"] ,$evalid);
            
          
        }
  
             
        //4 is number of segements in the url after /index.php 
        

        $this->load->model("clinic/bi_person");      
  $this->load->model("clinic/bi_company");
  $this->load->model("clinic/bi_evaluation");


        $data['patient_eval']=$data ;
        $this->load->view('clc_report/evals_compare',$data); 
         return ; 
      


        }

    
    
   
    public function ajax_table()
	{
		
		
		$access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="read" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
            
        $this->load->model("clinic/bi_evaluation_data") ;
		$this_item = &$this->main_class;
        $patient_id = $this->uri->segment(4, 0);
       // $this_item->Read($incoming_id,"",1);
        

      
        $this->load->model("clinic/bi_blood_group");

        $data["list_table"] = $this_item->list_items_array( "single_patient",array("patient_id"=>$patient_id)  ,1,"");
      
        foreach ( $data["list_table"] as $key => $value) {
            # code...
            $evalid = $value["evaluation_id"];

            $data["list_table"][$key]["evaluation"] = $this->bi_evaluation_data->get_evaluation_fields ($value["evaluation_eval_form_id"] ,$evalid);
        }
 

        $this->load->model("clinic/bi_person");      
         $this->load->model("clinic/bi_company");
        $this->load->model("clinic/bi_evaluation");

        $data['patient_eval']=$data ;
        $this->load->view('clc_report/evaluation_list',$data); 
         return ; 
     

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

            $this->lang->load("clinic/evaluation_main") ; 
            //$this_item = & $this->main_class;
            
            $account_id = $this->uri->segment(4) ; 
            
            //setting the validation rules ,, 
        
           
            $this->form_validation->set_rules("is_an_action","hgfjghfjhfgjhfgjh", "required") ;
            
            
                        
            $data["this_concept"] = $this->concept ; 
            $data["this_controller"] = $this->controller ;
            $data["this_lang_file"] = "clinic/evaluation_main" ;
             $this->load->model("clinic/bi_evaluation_form") ; 
             
         
            
            if ($this->form_validation->run() == FALSE)
            {
                //  $data["this_item"] = $this_item ;           
                $data["public_data"] = $this->admin_public->DATA;
                $data["disable_edit"] = false;
                
                $template_folder = "_templates/".$this->template_name."/" ;  
                $this->load->helper($this->theme_helper)    ;
             
                $this->load->view( 'clc_filters/evaluation_filters_form',$data); 
                  
                return ; 
            }
    
            else 
            
            {
                
                
            
    
                $filter_data = array() ; 
                $filter_data["patient_number"] =trim($this->input->post("patient_id")) ;
                $filter_data["patient_name"] =trim($this->input->post("patient_name")) ;
                $filter_data["first_date"] = trim($this->input->post("evaluation_date")) ;
                $filter_data["form_id"] =trim($this->input->post("evaluation_eval_form_id")) ;
                $filter_data["second_date"] =trim($this->input->post("evaluation_date2")) ;
                $filter_data["person_name"] =trim($this->input->post("person_name")) ;
                
                 $comma_separated = implode("", $filter_data);
                if ($comma_separated=="") 
                {
                        say_no_records("Nothing Selected") ; 
                           echo "<a msg=record_update_success /></a><ID></ID>" ; 
                    return  ; 
                    
                }
                      
           
                $this->load->model("clinic/bi_evaluation") ; 
                $this_item = $this->bi_evaluation ; 
                $returned_rtable= $this_item->list_items_rtable( "evaluation_report",$filter_data ,0); ;        
                
                $data["list_table"] = $returned_rtable ;  
                
                
                $data["table_purpose"] ="" ; 
                $data["this_concept"] = $this->concept ; 
                $data["this_controller"] = "clinic/evaluations" ; 
                $data["this_id_field"] = "evaluation_id" ;             
                $data["this_name_field"] = "evaluation_date" ; 
                $data["this_name_field_ar"] = "evaluation_date" ;
                            
                //  $data["this_lang_folder"] = $this->lang_folder  ;
            
                $data["options"]["hide_add_button"] = true ; 
                $data["options"]["disable_line_add"] = true ; 
                $data["options"]["disable_line_edit"] = false ; 
                $data["options"]["disable_line_delete"] = false ;
                $data["options"]["hide_line_verbs"] = false ; 
                $data["options"]["disable_datatable"] = true ; 
                $data["options"]["line_verbs_colors"] = true ; 
                $data["options"]["line_verbs_buttons"] = true ; 
            
                $data["options"]["enable_open_button"] =false; 
                $data["options"]["open_url_suffix"] = site_url("clinic/evaluations/info/")   ; 
                $data["options"]["open_url_field"] = "evaluation_id" ; 
                
                
                if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
                $template_folder = "_templates/".$this->template_name."/" ;  
                $this->load->helper($this->theme_helper)    ;
                
                //$data["total_cols"] = array("debit"=>"sum","credit"=>"sum") ; 
                $this->load->view( '_general/concept_table_aj',$data);
                
                echo' 
                <div class="row-fluid" >
                <div  id="evaluation_edit_section"  class="span12 container modal hide"      ></div></div>'; 
                
           
                echo "<a msg=record_update_success /></a><ID></ID>" ; 
           
                    
                return;
            }
        }
	
   public function ajax_new()
{
    
		$access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="read" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;

    $this->load->library("form_validation");
    $this->load->model('clinic/bi_blood_group') ; 
    $this->load->model("clinic/bi_evaluation");
 
    $this->load->model("clinic/bi_evaluation_form");
    // load & read Existing object  ----------------------------------------------------
        $this_item = & $this->main_class; 
        $this_item->clear();

        $incoming_id = $this->uri->segment(4, 0);//4 is number of segements in the url after /index.php 
        $patient_id = $this->uri->segment(5, 0);
   
        
        //when edit record
        if ($incoming_id !=0) 
        {
            $this_item->Read($incoming_id,"",1);
            if (!$this_item->is_published )
            {
                //redirect with error not found object  
            }
        }
        $data["this_controller"] = $this->controller;   
            
        $this->form_validation->set_rules("is_an_action","evalation_form_id", "required") ;
        
        echo $this_item->error_message;     //to test read_pre_process()
        //when add new/edit record
        if ($this->form_validation->run() == FALSE )
        {
            $this_item->business_data["evaluation_patient_id"]       =  $patient_id ; 
            $data["this_item"] = $this_item ;
                       
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;               
                   
            $this->load->view( 'clc_edit/new_eval',$data);
       
                
            return ; 
        }
        
        else 
        {
                echo "cann never happen " ; 
                   //echo "xx FINE: OK :"."<a msg=record_update_success /><ID>".$this_item->ID()."</ID>" ; 
                   return ; 
                   
        }
            
    }
    	
    public function ajax_edit()
{
	
    $access_component_name = $this->security_component ;
    if (!$this->_top_function($access_component_name,'yes')) return ;

    $access_verb="read" ;
    $data = array() ;
    $data["public_data"] = $this->admin_public->DATA;

    if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;

	$this->load->library("form_validation");

	$this->load->model("clinic/bi_evaluation");
	$this->load->model("clinic/bi_company");
	$this->load->model("clinic/bi_person");
	$this->load->model("clinic/bi_evaluation_form");
	// load & read Existing object  ----------------------------------------------------
		$this_item = & $this->main_class; 
		$this_item->clear();

		$incoming_id = $this->uri->segment(4, 0);//4 is number of segements in the url after /index.php 
	 	$patient_id = $this->uri->segment(5, 0);
	
	    $this->load->model("clinic/bi_evaluation_data") ; 
       $dataitem=  $this->bi_evaluation_data ; 
    $this->load->model('clinic/bi_blood_group') ; 
		$fields_collection = array() ; 
		//when edit record
		if ($incoming_id !=0) 
		{
			$this_item->Read($incoming_id,"",1);
			
			if (!$this_item->is_published )
			{
				// ERROR CANNOT FIND DATA
				ECHO "CANNOT FIND DATA" ; 
                return ; 
			}
            else {
	               $fields_collection = $dataitem->get_evaluation_fields( $this_item->business_data["evaluation_eval_form_id"] ,$this_item->ID()) ; 
                }
		}
		$data["this_controller"] = $this->controller; 	
			
		$this->form_validation->set_rules("is_an_action","is_an_action", "required") ;
        $this->form_validation->set_rules("evaluation_company_id","anything", "required") ;
		
      //    echo "<pre>"; print_r($fields_collection) ; echo "</pre>" ;    
		echo $this_item->error_message;//to test read_pre_process()
		//when add new/edit record
		if ($this->form_validation->run() == FALSE )
		{
		    // if first time 
		    if ($this_item->ID() == 0 )
            {
               
                if ($this->input->post()) // should be the only way to run/false and id=0 
                {
        		    $this_item->business_data["evaluation_patient_id"] = $this->input->post("evaluation_patient_id") ; // expected because first run is post
        		    $this_item->business_data["evaluation_eval_form_id"] = $this->input->post("evaluation_eval_form_id") ; 
                    $fields_collection = $dataitem->get_evaluation_fields( $this->input->post("evaluation_eval_form_id") ,0) ; 
                }
            }
          //echo "<pre>"; print_r($fields_collection) ; echo "</pre>" ;    
		   
		     
			$data["this_item"] = $this_item ; 			
			$data["public_data"] = $this->admin_public->DATA;
			$data["disable_edit"] = false;
            $data["fields_collection"] = 		$fields_collection ; 				
            
            $this->load->view( 'clc_edit/evaluation_edit',$data);
            //$this->load->view( 'clc_edit/img_edit',$data);
 
            echo "<a msg=record_update_success /></a>" ; 
            return ; 
			
		}
		
		else 
		{
		    
           // echo "<pre>" ; 
           // print_r($this->input->post());
           // echo "</pre>" ;
            
            $fields_collection = $dataitem->get_evaluation_fields( $this->input->post("evaluation_eval_form_id") ,0) ; 
            
			if ($this_item->ID()==0) 
			{
				 if ($this->admin_public->verify_access("new",0) == false ) return ;
			}
			else 
			{
				 if ($this->admin_public->verify_access("edit",0) == false ) return ; 
			}

            
			/*
			// ---------------------------------------------------------------------------------------------
			// this assumes that you only expose business_data from editing or filling 						/
			// you may require the input->post manually if you have additional fields , that_ 				/
			// are not in the data base or the business data 												/
			// ---------------------------------------------------------------------------------------------
			
			 */
			// just a quick fix for boolean // should find a long term solution
			//$this_item->business_data["drug_available"] = 0 ; //it's for check-box when it's unchecked return 0
			//to add new values
			foreach ($this_item->business_data as $key => $value)
			{
			if (key_exists($key, $this->input->post())) // if ($this->input->post($key))
				{ 
				$this_item->business_data[$key] =$this->input->post($key);  	
				}
			}
			
			// in this moment , where would be the new value of the field before update ?
			$this_item->validate();

			if ($this_item->success==FALSE)
			{
				//goto redo; 
				
				$data["this_item"] = $this_item ; 			
				$data["public_data"] = $this->admin_public->DATA;
				$data["disable_edit"] = false;		
				
				$template_folder = "_templates/".$this->template_name."/" ;  
				$this->load->helper($this->theme_helper)	;							
				$this->load->view( $this->view_folder.'/'.$this->concept .'_edit',$data);
				
				
				echo "<b><center>ERROR 869642</center></b>";
				
				return ;
			}
			else
			{
				//$this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
				
			//	$this_item->business_data["patient_sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
				
				
         /*       $this->db->trans_start(TRUE); // Query will be rolled back
$this->db->query('AN SQL QUERY...');
$this->db->trans_complete();
              */ 
              
                $this->load->model("clinic/bi_evaluation_data") ; 
                
                $this_item->update();
                $this_id = $this_item->ID() ; 
                $fields_collection = $dataitem->get_evaluation_fields( $this->input->post("evaluation_eval_form_id") ,0) ; 
             //   print_r($fields_collection) ; 
             //   print_r($this->input->post()) ; 
                
               foreach ($fields_collection as $key => $fld) {
                    $this->bi_evaluation_data->read(
                                                                                            array($this_id,$fld["eval_field_name"]),array("evdata_evaluation_id","evdata_field_name") ,0)           ;
                    //if post exist
                   // echo "INSIDE LOOP" ;                                
                    $this->bi_evaluation_data->business_data["evdata_evaluation_id"]   =     $this_id ;
                     $this->bi_evaluation_data->business_data["evdata_field_name"]   =       $fld["eval_field_name"] ;  
                                                                  
                    $this->bi_evaluation_data->set_field_value($this->input->post($fld["eval_field_name"]),$fld["eval_field_type_id"]) ;  ;
                    $this->bi_evaluation_data->update() ; 
                    
               } 
             
				echo "FINE: OK :"."<a msg=record_update_success /><ID>".$this_item->ID()."</ID>" ; 
			}					
			return;
		}		
			
    }
    

    public function new_patient()
    {
        
		$access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="read" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;

        $this->load->library("form_validation");
        $this->load->model('clinic/bi_evaluation');
      
        $patient = $this->bi_patient ;
        
        //$this_visit_status =  $this->load->model('lookup/bi_visit_status');
        
        // load & read Existing object  ----------------------------------------------------
        $this_item = & $this->main_class; 
        $this_item->clear();

        //----------------------------------------
        
        //setting the validation rules ,, 
       
        $this->form_validation->set_rules("evalation_company_id","evalation_company_id", "required") ;
     
      //  echo  date('Y-m-d H:i:s'); 
     
        $validation_fail = 0 ; 
        
        // VALIDATE THAT INCOMING FORM HAS DATA ------------------------------------------------------------------------------------
        if ($this->form_validation->run() == FALSE )
        {                    
            $data["this_item"] = $this_item ;           
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;
            
            //--------------------------
                  
            $template_folder = "_templates/".$this->template_name."/" ;  
            $this->load->helper($this->theme_helper)    ;
                                        
                                        
             if (!$this->input->post("patient_name"))  echo " <span class='btn red'>Please Enter Patient Name !</span><br><br>" ;
             if (!$this->input->post("patient_phone"))  echo " <span class='btn red'>Please Enter Patient Phone !</span><br>" ;
            
                  
            echo "<a msg=record_update_success /></a><ID></ID>" ; 
            return ; 
          }
  
        // VALIDATE LENGHT OF NAME ------------------------------------------------------------------------------------
             if (strlen($this->input->post("patient_name")) < 4 ) 
             {
                echo " <span class='btn red'>Please Enter Full Patient Name !</span><br><br>" ;
                echo "<a msg=record_update_success /></a><ID></ID>" ;  
            $validation_fail = 1 ;     
             } 
             
          // VALIDATE LENGHT OF PHONE ------------------------------------------------------------------------------------   
             if (strlen($this->input->post("patient_phone")) < 7 ) 
             {
                echo " <span class='btn red'>Please Enter Full Patient Phone  !</span><br><br>" ;
                echo "<a msg=record_update_success /></a><ID></ID>" ;  
                $validation_fail = 1 ;     
             } 
             
             
             if ($validation_fail == 1  )  return ; 
        //***********************************************************
          
        $phone_entry = $this->input->post("patient_phone") ;
       
      // VALIDATE REPEATED PHONE  ------------------------------------------------------------------------------------
        
         if ($this->input->post("allow_repeat")!="on")
         { 
        if( $patient->validate_patient_phone($phone_entry,1) != 0)    
        {
            $patient_phone_id = $patient->validate_patient_phone($phone_entry);
            echo "<pre>" ; 
          //  print_r($patient);
            echo "</pre>" ;
            
            $data["this_item"] = $this_item ;           
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = true;
            
          
            echo  '<a href="'.site_url("/clinic/patients/info/".$patient_phone_id."/").'">' ; 
              echo " <span class='btn red'>Patient Phone Does Exist  !</span><br><br>" ;
            echo $patient->business_data["patient_name"] . '<br/>' . $patient->business_data["patient_phone"]  .' </a>' ;
             echo "<a msg=record_update_success /></a><ID></ID>" ;  
            return ;  
        } 
         }
         
         
         //*********************************************************** 
        // VALIDATE RIGHTS TO CREATE NEW ------------------------------------------------------------------------------------
                if ($this->admin_public->verify_access("new",0) == false ) 
                {
                    echo " <span class='btn red'>No Rights To Create New Patient </span><br><br>" ;
                    echo "<a msg=record_update_success /></a><ID></ID>" ;  
                   return ; 
                } 
               
         
             // NOW GO CREATE NEW ------------------------------------------------------------------------------------
            echo "Creating New Patient " ;               
            // now take the patient name and create new one
            
            $patient->clear() ; 
            //$patient->business_data["patient_name"] = $this->input->post("patient_name") ;
            //$patient->business_data["patient_phone"] = $this->input->post("patient_phone") ; 
             //$patient->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
            
            $patient->update() ;
             
            $the_patient_id = $patient->ID() ;
            
            echo  $the_patient_id  ;
             
             echo "<a msg=record_update_success /></a><ID></ID><URL>".site_url("clinic/patients/info")."/".$the_patient_id."</URL>" ;  
            return ; 
          
            
    }
    }
