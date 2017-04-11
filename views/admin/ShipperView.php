<?php

class ShipperView {
	private $model;
	private $controller;

	/**
	 * Constructs shipper view
	 * @param ShipperController $controller
	 * @param ShippperModel $model
	 * @access public
	 */
	public function __construct($controller, $model) {
		$this -> controller = $controller;
		$this -> model = $model;
	}
	
	/**
	 * Outputs shipper page
	 */
	public function output_show() {
		$shippers = $this->model->getAllShippers();
		include 'header.php';
		include 'shipper/show.php';
		include 'footer.php';
	}

	/**
	 * Outputs shipper page
	 */
	public function output_add() {
		include 'header.php';
		include 'shipper/add.php';
		include 'footer.php';
	}
	
	/**
	 * Outputs shipper page
	 */
	public function output_edit() {
		$id = $_GET['id'];
		$shipper = $this->model->getShipper($id);	
		include 'header.php';
		include 'shipper/edit.php';
		include 'footer.php';
	}

	/**
	 * Outputs shipper page
	 */
	public function output_delete() {
		$id = $_GET['id'];
		include 'shipper/delete.php';
	}

}
?>