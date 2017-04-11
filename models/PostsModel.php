<?php
include 'Post.php';
class PostsModel {
  
	/**
	 * Constructor for posts model
	 * @access public
	 */
    public function __construct(){
    }


    
    /**
     * Add post into posts table
     * @param int $post_id
     * @param string $post_category_id
     * @param string $post_title
     * @param string $content
     * @access public
     */
    public function addPost($post_category_id, $post_title, $content) {
        global $pdo;
        $sql = "INSERT INTO posts (post_category_id, post_title, content) 
            values (?,?,?)";
        $query = $pdo->prepare($sql);
        $query->bindValue(1, $post_category_id);
        $query->bindValue(2, $post_title);
        $query->bindValue(3, $content);
        $query->execute();
    }

    /**
     * Upload img to folder and database
     * @param FILE $file
     * @param String $title
     * @return boolean 
     * @access public
     */
    public function addImage($title, $file ){ 
        // remove space
        $file['name'] = str_replace(" ", "",$file['name']);
        //upload directory
        $upload_dir = 'images/posts/'.$file['name'];
        //upload file to new location
        move_uploaded_file($file['tmp_name'], $upload_dir);
        //prepare link to save to database entry
        $link = "http://localhost:81/drug-store/images/posts/".$file['name'];
        //update database
        global $pdo;
        $sql = "UPDATE posts SET image=? WHERE post_title=?";
        $query = $pdo->prepare($sql);
        $query->bindValue(1,$link);
        $query->bindValue(2,$title);
        $query->execute();
    }

	/**
	 * Gets all posts from the posts table
	 * @return array $posts
	 * @access public
	 */
    public function getAllPosts(){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM posts");
        $query->execute();
        $rows = $query->fetchAll();
        $posts = array();
        if (!empty($rows)){
            foreach($rows as $row){
                $p = new Post(
                     $row['post_id']
                    ,$row['post_category_id']
                    ,$row['post_title']
                    ,$row['content']
                    ,$row['image']
                );
             $posts[] = $p;
            }
        }
        return $posts;
    }

    
    /**
     * Gets posts in same category from the posts table
     * @return array $posts
     * @access public
     */
    public function getSamePosts($post_category_id, $post_id){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM posts WHERE post_category_id = ? AND post_id NOT in (?)  ORDER BY post_id DESC");
        $query->bindValue(1, $post_category_id);
        $query->bindValue(2, $post_id);
        $query->execute();
        $rows = $query->fetchAll();
        $posts = array();
        foreach($rows as $row){
            $post = new Post(
                 $row['post_id']
                ,$row['post_category_id']
                ,$row['post_title']
                ,$row['content']
                ,$row['image']
            );
            $posts[] = $post;
        }
        return $posts;
    }

	/**
	 * Deletes a post based on post id 
	 * @param int $post_id
	 * @access public
	 */
    public function deletePost( $post_id ) {
        global $pdo;
        $query = $pdo->prepare("DELETE FROM posts WHERE post_id=?");
        $query->bindValue(1, $post_id);
        try {
            $query->execute();
        } catch (Exception $e){
            echo "Không thể xóa bài đăng.";
        }
    }
	
    /**
     * Deletes image based on post id 
     * @param int $id
     * @access public
     */
    public function deleteImage($id){
        global $pdo;
        $query = $pdo->prepare("SELECT image FROM posts where post_id=?");
        $query->bindValue(1, $id);
        $query->execute();
        $rows = $query->fetchAll();
        if (!empty($rows)){
            foreach($rows as $row){
                $root = $_SERVER['DOCUMENT_ROOT'];
                $dir = $root."/drug-store/images/posts/";
                $file = explode("/",$row['image']);
                if(file_exists($dir."".$file[6])){
                    unlink($dir."".$file[6]);
                }
                break;
            }
        }
    }

	/**
	 * Edits post based on post id 
     * @param int $post_id
     * @param string $post_category_id
     * @param string $post_title
     * @param string $content
     * @param string $image
	 * @access public
	 */
    public function editPost($post_id, $post_category_id, $post_title, $content) {
        global $pdo;
        $sql = "UPDATE posts SET post_category_id=?, post_title=?, content=? WHERE post_id=?";
        $query = $pdo->prepare($sql);
        $query->bindValue(1,$post_category_id);
        $query->bindValue(2,$post_title);
        $query->bindValue(3,$content);
        $query->bindValue(4,$post_id);
        try {
            $query->execute();
        } catch (Exception $e) {
            echo "Không thể chỉnh sửa bài đăng.";
            return false;
        }
        return true;
    }
	
       /**
     * Search post whose session parameters title or id match
     * @param string $key
     * @return array $posts
     * @access public
     */

    public function searchPost( $key ){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM posts WHERE post_title LIKE '%".$key."%' or post_id LIKE '".$key."' ");
        $query->execute();
        $rows = $query->fetchAll();
        $posts = array();
        foreach($rows as $row){
            $post = new Post(
                 $row['post_id']
                ,$row['post_category_id']
                ,$row['post_title']
                ,$row['content']
                ,$row['image']
            );
            $posts[] = $post;
        }
        return $posts;
    }
    
    /**
     * Search post whose session parameters id match
     * @param string $id
     * @return Post $post
     * @access public
     */
    public function searchPostById( $id ){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM posts WHERE post_id=?");
        $query->bindValue(1, $id);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $post = new Post(
                 $row['post_id']
                ,$row['post_category_id']
                ,$row['post_title']
                ,$row['content']
                ,$row['image']
            );
            return $post;
        }
        return null;
    }


}
 ?>
