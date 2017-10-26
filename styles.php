<?php

header( "Content-Type: text/css" . $headers[ $_GET[ "format" ] ] );
$timeout = intval( $_GET[ "t" ] );
if( $timeout ) {
	sleep( $timeout );
}

// echo file_get_contents( "styles.css" );
?>
body {
	background-color: green;
	color: #fff;
}