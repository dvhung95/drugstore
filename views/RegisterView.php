<?php

class RegisterView {
	private $model;
	private $controller;

	/**
	 * Constructs register view
	 * @param registerController $controller
	 * @param registerModel $model
	 * @access public
	 */
	public function __construct($controller, $model) {
		$this -> controller = $controller;
		$this -> model = $model;
	}
	
	/**
	 * Outputs register page
	 */
	public function output() {
		include 'user/iheader.html.php';
		include 'user/register.html.php';
		include 'user/ifooter.html.php';
	}

}
?>