<?php
  ob_start();
    $model = new ShippingPriceModel();
    $model->deleteShippingPrice($id);
    echo '<script language="javascript">';
    echo 'alert("Phí chuyển đã bị xóa.");';
    echo "window.location.href = 'dashboard.php?page=shippingprice&action=show';";
    echo '</script>';
  ob_end_flush();
?>