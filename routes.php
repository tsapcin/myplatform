<?php
	
	require_once 'core/route.php';

	Route::set("/index", "AppController->index");
	Route::set("/show", "AppController->show");

?>