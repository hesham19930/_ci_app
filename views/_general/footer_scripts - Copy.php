<?php


?>
    
	<script>
	
	jQuery(document).ready(function() {
		    
			
			var callbacks = $.Callbacks();
			
			var list_id_object_id ; 
			var list_name_object_id ; 
			var waiting_selection = 0 ;
			
			var addition_id_control = []; 
			var addition_name_control = []; 
			var waiting_addition = 0 ; 
			
		   	App.init();
		   	TableManaged.init();
		   	FormValidation.init();
			UIModals.init();
			
	
		 	init_auto_loaders();
		 	datatable_setup() ;
		 	jQuery(".select2_combo").select2() 
		 
			 //
	
			// var el = jQuery(".collapse").children(".portlet-body");
        	// el.slideUp(200);
          	// el.removeClass("expand").addClass("collapse");
          	// jQuery(".collapsed").addclass("expand")
          
            jQuery(".collapsed").slideUp(200) ; 
            $('#my_multi_select1').multiSelect();
            //--------------------------------------------------------------------------------------------------------
     	 	 $('.my_multi_select1').multiSelect();
     	 	 
      	  	 TableEditable.init();

     	 	<?php
     	 	
     	 		if (isset($auto_remove_menu))
     	 		{
     	 			if ($auto_remove_menu=="yes")
					{
					echo "remove_menu();" ; 	
					}
				}
			?>
    
  	 
     	 	function isDate(txtDate)

            {

                var currVal = txtDate;
                
                
			

			  if(currVal == '')
			    return false;
			
			  //Declare Regex 
			
			  var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
			
			  var dtArray = currVal.match(rxDatePattern); // is format OK?
			
			 
			
			  if (dtArray == null)
			     
			     return false;
			  //Checks for mm/dd/yyyy format.
			
			  dtMonth = dtArray[1];
			
			  dtDay= dtArray[3];
			
			  dtYear = dtArray[5];
			  
			 
			
			 
			
			  if (dtMonth < 1 || dtMonth > 12)
			
			      
			      return false;
			
			  else if (dtDay < 1 || dtDay> 31)
			
			      
			      return false;
			
			  else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31)
			
			      
			      return false;
			
			  else if (dtMonth == 2)
			
			  {
			
			     var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
			
			     if (dtDay> 29 || (dtDay ==29 && !isleap))
			
			          
			          return false;
			
			  }
			
			  
			  return true;
			
			}
     	 	
     	 	$('#remove_menu').click(function() {
			
				remove_menu() ; 
						
			});
				
			function remove_menu() {
					//	$('div[rel=frame]').slideToggle("fast");; // hide all as needed
				$('.navbar-fixed-top').slideToggle("fast");; // hide all as needed
				$('.hide_with_menu').slideToggle("fast");; // hide all as needed
					
			//	$('#top').slideToggle("fast");; // hide all as needed
			//	$('#footer_bar').slideToggle("fast");; // hide all as needed
			}
			
        	jQuery('.ajax_action').live("click", function (e) {		
        	
        		e.preventDefault();
          			
          			// alert("s") ;
          			// the e.target is the calling object
          		  
          			var caller_id = $(e.target).attr("caller_id") ;
          			var verb  = $(e.target).attr("caller_verb") ;
          			
          			if ($(e.target).get(0).tagName == "I") 
          			{
          				var xxx = $(e.target).parent() ;  
          				caller_id = xxx.attr("caller_id") ;
          				verb  = xxx.attr("caller_verb") ;
          				 
          			} ; 
          		 	
          			do_actions(caller_id,verb,e)
          			return ; 
          	});
          	         	
        	//--------------------------------------------------------------------------------------------------------
        	
        	function do_actions(caller_id,caller_verb,e,record_id)
	        {
	        	
	        	jQuery(".select2_combo").select2("destroy")
	        	//alert('CALLER:'+caller_id +"............... VERB: "+caller_verb ) ;
          		 
          		$.each($(".r_automation"), function( index, xvalue ) {
          			
          				//alert($(xvalue).attr("caller_key")) ;
          				 
          				if ($(xvalue).attr("caller_key")==caller_id)
          				{
          						
          					if (caller_verb == $(xvalue).attr("automation_verb"))
          					{
          						
          						
          						action_to_do = $(xvalue).attr("automation_action");
          					
          						this_url = $(xvalue).attr("automation_url");
          						target_window = $(xvalue).attr("automation_target");
         						
         					//	alert (this_url);  
          						if (this_url=="[get_from_caller]") 
          						{
          							this_url = $(e.target).attr("caller_url") ;
          						}
          						if (target_window=="[get_from_caller]")
          						{
          							target_window = $(e.target).attr("caller_target") ;
          						}
          						
 							//	alert('CALLER:'+caller_id +"VERB:"+caller_verb +'action'+action_to_do+'window'+target_window) ;
 								          						 	
          						/* .............................................. hanling actions ----- */ 
          						if (action_to_do=="load_form")
          						{         							
          							r_load_form(target_window,this_url,0)
          						}
          						
          						if (action_to_do=="load_form_modal")
          						{         							
          							r_load_form(target_window,this_url,1)
          						}
          						
          						if (action_to_do=="post_form")
          						{
          							
          							
          							var form_name  = $(e.target).attr("form_name");
          							var form_type  = $(e.target).attr("form_type");
          							       
          							success_window = "" ; 	
          							if (target_window =="@differ")						
          							{	
          								target_window = $(xvalue).attr("automation_form_fail_target");
          								success_window = $(xvalue).attr("automation_form_success_target");
          							}
          						
          							r_post_form(target_window,this_url,form_name,form_type,caller_id,"",success_window)
          							
          						}
          						
          						if (action_to_do=="reload")
          						{
          							//alert("reload") ; 
          							reload_box(target_window);
          						}
          						
          						if (action_to_do=="clear")
          						{          							
          							r_clear_area(target_window)
          						}
          						
          						if (action_to_do=="clear_modal")
          						{          		
          												
          							r_clear_area(target_window,1)
          						}
          						
          						if (action_to_do=="show_section")
          						{    
          							var content = $('#'+target_window);
          							content.show() ;  	      							
	          						 $('html, body').animate({
									        scrollTop: $("#"+this_url).offset().top - 50
									 }, 500);
	 								 return false;  								   							 							          							
          						}
          						
          						if (action_to_do=="toggle_section")
          						{    
          							var content = $('#'+target_window);
          							content.toggle('fast') ;  	      							
	          						 $('html, body').animate({
									        scrollTop: $("#"+this_url).offset().top - 50
									 }, 500);
	 								 return false;  								   							 							          							
          						}
          						
          						if (action_to_do=="move_to_label")
          						{          							
	          						 $('html, body').animate({
									        scrollTop: $("#"+this_url).offset().top - 50
									    }, 500);
	 								   return false;  								   							 							          							
          						}
          						
          						
          						if (action_to_do=="just_go_to_page")
          						{          							
          						
          							nthis_url = this_url  ;           							
          							r_goto_page(target_window,nthis_url);
 								    return (false)	  								   							 							
          						}
          						
          						if (action_to_do=="go_to_page")
          						{          							
          						
          							if(! record_id){
          								nthis_url = this_url  ; 
          								 return (false)	   // here disabling goto non record_ided //should send 0 
          							}
          							else
          							{
          								nthis_url = this_url + record_id ; 
          							}
          							//var record_id_ndx1 = record_id.indexOf("udefined") ;
          							//if (record_id_ndx1==0){
          						//		alert("found") ; 
          							//}
          							r_goto_page(target_window,nthis_url);
 								    return (false)	  								   							 							
          						}
          						
          					} 
          				}
          		}); 
          	
          		jQuery(".select2_combo").select2(); 	
          		post_auto_setup();
          		FormComponents.init();	
          				
          				
          	}
          	
        	//-------------------------------------------------------------------------------------------------------- 
        	function r_goto_page(target_window,load_url)
        	{
        		
        	 
        		if (target_window=="") {
        		
                	window.open(load_url, '_blank');
                	return ;  
        			}
        		if (target_window=="_blank") {
        		
        			window.open(load_url, '_blank');
        			return ;  
        			}
        		if (target_window=="_self") {
        			
        			 window.open(load_url,"_self");
        			
        			return (false);  
        			}   
        			    		
        	}         	
        	
        	//-------------------------------------------------------------------------------------------------------- 
          	function r_clear_area(target_window,is_modal)
          	{
          		
          		var content = $('#'+target_window);
          		 $('#'+target_window).slideUp( "fast", function() {
          		 	content.html("");
		        	if (is_modal==1) { content.modal('hide'); } 
    				// Animation complete.
  				});
          		 
		       
		        
          	}
          	
          	//--------------------------------------------------------------------------------------------------------
          	// LOAD A FORM INTO A  DIV ,, WORKS ALSO FOR MODAL DIVS 
			//--------------------------------------------------------------------------------------------------------          	        	
          	function r_load_form(target_window,load_url,is_modal)
          	{
          		var content = $('#'+target_window);
          		App.blockUI(content, false); 
          		$.ajax({
				     	cache: false,
				        url: load_url,		       
				        dataType: "html",
				        success: function(res) 
			      			{
			            	App.unblockUI(content);
			                content.html(res);
			                    	    	
			                App.fixContentHeight(); // fix content height
			                App.initUniform(); // initialize uniform elements		                        		
						//	jQuery(".select2_combo").select2();
			                if (is_modal==1) { 
			                	content.modal(); 
			                	}	
			                content.slideDown( "fast", function() { });
			                        		 
			            	},
				        error: function(xhr, ajaxOptions, thrownError)
				        	{
				            content.html('<h4>Could not load the requested content.</h4>'+ '  Error: ' + thrownError + xhr );
				            App.unblockUI(value);
				            },
			            async: false
			            }); // end ajax call 
		          return ; 
          	}
          	
          	//--------------------------------------------------------------------------------------------------------  
          	var xhr = null;       	        	
          	function r_post_form(target_window,load_url,form_name,form_type,caller_id,post_success_string,success_window)
          	{
          		
          		//alert(load_url) ; 
          		// alert("post_form_caller"+target_window) ;  
          		var datastring = $("#"+form_name).serialize();
          		
				//var content = $('#'+target_window);
				//App.blockUI(content, false);
				if( xhr != null ) {
			                xhr.abort();
			                xhr = null;
			        }
				xhr = $.ajax({	
		        	type: form_type,
				    cache: false,
				    url: load_url,
				    data:datastring ,
				    dataType: "html",
				    	success: function(res) 
				        {	
				      	//	alert(res) ; 
				         	          	
				  //         jQuery(".chosen").chosen();
				   //        jQuery(".select2_combo").select2();	
				            //FormComponents.init(); this needs to be at the final finishing causefor some reason blocks loop continuing 

				           // now actions based on success or fail of the form posting
				           var success_index =  res.toLowerCase().indexOf("record_update_success") ; 
				           var record_id = 0 ; 
				           if (success_index  >= 0)
				           {
				           		//alert("success") ; 
				           		var record_id_ndx1 = res.indexOf("<ID>") ;
				           		if (record_id_ndx1>=0)
				           		{
					           	 
					           		var id_string = res.substring(record_id_ndx1);
					           		var record_id_ndx2 = id_string.indexOf("</ID>") ;					           	 
					           		record_id =  id_string.substring(4,record_id_ndx2) ; 
					           		
				           		}
				           		
				           		//alert(success_window) ; 
				           		if (success_window!="")
				           		{
				           		var content = $('#'+success_window);	
				           		}
				           		else
				           		{
				           		var content = $('#'+target_window);
				           		}
				           		
				           		App.unblockUI(content);
				          		content.html(res);
				          
				          		App.fixContentHeight(); // fix content height
				          		App.initUniform(); // initialize uniform elements
				          		
				           		do_actions(caller_id,"form_post_success","",record_id)
				           	
				           		return false; 
				           }
				           else
				           {
				           		//alert("actioning_failed_form") ;
				           		//alert(res) ;  
				           		
				           		//alert(target_window) ; 
				           		var content = $('#'+target_window);
				           		App.unblockUI(content);
				          		content.html(res);
				          
				          		App.fixContentHeight(); // fix content height
				          		App.initUniform(); // initialize uniform elements
				           		
				           		do_actions(caller_id,"form_post_fail")
				           		
				           		return ; 
				           }
				        
				           
				        },
			            error: function(xhr, ajaxOptions, thrownError)
			            {
			            	alert('<h4>Could not load the requested content.</h4>'+ '  Error: ' + thrownError + xhr )
					        content.html('<h4>Could not load the requested content.</h4>'+ '  Error: ' + thrownError + xhr.responseText );
					        App.unblockUI(content);
			            },
			            async: false
			          });	 
          	}
          	
          	//--------------------------------------------------------------------------------------------------------
			jQuery('.selected_action').live("click", function (e) {	
				
				if (waiting_selection==1)
				{
					 
					var this_name =$(e.target).attr("selected_name") ;
					var this_id =$(e.target).attr("selected_id") ;
					 
					$('#'+list_name_object_id).val(this_name) ;
					$('#'+list_id_object_id).val(this_id) ; 
					var content = $('#select_box');
					content.modal('hide'); 
					waiting_selection = 0 ;  
				}
				
				});	
				
			//--------------------------------------------------------------------------------------------------------
			jQuery('.select_action').live("click", function (e) {		
        	
        		e.preventDefault();
          			
          			// alert("s") ;
          			// the e.target is the calling object
          			  
          			var load_url = $(e.target).attr("select_url") ;
          			//alert(load_url) ; 
          			list_id_object_id = $(e.target).attr("id_control") ;;
					list_name_object_id = $(e.target).attr("name_control") ;; 
			
          			waiting_selection = 1 ; 	
          			
          			//var verb  = $(e.target).attr("caller_verb") ;
          		 
          			select_from_list(load_url);
          			return ; 
          	});
          	
			//--------------------------------------------------------------------------------------------------------
			function select_from_list(load_url)
				{
				
					var content = $('#select_box');
          			
					App.blockUI(content, false); 
					$.ajax({
                    	cache: false,
                    	url: load_url,		       
                    	dataType: "html",
                    	success: function(res) 
  		              		{
        		        	App.unblockUI(content);
                	    	content.html(res);
                	    	 
                    		App.fixContentHeight(); // fix content height
                    		App.initUniform(); // initialize uniform elements		                        		
					
                    		jQuery(".chosen").chosen();
                    		content.modal();
                    		
                    		post_auto_setup();
                    		FormComponents.init(); 
                      		},
                    	error: function(xhr, ajaxOptions, thrownError)
                    		{
                        	content.html('<h4>Could not load the requested content.</h4>'+ '  Error: ' + thrownError + xhr );
                        	App.unblockUI(value);
                    		},
                		async: false
               		}); // end ajax call 
               	return ; 
			
				}
			
			//--------------------------------------------------------------------------------------------------------
			jQuery('.quick_add').live('click',function(e) {
				
				e.preventDefault();	
			
				// alert("s") ;
      			// the e.target is the calling object
      			  
      			var load_url = $(e.target).attr("add_url") ;
      			//alert(load_url) ; 
      			//alert("poshing"); 
      			addition_id_control.push(  $(e.target).attr("id_control")) ;;
				addition_name_control.push(  $(e.target).attr("name_control")) ;; 
				
				//alert(load_url );
      			waiting_addition = 1 ; 		
      			
      			
      			var new_id = 'qa_'+ $(e.target).attr("name_control") ; 
      			//alert(new_id) ; 
      			 if($("#" + new_id).length == 0) {
      			 	var klon = $("#quick_add_section" );
      			 	klon.clone().attr('id', new_id).insertAfter( klon );
      			 }
      			 
      			
      			r_load_form(new_id,load_url,1)
      			FormComponents.init();
          	
      			//var verb  = $(e.target).attr("caller_verb") ;
          		 
          		  	
				return ; 
			}); 
					
			//--------------------------------------------------------------------------------------------------------			
			jQuery('.quick_add_cancel').live("click",function (e) {
				e.preventDefault();	
				var name_control_name =addition_name_control.pop() ;
				var id_control_name = addition_id_control.pop() ;
				r_clear_area('qa_'+name_control_name ,1)  ;
				//r_clear_area('quick_add_section',1)			
			});
			
			//--------------------------------------------------------------------------------------------------------         	        	
          	jQuery('.quick_add_action').live("click", function (e) {
          		
          		e.preventDefault();	
          		var load_url = $(e.target).attr("caller_url") ;
          		var form_name = $(e.target).attr("form_name") ;
          		var datastring = $("#"+form_name).serialize();
				var content =  $('#'+$(e.target).attr("caller_target")) ;
				var combo_reload_url = $(e.target).attr("combo_reload_url") ;
			//	alert(combo_reload_url) ; 
				var form_type= $(e.target).attr("form_type") ; 
				      
				      
				App.blockUI(content, false);
				
				$.ajax({	
		        	type: form_type,
				    cache: false,
				    url: load_url,
				    data:datastring ,
				    dataType: "html",
				    	success: function(res) 
				        {	
				     // 		alert(res) ; 
				           App.unblockUI(content);
				           content.html(res);
				          
				           App.fixContentHeight(); // fix content height
				           App.initUniform(); // initialize uniform elements	          	
				  //         jQuery(".chosen").chosen();
				   //        jQuery(".select2_combo").select2();	
				            //FormComponents.init(); this needs to be at the final finishing causefor some reason blocks loop continuing 

				           // now actions based on success or fail of the form posting
				           var success_index =  res.toLowerCase().indexOf("record_update_success") ; 
				           var record_id = 0 ; 
				           if (success_index  >= 0)
				           {
				           		//alert("success") ; 
				           		var record_id_ndx1 = res.indexOf("<ID>") ;
				           		if (record_id_ndx1>=0)
				           		{
					           	 
					           		var id_string = res.substring(record_id_ndx1);
					           		var record_id_ndx2 = id_string.indexOf("</ID>") ;					           	 
					           		record_id =  id_string.substring(4,record_id_ndx2) ;
					           		
					           		
					           		var record_name_ndx1 = res.indexOf("<NAME>") ;
					           		var name_string = res.substring(record_name_ndx1);
					           		var record_name_ndx2 = name_string.indexOf("</NAME>") ;					           	 
					           		record_name =  name_string.substring(6,record_name_ndx2) ; 
 									//alert(record_id + '-' + record_name ) ; 
					           	//	if (waiting_addition==1)
								//		{
										//alert("poping") ; 				 
										var name_control_name =addition_name_control.pop() ;
										var id_control_name = addition_id_control.pop() ;
									//	alert (id_control_name);
										if (id_control_name="_combo")
										{
											
											reload_combo(name_control_name,combo_reload_url+'/'+record_id,record_id) ; 
											r_clear_area('qa_'+name_control_name ,1)	;	
										}
										else
										{
											$('#'+name_control_name).val(record_name) ;
											$('#'+id_control_name).val(record_id) ; 
											//var content = $('#quick_add_section');
											//content.modal('hide'); 
											r_clear_area('qa_'+name_control_name ,1)	;	
										}
										//alert(name_control_name);    				 
											
										waiting_addition = 0 ;  
								//	}
				           		} 
				           		
				           		//do_actions(caller_id,"form_post_success","",record_id)
				           		return ; 
				           }
				           else
				           {
				           	
				           		//alert("actioning_failed_form") ;				           		 
				           		return ; 
				           }
				        
				           
				        },
			            error: function(xhr, ajaxOptions, thrownError)
			            {
			            	//alert('<h4>Could not load the requested content.</h4>'+ '  Error: ' + thrownError + xhr )
					        content.html('<h4>Could not load the requested content.</h4>'+ '  Error: ' + thrownError + xhr.responseText );
					        App.unblockUI(content);
			            },
			            async: false
			          });	 
          	});
															
          	//--------------------------------------------------------------------------------------------------------
          	        	
          	function get_target_window_not_active(caller_id,caller_verb)
          	{
          			$.each($(".r_automation"), function( index, xvalue ) {
          				var event_caller_type = $(xvalue).attr("event_caller_type")
          				if ($(xvalue).attr("caller_key")==caller_id)
          				{
          					
          					target_window = $(xvalue).attr("target");
          					//alert(target_window) ; 
          					return target_window ; 
          				}
          		});
          	}
        	    	
        	 
       	 	//--------------------------------------------------------------------------------------------------------
         	// BUTTONS ACTION AJAXIFY  
         	// Setup Data Tables First Time --------------------------------------------------------------------
         	 
         	//--------------------------------------------------------------------------------------------------------
         	// ADDED TO THEME BY ANWAR JAN 2014 to Seperate datatable setups  
         	// REINITIALIZE DATATABLES WHICH ARE AUTO LOADED --------------------------------------------------------------------
	        function post_auto_setup()
	         	  {
	         	  	var myrecordcount = 20 ; 
	         	  	
	         	  	$.each($(".autodatatable"), function( index, xvalue ) {	     
          				var page_rows = $(xvalue).attr("page_rows") ;
          				
          				$( xvalue ).dataTable({
					   	 "aLengthMenu": [
			                    [5, 15, 20, -1],
			                    [5, 15, 20, "All"] // change per page values here
			                ],
			           
			                "iDisplayLength": page_rows,
			                "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
			                "sPaginationType": "bootstrap",
			                "oLanguage": {
			                    "sLengthMenu": "_MENU_ فى الصفحة",
			                    "sSearch": "بحث:",
			                    "oPaginate": {
			                        "sPrevious": "السابق",
			                        "sNext": "التالى"
			                        
			                    }
			                },
			                "aoColumnDefs": [{
			                        'bSortable': false,
			                        'aTargets': [0]
			                    }
			                ]
			                ,"bRetrieve": true  
			            });
          				
          			});
          				
	         	  /*	
	         	  	
	         	  	$( ".autodatatable" ).dataTable({
					   	 "aLengthMenu": [
			                    [5, 15, 20, -1],
			                    [5, 15, 20, "All"] // change per page values here
			                ],
			           
			                "iDisplayLength": myrecordcount,
			                "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
			                "sPaginationType": "bootstrap",
			                "oLanguage": {
			                    "sLengthMenu": "_MENU_ Per Page",
			                    "sSearch": "بحث:",
			                    "oPaginate": {
			                        "sPrevious": "Previous",
			                        "sNext": "Next",
			                        "sSearch": "بحث:"
			                    }
			                },
			                "aoColumnDefs": [{
			                        'bSortable': false,
			                        'aTargets': [0]
			                    }
			                ]
			                ,"bRetrieve": true  
			            });
			           */
			             jQuery('.autodatatable .group-checkable').change(function () {
			                var set = jQuery(this).attr("data-set");
			                var checked = jQuery(this).is(":checked");
			                jQuery(set).each(function () {
			                    if (checked) {
			                        $(this).attr("checked", true);
			                    } else {
			                        $(this).attr("checked", false);
			                    }
			                });
			                jQuery.uniform.update(set);
			            });
						
			            jQuery('.managed_wrapper .dataTables_filter input').addClass("m-wrap small"); // modify table search input
			            jQuery('.managed_wrapper .dataTables_length select').addClass("m-wrap small"); // modify table per page dropdown
			            jQuery('.managed_wrapper .dataTables_length select').select2(); // initialize select2 dropdown
			            
			            
	         	  }
         	  
         	//--------------------------------------------------------------------------------------------------------
         	// ADDED TO THEME BY ANWAR JAN 2014 to Seperate datatable setups  
         	// Setup Data Tables First Time --------------------------------------------------------------------
	        function datatable_setup()
					{
						
						$( ".managed" ).dataTable({
					   	 "aLengthMenu": [
			                    [5, 15, 20, -1],
			                    [5, 15, 20, "All"] // change per page values here
			                ],
			                
			                "iDisplayLength": 20,
			                "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
			                "sPaginationType": "bootstrap",
			                "oLanguage": {
			                    "sLengthMenu": "_MENU_ فى الصفحة",
			                    "sSearch": "بحث:",
			                    "oPaginate": {
			                       "sPrevious": "السابق",
			                        "sNext": "التالى",
			                        "sSearch": "بحث:"
			                    }
			                },
			                "aoColumnDefs": [{
			                        'bSortable': false,
			                        'aTargets': [0]
			                    }
			                ],
			              
			            });
			             jQuery('.managed .group-checkable').change(function () {
			                var set = jQuery(this).attr("data-set");
			                var checked = jQuery(this).is(":checked");
			                jQuery(set).each(function () {
			                    if (checked) {
			                        $(this).attr("checked", true);
			                    } else {
			                        $(this).attr("checked", false);
			                    }
			                });
			                jQuery.uniform.update(set);
			            });
			
			            jQuery('.managed_wrapper .dataTables_filter input').addClass("m-wrap small"); // modify table search input
			            jQuery('.managed_wrapper .dataTables_length select').addClass("m-wrap small"); // modify table per page dropdown
			            jQuery('.managed_wrapper .dataTables_length select').select2(); // initialize select2 dropdown
			    
			            
	         	 	
					}
		
			// End Setup Datatables --------------------------------------------------------------------------------------------
		
			//--------------------------------------------------------------------------------------------------------
			// ADDED TO THEME BY ANWAR JAN 2014 
			// autoloadinf contents of boxes just after document is ready 
			function init_auto_loaders()
				{	
	//				jQuery(".select2_combo").select2("destroy")	; 	
					var obj = $(".autoload" );
					var arr = $(".autoload" ).toArray() // $.makeArray( obj ); 
					
					if(jQuery.isArray( arr ) === true)
					{
					
						$.each($(".autoload" ), function( index, xvalue ) {
							
							autoload_url = $(xvalue).attr("url") ; 
							//alert(autoload_url) ;		
							$(xvalue).load(autoload_url,function(responseTxt,statusTxt,xhr){
					    	if(statusTxt=="success")
					      		//alert("External content loaded successfully!"); 
					      		post_auto_setup(); 
					      			//actually needed to be called on every loop
					      			// i cannot figure out why (anwar2014)
					      		App.fixContentHeight(); // fix content height
		                        App.initUniform(); // initialize uniform elements		                        		
								FormComponents.init();
		                      //  jQuery(".chosen").chosen();
		                       	jQuery(".select2_combo").select2();    
							    if(statusTxt=="error")
							      $(xvalue).html("Error: "+xhr.status+": "+xhr.statusText);
							  });
					   			
							
						});
						//FormComponents.init();
						//post_auto_setup() ; not needed cause it's called on every loop check inside loop (anwar2014) 
					}
	//				jQuery(".select2_combo").select2(); 
	
	          		
				}
				
			//--------------------------------------------------------------------------------------------------------
			function reload_box(xreload_box)
				{
					

					autoload_url = $("#"+xreload_box).attr("url") ;

					 
					 		$("#"+xreload_box).html("<?php echo '<div align=center><img align=center src='.base_url("loading.gif").'></div>' ; ?>" );
					 		
							$("#"+xreload_box).load(autoload_url,function(responseTxt,statusTxt,xhr){
					    	if(statusTxt=="success")
					      		//alert("External content loaded successfully!"); 
					      		post_auto_setup(); 
					      			//actually needed to be called on every loop
					      			// i cannot figure out why (anwar2014) 
							    if(statusTxt=="error")
							      $(xvalue).html("Error: "+xhr.status+": "+xhr.statusText);
							  }); 									
				}
				
			//--------------------------------------------------------------------------------------------------------
			$('.clearcombo').live('click',  function (e) {
					
				//	alert($(e.target).attr("clearof"));
					e.preventDefault();
					
					var combotoclear = "#"+$(e.target).attr("clearof") ;
					$(combotoclear).val('');
					$(combotoclear).select2("val", "");
					//FormComponents.init(); 
					//$(combotoclear).val('');
					//$(combotoclear).trigger("liszt:updated");
					
		
				});
				
			//--------------------------------------------------------------------------------------------------------
			function reload_combo(combo_id,load_url,record_id)
          	{
          			
				var combotoreload = "#"+combo_id;
				//	alert (combo_id); 
			//	alert(load_url) ; 
					$.ajax({
				     	cache: false,
				        url: load_url,		       
				        dataType: "html",
				        success: function(res) 
			      			{
			            	//App.unblockUI(content);
			            	//alert(res) ; 
			                $(combotoreload).html(res);
			                $(combotoreload).select2("val", record_id);
			            	},
				        error: function(xhr, ajaxOptions, thrownError)
				        	{
				         	alert("could not reload") ; 
				            //App.unblockUI(value);
				            },
			            async: false
			            }); // end ajax call 
		          return ; 
		          
					//$(combotoreload).html("<option  value=''></option> <option value='> سوهاج</option>") ; 
					//$(combotoclear).select2("val", "");
					//FormComponents.init(); 
					//$(combotoclear).val('');
					//$(combotoclear).trigger("liszt:updated");
					
		
		
          	}
			//--------------------------------------------------------------------------------------------------------
			$('.reload_combo').live('click',  function (e) {
					
					//alert($(e.target).attr("reloadof"));
					e.preventDefault();
					
					var combotoreload = "#"+$(e.target).attr("reloadof") ;
					var load_url = $(e.target).attr("reload_url") ;  
					//alert(load_url) ; 				
          			$.ajax({
				     	cache: false,
				        url: load_url,		       
				        dataType: "html",
				        success: function(res) 
			      			{
			            	//App.unblockUI(content);
			            	//alert(res) ; 
			                $(combotoreload).html(res);
			            	},
				        error: function(xhr, ajaxOptions, thrownError)
				        	{
				         	alert("could not reload") ; 
				            //App.unblockUI(value);
				            },
			            async: false
			            }); // end ajax call 
		          return ; 
		          
					//$(combotoreload).html("<option  value=''></option> <option value='> سوهاج</option>") ; 
					//$(combotoclear).select2("val", "");
					//FormComponents.init(); 
					//$(combotoclear).val('');
					//$(combotoclear).trigger("liszt:updated");
					
		
				});
				
			//--------------------------------------------------------------------------------------------------------	
			$('.clearselector').live('click',  function (e) {
					
					//alert($(e.target).attr("clearof"));
					e.preventDefault();
					var combotoclear = "#name_of_"+$(e.target).attr("clearof") ; 
					$(combotoclear).val('');
					combotoclear = "#"+$(e.target).attr("clearof") ; 
					$(combotoclear).val('');
					
					//$(combotoclear).trigger("liszt:updated");
					
		
				});

			//-------------------------------------------------------------------------------------------------------
			// ADDED TO THEME BY ANWAR JAN 2014 
			// enabling reloading button for content with url in attibutes

			jQuery('.portlet > .portlet-title > .tools > a.reload').live('click',  function (e) {

		            e.preventDefault();
		            var el = jQuery(this).closest(".portlet").children(".portlet-body");
		          //  alert(el.attr("url")); 
		            if (el.attr("url"))
		            {
		            App.blockUI(el);
		            el.html("<?php echo '<div align=center><img align=center src='.base_url("loading.gif").'></div>' ; ?>" );
		            
		            el.load(el.attr("url"),function(responseTxt,statusTxt,xhr){
						if(statusTxt=="success")
					 post_auto_setup() ;     		 
						if(statusTxt=="error")
							      el.html("Error: "+xhr.status+": "+xhr.statusText);
						});                
		                
		             App.unblockUI(el);
		             
		             }	
		        });
		   
			<?php
			//-------------------------------------------------------------------------------------------------------
			// jquery script for the supplier inovice return details form 
			//-------------------------------------------------------------------------------------------------------
			if (isset($include_sird_edit_form_script))
     	 	{
     	 		if ($include_sird_edit_form_script==true)
				{
				?>
				
			$("input:text[name$='std_item_price']").live("focusout", function (e) {
	 		
     	 			//alert("d") ; 
					e.preventDefault();
					
					calculate_std($(this).attr("name")) ; 
					return ; 
					   
     	 	});
  
  			$("input:text[name$='std_item_discount_itm']").live("focusout", function (e) {
	 		
     	 			//alert("d") ; 
					e.preventDefault();
					
					calculate_std($(this).attr("name")) ; 
					return ; 
					   
     	 		});
     	 		
     	 	$("input:text[name$='std_item_quantity']").live("focusout", function (e) {
	 		
     	 			//alert("d") ; 
					e.preventDefault();
					
					calculate_std($(this).attr("name")) ; 
					return ; 
					   
     	 		});
     	 				
     	 	$("input:text[name$='std_item_short']").live("focusout", function (e) {
	 		
     	 		
					e.preventDefault();
				 
					var item_short_code = $("#std_item_short").val()
					if (item_short_code =="") {
						 return false; 
						 }
					var load_url = "<?php echo site_url('trans/strans_details/get_item_name') ?>"+"/"+item_short_code ; 
					//	alert("i am alive here") ; 
					
          			$.ajax({
				     	cache: false,
				        url: load_url,		       
				        dataType: "html",
				        success: function(res) 
			      			{
			      				var message_array = res.split("<!/>" );
		 			
		 						//var redirect_url="" ; 
		 							if (message_array[0]=="AJAX_FOUND")
		 							{
		 								
		 								$("#XCALCX__full_name").val(message_array[2]); 
		 								$("#std_src_batch_id").val(message_array[1]); 
		 									$("#std_item_id").val(message_array[3]); 
		 									$("#std_item_net_price").val(message_array[4]); 
		 									$("#std_src_supplier_invoice").val(message_array[5]); 
		 									calculate_std() ; 
		 							}
		 								
			            	//App.unblockUI(content);
			            //	var success_index =  res.toLowerCase().indexOf("exists") ;  
				          // 	if (success_index  >= 0){ alert(res) ;} 
			            	},
				        error: function(xhr, ajaxOptions, thrownError)
				        	{
				         	alert("could not check the id" + thrownError) ; 
				            //App.unblockUI(value);
				            },
			            async: false
			            }); // end ajax call 
			            
     	 		});
     	 		
     	 	function calculate_std($string_element_id)
     	 	{
     	 		
     	 		
     	 		var total_item ; 
     	 		total_item = $("#std_item_net_price").val() * $("#std_item_quantity").val() 
     	 		$("#std_item_total").val(total_item);
     	 		return ;
     	 	
     	 	}
     	 		
			<?php
				}
			}
			// --------------------------------------------------------------------------------------------- sird end 
			?>
			
			<?php
			//-------------------------------------------------------------------------------------------------------
			// jquery script for the supplier inovice return details form 
			//-------------------------------------------------------------------------------------------------------
			if (isset($include_sid_edit_form_script))
     	 	{
     	 		if ($include_sid_edit_form_script==true)
				{
				?>
			
		
				$("input:text[name$='std_item_price']").live("focusout", function (e) {
			 		
		     	 			//alert("d") ; 
							e.preventDefault();
							
							calculate_std($(this).attr("name")) ; 
							return ; 							   
		     	});
  
  				$("input:text[name$='std_item_discount_percent']").live("focusout", function (e) {
	 		
     	 			//alert("d") ; 
					e.preventDefault();
					
					calculate_std($(this).attr("name")) ; 
					return ; 
					   
     	 		});
     	 		
     	 		$("input:text[name$='std_item_quantity']").live("focusout", function (e) {
	 		
     	 			//alert("d") ; 
					e.preventDefault();
					
					calculate_std($(this).attr("name")) ; 
					return ; 
					   
     	 		});
     	 		
     	 		$("input:text[name$='std_item_quantity']").live("focusout", function (e) {
	 		
     	 			//alert("d") ; 
					e.preventDefault();
					
					calculate_std($(this).attr("name")) ; 
					return ; 
					   
     	 		});
     	 		
     	 		$("#std_calc_selling_1").live("change", function (e) {
	 		
     	 			//alert("d") ; 
					e.preventDefault();
					
					calculate_std($(this).attr("name")) ; 
					return ; 
					   
     	 		});
     	 		
     	 		$("#entered_profit_percent").live("keypress", function (e) {
	 		
     	 			//alert("d") ; 
					e.preventDefault();
					$("#entered_sales_value").val(-1) 
					calculate_std($(this).attr("name")) ; 
					return ; 
					   
     	 		});
     	 		
     	 		$("#entered_sales_value").live("keypress", function (e) {
	 		
     	 			//alert("d") ; 
					e.preventDefault();
					$("#entered_profit_percent").val(-1) 
					calculate_std($(this).attr("name")) ; 
					return ; 
					   
     	 		});
     	 		   	 		
     	 		$("#std_calc_selling_2").live("change", function (e) {
	 		
     	 			//alert("d") ; 
					e.preventDefault();
					
					calculate_std($(this).attr("name")) ; 
					return ; 
					   
     	 		});
     	 		
 				function calculate_std($string_element_id)
     	 		{
     	 		
     	 		//alert("here") ; 
     	 		//alert($("#std_item_price").val() ) ; 
     	 		
     	 		
     	 		//alert($("#std_item_discount_itm").val() ) ; 
     	 		var net_price ; 
     	 		item_discount = $("#std_item_price").val() *  $("#std_item_discount_percent").val()/100;
     	 		$("#std_item_discount_itm").val(item_discount); 
     	 		net_price = $("#std_item_price").val() - $("#std_item_discount_itm").val(); 
     	 		//alert(net_price) ; 
     	 		$("#std_item_net_price").val(net_price); 
     	 		
     	 		var total_item ; 
     	 		total_item = $("#std_item_net_price").val() * $("#std_item_quantity").val() 
     	 		$("#std_item_total").val(total_item);
     	 		
     	 		/* var myRadio = $('#std_calc_selling_1'); 
     	 		var checkedValue = myRadio.filter(':checked').val();
     	 		
     	 		if (checkedValue ==1) 
     	 		{
     	 			
     	 			var sales_price = net_price * $("#entered_sales_value").val() / 100 + net_price  ;
     	 			$("#std_item_sales_price").val(sales_price) ; 
     	 		}
     	 		var myRadio = $('#std_calc_selling_2'); 
     	 		var checkedValue = myRadio.filter(':checked').val();
     	 		if (checkedValue ==2) 
     	 		{
     	 			var sales_price = $("#entered_sales_value").val() 
     	 			$("#std_item_sales_price").val(sales_price) ;
     	 		}
     	 		
				*/ 
				
				var the_percent = $("#entered_profit_percent").val();
				if (the_percent>=0) 
						{
							var sales_price = net_price * $("#entered_profit_percent").val() / 100 + net_price  ;
     	 					$("#std_item_sales_price").val(sales_price) ; 
						} 
				
				var the_selling_value =  $("#entered_sales_value").val();
				if (the_selling_value>=0) 
						{
							var sales_price = $("#entered_sales_value").val()  ;
     	 					$("#std_item_sales_price").val(sales_price) ; 
						} 
				
				final_percent = (100.00 * $("#std_item_sales_price").val()  /  net_price ) - 100.00 ;		
				$("#calculated_profit_percent").val(final_percent.toFixed(2)) ; 
				
     	 		return ;
     	 	
     	 	}
     	 		
	
				<?php
				}
			}
			// --------------------------------------------------------------------------------------------- sird end 
			?>
			
			<?php
			//-------------------------------------------------------------------------------------------------------
			// jquery script for the supplier inovice return details form 
			//-------------------------------------------------------------------------------------------------------
			if (isset($include_dsd_edit_form_script))
     	 	{
     	 		if ($include_dsd_edit_form_script==true)
				{
				?>
				
			$("input:text[name$='std_item_price']").live("focusout", function (e) {
	 		
     	 			//alert("d") ; 
					e.preventDefault();
					
					calculate_std($(this).attr("name")) ; 
					return ; 
					   
     	 	});
  
  			$("#st_discount_percent").live("keypress", function (e) {
	 		
     	 			
					$("#st_discount_amount").val(-1) 
					return ; 
					   
     	 		});
     	 		
     	 	
     	 	$("#st_discount_amount").live("keypress", function (e) {
	 		
     	 			$("#st_discount_percent").val(-1) 
					
					return ; 
					   
     	 		});
     	 			
     	 	$("input:text[name$='std_item_quantity']").live("focusout", function (e) {
	 		
     	 			//alert("d") ; 
					e.preventDefault();
					
					calculate_std($(this).attr("name")) ; 
					return ; 
					   
     	 		});
     	 				
     	 	$("input:text[name$='std_item_short']").live("focusout", function (e) {
	 		
     	 		
					e.preventDefault();
				 
					var item_short_code = $("#std_item_short").val()
					if (item_short_code =="") {
						 return false; 
						 }
					var load_url = "<?php echo site_url('trans/strans_details/get_item_sales_info') ?>"+"/"+item_short_code ; 
					//	alert("i am alive here") ; 
					
          			$.ajax({
				     	cache: false,
				        url: load_url,		       
				        dataType: "html",
				        success: function(res) 
			      			{
			      				var message_array = res.split("<!/>" );
		 			
		 						//var redirect_url="" ; 
		 							if (message_array[0]=="AJAX_FOUND")
		 							{
		 								
		 								$("#XCALCX__full_name").val(message_array[2]); 
		 								$("#std_src_batch_id").val(message_array[1]); 
		 									$("#std_item_id").val(message_array[3]); 
		 									$("#std_item_net_price").val(message_array[4]); 
		 									//$("#std_src_supplier_invoice").val(message_array[5]); 
		 									calculate_std() ; 
		 							}
		 								
			            	//App.unblockUI(content);
			            //	var success_index =  res.toLowerCase().indexOf("exists") ;  
				          // 	if (success_index  >= 0){ alert(res) ;} 
			            	},
				        error: function(xhr, ajaxOptions, thrownError)
				        	{
				         	alert("could not check the id" + thrownError) ; 
				            //App.unblockUI(value);
				            },
			            async: false
			            }); // end ajax call 
			            
     	 		});
     	 	
     	 	jQuery(document).live("keypress", function (e) {		
     	 
    			var tag = e.target.tagName.toLowerCase();
    			//if ( e.which === 119 && tag != 'input' && tag != 'textarea') 
    			if (e.keyCode===13) 
        	 		{
        	 			$("#save_button").trigger("click") ; 
        	 		}
        	 	
        	 	if ( e.keyCode === 43 ) {
        	 		e.preventDefault();
        	 		do_actions("trans_details","add",e) ;
        	 	}  
        	 	if ( e.keyCode === 43 ) {
        	 		$("input:text[name$='std_item_short']").first().focus(); ;
        	 	}  
        	 	
        	//	alert(e.keyCode) ; 
        		
			});
			
     	 	function calculate_std($string_element_id)
     	 	{    	 		
     	
     	 		var total_item ; 
     	 		total_item = $("#std_item_net_price").val() * $("#std_item_quantity").val() 
     	 		$("#std_item_total").val(total_item);
     	 		return ;
     	 	
     	 	}
     	 		
			<?php
				}
			}
			// --------------------------------------------------------------------------------------------- sird end 
			?>
			
			
			
     	 	
     	  //------------------------------------------------------------------------------------
		  	
		  	FormComponents.init();
		
			
		}); //-- this is the end of document ready line 
		
	</script>
	