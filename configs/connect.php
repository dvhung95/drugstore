
<?php
	// Create connection
	try {
		$pdo = new PDO(
	    'mysql:host=localhost;dbname=drug_store',
	    "root",
	    "",
	    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (PDOException $e) {
        exit("Database error.");
    }

?>
