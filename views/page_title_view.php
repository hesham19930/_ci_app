<!-- PAGE TITLE & BREADCRUMB--><div class="row-fluid"><div class="span12 ">
						<h4 class="pxage-title"><?php if ($page_title_formatted !="") $page_title = $page_title_formatted ; ?>  			
							<span class="master_font" style="color:#E02020;"><strong><?php echo $page_title ; ?></strong>&nbsp;
						
						<!--	<small><?php echo $page_subtitle ?></small></span> -->
													
						</h4>
						<ul class="breadcrumb tools_font hidden">
							<li>
								<i class="icon-home"></i>
								<a href="<?php echo site_url("account/dashboard"); ?>">الرئيسية</a> 
									<i class="icon-angle-left"></i>
							</li>
							<?php
							//echo "jjj" ; 
							//print_r($bread_crumbs) ; 
							foreach ($bread_crumbs as $key => $value) {
								echo "<li>";
							
								echo '<a href="'.$value["url"].'">'.$value["text"].'</a> ' ; 
								echo '<i class="icon-angle-left"></i>' ; 
								echo "</li>"; 
							}
							?></ul>
							
							</div></div>
<div class='clearfix'></div>