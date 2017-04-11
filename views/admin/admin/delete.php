<?php
  ob_start();
    $model = new AdministratorModel();
    $model->deleteAdmin($id);
    echo '<script language="javascript">';
    echo 'alert("Tài khoản đã bị xóa.");';
    echo "window.location.href = 'dashboard.php?page=admin&action=show';";
    echo '</script>';
  ob_end_flush();
?>