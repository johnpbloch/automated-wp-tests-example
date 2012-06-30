<?php
/**
 * Plugin Name: Automated Unit Tests Example
 * Version: 0.1
 * Description: I'm just messing around here...
 */

function jpb_echoSomething(){
	echo jpb_returnSomething();
}

function jpb_returnSomething(){
	return 'YAWP!';
}

add_filter( 'the_content', 'jpb_returnSomething' );

