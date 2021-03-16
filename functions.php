<?php

function load_css() {
	
	// name, path, dependencies, version
	wp_register_style('ufo-style', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(), 1);

}