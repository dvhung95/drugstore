<?php
    $model = new OrderModel();
    $model->deleteOrder($id);
    echo '<script language="javascript">';
    echo 'alert("Đã xóa đơn đặt hàng");';
    echo "window.location.href = 'dashboard.php?page=order&action=show';";
    echo '</script>';
?>