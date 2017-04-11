<?php

class CustomerView {
	private $customersModel;
	private $controller;

	/**
	 * Constructs post view
	 * @param CustomerController $controller
	 * @param CustomersModel $model
	 * @access public
	 */
	public function __construct($controller, $customersModel) {
		$this -> controller = $controller;
		$this -> customersModel = $customersModel;
	}
	
	/**
	 * Outputs customer page for admin
	 */
	public function output_admin_show() {
		$customers = $this->customersModel->getAllCustomers();
		include 'header.php';
		include 'customer/show.php';
		include 'footer.php';
	}

	/**
	 * Outputs customer page for user
	 */
	public function output_user_show() {
		$customers = $this->customersModel->getAllCustomers();
		include '../user/iheader.html.php';
		include '../user/customer/show.php';
		include '..user/ifooter.html.php';
	}


	
	/**
	 * Outputs customer page
	 */
	public function output_edit() {
		$id = $_GET['id'];
        $drug = $this->drugsModel->searchDrugById($id);        
		include 'header.php';
		include 'drug/edit.php';
		include 'footer.php';
	}

	/**
	 * Outputs customer page
	 */
	public function output_delete() {
		$id = $_GET['id'];
		include 'header.php';
		include 'customer/delete.php';
		include 'footer.php';
	}

}
?>