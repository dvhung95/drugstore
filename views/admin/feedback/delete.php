<?php
  ob_start();
    $model = new FeedbackModel();
    $model->deleteFeedback($id);
    echo '<script language="javascript">';
    echo 'alert("Đã xóa câu hỏi");';
    echo "window.location.href = 'dashboard.php?page=feedback&action=show';";
    echo '</script>';
  ob_end_flush();
?>