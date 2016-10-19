<?php

class DrugView {
	private $drugsModel;
	private $drug_cateModel;
	private $controller;

	/**
	 * Constructs post view
	 * @param postController $controller
	 * @param drugsModel $model
	 * @access public
	 */
	public function __construct($controller, $drugsModel, $drug_cateModel) {
		$this -> controller = $controller;
		$this -> drugsModel = $drugsModel;
		$this -> drug_cateModel = $drug_cateModel;
	}
	
	/**
	 * Outputs post page
	 */
	public function output_show() {
		$drugs = $this->drugsModel->getAllDrugs();
		include 'header.php';
		include 'drug/show.php';
		include 'footer.php';
	}

	/**
	 * Outputs post page
	 */
	public function output_add() {
		(array)$categories = $this->drug_cateModel->getAllDrugCategory();
		include 'header.php';
		include 'drug/add.php';
		include 'footer.php';
	}
	
	/**
	 * Outputs post page
	 */
	public function output_edit() {
		$id = $_GET['id'];
        $drug = $this->drugsModel->searchDrugById($id);        
		include 'header.php';
		include 'drug/edit.php';
		include 'footer.php';
	}

	/**
	 * Outputs post page
	 */
	public function output_delete() {
		$id = $_GET['id'];
		include 'header.php';
		include 'drug/delete.php';
		include 'footer.php';
	}

}
?>