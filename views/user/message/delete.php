<?php
    $id = $_GET['id'];
	$cModel = new CustomersModel();
	$customer_id = $cModel->getLoggedCustomerId($_SESSION['user_name'],$_SESSION['user_password']);
	$mModel = new MessageModel();
	$mModel->deleteMessageByCustomer($customer_id,$id);
	echo '<script language="javascript">';
	echo "window.location.href = 'index.php?page=message&action=show';";
	echo '</script>'
?>