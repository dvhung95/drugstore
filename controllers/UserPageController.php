<?php

class UserPageController {
	private $postsModel;
	private $drugsModel;
	private $usersModel;
	private $feedbackModel;
	/**
	 * Constructs posts model, drugs, users model and feedback model
	 * @param PostsModel $postsModel
	 * @param DrugsModel $drugsModel 
	 * @param CustomersModel $customersModel 
	 * @param FeedbackModel $feedbackModel 
	 * @access public
	 */
	public function __construct($postsModel, $drugsModel, $customersModel) {
		$this -> postsModel = $postsModel;
		$this -> drugsModel = $drugsModel;
		$this -> customersModel = $customersModel;
		/*$this -> feedbackModel = $feedbackModel;*/
	}

	/**
	 * adds feedback to the articles model
	 */
	// public function addFeedback() {
	// 	$article_title = $_POST['article_title'];
	// 	$article_content = nl2br($_POST['article_content']);
	// 	$article_image = $_POST['article_image'];

	// 	$article_status = $_POST['article_status'];
	// 	$article_type = $_POST['article_type'];
	// 	$article_rating = 0;
	// 	$column_name = 0;

	// 	// if article is of type review article rating will be a value between 1 and 5, otherwise 0
	// 	if ($article_type == "review_article") {
	// 		$article_rating = $_POST['article_rating'];
	// 	}

	// 	// if article is of type column article rating will be a column name
	// 	if ($article_type == "column_article") {
	// 		$column_name = $_POST['column_name'];
	// 	}

	/**
	 * This function is called when a user has finished editing an article.
	 * This function updates all fields of an article.
	 */
	public function editProfile() {
		$user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        $repeated_user_password = $_POST['repeated_user_password'];
        $name = $_POST['name'];
        $date_of_birth = $_POST['date_of_birth'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];
        $image = $_FILES['image'];

		$this -> usersModel -> editProfile($user_name, $user_password, $repeated_user_password,
		$name, $date_of_birth, $address, $phone_number, $image);
	}


	/*
	 * This function sends a request to usersModel to retrieve the ID of the logged in user
	 */
	public function getLoggedUserId() {
		echo "username: " . $_SESSION['user_name'];
		echo "userpassword: " . $_SESSION['user_password'];
		$this -> usersModel -> getLoggedUserId($_SESSION['user_name'], $_SESSION['user_password']);
	}

	/*
	 * This function sends a request to articlesModel to retrieve the article column
	 */
	/*
	 public function  getArticleColumn( $article_id ) {
	 $article_id = $_GET['article_id'];
	 $this->articlesModel->getArticleColumn( $article_id );
	 }*/

}
?>