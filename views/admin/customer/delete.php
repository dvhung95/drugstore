<?php
  ob_start();
    $model = new CustomersModel();
    $model->deleteImage($id);
    $model->deleteCustomer($id);
    echo '<script language="javascript">';
    echo 'alert("Tài khoản đã bị xóa.");';
    echo "window.location.href = 'dashboard.php?page=customer&action=show';";
    echo '</script>';
  ob_end_flush();
?>