<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Client extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        date_default_timezone_set('Africa/Cairo');
    }




 
////patient name 
public function patient_name_post(){
 
  if ($this->post('id'))
  {
  $where['patient_id'] = $this->post('id');
   // $allowed_http_methods = array('get', 'delete', 'post', 'put', 'options', 'patch', 'head');
    
  $pa_name = $this->db->get_where('patient_s',$where)
                    ->result();
    if ($pa_name) {
      foreach ($pa_name as $name) {
        $result[]=
                  [
                    'patient_name'    =>$name->patient_name,
                    
                  ];
      }
          if ($result) {
                $data['status']=true;
                $data['data'] = $result;
                $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
      }
     
    }
    else{
      $data['status']=false;
      $data['message']="sorry no patient found in database";
      $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
  }
    else 
    {
      $data['status']=false;
      $data['message']="bad pramater";
      $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
  }
    /////////////// image type 
    public function image_type_get(){

    
     $this->db->select('image_type_id');
     $this->db->select('image_type_name');
     $this->db->from('image_type_s');
    
     $query=$this->db->get();
     $result = $query->result();
      
               if ($result) {
                     $data['status']=true;
                     $data['data'] = $result;
                     $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
           }
          
         
         else{
           $data['status']=false;
           $data['message']="sorry no data found in database";
           $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
         }
       
        
       }

          ////////////////// log in
       
    public function login_post(){
      if ($this->post('email')&&$this->post('pass')&& $this->post('name')) {
        $n=$this->post('name');
        $this->db->select('sys_account_name');
        $this->db->from('a_sys_accounts');
        $this->db->from('a_users');
        $this->db->where('sys_account_name',$n);
    
       
           $query=$this->db->get();
        $result = $query->result();
//echo $result['master'];
          $user_data = get_this('a_users',['user_login'=>$this->post('email'),'user_pass'=>$this->post('pass')]);
          if ($user_data==true && $result==true ) {
           
              $data['status'] = true;
              $data['user_data'] = $user_data;
              $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
          }else{
              $data['status'] = false;
              $data['message'] = 'User name or password or clinic  wrong';
              $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
          }
      }else{
          $data['status']=false;
          $data['message']="User name or password or clinic  missing";
          $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
      }
  }
  ////////////////////////
  
  public function insertdata_post(){
   
    if ($this->post("type_id")&&$this->post('pat_id')&&$this->post('account_id')&& $_FILES['logo']) {
        $store = ['img_image_type_id'=>$this->post("type_id"),
                   'img_patient_id'=>$this->post('pat_id'),
                   'img_sys_account_id'=>$this->post('account_id'),
                   'img_center_name'=>$this->post('center_image'),  
                   'image_date'=>date('Y-m-d')];
                   
               
                   
                  
        $send = $this->db->insert('image_s', $store);
       $img_id= $this->db->insert_id();
       $file_name="patdata-".$img_id;
        /*$n=$this->post('pat_id');
        $this->db->select('image_id');
        $this->db->from('image_s');
        
        $this->db->where('img_patient_id',$n);
        $query=$this->db->get();
        $result = $query->result();*/

       // $file_name = "patdata-".$result;
      // $this->load->model('log_image');

       if (@strlen($_FILES['logo']['name'])) {

         // OK (200) being the HTTP response code
        // $file_name = "patdata-".$this_item->ID() ; 
        $this->save_uploaded_image($file_name);
        $data['status']=true;
        $data['message']="true";
        $this->response($data, REST_Controller::HTTP_OK);
       // $image = $this->log_image->do_upload('logo');
        //$store['logo'] = $image['file_name'];
      }
      if ($this->post('logo')) {
      $image = $this->m_image->base64_upload($this->post('logo'));
      //$store['logo'] = $image;
 $ext = explode('.', basename($_FILES['img']['name'][$i]));//explode file name from dot(.) 
      $file_extension = pathinfo($_FILES['img']['name'][$i], PATHINFO_EXTENSION);
      $image_name = md5(uniqid()) . "." . $ext[count($ext) - 1];
    $target_path = $target_path . $image_name;//set the target path with a new name of image
      $j = $j + 1;//increment the number of uploaded images according to the files in array       
      if (in_array($file_extension, $validextensions) == 1) {
       if (move_uploaded_file($_FILES['img']['tmp_name'][$i], $target_path)) {//if file moved to uploads folder
        $this->m_image->create_thumbnail(realpath('.').'/appimg'. $image_name, 500, 450);
     
       }
      }
    } 
         

        if ($send) {
        $data['status'] = true;
        $data['message'] =  "send success";
        $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code              
        }else{
        $data['status'] = false;
        $data['message'] = 'something went wrong';
        $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code   
        }                 
        
    }else{
        $data['status']=false;
        $data['message']="bad parameters chick the doc file";
        $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
}

    

function save_uploaded_image($file_name)
{
    
       
         //    print_r($_FILES) ; 
             
             foreach ($_FILES as $key => $value) {
           // echo "<hr>" ; 
           // echo "starting with file #" . $key ; 
          
            if(isset($_FILES[$key]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES[$key]["name"]);
$file_extension = end($temporary);
 

if ((($_FILES[$key]["type"] == "image/png") || ($_FILES[$key]["type"] == "image/jpg") || ($_FILES[$key]["type"] == "image/jpeg")
) && ($_FILES[$key]["size"] < 10000000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES[$key]["error"] > 0)
{

}
else
{
// echo $this->config->item('resala_image_store_path'). "/" . $file_name ;
 
if (file_exists($this->config->item('resala_image_store_path'). "/" . $file_name . ".". $file_extension   )) {

}
else
{
    
$sourcePath = $_FILES[$key]['tmp_name']; // Storing source path of the file in a variable
 
//echo $sourcePath ; 
$targetPath = $this->config->item('resala_image_store_path'). "/" .  $file_name  .".".  $file_extension   ; // Target path where file is to be stored
//$targetPath = "e:\\_www\\nclinic\\uploads\\" .$_FILES['file']['name']; // Target path where file is to be stored
if (move_uploaded_file($sourcePath,$targetPath))
{
 //echo "<b>Temp file:</b> " . $_FILES[$key]["tmp_name"] . "<br>";
 
}
  // Moving Uploaded file


}
}
}
else
{
}
}
  
        //    echo "<hr>" ; 
        //    echo "ending  with file #" . $key ; 
 
             }
           
}



}



