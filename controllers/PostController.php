<?php

class PostController {
	private $model;
	
	/**
	 * Constructs Post controller
	 * @param postsModel $model
	 * @access public
	 */
	public function __construct($model){
		$this->model = $model;
	}
	
	/**
	 * Calls the addPost function 
	 * @access public
	 */
    public function addPost() {
        $post_category_id = $_POST['post_category_id'];
      	$post_title = $_POST['post_title'];
        $content = $_POST['content'];
        $image = $_FILES['image'];
        $this->model->addPost($post_category_id, $post_title, $content);
        if($image['size'] != 0){
            $type_file = substr(strtolower(strrchr($image['name'], '.')), 1);
            $arr_type = array('jpg', 'jpeg', 'gif','png');
            if (!in_array($type_file, $arr_type)) {
                $valid=false;
                echo "<div id='error'>Lỗi tải hình ảnh. 
                <br/> Chỉ được tải file .jpg .jpeg .gif .png</div>";
            } else {
                $this->model->addImage($post_title, $image);
            }
        }
		echo '<script language="javascript">';
		echo 'alert("Bài đã được đăng.");';
		echo "window.location.href = 'dashboard.php?page=post&action=show';";
		echo '</script>';
    }

    /**
	 * Calls the editPost function 
	 * @access public
	 */
    public function editPost() {
    	$post_id = $_POST['post_id'];
        $post_category_id = $_POST['post_category_id'];
      	$post_title = $_POST['post_title'];
        $content = $_POST['content'];
        $image = $_FILES['image'];
        
        // update information of post in db
        $this->model->editPost($post_id, $post_category_id, $post_title, $content);
        if(!empty($image['name'])){
            //delete image of post in folder
            $this->model->deleteImage($post_id);
            $this->model->addImage($post_title, $image);
        }
		echo '<script language="javascript">';
		echo 'alert("Bài đăng đã được cập nhập.");';
		echo "window.location.href = 'dashboard.php?page=post&action=show';";
		echo '</script>';
    }

}


 ?>