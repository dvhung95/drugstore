<?php

class DrugCategoryView {
	private $drug_cateModel;
	private $controller;

	/**
	 * Constructs post view
	 * @param postController $controller
	 * @param drugsModel $model
	 * @access public
	 */
	public function __construct($controller, $drug_cateModel) {
		$this -> controller = $controller;
		$this -> drug_cateModel = $drug_cateModel;
	}
	
	/**
	 * Outputs drug category page
	 */
	public function output_show() {
		$cates = $this->drug_cateModel->getAllDrugCategory();
		include 'header.php';
		include 'drug_category/show.php';
		include 'footer.php';
	}

	/**
	 * Outputs post page
	 */
	public function output_add() {
		include 'header.php';
		include 'drug_category/add.php';
		include 'footer.php';
	}
	
	/**
	 * Outputs post page
	 */
	public function output_edit() {
		$id = $_GET['id'];
        $cate = $this->drug_cateModel->searchDrug_cate($id);        
		include 'header.php';
		include 'drug_category/edit.php';
		include 'footer.php';
	}

	/**
	 * Outputs post page
	 */
	public function output_delete() {
		$id = $_GET['id'];
		include 'header.php';
		include 'drug_category/delete.php';
		include 'footer.php';
	}

}
?>