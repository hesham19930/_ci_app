<div class="container-fluid "><?php
    $admin = $this->admin_public->DATA;

    //$CI =& get_instance();
    $this->lang->load('config/dashboard', $this->admin_public->DATA["system_lang"]);
    //if ( $public_data["current_shift_id"] !=0)
    //{
    //$this->bi_shift->read($public_data["current_shift_id"],"",true ) ; 
    //}
    //echo "LANG:".$this->admin_public->DATA["system_lang"];
    //echo "LANG:".$this->admin_public->DATA["user_name"];
    ?><div style="height:3px;"></div>		
    <!-- Account and Related Section -->
    <div class="row-fluid hide_with_menu ">
        <div class="span12">
            <!-- BEGIN ALERTS PORTLET-->
            <div class="portlet"  >
                <div class="portlet-title" >
                    <div class="caption" style="color:blue;">
                        <span class="master_font" ><span class="bxtn gxrey hide_with_menu"><ixmg src="<?php echo base_url('tawasol.jpg') ?>" width=30px; ></span>

                            <span class="btn red hide_with_menu">Clinic system</span>
                            <?php echo '<span class="btn yellow">RESALA co.</span>'; ?>
                            <span class="btn green"><?php echo sysDATA("current_year") ?></span>

                        </span></div>

                    <div class="tools ">
                        <?php echo '[ ' . date('Y-m-d') . '  ]'; ?>
                        <?php
                        $user_info = $this->session->all_userdata();
                        /*
                          if ((strpos( $user_info["user_agent"] , "Chrome",0)) == 0 )
                          {	//echo $user_info["user_agent"] ;
                          echo "....برجاء استخدام جوجل كروم" ;
                          }
                          else {
                          //echo ".... جوجل كروم" ;
                          }
                         * 
                         */
                        ?>
                        <a href="javascript:;" id='print_page' class="icon-print hide_with_menu"><i class="icon-print"></i></a>
                        <a href="javascript:;" id='remove_menu' class="icon-eye-close"></a>
                        <a href="javascript:;" class="expand hide_with_menu"></a>
                    </div>
                </div>
                <div class="portlet-body 
                <?php
                $collapse_tool_box = "yes";
                if ($show_toolbox == "yes")
                    $collapse_tool_box = "no";
                if (($this->input->post("find_passport")) || ($this->input->post("find_applicant_name")))
                    $collapse_tool_box = "no";
                if ($collapse_tool_box == "yes")
                    echo "collapsed";
                ?>
                     " id="xxxx1" style="background-color: #fff;padding-top:7px;" >
                         <?php
                         //	echo $this->admin_public->DATA["sys_account_type"] ;

                         $data = array();

                         if (!isset($tool_box_name))
                             $tool_box_name = "general_tool_box";
                         if (isset($tool_box_vars)) {
                             $data["tool_box_vars"] = $tool_box_vars;
                         } else {
                             $data["tool_box_vars"] = array();
                         }

                         $this->load->view($tool_box_name, $data);
                         ?><div id="errxhr" name="errxhr"></div>							
                </div>

            </div>


            <!-- END Account and Related Section -->
        </div>
    </div>

    <!-- ------ ------------------------------------------------------------------------------------------------------------ -->
    <!-- ------ ------------------------------------------------------------------------------------------------------------ -->


