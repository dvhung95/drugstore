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
            $query = $pdo->prepare("SELECT * FROM customer WHERE username = ? AND password = ?");

            $query->bindValue(1, $user_name);
            $query->bindValue(2, $user_password);

            $query->execute();
            $row = $query->fetch(PDO::FETCH_ASSOC);

        } catch(PDOException $e) {
            echo $error = "Không thể lấy dữ liệu từ cơ sở dữ liệu:<br />" . $e;
        }
		
		// Throw a formatted error on failed login
        if(!$row) {
            echo " <div id='error' class='panel panel-default'>
              <div class='panel-body'><i class='fa fa-exclamation-triangle fa-fw fa-2x' aria-hidden='true'></i> Sai tên đăng nhập hoặc mật khẩu</div>
            </div>";

        } else {
            $_SESSION["user_name"] = $user_name;
            $_SESSION["user_password"] = $user_password;
            // redirection after successful login
			header("Location: index.php?page=home");
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