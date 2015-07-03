<?php 
/**
* Home Controller
* A lot of actions for the best home!
*/
class home_controller {
	
	/**
	 * Send Welcome with the name "Tyrion Lannister"
	 * @return mixed
	 */
	public function welcome() {
		return array(
			view_file => "home.php",
			name => "Tyrion Lannister"
		);
	}


	/**
	 * Send GoodBye...
	 * @return mixed
	 */
	public function bye() {
		
		$name = 'John Snow';

		return array(
			view_file => "bye.php",
			name => $name
		);
	}
}
?>