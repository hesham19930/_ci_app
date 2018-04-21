<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// this is compied from the internet .
// URL : http://www.robertmullaney.com/2011/08/13/disable-browser-cache-easily-with-codeigniter/
// to handle the cashing of pages // I had to modify it //

// anwar - 21 jan 2013 

class my_output
   	{
      	var $ci;
		//______________________________________________________________________________________________________
      	function __construct()
      	{
        	 $this->ci =& get_instance();
      	}
		
    	function nocache()
    	{

	        $this->ci->output->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
	        $this->ci->output->set_header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
	        $this->ci->output->set_header('Cache-Control: post-check=0, pre-check=0', FALSE);
			 $this->ci->output->set_header('Cache-Control: no-transform', FALSE);
			
	        $this->ci->output->set_header('Pragma: no-cache');
			
			$this->ci->output->set_header("HTTP/1.0 200 OK");
			$this->ci->output->set_header("HTTP/1.1 200 OK");
			
	 		$this->ci->output->set_header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    	}

}

/* End of File */