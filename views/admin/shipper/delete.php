<?php
    $model = new ShipperModel();
    $model->deleteShipper($id);
    echo '<script language="javascript">';
    echo 'alert("Đã xóa thông tin.");';
    echo "window.location.href = 'dashboard.php?page=shipper&action=show';";
    echo '</script>';
?>