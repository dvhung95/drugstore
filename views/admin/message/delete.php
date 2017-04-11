<?php
  ob_start();
    $mModel = new MessageModel();
    $mModel->deleteImage($id);
    $mModel->deleteMessage($id);
    echo '<script language="javascript">';
    echo 'alert("Đã xóa tin nhắn!");';
    echo "window.location.href = 'dashboard.php?page=message&action=show';";
    echo '</script>';
  ob_end_flush();
?>