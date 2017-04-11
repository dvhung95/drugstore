<?php

class MessageController {
	private $model;
	
	/**
	 * Constructs message controller
	 * @param MessageModel $model
	 * @access public
	 */
	public function __construct($model){
		$this->model = $model;
	}
	
	/**
	 * Calls the addPost function 
	 * @access public
	 */
    public function addMessage() {
      	$title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_FILES['image'];
        $username = $_POST['username'];
        $cModel = new CustomersModel();
        $customer = $cModel->getCustomerByUsername($username);
        if($username!=null){
        	$this->model->addMessageByCustomer( $title, $content, $customer->customer_id);
        } else {
	        $this->model->addMessage( $title, $content);
        }
        $this->model->addImage($title, $image);
		echo '<script language="javascript">';
		echo 'alert("Tin nhắn đã được gửi.");';
		echo "window.location.href = 'dashboard.php?page=message&action=show';";
		echo '</script>';
    }

}


 ?>