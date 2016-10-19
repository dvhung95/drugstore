<?php
class PostCategory {
	public $post_category_id;
	public $category_name;
	public $description;

	/**
	 * Constructs the PostCategory class
	 * @param int $post_category_id
	 * @param string $category_name
	 * @param string $description
	 * @access public
	 */
	public function __construct( $post_category_id, $category_name, $description) {
		$this -> post_category_id = $post_category_id;
		$this -> category_name = $category_name;
		$this -> description = $description;
	}
	/** Getter Methods */
	/**
	 * Getter Method: get the id of the PostCategory
	 * @return the id of the PostCategory
	 */
	public function getPostCategoryId() {
		return $this -> post_category_id;
	}
	/**
	 * Getter Method: get the name of the PostCategory
	 * @return the name of the PostCategory
	 */
	public function getPostTitle() {
		return $this -> category_name;
	}
	/**
	 * Getter Method: get the date of birth of the Post
	 * @return the date of birth of the Post
	 */
	public function getContent() {
		return $this -> description;
	}

}
?>