<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {


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
		redirect (site_url("/account/dashboard")) ; 
		return ; 
		echo '<span style="font-family:tahoma;"  >' ;
		ECHO "Main - Controller <br/> Here You Can Place Your Front End "; 
		echo "</span>" ; 
		echo '<hr/> <a href="'.site_url("/account/dashboard").'"> dashboard </a>' ; 
		exit ; 
		
	}

	//_________________________________________________________________________________________________			
	// main public loader & rights validator 		
	

}
/* end of file */ 
