<?php 
/**
 * Tyrion Framework
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package 	Tyrion Framework
 * @author  	@ewiggin86
 * @license 	http://tyrionf.com/user_guide/license.html
 * @link    	http://tyrionf.com
 * @version 	1.0
 * @since   	Version 1.0
 */

// Your Routes, Your Way
$Routes = array(
	'home' 		=> array(controller => 'home_controller', action => "welcome"),
	'goodbye' 	=> array(controller => 'home_controller', action => "bye")
);

// Start to adventure
include 'tyrionf.php';

?>