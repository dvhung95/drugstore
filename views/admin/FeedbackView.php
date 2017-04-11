<?php

class FeedbackView {
	private $fbModel;
	private $controller;

	/**
	 * Constructs feedback view
	 * @param FeedbackController $controller
	 * @param FeedbackModel $model
	 * @access public
	 */
	public function __construct($controller, $fbModel) {
		$this -> controller = $controller;
		$this -> fbModel = $fbModel;
	}
	
	/**
	 * Outputs feedback page for admin
	 */
	public function output_show() {
		$feedbacks = $this->fbModel->getAllFeedbacks();
		include 'header.php';
		include 'feedback/show.php';
		include 'footer.php';
	}


	/**
	 * Outputs feedback page for admin
	 */
	public function output_replied() {
		$id = $_GET['id'];    
		include 'header.php';
		include 'feedback/replied.php';
		include 'footer.php';
	}

	/**
	 * Outputs feedback page for admin
	 */
	public function output_delete() {
		$id = $_GET['id'];
		include 'header.php';
		include 'feedback/delete.php';
		include 'footer.php';
	}

}
?>