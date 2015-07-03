<?php 
/**
 * Tyrion Framework
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package 	Tyrion Framework
 * @author  	@ewiggin <gameofender@gmail.com>
 * @link    	https://github.com/ewiggin/tyrionf/
 * @version 	1.0
 * @since   	Version 1.0
 */

// include all controllers
foreach(glob("controllers/*_controller.php") as $dependecy) include $dependecy;

// Get the route to go
if(!empty($_GET['u'])) $route = $_GET['u'];

// Prevents 404
if(!empty($Routes[$route]['controller']) && !empty($Routes[$route]['controller']['action'])){

	// Call the method's class defined for this route
	$class_name 	= $Routes[$route]['controller'];
	$action_name 	= $Routes[$route]['action'];
	$result_vars 	= call_user_func(array($class_name, $action_name));
	// Extract all of response variables
	foreach ($result_vars as $key => $value) {
		$$key = $value;
	}
}
else $view_file = '404.php';




////////////////////// VIEWS ////////////////////////////
// Include layout with views
if(empty($layout)) $layout = 'default.php'; // default value
include 'views/layout/'.$layout;
/////////////////////////////////////////////////////////
?>
