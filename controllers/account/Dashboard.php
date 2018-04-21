<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends Base_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 * 
	 */
	 
    
    function __construct()
    {
        parent::__construct();

        $this->concept  = "patient" ;
        $this->controller = "clinic/Dashboards";

        $this->class_name    = "bi_patient" ;
        $this->class_path =  "clinic/bi_patient" ;

        $this->view_folder = "clinic";
        $this->id_field  = "patient_id";

                $this->report_title  = r_langline('report_title',"patient.master.");

        $this->use_lang_files = array("clinic/patient_main") ;
        $this->security_component = "security.dashboard" ;
         $this->use_master = master_type::ReportAMaster ;

    }

public function index()
    {
        $this->dashboard()  ; 
    }
	//_________________________________________________________________________________________________
	public function change_lang()
	{
		if (!$this->_top_function("security.general")) return ; // takes care of login / header loading
		$incoming_id = $this->uri->segment(4, 0);
	
		
		$source_url  = $this->session->userdata($this->admin_public->DATA["system_id"].'_last_url'); 
		//echo $source_url ; 
		//echo $incoming_id;
	//	return ;  	
		if ($incoming_id !="")
		{
			
			$cookie = array(
    		'name'   => $this->admin_public->DATA["system_id"].'_current_lang',
    		'value'  => $incoming_id,
    		'expire' => '86500',
    		'path'   => '/',
    		'prefix' => '' ,
    		'secure' => FALSE
			);
		  //  echo $this->admin_public->DATA["system_id"] ; 
			$this->input->set_cookie($cookie);
		//	echo "sss".$this->input->get_cookie($cookie);
		//	print_r($cookie); 
			
		}
		
		    //echo "Langauge Changed ... " ;
		//return ; 
		//redirect (site_url("account/dashboard")) ;
		redirect ($source_url) ;  
		
	}
	
	
	public function dashboard()
	{

	$access_component_name = $this->security_component ;
        $access_verb = "read" ;

        if (!$this->_top_function($access_component_name)) return ;
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;
        if ($this->admin_public->verify_access($access_verb,0) == false )
            {
                $data["access_component_name"] = $access_component_name ;
                $data["access_verb"] = $access_verb ;
                $this->load->view( 'clc_master/no_access_master',$data);        ; // takes care of login / header loading
                return ;
            }

        
		$this->load->view( 'dashboard',$data);								
	
	}
	//_________________________________________________________________________________________________

	public function settings()
	{

	
	    $access_component_name = $this->security_component ;
        $access_verb = "read" ;

        if (!$this->_top_function($access_component_name)) return ;
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;
        if ($this->admin_public->verify_access($access_verb,0) == false )
            {
                $data["access_component_name"] = $access_component_name ;
                $data["access_verb"] = $access_verb ;
                $this->load->view( 'clc_master/no_access_master',$data);        ; // takes care of login / header loading
                return ;
            }

		
		$this->load->view( 'settings_view',$data);								
	
	}
	//_________________________________________________________________________________________________	
}
/* end of file */ 
