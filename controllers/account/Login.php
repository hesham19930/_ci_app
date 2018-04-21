<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

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
	 
	 public $pass_error ="";
	public function index()
	{
			$this->load->config("rconfig/admin") ;
			
			$this->login_form(); 	
	}
		
	function login_form()
	{
		
		$this->load->model("admin/admin_user") ;
		
		if ($this->admin_user->verify() == "YES!")
		{


			redirect(site_url("account/dashboard")) ; 
		} 
		else
		{


			$incoming_code = $this->uri->segment(4, 0);
			
			$account_name="";
			$account_title ="" ; 
			$account_logo = "";
			
			$system_id = $this->config->item("system_id"); 
	
			if ($incoming_code!="" )
			{
				$this->load->model("admin/bi_sys_account");
				$this->bi_sys_account->read($incoming_code , "sys_account_name" ); 
				$account_name = $this->bi_sys_account->business_data["sys_account_name"] ; 	
				$account_title= $this->bi_sys_account->business_data["sys_account_title"] ;
				$account_logo = $this->bi_sys_account->logo_file()  ;
			}
			
			
			$data = Array() ;
			 
			$data["sys_account_name"] = $account_name ;
			$data["sys_account_title"] = $account_title ; 
			$data["sys_account_logo"] = $account_logo ;    
			$data["template_name"] = "metronic_en" ; 
			$data["public_data"] = array();
			
			$this->load->view("account/login_form",$data);  
		}
		
	}
	
	function submit() 
	{
		

		$user_name = $this->input->post('login_username');
		$account_name = $this->input->post('login_account');
		$password = $this->input->post('login_password') ;
		
		
		if (($user_name=="") or ($account_name=="") or ($password==""))
		{ 
		redirect (site_url("account/login"));
		}

		/*if ($account_name=="") { 
		redirect (site_url("account/login"));}

		if ($password=="") { 
		redirect (site_url("account/login"));
		}*/
		$this->load->model("admin/admin_public") ; 
		
		$this->load->model("admin/admin_user") ;
	
		if ($this->admin_user->login_user($user_name,$account_name,$password)=="YES!")
			{

			redirect(site_url("account/dashboard")) ;
			//echo "ok" ; 
			}
		else 
			{
					

			redirect(site_url("account/login")) ;
			//echo "fail" ;     
			}
	
	
		if ($this->input->post('ajax')==1) 
		{
			
			//$this->load->view($viewname);			 
		}
			
	}
	
	public function logout()
	{
		$this->load->model("admin/admin_user") ;
		$this->admin_user->logout();  
		redirect (site_url("account/login"));
		
	}
	
}

/* end of file login.php */  