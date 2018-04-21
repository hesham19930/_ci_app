<?php $template_folder = "_templates/front_arabic/" ?> 
 
<?php $this->load->view($template_folder.'header',$public_data); ?>

<div id="main_content">
	<?php $this->load->view($body_view,$body_data); ?>
</div>

<?php $this->load->view($template_folder.'/bottom'); ?>

<?php $this->load->view($template_folder.'/footer'); ?>