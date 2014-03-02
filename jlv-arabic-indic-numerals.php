<?php
/*
Plugin Name: Arabic-Indic Numerals for Arabic Wordpress
Plugin URI: http://abuyasmeen.com/arabic-indic-numerals-for-arabic-wordpress/
Description: Converts numbers in dates into Arabic-Indic numerals
Version: 0.15
Author: Jeremy Varnham
Author URI: http://abuyasmeen.com/
*/

function convert_numbers_to_arabic( $string ) {
	$arabic_numbers = array('۰', '۱', '۲', '۳', '٤', '۵', '٦', '۷', '۸', '۹', '.');
	$english_numbers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.');
	return str_replace($english_numbers, $arabic_numbers, $string);
}

add_filter( 'get_the_time', 'make_arabic_time' );

function make_arabic_time( $the_time ) {
	if ( get_bloginfo( 'language' ) == 'ar' ) {
		$the_time = convert_numbers_to_arabic( $the_time );
	}
	return $the_time;
}
?>