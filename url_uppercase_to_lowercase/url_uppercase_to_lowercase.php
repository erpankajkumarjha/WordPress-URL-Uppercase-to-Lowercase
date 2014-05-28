<?php
/*
Plugin Name: WordPress URL Uppercase to Lowercase
Plugin URI: http://www.globalcodester.com/
Description: A simple WordPress plugin to convert Uppercase url into lowercase url.
Version: 1.0
Author: Pankaj Kumar Jha
Author URI: http://www.globalcodester.com/
*/

function url_uppercase_to_lowercase() {
	if($_SERVER['REQUEST_URI'] != strtolower($_SERVER['REQUEST_URI'])){
		$url  = strtolower($_SERVER['SERVER_NAME']);
        $url .= strtolower($_SERVER['REQUEST_URI']);
        $url .= strtolower($_SERVER['PATH_INFO']);
        echo "<script type=\"text/javascript\">window.location='$url'</script>";
		}}
add_action('init', 'url_uppercase_to_lowercase');
?>
