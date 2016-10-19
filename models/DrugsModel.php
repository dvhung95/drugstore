<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'Drug.php';
class DrugsModel {
  
	
    
    
    public function __construct(){
    }


    
  
    public function addDrug( $drug_category_id, $drug_name,$description,$ingredient,$guide_to_use,$more_information, $price) {
        global $pdo;
        $sql = "INSERT INTO drugs (drug_category_id, drug_name, 
            description, ingredient, guide_to_use,more_information, $price) 
            values (?,?,?,?,?,?,?)";
        $query = $pdo->prepare($sql);
        $query->bindValue(1, $drug_category_id);
        $query->bindValue(2, $drug_name);
        $query->bindValue(3, $description);
        $query->bindValue(4, $ingredient);
        $query->bindValue(5, $guide_to_use);
        $query->bindValue(6, $more_information);
        $query->bindValue(7, $price);
        try { 
            $query->execute();
        } catch (Exception $e){
            echo "Không thể nhập dữ liệu vào cơ sở dữ liệu";
        }
    }

    public function editDrug( $drug_id, $drug_category_id, $drug_name, $description, 
        $ingredient, $guide_to_use, $more_information, $price ) {
        global $pdo;
        $sql = "UPDATE drugs SET drug_category_id=?, drug_name=?, description=?,
        ingredient=?, guide_to_use=?, more_information=?, price=? WHERE drug_id=?";
        $query = $pdo->prepare($sql);
        $query->bindValue(1,$drug_category_id);
        $query->bindValue(2,$drug_name);
        $query->bindValue(3,$description);
        $query->bindValue(4,$ingredient);
        $query->bindValue(5,$guide_to_use);
        $query->bindValue(6,$more_information);
        $query->bindValue(7,$price);
        $query->bindValue(8,$drug_id);
    
        try {
            $query->execute();
        } catch (Exception $e) {
            echo "Không thể chỉnh sửa thuốc.";
        }
    }
	
    /**
     * Gets detail drugs by id
     * @return array $drugs
     * @access public
     */
    public function getDrug($drug_id){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM drugs WHERE drug_id = ?");
        $query->bindValue(1, $drug_id);
        $query->execute();
        $rows = $query->fetchAll();
        $drugs =array();
        foreach($rows as $row){
            $drug = new Drug(
                 $row['drug_id']
                ,$row['drug_category_id']
                ,$row['drug_name']
                ,$row['description']
                ,$row['ingredient']
                ,$row['guide_to_use']
                ,$row['more_information']
                ,$row['price']
                ,$row['image']
            );
            $drugs[] = $drug;
        }
        return $drugs;
    }
    
    /**
     * Gets all drugs from the drugs table
     * @return array $drugs
     * @access public
     */
    public function getAllDrugs(){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM drugs");
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $drug = new Drug(
                 $row['drug_id']
                ,$row['drug_category_id']
                ,$row['drug_name']
                ,$row['description']
                ,$row['ingredient']
                ,$row['guide_to_use']
                ,$row['more_information']
                ,$row['price']
                ,$row['image']
            );
            $drugs[] = $drug;
        }
        return $drugs;
    }
	
	
    
    
    public function deleteDrug( $drug_id ) {
        global $pdo;
        $query = $pdo->prepare("DELETE FROM drugs WHERE drug_id=?");
        $query->bindValue(1, $drug_id);
        try {
            $query->execute();
        } catch (Exception $e){
            echo "Không thể xóa thuốc.";
        }
    }
	
    
	

    /**
     * Search drug whose session parameters name or id match
     * @param string $key
     * @return array $drugs
     * @access public
     */
    public function searchDrug($key){
        global $pdo;
        $sql2 = "SELECT * FROM drugs WHERE drug_name LIKE '%".$key."%' or drug_id LIKE '".$key."' ";
        $query2 = $pdo->prepare($sql2);
        $query2->execute();
        $rows = $query2->fetchAll();
        $drugs = array();
        foreach($rows as $row){
            $drug = new Drug(
                  $row['drug_id']
                ,$row['drug_category_id']
                ,$row['drug_name']
                ,$row['description']
                ,$row['ingredient']
                ,$row['guide_to_use']
                ,$row['more_information']
                ,$row['price']
                ,$row['image']
            );
            $drugs[] = $drug;
        }
        return $drugs;
    }

  
    public function searchDrugById( $id ){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM drugs WHERE drug_id=?");
        $query->bindValue(1, $id);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $drug = new Drug(
                 $row['drug_id']
                ,$row['drug_category_id']
                ,$row['drug_name']
                ,$row['description']
                ,$row['ingredient']
                ,$row['guide_to_use']
                ,$row['more_information']
                ,$row['price']
                ,$row['image']
            );
            return $drug;
        }
        return null;
    }

     /**
     * Gets drugs in same category from the drugs table
     * @return array $drugs
     * @access public
     */
    public function getSameDrugs($drug_category_id, $drug_id){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM drugs WHERE drug_category_id = ? AND drug_id NOT in (?)  ORDER BY drug_id DESC");
        $query->bindValue(1, $drug_category_id);
        $query->bindValue(2, $drug_id);
        $query->execute();
        $rows = $query->fetchAll();
        $drugs =array();
        foreach($rows as $row){
            $drug = new Drug(
                 $row['drug_id']
                ,$row['drug_category_id']
                ,$row['drug_name']
                ,$row['description']
                ,$row['ingredient']
                ,$row['guide_to_use']
                ,$row['more_information']
                ,$row['price']
                ,$row['image']
            );
            $drugs[] = $drug;
        }
        return $drugs;
    }

   
    public function addImage($drug_name, $file ){ 
        // remove space
        $file['name'] = str_replace(" ", "",$file['name']);
        //upload directory
        $upload_dir = 'images/drugs/'.$file['name'];
        //upload file to new location
        move_uploaded_file($file['tmp_name'], $upload_dir);
        //prepare link to save to database entry
        $link = "http://localhost:81/drugstore/images/drugs/".$file['name'];
        //update database
        global $pdo;
        $sql = "UPDATE drugs SET image=? WHERE drug_name=?";
        $query = $pdo->prepare($sql);
        $query->bindValue(1,$link);
        $query->bindValue(2,$drug_name);
        $query->execute();
    }
    

    
}
 

