<?php

class LoginView {
	private $model;
	private $controller;

	/**
	 * Constructs login view
	 * @param loginController $controller
	 * @param loginModel $model
	 * @access public
	 */
	public function __construct($controller, $model) {
		$this -> controller = $controller;
		$this -> model = $model;
	}
	
	/**
	 * Outputs login page
	 */
	public function output() {
		include 'user/iheader.html.php';
		include 'user/login.html.php';
		include 'user/ifooter.html.php';
	}

}
?>