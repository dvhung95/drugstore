<?php

class PostView {
	private $postsModel;
	private $postCategoryModel;
	private $controller;

	/**
	 * Constructs post view
	 * @param postController $controller
	 * @param postsModel $model
	 * @access public
	 */
	public function __construct($controller, $postsModel, $postCategoryModel) {
		$this -> controller = $controller;
		$this -> postsModel = $postsModel;
		$this -> postCategoryModel = $postCategoryModel;
	}
	
	/**
	 * Outputs post page
	 */
	public function output_show() {
		$posts = $this->postsModel->getAllPosts();
		include 'header.php';
		include 'post/show.php';
		include 'footer.php';
	}

	/**
	 * Outputs post page
	 */
	public function output_add() {
		(array)$categories = $this->postCategoryModel->getAllPostCategory();
		include 'header.php';
		include 'post/add.php';
		include 'footer.php';
	}
	
	/**
	 * Outputs post page
	 */
	public function output_edit() {
		(array)$categories = $this->postCategoryModel->getAllPostCategory();
		$id = $_GET['id'];
		$post = $this->postsModel->searchPostById($id);	
		include 'header.php';
		include 'post/edit.php';
		include 'footer.php';
	}

	/**
	 * Outputs post page
	 */
	public function output_delete() {
		$id = $_GET['id'];
		include 'header.php';
		include 'post/delete.php';
		include 'footer.php';
	}

}
?>