<?php

class AdministratorView {
	private $adminModel;
	private $controller;

	/**
	 * Constructs admin view
	 * @param AdministratorController $controller
	 * @param AdministratorModel $model
	 * @access public
	 */
	public function __construct($controller, $adminModel) {
		$this -> controller = $controller;
		$this -> adminModel = $adminModel;
	}
	
	/**
	 * Outputs admin page
	 */
	public function output_show() {
		$admins = $this->adminModel->getAllAdministrator();
		include 'header.php';
		include 'admin/show.php';
		include 'footer.php';
	}

	/**
	 * Outputs admin page
	 */
	public function output_add() {
		include 'header.php';
		include 'admin/add.php';
		include 'footer.php';
	}
	
	/**
	 * Outputs admin page
	 */
	public function output_edit() {
		$id = $_GET['id'];
		$admin = $this->adminModel->getAdminById($id);	
		include 'header.php';
		include 'admin/edit.php';
		include 'footer.php';
	}

	/**
	 * Outputs admin page
	 */
	public function output_delete() {
		$id = $_GET['id'];
		include 'admin/delete.php';
	}

	/**
	 * Outputs admin page
	 */
	public function output_check() {
		include 'admin/check_exist.php';
	}



}
?>