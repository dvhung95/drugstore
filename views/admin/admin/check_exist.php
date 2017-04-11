<?php
	//get the username  
	$username = $_GET["username"];  
 	global $pdo;
    $query = $pdo->prepare("SELECT username FROM administrator where username=?");
    $query->bindValue(1,$username);
    $query->execute();
    $rows = $query->fetchAll();
    if (!empty($rows)){
    	echo 0;
    } else {
    	echo 1;
    } 
?>