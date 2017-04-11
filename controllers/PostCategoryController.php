<?php

class PostCategoryController {
	private $model;
	
	/**
	 * Constructs Post Category controller
	 * @param PostCategoryModel $model
	 * @access public
	 */
	public function __construct($model){
		$this->model = $model;
	}
	
	/**
     * Calls the addPostCategory
     * @access public
     */
    public function addPostCategory() {
        $category_name = $_POST['category_name'];
        $description = $_POST['description'];
        if(strlen($category_name) <= 150 ){
            $this->model->addPostCategory($category_name,$description);
            echo '<script language="javascript">';
            echo "window.location.href = 'dashboard.php?page=post_category&action=show';";
            echo '</script>';
        } else {
            echo "Tên nhóm phải nhỏ hơn 150 ký tự.";
        }
    }

    /**
	 * Calls the editPostCategory
	 * @access public
	 */
    public function editPostCategory() {
        $post_category_id = $_POST['post_category_id'];
        $category_name = $_POST['category_name'];
        $description = $_POST['description'];
        if(strlen($category_name) <= 150 ){
            $this->model->editPostCategory($post_category_id,$category_name,$description);
            echo "<script language='javascript'> alert('Đã cập nhật nhóm bài đăng')
            ; window.location.href = 'dashboard.php?page=post_category&action=show';</script>";
        } else {
            echo "Tên nhóm phải nhỏ hơn 150 ký tự.";
        }
    }
}
 ?>