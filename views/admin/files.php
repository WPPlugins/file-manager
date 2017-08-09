<?php
/**
 * 
 * Security check. No one can access without Wordpress itself
 * 
 * */
defined('ABSPATH') or die();
global $FileManager;
if( !current_user_can('manage_options') ) die();
?>

<div id='file-manager'>

</div>

<script>

PLUGINS_URL = '<?php echo plugins_url();?>';

jQuery(document).ready(function(){
	jQuery('#file-manager').elfinder({
		url: ajaxurl,
		customData:{action: 'connector'}
	});
});

</script>

<?php 

if( isset( $FileManager->options->options['file_manager_settings']['show_url_path'] ) && !empty( $FileManager->options->options['file_manager_settings']['show_url_path']) && $FileManager->options->options['file_manager_settings']['show_url_path'] == 'hide' ){
	
?>
<style>
.elfinder-info-tb > tbody:nth-child(1) > tr:nth-child(2),
.elfinder-info-tb > tbody:nth-child(1) > tr:nth-child(3)
{
	display: none;
}
</style>
<?php
	
}

?>
