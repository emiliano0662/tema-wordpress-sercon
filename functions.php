<?php 
/*------------------------------------*\
    $CARGAR ARCHIVOS EXTERNOS
\*------------------------------------*/
require_once( 'library/admin.php' );
require_once( 'meta-options.php' );

/*------------------------------------*\
    $HABILITAR SOPORTE PARA MENU
\*------------------------------------*/
register_nav_menus(
		array(
			'header-menu' => 'Menu superior',   // main nav in header
			'footer-menu' => 'Menu pie' // secondary nav in footer
		)
	);

if (!function_exists('general_aupa_mailer')) {

	function general_aupa_mailer(){
		require_once( 'ajax/ajax.php' );
		wp_die();
	}  

	add_action('wp_ajax_mailer', 'general_aupa_mailer');
	add_action('wp_ajax_nopriv_mailer', 'general_aupa_mailer');
}