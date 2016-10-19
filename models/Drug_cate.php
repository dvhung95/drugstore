<?php
class Drug_cate {
	
	public $drug_category_id;
	public $category_name;
	public $description;
	/**
	 * Constructs the Drug class
	 */
	public function __construct($drug_category_id, $category_name, $description) {
		$this -> drug_category_id = $drug_category_id;
		$this -> category_name = $category_name;
		$this -> description = $description;
	}

}
?>