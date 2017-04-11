<?php
class Message {
	
	public $message_id;
	public $title;
	public $content;
	public $image;
	/**
	 * Constructs the Post class
	 * @param int $message_id
	 * @param string $title
	 * @param string $content
	 * @param string $image
	 * @access public
	 */
	public function __construct($message_id, $title, $content, $image) {
		$this -> message_id = $message_id;
		$this -> title = $title;
		$this -> content = $content;
		$this -> image = $image;
	}
}
?>