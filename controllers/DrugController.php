<?php

class DrugController {
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
	 * Calls the addDrugfunction 
	 * @access public
	 */
    public function addDrug() {
        $drug_category_id = $_POST['drug_category_id'];
      	$drug_name = $_POST['drug_name'];
        $description = $_POST['description'];
        $ingredient = $_POST['ingredient'];
        $guide_to_use = $_POST['guide_to_use'];
        $more_information = $_POST['more_information'];
        $price = $_POST['price'];
        $image = $_FILES['image'];
        $this->model->addDrug( $drug_category_id, $drug_name,$description,$ingredient,
            $guide_to_use,$more_information, $price);
        $this->model->addImage($drug_name, $image);
        echo '<script language="javascript">';
        echo 'alert("Đã thêm thuốc mới.");';
        echo "window.location.href = 'dashboard.php?page=drug&action=show';";
        echo '</script>';
		
    }

    
    public function editDrug() {
        $drug_id = $_POST['drug_id'];
        $drug_category_id = $_POST['drug_category_id'];
        $drug_name = $_POST['drug_name'];
        $description = $_POST['description'];
        $ingredient = $_POST['ingredient'];
        $guide_to_use = $_POST['guide_to_use'];
        $more_information = $_POST['more_information'];
        $price = $_POST['price']; 
        $image = $_FILES['image'];  
        //update information of drug in db
        $this->model->editDrug($drug_id,$drug_category_id, $drug_name, $description, $ingredient, 
            $guide_to_use, $more_information, $price);
        if(!empty($image['name'])){
            //delete image from folder
            $this->model->deleteImage($drug_id);
            $this->model->addImage($drug_name, $image);
        }
        // redirect
        echo '<script language="javascript">';
        echo 'alert("Thuốc đã được cập nhập.");';
        echo "window.location.href = 'dashboard.php?page=drug&action=show';";
        echo '</script>';   
    }

}


 ?>