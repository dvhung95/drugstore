<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Drug {
	
	public $drug_id;
	public $drug_category_id;
	public $drug_name;
	public $description;
	public $ingredient;
        public $guide_to_use;
        public $more_information;
        public $price;
        public $image;
	
	public function __construct($drug_id, $drug_category_id, $drug_name, $description,$ingredient,$guide_to_use,$more_information, $price, $image) {
		$this -> drug_id = $drug_id;
		$this -> drug_category_id = $drug_category_id;
		$this -> drug_name = $drug_name;
		$this -> description = $description;
        $this-> ingredient = $ingredient;
		$this -> guide_to_use = $guide_to_use;
        $this -> more_information = $more_information;
        $this -> price = $price;
        $this -> image = $image;     
	}
            
        
        
	public function getDrugId() {
		return $this -> drug_id;
	}
	
        
        
	public function getDrugCategoryId() {
		return $this -> drug_category_id;
	}
	
        
        
        
	public function getDrugName() {
		return $this -> drug_name;
	}
	
        
        
	public function getDescription() {
		return $this -> description;
	}

	
 
	public function getIngredient() {
		return $this -> ingredient;
	}
        
        
        public function getGuideToUse(){
                return $this->guide_to_use;
        }
        
        
        public function getMoreInformation(){
                return $this->more_information;
        }
        
	public function getPrice() {
		return $this -> price;
	}
        
        public function getImage(){
                return $this->image;
        }
            
        

}
