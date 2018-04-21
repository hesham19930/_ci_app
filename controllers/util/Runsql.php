<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class runsql extends CI_Controller {


	function __construct()
	{
		parent::__construct();
	
	}
	
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
	 
	public $template_name ; 
	public $theme_helper;
	
	public function index()
	{
		$this->runsql() ; 
	}

	//_________________________________________________________________________________________________			
	// main public loader & rights validator 		
	public function _top_function($component_code)
	{
		
		if ($this->template_name=="") $this->template_name="metronic_ar" ; 
		if ($this->theme_helper=="") $this->theme_helper = "metronic_ar";
			
		$this->my_output->nocache(); 		
		$this->load->model("admin/admin_public") ; 	
		// start with the public items always 
		
		if (!$this->admin_public->load($component_code)) return false;  
		 
		// needed in all the controllers functions,  
		$this->load->model("lorenzo/bi_organization");
				$this->load->model("admin/admin_message") ;
		return true; 
	}	
	
	//_________________________________________________________________________________________________
	
	//_________________________________________________________________________________________________

	
	public function runsql()
	{
	
		if (!$this->_top_function("sql.run")) return ; // takes care of login / header loading 
		if ($this->admin_public->verify_access("read",0) == false ) return ;
					
		// load & read Existing object  ----------------------------------------------------		
		$this->load->library("form_validation");
		

		$this->admin_public->DATA["page_title"] = "RUNSQL" ; 
		$main_data["this_table"] = new rTable();
		$main_data["rErrors"] = array(); 
		$main_data["sql_to_run"] = $this->input->post("sql_to_run"); 
			$main_data["message"] = "" ; 
		if ($this->input->post("is_an_action")!="yes")
		{
	
			$main_data["public_data"] = $this->admin_public->DATA; // needed to activate features based on 
						
			$data["body_data"] = $main_data; 			
			$data["public_data"] = $this->admin_public->DATA;										
			$this->template->load($this->template_name ,  'general/runsql', $data,$this->theme_helper);
			return ; 
		} 
		
		else 
		{
			try
			{ 
				$sql = $this->input->post("sql_to_run"); 
				;
				$query = $this->db->query($sql);
			
				$newtable = new rTable();
				if (strpos("_".strtolower($sql), "select")==0)
				{
					$main_data["message"] = "OK" ; 
				}
				else 
				{
				
		
				$fld_list = $query->list_fields() ; 
				
				foreach ($fld_list as $value)
					{
					 
					$newtable->Addcol($value,$value,rColumnType::ColTypeText,30) ;				 	
					}
					
				foreach ( $query->result_array() as $row )
					{
			
					$NewRow = rTableRow::CreateNew($newtable);
					foreach ($fld_list as $value){
						$NewRow->Cells[$value]->Value = $row[$value] ;
					//	echo "ROW:".$row[$value] ; 
					
					}
					}
				}
				$main_data["this_table"] = $newtable;   
			}
				catch (Exception $e) {
					$main_data["rErrors"] = Array('Caught exception: ',  $e->getMessage(), "\n");	
				
					return ; 
					}	
			} // close fy 			
						
					
					  
					$main_data["public_data"] = $this->admin_public->DATA; // needed to activate features based on  	
					
					$data["body_data"] = $main_data; 						
					$data["public_data"] = $this->admin_public->DATA;				
					$this->template->load($this->template_name ,  'general/runsql', $data,$this->theme_helper);
			
			}
		
	}
	
/* end of file */ 
