<?php defined('BASEPATH') OR exit('No direct script access allowed');
function get_sourcename($id)

{
if($id==0)
return 'site news';	
else{
    $ci = & get_instance();

    $role = $ci->db->get_where('out_sources', array('out_sources.id' => $id))->row();

    return $role->name;
}
}
function get_this($table=null , $where=null ,$colomn=null){
    if (empty($table)||empty($where)) {
        return false;
    }else{
        $ci = & get_instance();
        $role = $ci->db->get_where($table, $where)->row_array();
        if (!empty($colomn)) {
            return $role[$colomn];
        }else{
            return $role;
        }
    }
}
function lang($lang_line=null)
{
    $ci = & get_instance();
   if($lang_line){
        $text =  $ci->lang->line(str_replace(" ", "_",strtolower($lang_line)));
        if($text)
            return $text;
        else
            return $lang_line;
    }else{
       return  $lang_line;
    }
}
function get_avg($id='')
{
    $ci = & get_instance();

if($id)
    $rate = $ci->db->select_avg('rate')->get_where('property_comments',['property_id'=>$id])->row()->rate;
    if($rate)
    return $rate;
else
    return 0;
}
function meta($title=null,$description=null,$keywords=null,$image = null)
{
    $ci = & get_instance();
    $site_name = ($ci->session->lang == 'ar')?get_setting('site_name_ar'):get_setting('site_name_en');
    $title = ($title)?' | '.$title:"";
    if(!$keywords){
        if($ci->session->lang == 'ar'){
            $site_keywords = get_setting('meta_keywords_ar');
        }else{
            $site_keywords = get_setting('meta_keywords_en');
        }
    }else{
        $site_keywords = $keywords;
    }
    if(!$description){
        if($ci->session->lang == 'ar'){
            $site_description = get_setting('meta_description_ar');
        }else{
            $site_description = get_setting('meta_description_en');
        }
    }else{
        $site_description = $description;
    } 
    if(!$image){
        if($ci->session->lang == 'ar'){
            $site_image = base_url('assets/site');
        }else{
            $site_image = base_url('assets/site');
        }
    }else{
        $site_image = $image;
    }            
    return
    '<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>'.$site_name.$title.' </title>
    <meta name="author"             content="MR code.hifny team in el modhesh4tech">
    <meta name="viewport"           content="width=device-width, initial-scale=1">
    <meta name="keywords"           content="'.$site_keywords.'">
    <meta itemprop="name"           content="'.$site_name.$title.'">
    <meta itemprop="description"    content="'.$site_description.'">
    <meta property="og:image:type"  content="image/jpg/jpeg/png"/>
    <meta property="og:image:width" content="200"/>
    <meta property="og:image:height"content="200"/> 
    <meta property="og:image"       content="'.$site_image.'" />
    <meta itemprop="image"          content="{'.$site_image.'}">
    <meta property="og:title"       content="'.$site_name.$title.'" />
    <meta property="og:site_name"   content="'.$site_name.'" />
    <meta property="og:description" content="'.$site_description.'" />';
        
}
function get_table($table=null , $where=null,$return=null,$limit = null,$order_by = null){
    if (empty($table)) {
        return false;
    }else{
        $ci = & get_instance();
        if ($limit)
            $ci->db->limit($limit); 
        if ($order_by)
            $ci->db->order_by($order_by[0],$order_by[1]); 
        if ($return == "count") {
            return $ci->db->where($where)->count_all_results($table);
        }else{
         return $ci->db->get_where($table, $where)->result();
        }
    }
}
function get_mobile($id=null,$type = null){
    if (empty($id)) {
        return false;
    }else{
        $ci = & get_instance();
        $company = $ci->db->get_where('companies', array('id'=>$id))->row_array();
        $more_mobile = $ci->db->get_where('companies_more_data', array('company_id'=>$id,'key'=>'mobile'))->result();
        $data = ($company['mobile'])?$company['mobile']:"";
        if ($type == "table") {
        foreach ($more_mobile as $mobile) {
             $data = $data."<br>".$mobile->value;
         } 
        }else{
        foreach ($more_mobile as $mobile) {
             $data = $data."-".$mobile->value;
         } 
        }

         return $data;
    }
}

function get_time(){
   return array('09:00'=>'09:00 AM',
                '10:30'=>'10:30 AM',
                '11:00'=>'11:00 AM',
                '11:30'=>'11:30 AM',
                '12:00'=>'12:00 PM',
                '12:30'=>'12:30 PM',
                '13:00'=>'01:00 PM',
                '13:30'=>'01:30 PM',
                '14:00'=>'02:00 PM',
                '14:30'=>'02:30 PM',
                '15:00'=>'03:00 PM',
                '15:30'=>'03:30 PM',
                '16:00'=>'04:00 PM',
                '16:30'=>'04:30 PM',
                '17:00'=>'05:00 PM',
                '17:30'=>'05:30 PM'
                ); }

function generate_password($len = 5){
      $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
      $base = strlen($charset);
      $result = '';

      $now = explode(' ', microtime())[1];
      while ($now >= $base){
        $i = $now % $base;
        $result = $charset[$i] . $result;
        $now /= $base;
      }
      return substr($result, -5);
    }


function age($birthday)

{

	$year = '31556926';

	return floor((time()-$birthday)/$year);

}



function show_message($message,$type='success')
{
    $message = trim(preg_replace('/\s+/', ' ', $message));
	$type = ($type == 'success') ?'success':'danger'; 
    return'<script>
                UIkit.notify({
                    message : "'.$message.'",
                    status  : "'.$type.'",
                    timeout : 5000,
                    pos     : "top-center"
                });
            </script>';
}
function show_message2($message,$type='success')
{
    $type = ($type == 'success') ?'success':'danger'; 
    return '<div class="alert media fade in remove alert-'.$type.' alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                '.$message.'
            </div>';
}