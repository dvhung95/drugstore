<?php

class DrugCategoryController {
	private $model;
	
	/**
	 * Constructs Drug controller
	 * @param drugsModel $model
	 * @access public
	 */
	public function __construct($model){
		$this->model = $model;
	}
	
	/**
     * Calls the addDrugCategory
     * @access public
     */
    public function addDrugCategory() {
        $category_name = $_POST['category_name'];
        $description = $_POST['description'];
        $this->model->addDrug_cate($category_name,$description);
    }

    /**
	 * Calls the editDrugCategory
	 * @access public
	 */
    public function editDrugCategory() {
        $drug_category_id = $_POST['drug_category_id'];
        $category_name = $_POST['category_name'];
        $description = $_POST['description'];
        $this->model->editDrug_cate($drug_category_id,$category_name,$description);
        echo "<script language='javascript'> alert('Đã cập nhật nhóm thuốc')
        ; window.location.href = 'dashboard.php?page=drug_category&action=show';</script>";
    }
}
 ?>