<?php

class UserPageView {
    private $postsModel;
    private $drugsModel;
    private $usersModel;
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
        $search_key = $_POST['keyword'];
        include 'user/iheader.html.php';
        (array)$drugs = $this->drugsModel->searchDrug($search_key);
        (array)$posts = $this->postsModel->searchPost($search_key);
        include 'user/search.html.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs all drugs
     */
    public function output_list_drug(){
        $id = $_GET['drugid'];
        include 'user/iheader.html.php';
        (array)$drugs = $this->drugsModel->getAllDrugs();
        include 'user/show-drug.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs drug that matches id
     */
    public function output_drug_detail(){
        $id = $_GET['drugid'];
        include 'user/iheader.html.php';
        (array)$drug_detail = $this->drugsModel->getDrug($id);
        (array)$drug_similar = $this->drugsModel->getSameDrugs($drug_detail[0]->drug_category_id, $drug_detail[0]->drug_id); 
        include 'user/drug-detail.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs all posts
     */
    public function output_list_post(){
        include 'user/iheader.html.php';
        (array)$posts = $this->postsModel->getAllPosts();
        include 'user/show-post.php';
        include 'user/ifooter.html.php';
    }

    /**
     * Outputs post that matches id
     */
    public function output_post_detail(){
        include 'user/iheader.html.php';
        $id = $_GET['postid'];
        (array)$post_detail = $this->postsModel->searchPost($id);
        (array)$post_similar = $this->postsModel->getSamePosts($post_detail[0]->post_category_id, $post_detail[0]->post_id); 
        include 'user/post-detail.php';
        include 'user/ifooter.html.php';
    }
	

}


?>