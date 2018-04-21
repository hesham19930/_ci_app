<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
// ------------------------------------------------------------------------

/**
 * Theme Helper to Be Modified with Each Theme Used in the Application , 
 * Provides for layout and Style & drawing functions needed ,
 *  
 * By Anwar El-Sherif Date 12 OCT 2012   
 */ 
if ( ! function_exists('is_logged_in'))
{
	function is_logged_in()
	{
		
		$CI =& get_instance();
		$is_logged_in = $CI->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="../index.php/login">Login</a>';	
			//die();		
			
			$CI->load->view('login_form');
		}		
	}	

}
/* End of file listing_helper.php */
/* Location: ./application/helpers/listing_helper.php */