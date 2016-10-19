<?php
include "PostCategory.php";
class PostCategoryModel {
  
	/**
	 * Constructor for post category model
	 * @access public
	 */
    public function __construct(){
    }


    
    /**
     * Add post category into post_category table
     * @param string $category_name
     * @param string $description
     * @access public
     */
    public function addPostCategory( $category_name, $description) {
        global $pdo;
        $sql = "INSERT INTO post_category ($category_name, $description) 
            values (?,?)";
        $query = $pdo->prepare($sql);
        $query->bindValue(1, $category_name);
        $query->bindValue(2, $description);
        try { 
            $query->execute();
        } catch (Exception $e){
            echo "Không thể nhập dữ liệu vào cơ sở dữ liệu";
            return false;
        }
        return true;
    }


    /**
     * Gets all post category name from the post_category table
     * @return array $names
     * @access public
     */
    public function getPostCategoryName(){
        global $pdo;
        $query = $pdo->prepare("SELECT category_name FROM post_category");
        $query->execute();
        $rows = $query->fetchAll();
        $names = array();
        if (!empty($rows)){
            foreach($rows as $row){
             $names[] = $row['category_name'];
            }
        }
        return $names;
    }

	/**
	 * Gets all post category from the post category table
	 * @return array $postCategories
	 * @access public
	 */
    public function getAllPostCategory(){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM post_category");
        $query->execute();
        $rows = $query->fetchAll();
        $postCategories = array();
        if (!empty($rows)){
            foreach($rows as $row){
                $postCategory = new PostCategory(
                    $row['post_category_id']
                    ,$row['category_name']
                    ,$row['description']
                );
             $postCategories[] = $postCategory;
            }
        }
        return $postCategories;
    }
	
	/**
	 * Deletes a post category based on post category id
	 * @param int $post_category_id
	 * @access public
	 */
    public function deletePostCategory( $post_category_id ) {
        global $pdo;
        $query = $pdo->prepare("DELETE FROM post_category WHERE post_category_id=?");
        $query->bindValue(1, $post_category_id);
        try {
            $query->execute();
        } catch (Exception $e){
            echo "Không thể xóa bài nhóm.";
            return false;
        }
        return true;
    }
	
	/**
	 * Edits post category based on post category id 
     * @param int $post_category_id
     * @param string $category_name
     * @param string $description
	 * @access public
	 */
    public function editPost($post_category_id, $category_name, $description) {
        global $pdo;
        $sql = "UPDATE posts SET $category_name=?, $description=? WHERE $post_category_id=?";
        $query = $pdo->prepare($sql);
        try {
            $query->execute(array($post_category_id, $category_name, $description));
        } catch (Exception $e){
            echo "Không thể thay đổi thông tin nhóm bài đăng.";
            return false;
        }
        return true;
    }
}
 ?>
