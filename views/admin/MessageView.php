<?php

class MessageView {
	private $messageModel;
	private $controller;

	/**
	 * Constructs message view
	 * @param messageController $controller
	 * @param messageModel $model
	 * @access public
	 */
	public function __construct($controller, $messageModel) {
		$this -> controller = $controller;
		$this -> messageModel = $messageModel;
	}
	
	/**
	 * Outputs message page
	 */
	public function output_show() {
		$messages = $this->messageModel->getAllMessage();
		include 'header.php';
		include 'message/show.php';
		include 'footer.php';
	}

	/**
	 * Outputs message page
	 */
	public function output_add() {
		include 'header.php';
		include 'message/add.php';
		include 'footer.php';
	}
	


	/**
	 * Outputs message page
	 */
	public function output_delete() {
		$id = $_GET['id'];
		include 'header.php';
		include 'message/delete.php';
		include 'footer.php';
	}

}
?>