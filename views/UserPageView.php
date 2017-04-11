<?php

class UserPageView {
    private $postsModel;
    private $drugsModel;
    private $customersModel;
    private $feedbackModel;
	
    /**
     * Constructs posts model, drugs, users model and feedback model
     * @param AUController $controller
     * @param PostsModel $postsModel
     * @param DrugsModel $drugsModel 
     * @param CustomersModel $customersModel 
     * @param FeedbackModel $feedbackModel 
     * @access public
     */
    public function __construct( $controller, $postsModel, $drugsModel, $customersModel ){
        $this->controller       = $controller;
        $this -> postsModel = $postsModel;
        $this -> drugsModel = $drugsModel;
        $this -> customersModel = $customersModel;
    }

    /**
     * Outputs user home page
     */
    public function output_home(){
        include 'user/iheader.html.php';
        include 'user/home.html.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs posts or drugs that matched search query
     */
    public function output_search(){
        include 'user/iheader.html.php';    
        include 'user/search.html.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs all drugs
     */
    public function output_list_drug(){
        include 'user/iheader.html.php';
        include 'user/show-drug.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs drug that matches id
     */
    public function output_drug_detail(){
        include 'user/iheader.html.php';
        include 'user/drug-detail.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs all posts
     */
    public function output_list_post(){
        include 'user/iheader.html.php';
        include 'user/show-post.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs post that matches id
     */
    public function output_post_detail(){
        include 'user/iheader.html.php';
        include 'user/post-detail.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs user that matches username
     */
    public function output_user_detail(){
        include 'user/iheader.html.php';
        include 'user/customer/show.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs user that matches username
     */
    public function output_user_edit(){
        include 'user/iheader.html.php';
        include 'user/customer/edit.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs feedback page
     */
    public function output_feedback(){
        include 'user/iheader.html.php';
        include 'user/feedback.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs introduction page
     */
    public function output_introduce(){
        include 'user/iheader.html.php';
        include 'user/introduce.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs order page
     */
    public function output_order_add(){
        include 'user/iheader.html.php';
        include 'user/order/add.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs order page
     */
    public function output_order_shipping(){
        include 'user/order/calShippingPrice.php';
    }

    /**
     * Outputs all messages of customer
     */

    public function output_list_message(){
        include 'user/iheader.html.php';
        include 'user/message/show-message.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs message that matches id
     */
    public function output_message_detail(){
        include 'user/iheader.html.php';
        include 'user/message/message-detail.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs message that matches id
     */
    public function output_message_delete(){
        include 'user/iheader.html.php';
        include 'user/message/delete.php';
        include 'user/ifooter.html.php';
    }


}


?>