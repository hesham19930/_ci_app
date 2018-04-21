<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class images extends Base_Controller  {

    
    function __construct()
    {
        parent::__construct();
    
        $this->concept  = "image" ; 
        $this->controller = "clinic/images";    
        
        $this->class_name    = "bi_image" ; 
        $this->class_path =  "clinic/bi_image" ; 
 
        $this->view_folder = "clinic"; 
        $this->id_field  = "image_id"; 
        
        $this->use_lang_files = array("clinic/image_main") ; 
        $this->security_component = "security.image" ; 
        $this->use_master = master_type::NoMaster ; 
        
       
        
    }
    
    function get_thumb()
    {
           $access_component_name = $this->security_component ;
        if (!$this->_top_function($access_component_name,'yes')) return ;

        $access_verb="read" ;
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;

        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
        // load & read Existing object  ----------------------------------------------------
        $this_item = & $this->main_class; 
        $this_item->clear();

        $incoming_id = $this->uri->segment(4, 0);//3 is number of segements in the url after /index.php
         $file_name = "thumb-patdata-".$incoming_id ; 
       $image_path = $this->config->item('resala_image_store_path'). "/" . $file_name ; 
        // $image_path = realpath('appimg/patdata-'.$incoming_id.'.jpg'); 
        
         $ftype = "" ; 
//      echo $image_path ; 
        // check the jpg 
        if (file_exists($image_path .".jpg" ))
        {
           $ftype = ".jpg" ;  
        }
            if (file_exists($image_path .".png" ))
        {
           $ftype = ".png" ;  
        }
        
                if (file_exists($image_path .".gif" ))
        {
           $ftype = ".gif" ;  
        }
        
        //if (!file_exists($image_path))  
        if ($ftype == "")
        {
          $image_path = $this->config->item('resala_image_store_path'). "/no_image.png" ;
     
        }else
            {
                $image_path = $image_path .$ftype ;
            }

         
      //      echo $image_path  ; 
     //       return ; 
         
         $text_to_write = ""; urldecode($this->uri->segment(5, "")) ; 
        $im =$this->imagecreatefromfile( $image_path )  ;
      //       return ; 
       $text_color = imagecolorallocate($im, 10, 14, 91);

    /*** splatter the image with text ***/
    imagestring($im, 300, 50,50,  $text_to_write, $text_color);
 


        //header('Content-type: image/jpg');
        imagepng($im);
        imagedestroy($im);
        
    }
    public function get_image()
    {
        
        $access_component_name = $this->security_component ;
        if (!$this->_top_function($access_component_name,'yes')) return ;

        $access_verb="read" ;
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;

        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
        // load & read Existing object  ----------------------------------------------------
        $this_item = & $this->main_class; 
        $this_item->clear();

        $incoming_id = $this->uri->segment(4, 0);//3 is number of segements in the url after /index.php
         $file_name = "patdata-".$incoming_id ; 
       $image_path = $this->config->item('resala_image_store_path'). "/" . $file_name ; 
        // $image_path = realpath('appimg/patdata-'.$incoming_id.'.jpg'); 
        
         $ftype = "" ; 
//      echo $image_path ; 
        // check the jpg 
        if (file_exists($image_path .".jpg" ))
        {
           $ftype = ".jpg" ;  
        }
            if (file_exists($image_path .".png" ))
        {
           $ftype = ".png" ;  
        }
        
                if (file_exists($image_path .".gif" ))
        {
           $ftype = ".gif" ;  
        }
        
        //if (!file_exists($image_path))  
        if ($ftype == "")
        {
          $image_path = $this->config->item('resala_image_store_path'). "/no_image.png" ;
     
        }else
            {
                $image_path = $image_path .$ftype ;
            }

         
      //      echo $image_path  ; 
     //       return ; 
         
         $text_to_write = ""; urldecode($this->uri->segment(5, "")) ; 
        $im =$this->imagecreatefromfile( $image_path )  ;
      //       return ; 
       $text_color = imagecolorallocate($im, 10, 14, 91);

    /*** splatter the image with text ***/
    imagestring($im, 300, 50,50,  $text_to_write, $text_color);
 


        //header('Content-type: image/jpg');
        imagepng($im);
        imagedestroy($im);

        
        
    }
    
    function imagecreatefromfile( $filename ) {
    if (!file_exists($filename)) {
        throw new InvalidArgumentException('File "'.$filename.'" not found.');
    }
    switch ( strtolower( pathinfo( $filename, PATHINFO_EXTENSION ))) {
        case 'jpeg':
        case 'jpg':
             header('Content-type: image/jpg');
            return imagecreatefromjpeg($filename);
        break;

        case 'png':
            header('Content-type: image/png');
            return imagecreatefrompng($filename);
        break;

        case 'gif':
             header('Content-type: image/gif');
            return imagecreatefromgif($filename);
        break;

        default:
            throw new InvalidArgumentException('File "'.$filename.'" is not valid jpg, png or gif image.');
        break;
    }
}
    
    
    //---------------------------------------------------------------
    public function ajax_table()
    {
        
        $access_component_name = $this->security_component ;
        if (!$this->_top_function($access_component_name,'yes')) return ;

        $access_verb="read" ;
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;

        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
            
        $this_item = & $this->main_class; 
     
    
    //--------------when enter the history page direct--------------------------------
    $patient_id = $this->uri->segment(4, 0);
    if ($patient_id=="")
    {
        $data["list_table"] = $this_item->list_items_rtable( "all",array() ,"");
        $data["list_table"] = array_reverse($data["list_table"]) ;
        
        $data["options"]["hide_add_button"] = true ;                
        $data["options"]["disable_line_add"] = true ; 
        $data["options"]["disable_line_edit"] = true ; 
        $data["options"]["disable_line_delete"] = true ;
        $data["options"]["hide_line_verbs"] = false ; 
        $data["options"]["disable_datatable"] = false ; 
        $data["options"]["line_verbs_colors"] = true ; 
        $data["options"]["line_verbs_buttons"] = true ; 
           // $data["show_box_title"] = "";
            $data["show_table_box"] = "yes" ; 
        
    }
    //--------------when enter the  page  Patient page--------------------------------
    
    else 
    {
       $this->id_field="image_id" ; 
       $my_data = $this_item->list_items_array( "single_patient",array("patient_id"=>$patient_id),1 ,"");
       $data['patient_images']=$my_data ;
     
       $this->load->view('clc_report/image_list',$data); 
       return ; 
     /*  echo "<pre>";.
       print_r($my_data) ; 
       echo "</pre>";
       return ; */
      /* $read_only = 0 ;  
       $input_values = array() ;
       $field_name = "type" ;
       $this_concept="img" ;
       $lang_section =$this_concept.".form_data.";  
      $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
      if (form_error($field_name)!=""){ $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
      $Label = r_langline($field_name.'_label',$lang_section);
            
      r_theme_InputText($field_name,$input_values[$field_name],$Label , "large",$SubTip ,$read_only);*/



       
       
        $data["list_table"] = $this_item->list_items_rtable( "single_patient",array("patient_id"=>$patient_id) ,"");    
        $data["options"]["hide_add_button"] = true ;                
        $data["options"]["disable_line_add"] = true ; 
        $data["options"]["disable_line_edit"] = false ; 
        $data["options"]["disable_line_delete"] = false ;
        $data["options"]["hide_line_verbs"] = false ; 
        $data["options"]["disable_datatable"] = true ; 
        $data["options"]["line_verbs_colors"] = true ; 
        $data["options"]["line_verbs_buttons"] = true ;
        $data["enable_search"] = false ;
        $data["hscroll"] = true ;
        //$data["show_box_title"] = "Medical History Details";
        //$data["show_box_title"] = "";
        $data["show_table_box"] = "yes" ; 

    }
    
    
    $this->view_data = $data ; 
    
    return parent::ajax_table(); 
    
    }

 //---------------------------------------------------  
    public function ajax_edit()
    {
        
    
        $access_component_name = $this->security_component ;
        if (!$this->_top_function($access_component_name,'yes')) return ;

        $access_verb="read" ;
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;

        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;

    $this->load->library("form_validation");
    $this->load->model('clinic/bi_patient');
    $this->load->model("clinic/bi_image_type");
    

    // load & read Existing object  ----------------------------------------------------
        $this_item = & $this->main_class; 
        $this_item->clear();

        $incoming_id = $this->uri->segment(4, 0);//3 is number of segements in the url after /index.php 
/*
             echo ":: data received via GET ::\n\n";
print_r($_GET);

echo "\n\n:: Data received via POST ::\n\n";
print_r($_POST);

echo "\n\n:: Data received as \"raw\" (text/plain encoding) ::\n\n";
if (isset($HTTP_RAW_POST_DATA)) { echo $HTTP_RAW_POST_DATA; }

echo "\n\n:: Files received ::\n\n";
print_r($_FILES);
*/
        if ($incoming_id !=0) {
            $this_item->Read($incoming_id,"",1);
            if (!$this_item->is_published )
            {
                //redirect with error not found object  
            }
        }
        
        //------------to hide patient-name
        else 
        {
            $patient_id = $this->uri->segment(5, 0);
        } 
        //----------------------------------------
        
        
        $data["this_controller"] = $this->controller;   

        /* echo "<pre>"; 
        print_r($this->input->post()) ; 
        echo "</pre>" ;
         */  
        $this->form_validation->set_rules("is_an_action","patient_name", "required") ;
        
        echo $this_item->error_message;//to test read_pre_process()
        if ($this->form_validation->run() == FALSE )
        {
                 
            $data["this_item"] = $this_item ;           
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;  
            
            //to hide patient name 
            
            if($incoming_id == 0 ){
                
                $this_item->business_data['img_patient_id'] = $patient_id ;
                
            }
            //--------------------------
            
                                
            $this->load->view( 'clc_edit/image_edit',$data);    
            return ; 
        }
        
        else {
            
            
         
             
            if ($this_item->ID()==0) 
            { if ($this->admin_public->verify_access("new",0) == false ) return ;}
            else { if ($this->admin_public->verify_access("edit",0) == false ) return ; }

            /*
            // ---------------------------------------------------------------------------------------------
            // this assumes that you only expose business_data from editing or filling                      /
            // you may require the input->post manually if you have additional fields , that_               /
            // are not in the data base or the business data                                                /
            // ---------------------------------------------------------------------------------------------
            
             */
                    // just a quick fix for boolean // should find a long term solution
                //  $this_item->business_data["drug_available"] = 0 ; //it's for check-box when it's unchecked return 0
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
                        $this->load->helper($this->theme_helper)    ;                           
                        $this->load->view( $this->view_folder.'/'.$this->concept .'_edit',$data);
                        
                        
                        echo "<b><center>This Drug Name is already exist</center></b>";
                        
                        return ;
                    }
                    else
                    {
                        $this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
                        
                        $this_item->update();
                        $file_name = "patdata-".$this_item->ID() ; 
                       $this->save_uploaded_image($file_name); 
                        echo "FINE: OK :"."<a msg=record_update_success /><ID>".$this_item->ID()."</ID>" ; 
                    }                   
                return;
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
 

if ((($_FILES[$key]["type"] == "image/png") || ($_FILES[$key]["type"] == "image/gif") || ($_FILES[$key]["type"] == "image/jpg") || ($_FILES[$key]["type"] == "image/jpeg")
) && ($_FILES[$key]["size"] < 10000000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES[$key]["error"] > 0)
{
echo "Return Code: " . $_FILES[$key]["error"] . "<br/><br/>";
}
else
{
// echo $this->config->item('resala_image_store_path'). "/" . $file_name ;
 
if (file_exists($this->config->item('resala_image_store_path'). "/" . $file_name . ".". $file_extension   )) {
echo "<hr/>" ;
echo $_FILES[$key]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
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
 echo "<hr/>" ; 
echo "<span id='success'>Image Uploaded & Moved Successfully...!!</span><br/>";
echo "<br/><b>File Name:</b> " . $_FILES[$key]["name"] . "<br>";
echo "<b>Type:</b> " . $_FILES[$key]["type"] . "<br>";
echo "<b>Size:</b> " . ($_FILES[$key]["size"] / 1024) . " kB<br>";

$this->make_thumbnail($targetPath) ; 
}
  // Moving Uploaded file


}
}
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}
  
        //    echo "<hr>" ; 
        //    echo "ending  with file #" . $key ; 
 
             }
           
}

function make_thumbnail($filename)
{
    // The file
//$filename = 'test3.jpg';

 
// Content type
header('Content-Type: image/jpeg');

// Get new dimensions
list($width, $height) = getimagesize($filename);

if ($width > $height) 
{
    $new_width  = 300 ; 
    $new_height  =intval( 300 * $height / $width) ; 
}
else
   {
       $new_height = 300 ; 
       $new_width  =intval( 300 *   $width / $height) ; 
   }
//$new_width = $width * $percent;
//$new_height = $height * $percent;
$file_name=  str_replace("patdata","thumb-patdata",  $filename )  ; 
// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
switch ( strtolower( pathinfo( $filename, PATHINFO_EXTENSION ))) {
        case 'jpeg':
        case 'jpg':
             header('Content-type: image/jpg');
            $image =  imagecreatefromjpeg($filename);
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagejpeg($image_p, $file_name, 100);
        break;

        case 'png':
            header('Content-type: image/png');
            $image =  imagecreatefrompng($filename);
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagepng($image_p, $file_name, 9);
        break;

        case 'gif':
             header('Content-type: image/gif');
            $image = imagecreatefromgif($filename);
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagegif($image_p, $file_name);
        break;

        default:
           header('Content-type: image/jpg');
           $image = imagecreatefromjpeg($filename);
           imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
           imagejpeg($image_p, $file_name, 100);
        break;
}    



//$targetPath = $this->config->item('resala_image_store_path'). "/" .  "tm_". $file_name   ;   
 
// Output


 

}
}

    