<?php
class Post {
	
	public $post_id;
	public $post_category_id;
	public $post_title;
	public $content;
	public $image;
	/**
	 * Constructs the Post class
	 * @param int $post_id
	 * @param string $post_category_id
	 * @param string $post_title
	 * @param string $content
	 * @param string $image
	 * @access public
	 */
	public function __construct($post_id, $post_category_id, $post_title, $content, $image) {
		$this -> post_id = $post_id;
		$this -> post_category_id = $post_category_id;
		$this -> post_title = $post_title;
		$this -> content = $content;
		$this -> image = $image;
	}
	/** Getter Methods */
	/**
	 * Getter Method: get the id of the Post
	 * @return the id of the Post
	 */
	public function getPostId() {
		return $this -> post_id;
	}
	/**
	 * Getter Method: get the post category id of the Post
	 * @return the post categor id of the Post
	 */
	public function getPostCategoryId() {
		return $this -> post_category_id;
	}
	/**
	 * Getter Method: get the title of the Post
	 * @return the title of the Post
	 */
	public function getPostTitle() {
		return $this -> post_title;
	}
	/**
	 * Getter Method: get the date of birth of the Post
	 * @return the date of birth of the Post
	 */
	public function getContent() {
		return $this -> content;
	}

	/**
	 * Getter Method: get the image of the Post
	 * @return the image of the Post
	 */
	public function getImage() {
		return $this -> image;
	}

}
?>