<?php 
/**
 * 
 * @file index.php The manin admin view file that will show the actual file manager
 * 
 * */

// Security check
if( !defined('ABSPATH') ) die();
global $FileManager;
?>

<?php
// Loading admin assets
$FileManager->admin_assets();

?>

<?php require_once( 'header.php' ); ?>

<div class='fm-container'>
	
	<div class='col-main'>
		
		<div class='row'>
			
		<?php include 'files.php'; ?>
			
		</div>
		
		<div class='row fm-data'>
			<?php require_once('utility.php'); ?>
		</div>
		
	</div>
	
	<?php require_once('sidebar.php'); ?>
	
</div>

<?php require_once('footer.php'); ?>
