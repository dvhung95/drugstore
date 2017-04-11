<?php

class PostCategoryView {
	private $postCategoryModel;
	private $controller;

	/**
	 * Constructs post category view
	 * @param postCategoryController $controller
	 * @param postCategoryModel $model
	 * @access public
	 */
	public function __construct($controller, $postCategoryModel) {
		$this -> controller = $controller;
		$this -> postCategoryModel = $postCategoryModel;
	}
	
	/**
	 * Outputs post category page
	 */
	public function output_show() {
		$cates = $this->postCategoryModel->getAllPostCategory();
		include 'header.php';
		include 'post_category/show.php';
		include 'footer.php';
	}

	/**
	 * Outputs post category page
	 */
	public function output_add() {
		include 'header.php';
		include 'post_category/add.php';
		include 'footer.php';
	}
	
	/**
	 * Outputs post page
	 */
	public function output_edit() {
		$id = $_GET['id'];
        $cate = $this->postCategoryModel->searchPostCategory($id);      
		include 'header.php';
		include 'post_category/edit.php';
		include 'footer.php';
	}

	/**
	 * Outputs post page
	 */
	public function output_delete() {
		$id = $_GET['id'];
		include 'header.php';
		include 'post_category/delete.php';
		include 'footer.php';
	}

}
?>