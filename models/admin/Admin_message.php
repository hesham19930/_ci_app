<?php


	Class admin_message extends CI_Model 
	{
		
		public $DATA=array() ; 
		 	 
		public $template_name ; 
		public $theme_helper;
		
		// variables related to Access Infomration ----------------------------------------------  	
		function __construct() {
	  
	  		$this->_config(); 			
			// setup all variables 
			$this->clear();
			}
		
			function clear()
			{
				
			}
			
			function _config()
			{
				
		
			}
			
			
			public function show_message($imessage_type , $imessage ="" ,$ititle ="",$iexplain = "",array $ioptions = array(),$ilog_message=1)
			{
				
		
				$this->load->model("admin/bi_message_log") ; 
				$this_message = &$this->bi_message_log ;
				$this_message->clear();  
				
				
			
			
				
				$message_title= $ititle ;
				if ($message_title=="") {$message_title = "رسالة من النظام" ;}
				
				switch ($imessage) {
					case 'invalid_request':
						$this_message->business_data["message_text"] = "البيانات المطلوبة غير محددة" ;
						$this_message->business_data["message_title"] = "رسالة خطأ" ; 	
						$this_message->business_data["message_explain"] = "رجاء استكمال بيانات الدخول للصفحة";
						$this_message->business_data["message_type"] = "error"; 
						break;
					
					case 'record_not_found':
						$this_message->business_data["message_text"] = "لا اجد السجل المطلوب" ;
						$this_message->business_data["message_title"] = "رسالة خطأ" ; 	
						$this_message->business_data["message_explain"] = "رجاء مراجعة بيانات الرابط";
						$this_message->business_data["message_type"] = "error"; 
						break;
						
					case 'nothing_selected':
						$this_message->business_data["message_text"] = "لم يتم اختيار شئ " ;
						$this_message->business_data["message_title"] = "رسالة خطأ" ; 	
						$this_message->business_data["message_explain"] = "رجاء مراجعة اختياراتك ";
						$this_message->business_data["message_type"] = "error"; 
						break;
		
					case 'nothing_to_print':
						$this_message->business_data["message_text"] = "لا يوجد شئ للطباعة " ;
						$this_message->business_data["message_title"] = "رسالة خطأ" ; 	
						$this_message->business_data["message_explain"] = "رجاء مراجعة اختياراتك - قد تكون جميل الكوبونات - المستندات استنفدت عدد مرات الطباعة ";
						$this_message->business_data["message_type"] = "error"; 
						break;
					
					case 'printed_before':
						$this_message->business_data["message_text"] = "تجاوز عدد مرات الطباعة المسموح" ;
						$this_message->business_data["message_title"] = "رسالة خطأ" ; 	
						$this_message->business_data["message_explain"] = "رجاء مراجعة اختياراتك ";
						$this_message->business_data["message_type"] = "error"; 
						break;
											
					case 'not_avalid_branch':
						$this_message->business_data["message_text"] = "لا حق لهذا الفرع فى هذه العملية" ;
						$this_message->business_data["message_title"] = "رسالة خطأ" ; 	
						$this_message->business_data["message_explain"] = "الفرع المفتوح ليس له حقوق على المستند المراد ";
						$this_message->business_data["message_type"] = "error"; 
						break;

					case 'request_complete':
						$this_message->business_data["message_text"] = "تم تنفيذ الطلب بنجاح" ;
						$this_message->business_data["message_title"] = "تمام" ; 	
						$this_message->business_data["message_explain"] = "";
						$this_message->business_data["message_type"] = "done"; 
						break;

					case 'invalid_rights':
						$this_message->business_data["message_text"] = "لا حق لهذا المستخدم فى العملية الطلوبة" ;
						$this_message->business_data["message_title"] = "رسالة خطأ" ; 	
						$this_message->business_data["message_explain"] = "المستخدم ليس له حقوق على المستند المراد  ";
						$this_message->business_data["message_type"] = "error"; 
						break;	
					default:
						$this_message->business_data["message_type"] = $imessage_type ;
						$this_message->business_data["message_text"] = $imessage ; 
						$this_message->business_data["message_title"] = $message_title;
						$this_message->business_data["message_explain"] = $iexplain;		
						break;
				}
				
				
				$this_message->business_data["message_user_id"] = $this->admin_user->user_id ; 
				$this_message->business_data["message_account_id"] = $this->admin_user->sys_account_id;
				$this_message->business_data["message_group_code"] = $this->admin_user->user_group_code;
				
				if (key_exists("return_url",$ioptions))
					{ $this_message->business_data["message_return_url"] = $ioptions["return_url"]; }
				
				
				$this_message->business_data["message_date"]= date('Y-m-d H:i:s');
				
				//if ($ilog_message==1) {$this_message->update();}
				
				
				if (!$this->_top_function("message")) return ; // takes care of login / header loading 
						
				// load & read Existing object  ----------------------------------------------------		
				//$this_item = & $this->bi_organization; 
				
				$this->admin_public->DATA["page_title"] = $this_message->business_data["message_title"] ;
				
				
				$main_data["message_data"] = $this_message->business_data ;  
				$data["public_data"] = $this->admin_public->DATA;
					
				$data["body_data"] = $main_data; 
												
				$this->template->load($this->template_name ,  '_general/general/message_log_view', $data,$this->theme_helper);
		
				
				if ($this_message->is_published)
				{
					$message_log_id  = $this_message->ID();
					return $message_log_id ; 
				}
				return 0 ; 
				
			}


	//_________________________________________________________________________________________________			
	// main public loader & rights validator 		
			public function _top_function($component_code)
			{
				
				if ($this->template_name=="") $this->template_name="metronic_en" ; 
				if ($this->theme_helper=="") $this->theme_helper = "metronic_en";
					
				$this->my_output->nocache(); 		
				$this->load->model("admin/admin_public") ; 	
				// start with the public items always 
				
				if (!$this->admin_public->load($component_code)) return false;  
				 
				
				return true; 
			}	
		
	}
	
	 
		