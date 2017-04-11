<?php
  ob_start();
    $drugModel = new DrugsModel();
    $drugModel->deleteImage($id);
    $drugModel->deleteDrug($id);
    echo '<script language="javascript">';
    echo 'alert("Thuốc đã bị xóa.");';
    echo "window.location.href = 'dashboard.php?page=drug&action=show';";
    echo '</script>';
  ob_end_flush();
?>