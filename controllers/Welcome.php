<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		
		//echo $this->_escape_char[1] ; 
		echo "<hr/>"; 
		
		echo "223" ; 
		
	
		$result = $this->db->get('employees');
		//$result= $this->db->query('select * from employees');
		
		
		foreach ( $result->result_array() as $row ) {
			print_r($row) ; 
			echo "<hr/>" ; 
				// return $row[$this->name_field_name] ;
			 }	
		
		//$sql = "Update Employees Set FIRST_NAME='انور' where EMPLOYEE_ID = 198  "  ; 
		//$query = $this->db->query($sql); 		
	
	
		$data = array(
               'FIRST_NAME' => 'انور',
               'LAST_NAME' => 'الشريف',
             
            );

		$this->db->where('EMPLOYEE_ID', 199);
		$this->db->update('Employees', $data); 
		
		
	}
}
