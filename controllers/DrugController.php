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
        $guide_to_use = $_POST['$guide_to_use'];
        $more_information = $_POST['more_information'];
        $price = $_POST['price'];
        $image = $_FILES['image'];
        
        $valid = true;
        if (!preg_match("/\d(\.\d{1,2})?/",$price)){
            $valid=false;
            echo "<div id='error'> Sai giá </div>";
        } 
        if($valid==true){
            $this->model->addDrug( $drug_category_id, $drug_name,$description,$ingredient,$guide_to_use,$more_information, $price);
            if($image['size'] != 0){
                $type_file = strtolower($image['type']);
                $arr_type = array('image/jpg', 'image/jpeg', 'image/gif','image/png');
                if (!in_array($type_file, $arr_type)) {
                    $valid=false;
                    echo "<div id='error'>Lỗi tải hình ảnh. 
                    <br/> Chỉ được tải file .jpg .jpeg .gif .png</div>";
                } else {
                    $this->model->addImage($drug_name, $image);
                }
            }
            echo '<script language="javascript">';
            echo 'alert("Đã thêm thuốc mới.");';
            echo "window.location.href = 'dashboard.php?page=drug&action=show';";
            echo '</script>';
        }
		
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

        $valid = true;
        if (!preg_match("/\d(\.\d{1,2})?/",$price)){
            $valid=false;
            echo "<div id='error'> Sai giá </div>";
        } 
        if($valid == true){
            $this->model->editDrug($drug_id,$drug_category_id, $drug_name, $description, $ingredient, 
                $guide_to_use, $more_information, $price);
            if($image['size'] != 0){
                $type_file = strtolower($image['type']);
                $arr_type = array('image/jpg', 'image/jpeg', 'image/gif','image/png');
                if (!in_array($type_file, $arr_type)) {
                    $valid=false;
                    echo "<div id='error'>Lỗi tải hình ảnh. 
                    <br/> Chỉ được tải file .jpg .jpeg .gif .png</div>";
                } else {
                    $this->model->addImage($drug_name, $image);
                }
            }
            echo '<script language="javascript">';
            echo 'alert("Thuốc đã được cập nhập.");';
            echo "window.location.href = 'dashboard.php?page=drug&action=show';";
            echo '</script>';   
        }
    }

}


 ?>