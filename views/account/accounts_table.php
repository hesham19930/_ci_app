<?php


	?>
	
		<div class="table-toolbar">
			<div class="btn-group pull-right">
				<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
				</button>
				<ul class="dropdown-menu pull-right">
					<li><a href="#">Print</a></li>
					<li><a href="#">Save as PDF</a></li>
					<li><a href="#">Export to Excel</a></li>
				</ul>
			</div>
		</div>

	<?php
	
	
		r_theme_draw_table($list_table,$i_options=array("class"=>"autodatatable"),$table_id="datatable_of_accounts",array());
	
/* end of file 