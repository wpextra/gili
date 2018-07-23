<?php
/*-----------------------------------------------------
*	LOAD BRIDGE FRAMEWORK
* */
add_action('bridge_ready', function() {
	require_once get_stylesheet_directory()  . 'includes/Loader.php';
	require_once get_stylesheet_directory()  . 'includes/Extension.php';
	$extension = Bridge_Theme_Extension::start();
});

/*-----------------------------------------------------
*	DO WHATEVER YOU WANT :) 
* */