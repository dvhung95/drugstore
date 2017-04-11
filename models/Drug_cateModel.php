<?php
include_once 'Drug_cate.php';
class Drug_cateModel {
  
	/**
	 * Constructor for drug category model
	 * @access public
	 */
    public function __construct(){
    }


    
    /**
     * Add drug category into drug_category table
     */
    public function addDrug_cate($category_name, $description) {
        global $pdo;
        $sql = "INSERT INTO drug_category (category_name, description) values (?,?)";        
        $query = $pdo->prepare($sql);
        $query->bindValue(1, $category_name);
        $query->bindValue(2, $description);
        $query->execute();
    }

	/**
	 * Gets all drug_category from the drug_category table
	 * @return array $Drug_cate
	 * @access public
	 */
    public function getAllDrugCategory(){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM drug_category");
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $cate = new Drug_cate(
                $row['drug_category_id']
                ,$row['category_name']
                ,$row['description']
            );
            $cates[] = $cate;
        }
        return $cates;
    }
	
	/**
	 * Deletes a drug category based on drug category id 
	 * @param int $drug_category_id
	 * @access public
	 */
    public function deleteDrug_cate( $drug_category_id ) {
        global $pdo;
        $query = $pdo->prepare("DELETE FROM drug_category WHERE drug_category_id = ?");
        $query->bindValue(1, $drug_category_id);
        $query->execute();
    }
	
	/**
	 * Edits drug category based on drug category id 
	 */
    public function editDrug_cate($drug_category_id, $category_name, $description) {
        global $pdo;
        $sql = "UPDATE drug_category SET category_name=?, description=? WHERE drug_category_id=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($category_name, $description, $drug_category_id));
    }
	
	/**
     * Search drug category whose session parameters name or id match
     * @param string $key
     * @return array $Drug_cate
     * @access public
     */
    public function searchDrug_cate( $key ){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM drug_category WHERE drug_category_id=?");
        $query->bindValue(1, $key);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $drug_cate = new Drug_cate(
                  $row['drug_category_id']
                ,$row['category_name']
                ,$row['description']
            );
            return $drug_cate;
        }
        return null;
    }
}
 ?>
