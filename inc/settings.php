<?php

	if( strpos(__FILE__, 'pruebas/') !== false ){
		$base_url = 'http://pruebas.tunuve.com/openapi/';
	}elseif ( strpos(__FILE__, '/home/tunuve') !== false ) {
		$base_url = 'http://pruebas.tunuve.com/openapi/';
	}else{
		$base_url = 'http://localhost/sanjuan2/openapi/';
	}

	define('BASE_URL', $base_url );
	
?>