<?php


?>
        <div id="iframeplaceholder" class="hixdden"></div>
	<script>
	
	jQuery(document).ready(function() {
		    
			
			var selected_index = 0 ; 
			var selector_selected_index = 0 ; 
			
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
		
			// var el = jQuery(".collapse").children(".portlet-body");
        	// el.slideUp(200);
          	// el.removeClass("expand").addClass("collapse");
          	// jQuery(".collapsed").addclass("expand")
          
            jQuery(".collapsed").slideUp(200) ; 
     	 	 
      	  	 TableEditable.init();
      	  	          
              //setTimeout(function(){
              //           init_auto_submitters();
              //          }, 2000);

                  var tid = setTimeout(refresh_needed, 80000);
            function refresh_needed() {
              // do some stuff...
              
              do_refresher() ; 
              tid = setTimeout(refresh_needed, 80000); // repeat myself
            }
            
            function abortTimer() { // to be called when you want to stop the timer
              clearTimeout(tid);
            }
            
            
            if ($("#session_timer").length)
          {
            display_c(0) ; 
       
            $("#session_timer").html("00.00") ; 
          }
          
          
                            
     	 	<?php	 	
     	 		if (isset($auto_remove_menu))
     	 		{
     	 			if ($auto_remove_menu=="yes")
					{
					echo "remove_menu();" ; 	
					}
				}
			?>
			
			// Section Prining and Visiblity  Control ---------------------------------------------------------------------------------------------------------------------------------------
              
            jQuery('#hide_edits').live("click", function (e) {     
                       // alert("d") ; 
                        $('.assume_edit').toggle();; // hide all as needed
                  });
            
          
                formmodified=0;
                
                   jQuery('.confirm_save').live("change", function (e) {     
               
                       jQuery('.save_confirmed').css("background-color", "red");
                    formmodified=1;
                  });
                  
                window.onbeforeunload = confirmExit;
                function confirmExit() {
                    if (formmodified == 1) {
                        return "New information not saved. Do you wish to leave the page?";
                    }
                }
                
               jQuery('.save_confirmed').live("click", function (e) {     
                     jQuery('.show_saving').show() ; 
                     
                        formmodified=0;
                       mytime = setTimeout( hide_saving,2000 )
                   
                  });
                  
              function hide_saving(){
                     jQuery('.show_saving').hide() ; 
                        jQuery('.save_confirmed').css("background-color", "green");
              }
      
    	  $('#print_page').click(function() {
			
				$('.navbar-fixed-top').toggle();; // hide all as needed
				$('.hide_with_menu').toggle();; // hide all as needed
			
				$('html, body').css('margin-right','15px');
				$('html, body').css('margin-left','25px');

				$.each($(".autodatatable"), function( index, xvalue ) {	     
          				var ztable= $( xvalue ).dataTable({
							"autoWidth": false,
						 });		 
						 ztable.css({'width': '70%'});
				});
				
				$('.table').css('margin-right','70px');
		//		$('#datatable_of_me').css({'width': '90%'});
		//		 $("#datatable_of_me").css({ "min-width": "338px",     "max-width": "500px"  });
			
	//			$('.table').removeClass('table');	
				
				print_page() ; 
				$('.table').css('margin-right','100px');
				$('html, body').css('margin-left','5px');
				$('html, body').css('margin-left','5px');
				$('.navbar-fixed-top').toggle();; // hide all as needed
				$('.hide_with_menu').toggle();; // hide all as needed
						
		  });
		  
		  $('#print_page_close').click(function() {
				print_and_close() ; 		
		  });
			
			function uprepare_for_printing()
			{
			  		$('.navbar-fixed-top').toggle();; // hide all as needed
					$('.hide_with_menu').toggle();; // hide all as needed
				
					$(".classx").addClass('table-hover');
					$(".table-hover ").removeClass('classx');
						
			}
		  	function prepare_for_printing()
		  	{
		  			$('.navbar-fixed-top').toggle();; // hide all as needed
					$('.hide_with_menu').toggle();; // hide all as needed
					$(".table-hover ").addClass('classx');
					$(".table-hover ").removeClass('table-hover ');
						
					first_page_print_header	=$("#first_page_print_header").html() ;
					$("#one_print_header").html(first_page_print_header) ; 
					repeat_header_html = $("#sys_print_header").html() ; 			 
					$("#table_print_header").html(repeat_header_html) ; 
				
				
				
				
			//	
			//		$('html, body').css('margin-right','15px');
			//		$('html, body').css('margin-left','25px');
	
				//	$.each($(".autodatatable"), function( index, xvalue ) {	     
	          		//		var ztable= $( xvalue ).dataTable({
				//				"autoWidth": false,
				//			 });		 
				//			 ztable.css({'width': '70%'});
				//	});
					
			//		$('.table').css('margin-right','70px');
			 
				//$(".table-striped").removeClass('table-striped');
			
			
	
		  }
		  function print_page()
		  {
		  	window.print();
		  //window.close() ; 
		  }		  
		  function print_and_close()
		  {
		  	window.print();
		  window.close() ; 
		  }

		 	$('#remove_menu').click(function() {
			
				prepare_for_printing() ; 
						
						
		});
				
		 function remove_menu() 
		 {
					//	$('div[rel=frame]').slideToggle("fast");; // hide all as needed
				$('.navbar-fixed-top').slideToggle("fast");; // hide all as needed
				$('.hide_with_menu').slideToggle("fast");; // hide all as needed
					
			//	$('#top').slideToggle("fast");; // hide all as needed
			//	$('#footer_bar').slideToggle("fast");; // hide all as needed
			}
			
			  function do_refresher()
                {   
                
                                //  
                                        
                                        var arr = $(".autorefresh" ).toArray() // $.makeArray( obj ); 
                                        
                                        if(jQuery.isArray( arr ) === true)
                                        {
                                        
                                            $.each($(".autorefresh" ), function( index, xvalue ) {
                                                
                                                autoload_url = $(xvalue).attr("url") ; 
                                                //alert(autoload_url) ;     
                                                $(xvalue).load(autoload_url,function(responseTxt,statusTxt,xhr){
                                                    
                
                           // alert("s") ;  
                            
                                                if(statusTxt=="success")
                                                    //alert("External content loaded successfully!"); 
                                                   // post_auto_setup(); 
                                                    
                                              
                                                   // App.fixContentHeight(); // fix content height
                                                   // App.initUniform(); // initialize uniform elements                                       
                                                  //  FormComponents.init();
                                                  
                                         
                                                //   jQuery(".select2_combo").select2("destroy") ;   
                                               //     jQuery(".select2_combo").select2();
                                                    
               
                                                    if(statusTxt=="error")
                                                      $(xvalue).html("Error: "+xhr.status+": "+xhr.statusText);
                                                      
                                                  });
                                                    
                                                
                                            });
                                            //FormComponents.init();
                                            //post_auto_setup() ; not needed cause it's called on every loop check inside loop (anwar2014) 
                                        }
                    //           jQuery(".select2_combo").select2("destroy")   ;   
                        //  jQuery(".select2_combo").select2();
                                
                             
                }
			
		 jQuery('.toggle_section').live("click", function (e) {		
        	
        				var section_name = $(e.target).attr("section_id") ;
          			var content = $('#'+section_name);
          			content.toggle('fast') ;  	      							
	          						
          			return ; 
          	});
      
      
      	// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------    	
     	  function isDate(txtDate)
            {

                var currVal = txtDate;
 				if(currVal == '') return false;
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
     	 	
      
      	jQuery('.ajax_action').children().live("click", function (e) 
      	{
      		
      		      
                    var child_class = $(e.target).attr("class") ;
                   // alert(child_class ) ; 
      		        if (typeof child_class === "undefined") return 
      		            
      		        var does_this_have_action = child_class.indexOf("ajax_action") ;
                    if (does_this_have_action>-1){
                            //alert(does_this_have_action) ; 
                      //  alert("child has its own ajax action") ;
                            return ;  
                    }
                                    

      				var the_parent = $(e.target.parent) ; 
      		
      				//alert($(e.target).val()) ; 
      		
      				//e.preventDefault();
          			
          			// alert("s") ;
          			// the e.target is the calling object
          		  
          			var caller_id = $(e.target).parent().attr("caller_id") ;
          			
          			if (typeof caller_id === "undefined")
          			{
          				caller_id = $(e.target).parent().parent().attr("caller_id") ;
          				var verb  = $(e.target).parent().parent().attr("caller_verb") ;
          				var elem = 	$(e.target).parent().parent() ; 
          				var with_message = $(e.target).parent().parent().attr("confirm_message") ;
          			}
          			
          			else
          			{
          				var verb  = $(e.target).parent().attr("caller_verb") ;
          				var elem = 	$(e.target).parent() ; 
          				var with_message = $(e.target).parent().attr("confirm_message") ;
          			}
          			
          		//	alert(caller_id) ; 
          			

          			if (typeof with_message === "undefined")
          			{
          			
          			}
          			else
          			{
  						//	var r = 	confirm("Press a button!\nEither OK or Cancel.");;
  						var r = 	confirm("with_message");;
          				if (r == true) {} else {return false; }	
          			}
          			if ($(e.target).get(0).tagName == "I") 
          			{
          				var xxx = $(e.target).parent() ;  
          				caller_id = xxx.attr("caller_id") ;
          				verb  = xxx.attr("caller_verb") ;
          				elem = xxx ; 
          			} ; 
          		 	
          		
          			do_actions(caller_id,verb,elem)
          			return ; 
          			
      	}); 
      	
      	// action triggering and response section    		
        jQuery('.ajax_action').live("click", function (e) {		
        	
        		e.preventDefault();
          			
          			// alert("s") ;
          			// the e.target is the calling object
          		  
          			var caller_id = $(e.target).attr("caller_id") ;
          			var verb  = $(e.target).attr("caller_verb") ;
          			var elem = 	$(e.target) ; 
          			var with_message = $(e.target).attr("confirm_message") ;

          			if (typeof with_message === "undefined")
          			{
          			
          			}
          			else
          			{
  						//	var r = 	confirm("Press a button!\nEither OK or Cancel.");;
  						var r = 	confirm("with_message");;
          				if (r == true) {} else {return false; }	
          			}
          			if ($(e.target).get(0).tagName == "I") 
          			{
          				var xxx = $(e.target).parent() ;  
          				caller_id = xxx.attr("caller_id") ;
          				verb  = xxx.attr("caller_verb") ;
          				elem = xxx ; 
          			} ; 
          		 	
          		
          			do_actions(caller_id,verb,elem)
          			return ; 
          	});
          	         	
        //---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        	
        function do_actions(caller_id,caller_verb,elem,record_id)
	        {
	        	
	        	
	        //  alert('CALLER: '+caller_id +". . . . . . . . . . . . VERB : "+caller_verb  ) ;
          		 
          		$.each($(".r_automation"), function( index, xvalue ) {
          			
          				//alert($(xvalue).attr("caller_key")) ;
          				 
          				if ($(xvalue).attr("caller_key")==caller_id)
          				{
          						
          					if (caller_verb == $(xvalue).attr("automation_verb"))
          					{
          						
          						action_to_do = $(xvalue).attr("automation_action");
          						
          				//		alert('CALLER: '+caller_id +". . . . . . . . . . . . VERB : "+caller_verb  + "action" + action_to_do ) ;
          						
          						this_url = $(xvalue).attr("automation_url");
          						target_window = $(xvalue).attr("automation_target");
         						
         						//alert (this_url);  
          						if (this_url=="[get_from_caller]") 
          						{
          							this_url = elem.attr("caller_url") ;
          						}
          						
          						if (target_window=="[get_from_caller]")
          						{
          							target_window = elem.attr("caller_target") ;
          						}
          						
 							//	alert('CALLER:'+caller_id +"VERB:"+caller_verb +'action'+action_to_do+'window'+target_window) ;
 								          						 	
          						/* .............................................. hanling actions ----- */ 
          						if (action_to_do=="load_form")
          						{         	
          							//alert(this_url)		; 				
          								$('.details').hide();
          							r_load_form(target_window,this_url,0)
          						}
          						
          						if (action_to_do=="load_form_modal")
          						{         		
          							//alert("load form modal") ; 					
          							r_load_form(target_window,this_url,1)
          						}
          						
          						    if (action_to_do=="load_print_page")
                                {           
                                    //alert(this_url)       ;               
                                    load_print_page(this_url);
                                                            //     nthis_url = "http://www.almasrystores.com/system/index.php/trans/direct_sales/addedit/" ; 
                                                        //         r_goto_page(target_window,nthis_url);
                                                                 return (false);
                                }           
          						if (action_to_do == "post_form_load")
          						{
          										//alert("post_form") ; 
          							
          							var form_name  = elem.attr("form_name");
          							var form_type  = elem.attr("form_type");
          							       
          							success_window = "" ; 	
          							if (target_window =="@differ")						
          							{	
          								target_window = $(xvalue).attr("automation_form_fail_target");
          								success_window = $(xvalue).attr("automation_form_success_target");
          							}
          						
          							r_post_form_load(target_window,this_url,form_name,form_type,caller_id,"",success_window)
          						
          						}
          						
          						if (action_to_do=="post_form")
          						{
          						//alert("post_form") ; 
          							
          							var form_name  = elem.attr("form_name");
          							var form_type  = elem.attr("form_type");
          							       
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
	          								$('.details').hide();
	          								
	          							r_clear_area(target_window)
	          						}
	          						
	          						if (action_to_do=="clear_modal")
	          						{          			          												
	          							r_clear_area(target_window,1)
	          						}
          						
          						    if (action_to_do=="hide_section")
                                    {    
                                        var content = $('#'+target_window);
                                            content.hide() ;     
                                                          
                                         return true;                                                                                                                              
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
		 								 return true;  								   							 							          							
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
	          					
          					
	          						if (action_to_do=="trigger_action")
	          						{
	          					//		alert(action_to_do);
	          								trigger_action(target_window) ; 
	          							  	return (false)	 
	          						}
          						
	          						if (action_to_do=="trigger_action2")
	          						{
	          					//		alert(action_to_do);
	          								trigger_action(target_window) ; 
	          							  	return (false)	 
	          						}
          						
	          						if (action_to_do=="trigger_action3")
	          						{
	          					//		alert(action_to_do);
	          								trigger_action(target_window) ; 
	          							  	return (false)	 
	          						}	
          							
          					} 
          				}
          		}); 
          	
          	 //   jQuery(".select2_combo").select2("destroy")
          	//	jQuery(".select2_combo").select2(); 	
          		post_auto_setup();
          		FormComponents.init();	
          				
          	}
         
        function a_lert()  {//fake commenting an alert function
              									}
         	
       	function trigger_action(element_name)
	          	{
	          		a_lert	("#"+element_name);  
	          		var xxx =  $("#"+element_name);  
	          		caller_id = xxx.attr("caller_id") ;
	          		verb  = xxx.attr("caller_verb") ;
	          		elem = xxx ; 
	          		do_actions(caller_id,verb,elem)
	          		 a_lert("action2") ; 
	          		return ; 
	          		}
	       function loadiFrame(src)
            {
            $("#iframeplaceholder").html("<iframe id='myiframe' name='myname' src='" + src + "' />");
            }
            function load_print_page(src)
                {
                     loadiFrame(src);
                     $("#myiframe").load( 
                            function() {
                                window.frames['myname'].focus();
                                window.frames['myname'].print();
                                  $("#iframeplaceholder").html("") ; 
                                //window.location.replace("http://stackoverflow.com");
                            }
                         );
                } 	 
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
        
	    function r_clear_area(target_window,is_modal)
	          	{
	          		var content = $('#'+target_window);
	          		//alert (target_window) ; 
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
                                activate_typeahead(); 
    		                      App.fixContentHeight(); // fix content height
				                App.initUniform(); // initialize uniform elements
				              jQuery(".select2_combo").select2("destroy") ;   		                        		
								jQuery(".select2_combo").select2();
				                if (is_modal==1) { 
				                	content.modal(); 
				                	}	
				                content.slideDown( "fast", function() { });
				               						$('html,body').animate({
        scrollTop: content.offset().top-150},
        'fast');         		 
				            	},
					        error: function(xhr, ajaxOptions, thrownError)
					        	{
					        	alert('<h4>Could not load the requested content.</h4>'  )					      
						        $("#errxhr").html ("<div style='background-color:white;'>"+xhr.responseText+"</div>" ) ; 
						        //App.unblockUI(content);
					            //content.html('<h4>Could not load the requested content.</h4>'+ '  Error: ' + thrownError + xhr );
					            App.unblockUI(value);
					            },
				            async: false
				            }); // end ajax call 
				            
			          return ; 
	          	}
	          	
         //--------------------------------------------------------------------------------------------------------  
	          	var xhr = null;       	        	
	          	
	
    		function activate_typeahead()
    		{
    		    
    		     $('input.typeahead').each(function() {
                                     var $this = $(this);                                  
                                     var $myurl  = $this.attr("thurl") ; 
                                 //    alert($myurl) ; 
                                     $this.typeahead({
                                                source: function (query, process) {
                                               //  alert($myurl) ; 
                                                    
                                                $.ajax({
                                                  url: $myurl,
                                                  type: 'GET',
                                                  dataType: 'JSON',
                                                  data: 'query=' + query,
                                                  success: function(data) {
                                                    console.log(data);
                                                    process(data);
                                                  }
                                                });
                                              }
                                              });
                                   });
                                   
    		}
			
	     function r_post_form(target_window,load_url,form_name,form_type,caller_id,post_success_string,success_window)
	          	{
	          		
	          //alert(load_url) ; 
	          		// alert("post_form_caller"+target_window) ;  
	          		
	          		//var datastring = $("#"+form_name).serialize();
	          		var form = document.getElementById(form_name);
                    var xdata = new FormData(form);
	  
	        	  		//alert(datastring) ; 
					//var content = $('#'+target_window);
					//App.blockUI(content, false);
					if( xhr != null ) {
				                xhr.abort();
				                xhr = null;
				        }
					xhr = $.ajax({	
						    cache: false,
							contentType: false,
                            processData: false,
                            method: 'POST',
                            type: 'POST', // For jQuery < 1.9
                        	                url: load_url,
                        					    data:xdata ,
						
					    	success: function(res) 
					        {	
					        	$('#proccessing').hide();
			//		      	alert(res) ; 

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
					           		
					           		var with_redirect = "" ; 
					           		var with_redirect_ndx1 = res.indexOf("<URL>") ;
                                    if (with_redirect_ndx1>=0)
                                    {
                                     
                                        var url_string = res.substring(with_redirect_ndx1);
                                        var with_redirect_ndx2 = url_string.indexOf("</URL>") ;                                
                                        with_redirect  =  url_string.substring(5,with_redirect_ndx2) ; 
                                     //   alert(with_redirect) ; 
                                         r_goto_page("_self",with_redirect);
                                         return false ; 
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
					          		     jQuery(".select2_combo").select2("destroy")  ;   
					          		    jQuery(".select2_combo").select2()  ;   
					          	
					          	    
					          	        do_actions(caller_id,"form_post_success","",record_id)
					          	        if (record_id!="")
					          	        {
					          	      //  alert(record_id) ; 
					           		  do_actions(caller_id,"form_post_success_with_id","",record_id)
					           	       }
					           	    
					           	   FormComponents.init();
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
					           		         jQuery(".select2_combo").select2("destroy") ;   
                                                    jQuery(".select2_combo").select2();
					           		FormComponents.init();
					           		return ; 
					           }
					        
					           
					        },
				            error: function(xhr, ajaxOptions, thrownError)
				            {
				            	 alert('<h4>Could not load the requested content.</h4>'  )					      
						        $("#errxhr").html ("<div style='background-color:white;'>"+xhr.responseText+"</div>" ) ; 
						        App.unblockUI(content);
				            },
				            async: false
				          });	 
				          
				          
	          	}
	     
	     
	     
	     		        
	       function r_post_form_load(target_window,load_url,form_name,form_type,caller_id,post_success_string,success_window)
	      {
	    		var datastring = $("#"+form_name).serialize();
	          		
	          		//alert(datastring) ; 
					//var content = $('#'+target_window);
					//App.blockUI(content, false);
					if( xhr != null ) {
				                xhr.abort();
				                xhr = null;
				        }
					xhr = $.ajax({	
			        	type: form_type,
					    cache: false,
					  beforeSend: function() {
	                	$('#proccessing').show();
	                	 
	            		},
	                url: load_url,
					    data:datastring ,
					    dataType: "html",
					    	success: function(res) 
					        {	
					        	$('#proccessing').hide();
					   //   	alert(res) ; 
					         	          	
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
					               jQuery(".select2_combo").select2("destroy") ;   
                                                    jQuery(".select2_combo").select2();
					              content.modal(); 
				                		
				                content.slideDown( "fast", function() { });
				               						$('html,body').animate({
        scrollTop: content.offset().top-150},
        'fast');        
        
					           	        
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
					           		     jQuery(".select2_combo").select2("destroy") ;   
                                                    jQuery(".select2_combo").select2();
					               content.modal(); 
				                		
				                content.slideDown( "fast", function() { });
				               						$('html,body').animate({
        scrollTop: content.offset().top-150},
        'fast');        
					           		
					           		return ; 
					           }       
					        },
				            error: function(xhr, ajaxOptions, thrownError)
				            {
				            	 alert('<h4>Could not load the requested content.</h4>'  )					      
						        $("#errxhr").html ("<div style='background-color:white;'>"+xhr.responseText+"</div>" ) ; 
						        App.unblockUI(content);
				            },
				            async: false
				          });	 
	      	}
	     
	           // SECTION -------------------------------------------------------------------------- Control Events // General      	
		       jQuery('.selected_action').live("click", function (e) {	
					
					if (waiting_selection==1)
					{
						 
						var this_name =$(e.target).attr("selected_name") ;
						var this_id =$(e.target).attr("selected_id") ;
						 
						$('#'+list_name_object_id).val(this_name) ;
						$('#'+list_id_object_id).val(this_id) ; 
						
						if (list_id_object_id ='TC_SUPPLIER_ID'){
						
						if ( $( "#Hotel" ).length ) {
 
                              $( "#Hotel" ).val(this_name) ; 
 
						  }
						  
						if ( $( "#RESTAURANTNAME" ).length ) {
 
                              $( "#RESTAURANTNAME" ).val(this_name) ; 
 
						  }  
						}
						
						var content = $('#select_box');
						content.modal('hide'); 
						
						if (list_name_object_id =="GL_COST_CENTER_CODE")
						{
						var url = "<?php echo site_url('gl/glcenters/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_COST_CENTER_CODE','JD_GL_COST_CENTER_ID','GL_COST_CENTER_NAME',url);
								$("input:text[name$='GL_COST_CENTER_CODE']").first().focus(); ;		
						} ; 
						
						if (list_name_object_id =="GL_COST_CENTER_CODE2")
						{
						var url = "<?php echo site_url('gl/glcenters/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_COST_CENTER_CODE2','JD_GL_COST_CENTER_ID2','GL_COST_CENTER_NAME2',url);
								$("input:text[name$='GL_COST_CENTER_CODE2']").first().focus(); ;		
						} ; 
						
						
						if (list_name_object_id =="GL_COST_CENTER_CODE6")
						{
						var url = "<?php echo site_url('gl/glcenters/get_account_name') ?>" ; 
						check_fetch_account_by_code('GL_COST_CENTER_CODE6','TR_GL_COST_CENTER_ID','GL_COST_CENTER_NAME6',url);
								$("input:text[name$='GL_COST_CENTER_CODE6']").first().focus(); ;		
						} ; 
						
						if (list_name_object_id =="GL_COST_CENTER_CODE7")
						{
						var url = "<?php echo site_url('gl/glcenters/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_COST_CENTER_CODE7','TD_GL_COST_CENTER_ID','GL_COST_CENTER_NAME7',url);
								$("input:text[name$='GL_COST_CENTER_CODE7']").first().focus(); ;		
						} ; 
					
						if (list_name_object_id =="GL_ANALYSIS_CODE")
						{
						var url = "<?php echo site_url('gl/glanalysiss/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_ANALYSIS_CODE','JD_GL_ANALYSIS_ID','GL_ANALYSIS_NAME',url);
								$("input:text[name$='GL_ANALYSIS_CODE']").first().focus(); ;		
						} ;
						 
						if (list_name_object_id =="GL_ANALYSIS_CODE2")
						{
						var url = "<?php echo site_url('gl/glanalysiss/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_ANALYSIS_CODE2','JD_GL_ANALYSIS_ID2','GL_ANALYSIS_NAME2',url);
								$("input:text[name$='GL_ANALYSIS_CODE2']").first().focus(); ;		
						} ;
						
						
						if (list_name_object_id =="GL_ANALYSIS_CODE6")
						{
						var url = "<?php echo site_url('gl/glanalysiss/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_ANALYSIS_CODE6','TR_GL_ANALYSIS_ID','GL_ANALYSIS_NAME6',url);
								$("input:text[name$='GL_ANALYSIS_CODE6']").first().focus(); ;		
						} ;
						
						if (list_name_object_id =="GL_ANALYSIS_CODE7")
						{
						var url = "<?php echo site_url('gl/glanalysiss/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_ANALYSIS_CODE7','TD_GL_ANALYSIS_ID','GL_ANALYSIS_NAME7',url);
								$("input:text[name$='GL_ANALYSIS_CODE7']").first().focus(); ;		
						} ;
						
						
						
						
						
						if (list_name_object_id =="GL_ACCOUNT_CODE")
						{
							
						var url = "<?php echo site_url('gl/glaccounts/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_ACCOUNT_CODE','JD_GL_ACCOUNT_ID','GL_ACCOUNT_NAME',url);
						$("input:text[name$='GL_ACCOUNT_CODE']").first().focus(); ;	
						} ; 
						
						
						
						if (list_name_object_id =="GL_ACCOUNT_CODE2")
						{
							
						var url = "<?php echo site_url('gl/glaccounts/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_ACCOUNT_CODE2','JD_GL_ACCOUNT_ID2','GL_ACCOUNT_NAME2',url);
						$("input:text[name$='GL_ACCOUNT_CODE2']").first().focus(); ;	
						} ; 
						
						if (list_name_object_id =="GL_ACCOUNT_CODE4")
						{
							
						var url = "<?php echo site_url('gl/glaccounts/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_ACCOUNT_CODE4','DET_AR_INVOICE_GL_ACCOUNT_ID','GL_ACCOUNT_NAME4',url);
						$("input:text[name$='GL_ACCOUNT_CODE4']").first().focus(); ;	
						} ; 
						
						if (list_name_object_id =="GL_ACCOUNT_CODE5")
						{
							
						var url = "<?php echo site_url('gl/glaccounts/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_ACCOUNT_CODE5','AG_GL_ACCOUNT_ID','GL_ACCOUNT_NAME5',url);
						$("input:text[name$='GL_ACCOUNT_CODE5']").first().focus(); ;	
						} ; 
						
						if (list_name_object_id =="GL_ACCOUNT_CODE6")
						{
							
						var url = "<?php echo site_url('gl/glaccounts/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_ACCOUNT_CODE6','ITEM_GL_ACCOUNT_ID','GL_ACCOUNT_NAME6',url);
						$("input:text[name$='GL_ACCOUNT_CODE6']").first().focus(); ;	
						} ; 
						
						
						if (list_name_object_id =="GL_ACCOUNT_CODE7")
						{
							
						var url = "<?php echo site_url('gl/glaccounts/get_account_name') ?>" ;
						check_fetch_account_by_code('GL_ACCOUNT_CODE7','TD_GL_ACCOUNT_ID','GL_ACCOUNT_NAME7',url);
						$("input:text[name$='GL_ACCOUNT_CODE6']").first().focus(); ;	
						} ; 
						
						if (list_name_object_id =="ITEM_CODE")
						{
						//alert ("test") ;	
						var url = "<?php echo site_url('ar/item_s/get_item_name') ?>" ;
						check_fetch_item_by_code('ITEM_CODE','TD_ITEM_ID','ITEM_NAME' ,url , 0 , "TRANS_DETAIL_PRICE"  , "GL_ACCOUNT_CODE7" , "GL_ACCOUNT_NAME7" , "TD_GL_ACCOUNT_ID");
						//$("input:text[name$='ITEM_CODE']").first().focus(); ;	
						$("input:text[name$='TRANS_DETAIL_QTY']").first().focus(); ;
						} ; 
						
						waiting_selection = 0 ;  
						
						content.html(''); 
					}
					
					});	
				
            $("input:text[name$='select_action_search']").live("keyup", function (e) {		
					
				
				if (e.keyCode!==13) 
        	 		{return ; } 
        	 		
					var thevalue =$.trim($(e.target).val()) ; 
					
					
					var area_to_fill =  "#"+$(e.target).attr("caller_target") ;
					var load_url = $(e.target).attr("caller_url") + '/' +encodeURIComponent(thevalue)  ;  
				//	alert(load_url) ; 
					var loadingimg = 	'<div align="center"><img align="center" src="<?php echo base_url('loading.gif') ?>"></div>'
					 $(area_to_fill).html(loadingimg);
				
					
				$.ajax({
				     	cache: false,
				        url: load_url,		       
				        dataType: "html",
				        success: function(res) 
			      			{
			            	//App.unblockUI(content);
			            	  
			            //	alert(res) ; 
			                $(area_to_fill).html(res);
			                	
	                    		App.fixContentHeight(); // fix content height
	                    		App.initUniform(); // initialize uniform elements		                        		
							
	                    		jQuery(".chosen").chosen();
	                    	
	                    	
	                    		post_auto_setup();
	                    		FormComponents.init(); 
	                    		
			            	},
				        error: function(xhr, ajaxOptions, thrownError)
				        	{
				        		alert('<h4>Could not load the requested content.</h4>'  )					      
						        $("#errxhr").html ("<div style='background-color:white;'>"+xhr.responseText+"</div>" ) ;
				            },
			            async: false
			            }); // end ajax call 
		          return ; 
		          		
				});
				
    		 jQuery('.select_action').live("click", function (e) {		
    	        	
    	        		e.preventDefault();
    	          			
    	          		
    	          			// the e.target is the calling object
    	          			  
    	          			var load_url = $(e.target).attr("select_url") ;
    	          		//	alert(load_url) ; 
    	          			list_id_object_id = $(e.target).attr("id_control") ;;
    						list_name_object_id = $(e.target).attr("name_control") ;; 
    		
    	          			waiting_selection = 1 ; 	
    	          			
    	          			//var verb  = $(e.target).attr("caller_verb") ;
    	          		// 	alert(load_url)
    	          			select_from_list(load_url);
    	          			
    	          			return ; 
    	          	});
	          	
    		$(".selected_action").live("keydown", function (e) {
              		//	alert(e.keyCode) ; 
              		//	if (e.keyCode===39) 
            	 	//	{
              		//	$('.selected_action').filter('[caller_verb="select"]').next().focus(); ;
              		//	}	
              	});
          			
		  	function select_from_list(load_url)
					{
					selector_selected_index = -1 ;
						var content = $('#select_box');
	          		//	alert(load_url) ; 
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
	                    	//	alert("d4") ; 
	                    		post_auto_setup();
	                    		FormComponents.init(); 
	                    		
	                           //$(".selected_action").first().focus(); ;  
	   						 $("input:text[name$='select_action_search']").first().focus(); ;
					  
	                      		},
	                    	error: function(xhr, ajaxOptions, thrownError)
	                    		{
	                    		alert('<h4>Could not load the requested content.</h4>'  )					      
						        $("#errxhr").html ("<div style='background-color:white;'>"+xhr.responseText+"</div>" ) ;
	                        	App.unblockUI(value);
	                        	alert("error") ; 
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
			         	   alert('<h4>Could not load the requested content.</h4>'  )					      
						        $("#errxhr").html ("<div style='background-color:white;'>"+xhr.responseText+"</div>" ) ;
						            App.unblockUI(content);
			            },
			            async: false
			          });	 
          	});
									
		     // Section Key Mangement ----------------------------------------------------------------------- General  	
		      jQuery(document).live("keydown", function (e) {
			  	
			  	
			  		var the_code = (e.keyCode || e.charcode) ; 
				  	if(e.ctrlKey)
						{
							var arr = [ 40,38,34,];
							var char_array = ['e','E','d','D','m','M'] ; 
							if (jQuery.inArray(e.keyCode,arr) !== -1) e.preventDefault();
							if (jQuery.inArray(String.fromCharCode(e.which),char_array) !==-1) e.preventDefault();
							
							var v = 0 ; 
        	 				v = $("button[caller_verb='select']").size() ;
        	 				var v2 = 0 ; 
        	 					
        	 				v2 = $(".selection_button").size() ;
        	 			; 
        	 				if (v>0)
			        	 			{ // selectors are on    ---------------------------------------------------------------------------------------------------------------------
			        	 			//	alert(v) 
										if (the_code===40) 
								        	 		{
								        	 				selector_selected_index = 0 ; 
								        	 		}		
								        }
					        else
							       {// not selectors     ---------------------------------------------------------------------------------------------------------------------
										
										if (( String.fromCharCode(e.which) === 'e' || String.fromCharCode(e.which) === 'E' ))
													{ 	
														$('.details').hide()
														trigger_action("edit_"+selected_index);
															$("input:text[name$='GL_ACCOUNT_CODE']").first().focus(); ;
													}	
										if (( String.fromCharCode(e.which) === 'm' || String.fromCharCode(e.which) === 'M' ))
													{
														$('.details').hide()
														trigger_action("copy_"+selected_index);
															$("input:text[name$='GL_ACCOUNT_CODE']").first().focus();  	
													}
							
										if (( String.fromCharCode(e.which) === 'd' || String.fromCharCode(e.which) === 'D' ))
													{									
														trigger_action("delete_"+selected_index);}
								
										if ((selected_index==0) || (the_code==34))
					          						{	
								          					$(".selection_button").hide(); 
															$("#select_button_0").show() ; 
															selected_index = 0 ; 
					          						}
					          			
					          		
					          			if (the_code==40) 
					        	 				{
					       		
					       								if (selected_index < v2)
					       								{
							        	 				//alert("SI2:"+selected_index) ; 
							        	 				var new_index = parseInt(selected_index) + 1 ;
							        	 				$(".selection_button").hide(); 
														$("#select_button_"+new_index).show() ; 
														selected_index = new_index; 
														
														$('html,body').animate({
        scrollTop: $("#select_button_"+new_index).offset().top-150},
        'fast');
        
				//										var y = $(window).scrollTop();  //your current y position on the page
					//									$(window).scrollTop(y+100);
													 }
					        	 				}
					        	 		if (the_code==38) 
					        	 				{
							        	 				if (selected_index > 1)
							        	 				{ 
							        	 				var new_index = parseInt(selected_index) - 1 ;
							        	 				$(".selection_button").hide(); 
														$("#select_button_"+new_index).show() ; 
														selected_index = new_index; 
																												$('html,body').animate({
        scrollTop: $("#select_button_"+new_index).offset().top-150},
        'fast');
												//		var y = $(window).scrollTop();  //your current y position on the page
													//	$(window).scrollTop(y-100);
													}
					        	 				}       	 		
										}   
										//alert(selected_index) ; 
    						}
			  		 
          		
			  });										
            //--------------------------------------------------------------------------------------------------------
            // ONLY SELECTOR KEYBOARD ACTING 
             jQuery(document).live("keydown", function (e) {
          				//alert(e.keyCode) ; 
          			
          				var v = 0 ; 
        	 			//	 selector_selected_index = selector_selected_index + 1 ;
        	 			v = $("button[caller_verb='select']").size() ;  
        	 			var the_code = (e.keyCode || e.charcode) ; 
        	 		
        	 			if (v > 0 )
        	 			 { 		
        	 			 		a_lert(selector_selected_index+'    ' + e.keyCode ) ; 
				          			if (the_code==40) 
				        	 		{
        	 								if (selector_selected_index ==-1) 
        	 			 						{  $("button[caller_verb='select']").first().focus() ; selector_selected_index = 0 ; }           	 			 	
        	 			 					else
        	 			 						{ selector_selected_index = selector_selected_index + 1 ; $("button[caller_verb='select']").eq(selector_selected_index).focus(); }  
        	 			 			}
        	 			 			
        	 			 			if (the_code==38) 
				        	 		{
				        	 				if (selector_selected_index > 0 )
				        	 					{
				        	 						selector_selected_index = selector_selected_index - 1  ;				        	 						 
				        	 						$("button[caller_verb='select']").eq(selector_selected_index).focus();
				        	 					}  
				        	 		}
        	 			 } 
	        	 	//		 $('.selected_action').filter('[caller_verb="select"]').first().focus(); ;
	        	 	//		 $('.selected_action').filter('[caller_verb="select"]').first()css("background-color", "blue" );  

          		   
          		    
         
          		    
          		}); 	
                 
           
           
              function display_c (start) {
      
                window.start = start;
                var end = 60*60 ; // change this to stop the counter at a higher value
                var refresh = 1000; // Refresh rate in milli seconds
                if( window.start <= end ) {
                    mytime = setTimeout( display_ct,refresh )
                        
                } else {
                    alert("Patient - Time Over , Click to Continue ");
                }
            }
            
             function display_ct () {
                // Calculate the number of days left
                
                var days = Math.floor(window.start / 86400);
                // After deducting the days calculate the number of hours left
                var hours = Math.floor((window.start - (days * 86400 ))/3600)
                // After days and hours , how many minutes are left
                var minutes = Math.floor((window.start - (days * 86400 ) - (hours *3600 ))/60)
                // Finally how many seconds left after removing days, hours and minutes.
                var secs = Math.floor((window.start - (days * 86400 ) - (hours *3600 ) - (minutes*60)))

                var y ="" ; 
                 if ( minutes > 20  ) y ="MAKEITRED" ;   
                 
                if (secs < 10)  secs = "0" + secs ; 
                if (minutes < 10)  minutes = "0" + minutes ; 
                
                if (y=="MAKEITRED"  )
                {
                var x ="<span style='color:red;' >TIME " +  "" + minutes + ":" + secs  + "</span> ";
                }
                else
                {
                     var x = "" + minutes + ":" + secs  ;
                }
                 $("#session_timer").html(x) ; 
                window.start = window.start + 1;
//alert(window.start) ; 
                tt = display_c(window.start);
                
            }
				        	
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
	         	  	var myrecordcount = 100 ; 
	         	  	
	         	  	$.each($(".autodatatable"), function( index, xvalue ) {	     
          				var page_rows = $(xvalue).attr("page_rows") ;
          				var page_rows = $(xvalue).attr("page_rows") ;
          				var my_bfilter = $(xvalue).attr("enable_search") ;
          				//alert(my_bfilter) ; 
          				if (my_bfilter==undefined) my_bfilter =true;  
          				var hscroll = $(xvalue).attr("hscroll") ;
          				var scrolly = 400 ; 
          				
          				//alert(hscroll); 
          				if (hscroll!=true) { 
          					hscroll = false ;
          					scrolly = ""}
          			
          				var ztable= $( xvalue ).dataTable({
          					 dom: 'Bfrtip',
						    buttons: [
						        'copy', 'excel', 'pdf'
						    ],
					   	   "aLengthMenu": [
			                     [5,10, 30, 100, -1],
                 				   [5,10, 30, 100, "All"] // change per page values here
			                ],
			           		 "scrollX": hscroll, 
			           		 "scrollY":        scrolly,
			           		 "axjax" :          '/api/data',
   							 "bFilter": my_bfilter, 
    						 "deferRender":    false,
    						 "scroller":       hscroll,
			           		
			                "iDisplayLength": -1,
			                "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
			                "sPaginationType": "bootstrap",
			                   "oLanguage": {
			                    "sSearch": "Search In Results : ",
			                    } , 
			                "oxLanguage": {
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
			            
			       
			              activate_typeahead() ; 
                                        
	         	  }
	         
	      // SECTION DATATABLE WORK --------------------------------------------------------------------------------------------------------------------------
	        $(".ranwar").live("click", function (e) {
	             //	var table = $('#datatable_of_me').DataTable();
					//alert($(e.target).attr("row_id"));
							
							this_row = $(this).attr("row_id") ; 
							selected_index = this_row ; 
							//alert($(this).attr("row_id")) ;
							 
							$(".selection_button").hide(); 
							$("#select_button_"+this_row).show() ; 
							
					//		$(".ranwar.selected").removeClass('selected');			
					//		$(this).addClass('selected');
				    		      
		
				    });
				    

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
			                "scrollX": true,
			                "iDisplayLength": -1,
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
			                 "columnDefs": [
    { "width": "500px;", "targets": 0 },null,null
  ] , 
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
				
								//	
										var obj = $(".autoload" );
										var arr = $(".autoload" ).toArray() // $.makeArray( obj ); 
										
										if(jQuery.isArray( arr ) === true)
										{
                                                                                      
											$.each($(".autoload" ), function( index, xvalue ) {
												
												autoload_url = $(xvalue).attr("url") ; 
												//alert(autoload_url) ;		
												$(xvalue).load(autoload_url,function(responseTxt,statusTxt,xhr){
												    
				
                           // alert("s") ;  
                            
										    	if(statusTxt=="success")
										      		//alert("External content loaded successfully!"); 
										      		post_auto_setup(); 
										      		
										      			//actually needed to be called on every loop
										      			// i cannot figure out why (anwar2014)
										      		App.fixContentHeight(); // fix content height
							                        App.initUniform(); // initialize uniform elements		                        		
													FormComponents.init();
												  
							                      //  jQuery(".chosen").chosen();
    							                   jQuery(".select2_combo").select2("destroy") ;   
    							                    jQuery(".select2_combo").select2();
							                      	
               
                                   
                         
							                           
												    if(statusTxt=="error")
												      $(xvalue).html("Error: "+xhr.status+": "+xhr.statusText);
												      
												  });
										   			
												
											});
											//FormComponents.init();
											//post_auto_setup() ; not needed cause it's called on every loop check inside loop (anwar2014) 
										}
                    //           jQuery(".select2_combo").select2("destroy")   ;   
						//	jQuery(".select2_combo").select2();
								
						     
				}
			
			function init_auto_submitters()
				{	
	//				jQuery(".select2_combo").select2("destroy")	; 	
					var obj = $(".autoaction" );
					var arr = $(".autoaction" ).toArray() // $.makeArray( obj ); 
					var arrString = arr.join("");
					
			//		alert (arrString) ; 
					if(jQuery.isArray( arr ) === true)
					{
				//		alert(arr)
						$.each($(".autoaction" ), function( index, xvalue ) {
							
						//	alert ("checking.success") ;
		          			// alert("s") ;
		          			// the e.target is the calling object
		          		  
		          			var caller_id = $(xvalue).attr("caller_id") ;
		          			var verb  = $(xvalue).attr("caller_verb") ;
		          			var elem = 	$(xvalue) ; 
		          			if ($(xvalue).get(0).tagName == "I") 
		          			{
		          				var xxx = $(xvalue).parent() ;  
		          				caller_id = xxx.attr("caller_id") ;
		          				verb  = xxx.attr("caller_verb") ;
		          				elem = xxx ; 
		          			} ; 
		          		 	
		         // 		 	alert(caller_id + verb) ; 
		          			do_actions(caller_id,verb,elem)
		          			return ; 
          			   			
							
						});
						FormComponents.init();
						post_auto_setup() ;   /// not needed cause it's called on every loop check inside loop (anwar2014) 
					}
			//	jQuery(".select2_combo").select2(); 
	
	          		
				}
					
			//--------------------------------------------------------------------------------------------------------
			function reload_box(xreload_box)
				{
					

					autoload_url = $("#"+xreload_box).attr("url") ;

					 
					 		$("#"+xreload_box).html("<?php echo '<div align=center><img align=center width=200px src='.base_url("loading_bar.gif").'></div>' ; ?>" );
					 		
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
				         	alert('<h4>Could not load the requested content.</h4>'  )					      
						     $("#errxhr").html ("<div style='background-color:white;'>"+xhr.responseText+"</div>" ) ;
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
				         	alert('<h4>Could not load the requested content.</h4>'  )					      
						        $("#errxhr").html ("<div style='background-color:white;'>"+xhr.responseText+"</div>" ) ;
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
		      
	
	       jQuery('#vs_service_id').live("click", function (e) {  
                    //e.preventDefault();
                    var selected_service_id = $(e.target).attr("value") ;  
                   // alert($(e.target).attr("value"));
                    var load_url = "<?php echo site_url('/clinic/services/get_values/');   ?>/" +  selected_service_id + "/json"  ; 
                   // alert(load_url) ;       
             //       App.blockUI(content, false); 
                    $.ajax({
                            cache: false,
                            url: load_url,             
                            dataType: "json",
                            success: function(res) 
                                {
                                //    App.unblockUI(content);
                                   // alert(res) ; 
                                        $.each(res, function(key,value){
                                        //alert("output: "+key+" value "+value); 
                                        if (key=="service_cost")
                                        {
                                            //alert(value) ; 
                                            $("#vs_price").val(value) ; 
                                            }
                                        });
                               // content.html(res);
                                      
                                },
                            error: function(xhr, ajaxOptions, thrownError)
                                {
                                
                                },
                            
                            }); // end ajax call 
                            
                      return ; 
                      
            }) ; 
            
     	 	function check_fetch_account_by_code(source_id,target_id, target_name,url,no_search)
     	 	{
     	 		  
					var emp_code = $("#"+source_id).val()
					if (emp_code =="") {
							$("#"+target_name).val(""); 
		 					$("#"+target_id).val(""); 
						    return false; 
						 }
				//	alert(emp_code) ; 
					var load_url = url +"/"+emp_code ;  ; 
				//	alert(load_url) ; 
				//	alert("i am alive here") ; 
				//	alert(emp_code) ; 
				//	alert("recall") ; 
          			$.ajax({
				     	cache: false,
				        url: load_url,		       
				        dataType: "html",
				        success: function(res) 
			      			{
			      				//alert(res) ; 
			      	
			      				var message_array = res.split("<!/>" );
			      				
			      				 
		 						if (message_array[0]=="AJAX_FOUND")
		 							{
		 								
		 								
		 								$("#"+target_name).val(message_array[2]); 
		 								$("#"+target_id).val(message_array[1]); 
		 								return ;  
		 							}
		 								$("#"+target_name).val(""); 
		 								$("#"+target_id).val("");
		
					          			list_id_object_id =  target_id; 
										list_name_object_id =source_id  ; 
										
									if (no_search!=1)
									{
									//	alert(list_name_object_id)
										var load_url ; 
										if (target_name == "GL_ACCOUNT_NAME") 	{ load_url = "<?php echo site_url('/gl/glaccounts/ajax_select/'); ?>" ; }
										if (target_name == "GL_ACCOUNT_NAME2") 	{ load_url = "<?php echo site_url('/gl/glaccounts/ajax_select/'); ?>" ; }
										if (target_name == "GL_ACCOUNT_NAME4") 	{ load_url = "<?php echo site_url('/gl/glaccounts/ajax_select/'); ?>" ; }
										if (target_name == "GL_ACCOUNT_NAME5") 	{ load_url = "<?php echo site_url('/gl/glaccounts/ajax_select/'); ?>" ; }
										if (target_name == "GL_ACCOUNT_NAME6") 	{ load_url = "<?php echo site_url('/gl/glaccounts/ajax_select/'); ?>" ; }
										if (target_name == "GL_ACCOUNT_NAME7") 	{ load_url = "<?php echo site_url('/gl/glaccounts/ajax_select/'); ?>" ; }
					          			if (target_name == "GL_COST_CENTER_NAME") 	{ load_url = "<?php echo site_url('/gl/glcenters/ajax_select/'); ?>" ; }
					          			if (target_name == "GL_COST_CENTER_NAME2") 	{ load_url = "<?php echo site_url('/gl/glcenters/ajax_select/'); ?>" ; }
					          			if (target_name == "GL_COST_CENTER_NAME6") 	{ load_url = "<?php echo site_url('/gl/glcenters/ajax_select/'); ?>" ; }
					          			if (target_name == "GL_COST_CENTER_NAME7") 	{ load_url = "<?php echo site_url('/gl/glcenters/ajax_select/'); ?>" ; }
					          			if (target_name == "GL_ANALYSIS_NAME") 	{ load_url = "<?php echo site_url('/gl/glanalysiss/ajax_select/'); ?>" ; }
					          			if (target_name == "GL_ANALYSIS_NAME2") 	{ load_url = "<?php echo site_url('/gl/glanalysiss/ajax_select/'); ?>" ; }
					          			if (target_name == "GL_ANALYSIS_NAME6") 	{ load_url = "<?php echo site_url('/gl/glanalysiss/ajax_select/'); ?>" ; }
					          			if (target_name == "GL_ANALYSIS_NAME7") 	{ load_url = "<?php echo site_url('/gl/glanalysiss/ajax_select/'); ?>" ; }
					          			
					          			
					          			
					          					
					          			
					         	 		load_url = load_url + '/' +encodeURIComponent(emp_code)  ;  
					          			waiting_selection = 1 ; 	
					          			
					          			//var verb  = $(e.target).attr("caller_verb") ;
					          		 
					          			select_from_list(load_url);
					          		}	
					          			return ; 
	          			
		 								
			            	},
				        error: function(xhr, ajaxOptions, thrownError)
				        	{
				         	alert('<h4>Could not load the requested content.</h4>'  )					      
						    $("#errxhr").html ("<div style='background-color:white;'>"+xhr.responseText+"</div>" ) ;
				            //App.unblockUI(value);
				            },
			            async: false
			            }); // end ajax call 
     	 	}
     	 	
     	 	function check_fetch_item_by_code(source_id,target_id, target_name,url, no_search ,target2_name ,target3_name ,target4_name , target3_id)
     	 	{
     	 		
					
					
					var emp_code = $("#"+source_id).val()
					if (emp_code =="") {
							$("#"+target_name).val(""); 
		 					$("#"+target_id).val(""); 
		 					$("#"+target2_name).val(""); 
		 					$("#"+target3_name).val(""); 
		 					$("#"+target4_name).val(""); 
						    return false; 
						 }
					//alert("CODE"+emp_code) ; 
					var load_url = url +"/"+emp_code ;  ; 
					//alert(load_url) ; 
					//alert("i am alive here") ; 
					//alert(emp_code) ; 
				//	alert("recall") ; 
          			$.ajax({
				     	cache: false,
				        url: load_url,		       
				        dataType: "html",
				        success: function(res) 
			      			{
			      				//alert(res) ; 
			      	
			      				var message_array = res.split("<!/>" );
		 						if (message_array[0]=="AJAX_FOUND")
		 							{
		 								
		 								$("#"+target3_id).val(message_array[6]);
		 								$("#"+target4_name).val(message_array[5]); 
		 								$("#"+target3_name).val(message_array[4]); 
		 								$("#"+target2_name).val(message_array[3]); 
		 								$("#"+target_name).val(message_array[2]); 
		 								$("#"+target_id).val(message_array[1]); 
		 								
		 								$("#TRANS_DETAIL_QTY").first().focus(); ;    
		 								
		 								
		 								
		 								
		 								return ;  
		 							}
		 								
		 								
		 					            $("#"+target4_name).val("");
		 					            $("#"+target3_name).val("");
		 					            $("#"+target2_name).val("");
		 								$("#"+target_name).val(""); 
		 								$("#"+target_id).val("");
		
					          			list_id_object_id =  target_id; 
										list_name_object_id =source_id  ; 
										
									if (no_search!=1)
									{
									//	alert(list_name_object_id)
										var load_url ; 
										 
										if (target_name == "ITEM_NAME") 	{ load_url = "<?php echo site_url('/ar/item_s/ajax_select/'); ?>" ; }
										
					          			
					          			
					          					
					          			
					         	 		load_url = load_url + '/' +encodeURIComponent(emp_code)  ;  
					          			waiting_selection = 1 ; 	
					          			
					          			//var verb  = $(e.target).attr("caller_verb") ;
					          		 
					          			select_from_list(load_url);
					          		}	
					          			return ; 
	          			
		 								
			            	},
				        error: function(xhr, ajaxOptions, thrownError)
				        	{
				         	alert('<h4>Could not load the requested content.</h4>'  )					      
						    $("#errxhr").html ("<div style='background-color:white;'>"+xhr.responseText+"</div>" ) ;
				            //App.unblockUI(value);
				            },
			            async: false
			            }); // end ajax call 
     	 	}
     	 			  	 	
     	 	function check_fetch_parent_by_code(source_id,target_id, target_name,url)
     	 	{
     	 		
					var emp_code = $("#"+source_id).val()
					if (emp_code =="") {
							$("#"+target_name).val(""); 
		 								$("#"+target_id).val(""); 
						 return false; 
						 }
					var load_url = "<?php echo site_url('gl/glaccounts/get_parent_name') ?>"+"/"+emp_code ; 
							var load_url = url +"/"+emp_code ;  ; 
				//	alert("i am alive here") ; 
					
				//	alert("recall") ; 
          			$.ajax({
				     	cache: false,
				        url: load_url,		       
				        dataType: "html",
				        success: function(res) 
			      			{
			      				//alert(res) ; 
			      				var message_array = res.split("<!/>" );
		 						
		 						//var redirect_url="" ; 
		 							if (message_array[0]=="AJAX_FOUND")
		 							{
		 								
		 								$("#"+target_name).val(message_array[2]); 
		 								$("#"+target_id).val(message_array[1]); 
		 								
		 							}
		 							else
		 							{
		 								$("#"+target_name).val(""); 
		 								$("#"+target_id).val(""); 
		 							}
		 								
			            	},
				        error: function(xhr, ajaxOptions, thrownError)
				        	{
				         	alert("could not check the id" + thrownError) ;
				         			      
						        $("#errxhr").html ("<div style='background-color:white;'>"+xhr.responseText+"</div>" ) ; 
				            //App.unblockUI(value);
				            },
			            async: false
			            }); // end ajax call 
     	 	}		
     	 		
	     	  //------------------------------------------------------------------------------------
	     	jQuery('#new_employee_document_button').live("click", function (e) {		
	        	
	        		e.preventDefault();
	     	 		new_doc_type_id = $("#new_doc_type_id").val();
	     	 		emp_id = $("#new_doc_type_emp_id").val();
	     	 		if (new_doc_type_id!="")
	     	 		{
					
					nthis_url = "<?php echo site_url('/hr/doc/info/0'); ?>" +"/"+emp_id+'/'+new_doc_type_id   ;
					//alert(nthis_url) ;            							
	          		r_goto_page("_blank",nthis_url);
	 				return (false)	  					
					}		
					else
					{
						alert("Please Select Document Type") ; 
					}
			  });
		  
			function table2csv(oTable, exportmode, tableElm) {
				
				//edited tabi by anwar .. thanks 
				
		        var csv = '';
		        var headers = [];
		        var rows = [];
		 
		        // Get header names
		      
		        oTable.find("thead").find('tr').find('th').each(function(){
		        	 var $th = $(this);
		            var text = $th.text();
		            var header = '"' + text + '"';
		            header.replace("آ", "");
		            //alert(text) ; 
		            // headers.push(header); // original code
		            if(text != "") headers.push(header); // actually datatables seems to copy my original headers so there ist an amount of TH cells which are empty	
		        });
		        
		        $(tableElm+' thead').find('tr').each(function() {
		            var $th = $(this);
		            var text = $th.text();
		            var header = '"' + text + '"';
		            
		            alert(text) ; 
		            // headers.push(header); // original code
		            if(text != "") headers.push(header); // actually datatables seems to copy my original headers so there ist an amount of TH cells which are empty
		        });
		        csv += headers.join(',') + "\n";
		 
		        // get table data
		        if (exportmode == "full") { // total data
		            var total = oTable.fnSettings().fnRecordsTotal()
		            for(i = 0; i < total; i++) {
		                var row = oTable.fnGetData(i);
		               //    alert( row);
		                row = strip_tags(row);
		           
		                rows.push(row);
		             
		               csv += row + "\n" ; 
		            }
		        } else { // visible rows only
		            $(tableElm+' tbody tr:visible').each(function(index) {
		                var row = oTable.fnGetData(this);
		                row = strip_tags(row);
		                rows.push(row);
		            })
		        }
		   //       csv += rows.join(',') + "\n";
		    //   csv += rows.join("");
		  //    var s= String.fromCharCode(9);
		  //	  csv = csv.replace(/  +/g, s);
		  //    csv = csv.replace(/[\r\n]{2,}/g, "\n"); 
		        // if a csv div is already open, delete it
		        if($('.csv-data').length) $('.csv-data').remove();
		        // open a div with a download link
		        $value_of_button = "Now Download it";
		        $("#export_all").hide();
		        $('#TTB').append('<div class="csv-data hide_with_menu"><form enctype="multipart/form-data" method="post" action="<?php echo base_url('/csv.php') ?>" ><textarea class="form hide" name="csv" >'+csv+'</textarea><input type="submit" class="submit btn blue hide_with_menu" value="Download File" /></form></div>');
		 
            }
 
			function strip_tags(html) {
			    var tmp = document.createElement("div");
			    tmp.innerHTML = html;
			    return tmp.textContent||tmp.innerText;
			}
		
			jQuery('#export_all').live("click", function (e) {	
					//e.preventDefault();
					var oTable = $('#datatable_of_me').dataTable();
			        table2csv(oTable, 'full', 'datatable_of_me');	
			        alert("Now Click On Download File");
			}) ; 
						
			// export all table data
			$('#xxexport_all').click(function(event) {
		        event.preventDefault();
		        table2csv(oTable, 'full', 'table.display');
		    })
	
			var asInitVals = new Array();
    		
    
		  	jQuery(".chosen").chosen();
			post_auto_setup();
			
		  	FormComponents.init();
		
			
		}); //-- this is the end of document ready line 
		
	// the following not working  ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  (function() { // THIS FUNCTION IS REQUIRED.
    if(/Firefox|MSIE |Trident/i.test(navigator.userAgent))
      var formatForPrint = function(table) {
        var noBreak = document.createElement("div")
          , noBreakTable = noBreak.appendChild(document.createElement("div")).appendChild(table.cloneNode())
          , tableParent = table.parentNode
          , tableParts = table.children
          , partCount = tableParts.length
          , partNum = 0
          , cell = table.querySelector("tbody > tr > td");
        noBreak.className = "noBreak";
        for(; partNum < partCount; partNum++) {
          if(!/tbody/i.test(tableParts[partNum].tagName))
            noBreakTable.appendChild(tableParts[partNum].cloneNode(true));
        }
        if(cell) {
          noBreakTable.appendChild(cell.parentNode.parentNode.cloneNode()).appendChild(cell.parentNode.cloneNode(true));
          if(!table.tHead) {
            var borderRow = document.createElement("tr");
            borderRow.appendChild(document.createElement("th")).colSpan="1000";
            borderRow.className = "borderRow";
            table.insertBefore(document.createElement("thead"), table.tBodies[0]).appendChild(borderRow);
          }
        }
        tableParent.insertBefore(document.createElement("div"), table).style.paddingTop = ".009px";
        tableParent.insertBefore(noBreak, table);
      };
    else
      var formatForPrint = function(table) {
        var tableParent = table.parentNode
          , cell = table.querySelector("tbody > tr > td");
        if(cell) {
          var topFauxRow = document.createElement("table")
            , fauxRowTable = topFauxRow.insertRow(0).insertCell(0).appendChild(table.cloneNode())
            , colgroup = fauxRowTable.appendChild(document.createElement("colgroup"))
            , headerHider = document.createElement("div")
            , metricsRow = document.createElement("tr")
            , cells = cell.parentNode.cells
            , cellNum = cells.length
            , colCount = 0
            , tbods = table.tBodies
            , tbodCount = tbods.length
            , tbodNum = 0
            , tbod = tbods[0];
          for(; cellNum--; colCount += cells[cellNum].colSpan);
          for(cellNum = colCount; cellNum--; metricsRow.appendChild(document.createElement("td")).style.padding = 0);
          cells = metricsRow.cells;
          tbod.insertBefore(metricsRow, tbod.firstChild);
          for(; ++cellNum < colCount; colgroup.appendChild(document.createElement("col")).style.width = cells[cellNum].offsetWidth + "px");
          var borderWidth = metricsRow.offsetHeight;
          metricsRow.className = "metricsRow";
          borderWidth -= metricsRow.offsetHeight;
          tbod.removeChild(metricsRow);
          tableParent.insertBefore(topFauxRow, table).className = "fauxRow";
          if(table.tHead)
            fauxRowTable.appendChild(table.tHead);
          var fauxRow = topFauxRow.cloneNode(true)
            , fauxRowCell = fauxRow.rows[0].cells[0];
          fauxRowCell.insertBefore(headerHider, fauxRowCell.firstChild).style.marginBottom = -fauxRowTable.offsetHeight - borderWidth + "px";
          if(table.caption)
            fauxRowTable.insertBefore(table.caption, fauxRowTable.firstChild);
          if(tbod.rows[0])
            fauxRowTable.appendChild(tbod.cloneNode()).appendChild(tbod.rows[0]);
          for(; tbodNum < tbodCount; tbodNum++) {
            tbod = tbods[tbodNum];
            rows = tbod.rows;
            for(; rows[0]; tableParent.insertBefore(fauxRow.cloneNode(true), table).rows[0].cells[0].children[1].appendChild(tbod.cloneNode()).appendChild(rows[0]));
          }
          tableParent.removeChild(table);
        }
        else
          tableParent.insertBefore(document.createElement("div"), table).appendChild(table).parentNode.className="fauxRow";
      };
    var tables = document.body.querySelectorAll("table.print")
      , tableNum = tables.length;
    for(; tableNum--; formatForPrint(tables[tableNum]));
  })();
  
   function PrintPreview() {
 var Contractor= $('#page-content').html();
 
 printWindow = window.open("", "", "location=1,status=1,scrollbars=1,width=650,height=600");
 printWindow.document.write('<html><head>');
 printWindow.document.write('<style type="text/css">@media print{.no-print, .no-print *{display: none !important;}');
 printWindow.document.write('</head><body>');
 printWindow.document.write('<div style="width:100%;text-align:right">');

  //Print and cancel button
 printWindow.document.write('<input type="button" id="btnPrint" value="Print" class="no-print" style="width:100px" onclick="window.print()" />');
 printWindow.document.write('<input type="button" id="btnCancel" value="Cancel" class="no-print"  style="width:100px" onclick="window.close()" />');

 printWindow.document.write('</div>');

 //You can include any data this way.
 printWindow.document.write('<table><tr><td>Contractor name:'+ Contractor +'</td></tr>you can include any info here</table');

 printWindow.document.write(document.getElementById('forPrintPreview').innerHTML);
 //here 'forPrintPreview' is the id of the 'div' in current page(aspx).
 printWindow.document.write('</body></html>');
 printWindow.document.close();
 printWindow.focus();
 
}
 
	</script>
	