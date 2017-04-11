<?php
  ob_start();
    $model = new Drug_cateModel();
    $model->deleteDrug_cate($id);
    echo '<script language="javascript">';
    echo 'alert("Nhóm thuốc đã bị xóa.");';
    echo "window.location.href = 'dashboard.php?page=drug_category&action=show';";
    echo '</script>';
  ob_end_flush();
?>