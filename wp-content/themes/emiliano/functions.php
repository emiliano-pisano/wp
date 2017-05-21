<?php 
2  
3 function enqueue_css() { 
4     wp_enqueue_style( 'bs', get_template_directory_uri().'/vendors/css/bootstrap.min.css' ); 
5     wp_enqueue_style( 'st', get_template_directory_uri().'/style.css' ); 
6 } 
7 add_action( 'wp_enqueue_scripts', 'enqueue_css' ); 
8  
9 function enqueue_js() { 
10     wp_enqueue_script( 'bv', get_template_directory_uri().'/vendors/js/bootstrapValidator.min.js', array( 'jquery' ), '', true ); 
11     wp_enqueue_script( 'mn', get_template_directory_uri().'/js/main.js', array( 'jquery' ), '', true ); 
12 } 
13 add_action( 'wp_enqueue_scripts', 'enqueue_js' ); 
14  
15 ?> 
