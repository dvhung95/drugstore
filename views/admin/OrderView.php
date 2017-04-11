<?php

class OrderView {
	private $model;
	private $controller;

	public function __construct($controller, $model) {
		$this -> controller = $controller;
		$this -> model = $model;
	}
	
	/**
	 * Outputs order page
	 */
	public function output_show() {
		$orders = $this->model->getAllOrders();
		include 'header.php';
		include 'order/show.php';
		include 'footer.php';
	}
	
	/**
	 * Outputs order page
	 */
	public function output_edit() {
		$id = $_GET['id'];
		$order = $this->model->getOrder($id);
		$sModel = new ShipperModel();
		$shippers = $sModel->getAllShippers();
		include 'header.php';
		include 'order/edit.php';
		include 'footer.php';
	}

	/**
	 * Outputs order page
	 */
	public function output_delete() {
		$id = $_GET['id'];
		include 'order/delete.php';
	}

}
?>