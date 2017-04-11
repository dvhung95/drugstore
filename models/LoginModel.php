<?php

class LoginModel {

	/**
	 * Constrcutor for login model
	 * @access public
	 */
    public function __construct(){

    }
	
	/**
	 * Validates user name and password to start a session
	 * and redirects to home page
	 * and logs in
	 * @param string $user_name
	 * @param string $user_password
	 * @access public
	 */
    public function login( $user_name, $user_password ) {
        global $pdo;
        try {
            $type = "customer";
            $query = $pdo->prepare("SELECT * FROM customer WHERE username = ? AND password = ?");
            $query->bindValue(1, $user_name);
            $query->bindValue(2, $user_password);
            $query->execute();
            $row= $query->fetchAll();  
            if(empty($row)){    // is admin account
                $query = $pdo->prepare("SELECT * FROM administrator WHERE username = ? AND password = ?");
                $query->bindValue(1, $user_name);
                $query->bindValue(2, $user_password);
                $query->execute();
                $row_admin= $query->fetchAll();  
                if(empty($row_admin)){
                    $type="not exist";
                } else {
                    $type="admin";
                }
            } 
        } catch(PDOException $e) {
            echo $error = "Không thể lấy dữ liệu từ cơ sở dữ liệu:<br />" . $e;
        }
        if($type=="customer"){
            $_SESSION["user_name"] = $user_name;
            $_SESSION["user_password"] = $user_password;
            // redirection after successful login
            header("Location: index.php?page=home");
        } else if ($type=="admin"){
            $_SESSION["admin_name"] = $user_name;
            $_SESSION["admin_password"] = $user_password;
            // redirection after successful login
            header("Location: dashboard.php?page=drug&action=show");
        } else {
            header("Location: index.php?page=login");
        }
    }
	
	/**
	 * Stops the session
	 * and logs out
	 * @access public
	 */
    public function logout() {
        // unset/destroy the session
        session_destroy();
        // clear values
        $_SESSION = array();
        // redirection after successful logout
		header("Location: index.php?page=home");
    }

}

?>