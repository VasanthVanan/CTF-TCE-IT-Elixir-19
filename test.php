<?php

	require( 'utils.php' );
	$cookie_value = 0;
	setcookie("firstvisit",0, time() + (86400 * 30), "/");
	setcookie("firstvisit",1, time() + (86400 * 30), "/");
?>