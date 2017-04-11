<?php
include 'Message.php';
class MessageModel {
  
	/**
	 * Constructor for message model
	 * @access public
	 */
    public function __construct(){
    }

    /**
     * Add message into message table for all customers
     * @param string $title
     * @param string $content
     * @access public
     */
    public function addMessage($title, $content) {
        global $pdo;
        $sql = "INSERT INTO message (title, content) 
            values (?,?)";
        $query = $pdo->prepare($sql);
        $query->bindValue(1, $title);
        $query->bindValue(2, $content);
        $query->execute();
        // add into message line
        $message_id = $this->getIdByTitle($title);
        $query = $pdo->prepare("SELECT customer_id FROM customer");
        $query->execute();
        $rows = $query->fetchAll();
        if (!empty($rows)){
            foreach($rows as $row){
            $query = $pdo->prepare("insert into message_line(message_id,customer_id) 
                values (?,?)");
            $query->bindValue(1,$message_id);
            $query->bindValue(2,$row['customer_id']);
            $query->execute();             
            }
        } 
    }

    /**
     * Add message to a customer
     * @param string $title
     * @param string $content
     * @param int $customer_id
     * @access public
     */
    public function addMessageByCustomer($title, $content, $customer_id) {
        global $pdo;
        $sql = "INSERT INTO message (title, content) 
            values (?,?)";
        $query = $pdo->prepare($sql);
        $query->bindValue(1, $title);
        $query->bindValue(2, $content);
        $query->execute();
        // add into message line
        $message_id = $this->getIdByTitle($title);
        $query = $pdo->prepare("insert into message_line(message_id,customer_id) 
            values (?,?)");
        $query->bindValue(1,$message_id);
        $query->bindValue(2,$customer_id);
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
        $upload_dir = 'images/message/'.$file['name'];
        //upload file to new location
        move_uploaded_file($file['tmp_name'], $upload_dir);
        //prepare link to save to database entry
        $link = "http://localhost:81/drug-store/images/message/".$file['name'];
        //update database
        global $pdo;
        $sql = "UPDATE message SET image=? WHERE title=?";
        $query = $pdo->prepare($sql);
        $query->bindValue(1,$link);
        $query->bindValue(2,$title);
        $query->execute();
    }

    /**
     * Gets all message from the message table
     * @return array $message
     * @access public
     */
    public function getAllMessage(){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM message");
        $query->execute();
        $rows = $query->fetchAll();
        $messages = array();
        if (!empty($rows)){
            foreach($rows as $row){
                $m = new Message(
                     $row['message_id']
                    ,$row['title']
                    ,$row['content']
                    ,$row['image']
                );
             $messages[] = $m;
            }
        }
        return $messages;
    }


	/**
	 * Gets all messages by username
     * @param string user_name
	 * @return array $messages
	 * @access public
	 */
    public function getMessagesByCustomer($user_name){
        global $pdo;
        $query = $pdo->prepare("SELECT message.message_id,title, content, message.image FROM message 
            INNER JOIN message_line on message_line.message_id=message.message_id 
            INNER JOIN customer on message_line.customer_id=customer.customer_id 
            where customer.username=?");
        $query->bindValue(1,$user_name);
        $query->execute();
        $rows = $query->fetchAll();
        $messages = array();
        if (!empty($rows)){
            foreach($rows as $row){
                $m = new Message(
                     $row['message_id']
                    ,$row['title']
                    ,$row['content']
                    ,$row['image']
                );
             $messages[] = $m;
            }
        }
        return $messages;
    }


	/**
	 * Deletes a message based on message id 
	 * @param int $message_id
	 * @access public
	 */
    public function deleteMessage( $message_id ) {
        global $pdo;
        $query = $pdo->prepare("DELETE FROM message WHERE message_id=?");
        $query->bindValue(1, $message_id);
        try {
            $query->execute();
        } catch (Exception $e){
            echo "Xóa tin nhắn không thành công.";
        }
    }


    /**
     * Deletes a message based on customer id
     * @param int $customer_id
     * @access public
     */
    public function deleteMessageByCustomer($customer_id,$message_id) {
        global $pdo;
        $query = $pdo->prepare("DELETE FROM message_line WHERE customer_id=? and message_id=?");
        $query->bindValue(1, $customer_id);
        $query->bindValue(2, $message_id);
        $query->execute();
    }
	
    /**
     * Deletes image based on message id 
     * @param int $id
     * @access public
     */
    public function deleteImage($id){
        global $pdo;
        $query = $pdo->prepare("SELECT image FROM message where message_id=?");
        $query->bindValue(1, $id);
        $query->execute();
        $rows = $query->fetchAll();
        if (!empty($rows)){
            foreach($rows as $row){
                $root = $_SERVER['DOCUMENT_ROOT'];
                $dir = $root."/drug-store/images/message/";
                $file = explode("/",$row['image']);
                if(file_exists($dir."".$file[6])){
                    unlink($dir."".$file[6]);
                }
                break;
            }
        }
    }
    
    public function getMessageById( $id ){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM message WHERE message_id=?");
        $query->bindValue(1, $id);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $message = new Message(
                 $row['message_id']
                ,$row['title']
                ,$row['content']
                ,$row['image']
            );
            return $message;
        }
        return null;
    }

    /**
     * @return string id
     */
    public function getIdByTitle($title){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM message WHERE title=?");
        $query->bindValue(1, $title);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            return $row['message_id'];
        }
        return null;
    }

}
?>
