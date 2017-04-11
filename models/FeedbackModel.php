<?php
include 'Feedback.php';
class FeedbackModel {
  
	/**
	 * Constructor for Feedback model
	 * @access public
	 */
    public function __construct(){
    }


    
    /**
     * Add feedback into feedback table
     * @param int  $feedback_id
     * @param string $sender_name
     * @param string $email
     * @param string $phone_number
     * @param string $content
     * @param boolean $is_replied
     * @access public
     */
    public function addFeedback($sender_name, $email,$phone_number, $content) {
        global $pdo;
        $sql = "INSERT INTO feedback (sender_name, email, phone_number, content,is_replied) 
            values (?,?,?,?,?)";
        $query = $pdo->prepare($sql);
        $query->bindValue(1, $sender_name);
        $query->bindValue(2, $email);
        $query->bindValue(3, $phone_number);
        $query->bindValue(4, $content);
        $query->bindValue(5, "chưa trả lời");
        $query->execute();
    }

	/**
	 * Gets all feedbacks from the feedback table
	 * @return array $feedbacks
	 * @access public
	 */
    public function getAllFeedbacks(){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM feedback");
        $query->execute();
        $rows = $query->fetchAll();
        $feedbacks = array();
        if (!empty($rows)){
            foreach($rows as $row){
                $f = new Feedback(
                     $row['feedback_id']
                    ,$row['sender_name']
                    ,$row['email']
                    ,$row['phone_number']
                    ,$row['content']
                    ,$row['is_replied']
                );
             $feedbacks[] = $f;
            }
        }
        return $feedbacks;
    }


	/**
	 * Deletes a post based on post id 
	 * @param int $post_id
	 * @access public
	 */
    public function deleteFeedback( $feedback_id ) {
        global $pdo;
        $query = $pdo->prepare("DELETE FROM feedback WHERE feedback_id=?");
        $query->bindValue(1, $feedback_id);
        try {
            $query->execute();
        } catch (Exception $e){
            echo "Không thể xóa feedback.";
        }
    }
	
    /**
     * Deletes a post based on post id 
     * @param int $post_id
     * @access public
     */
    public function repliedFeedback($feedback_id) {
        global $pdo;
        $query = $pdo->prepare("UPDATE feedback SET is_replied='đã trả lời' WHERE feedback_id=?");
        $query->bindValue(1, $feedback_id);
        try {
            $query->execute();
        } catch (Exception $e){
            echo "Cập nhật không thành công.";
        }
    }

}
 ?>
