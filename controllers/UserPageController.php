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
	 * This function is called when a user has finished editing an article.
	 * This function updates all fields of an article.
	 */
	public function addFeedback() {
		
	}

}
?>