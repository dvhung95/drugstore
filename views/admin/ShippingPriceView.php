<?php

class ShippingPriceView {
	private $shippingpriceModel;
	private $controller;

	/**
	 * Constructs shippring price view
	 * @param ShippingPriceController $controller
	 * @param ShippingPriceModel $model
	 * @access public
	 */
	public function __construct($controller, $shippingpriceModel) {
		$this -> controller = $controller;
		$this -> shippingpriceModel = $shippingpriceModel;
	}
	
	/**
	 * Outputs shipping price page
	 */
	public function output_show() {
		$shippingprices = $this->shippingpriceModel->getAllShippingPrice();
		include 'header.php';
		include 'shippingprice/show.php';
		include 'footer.php';
	}

	/**
	 * Outputs shipping price page
	 */
	public function output_add() {
		include 'header.php';
		include 'shippingprice/add.php';
		include 'footer.php';
	}
	
	/**
	 * Outputs shipping price page
	 */
	public function output_edit() {
		$id = $_GET['id'];
		$shippingprice = $this->shippingpriceModel->getShippingPriceById($id);	
		include 'header.php';
		include 'shippingprice/edit.php';
		include 'footer.php';
	}

	/**
	 * Outputs shipping price page
	 */
	public function output_delete() {
		$id = $_GET['id'];
		include 'shippingprice/delete.php';
	}

}
