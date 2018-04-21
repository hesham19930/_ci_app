<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  	class Template
   	{
      	var $ci;
		//______________________________________________________________________________________________________
      	function __construct()
      	{
        	 $this->ci =& get_instance();
      	}

   		//______________________________________________________________________________________________________
   		function load($tpl_view, $body_view = null, $data = null  ,  $template_helper = null )
		{
		   if ( !($body_view==null ) )
		   	{
	   		
			   if ($template_helper==null)
			   	{
			   		$template_helper = 'metronic_ar' ; 
			   	}
			
			if (file_exists( APPPATH.'helpers/'.$template_helper.'_helper.php' ))
				{
					$this->ci->load->helper($template_helper);
					 
				} 
			else {
					$this->ci->load->helper('metronic_ar');
				}
			
			
			$data["body_view"]= $body_view ; 
		   	$this->ci->load->view('_templates/'.$tpl_view.'/template', $data);
			
		   }
	 	   
	 	
		
	   }
   }