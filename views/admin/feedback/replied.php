<?php
  ob_start();
    $model = new FeedbackModel();
    $model->repliedFeedback($id);
    echo '<script language="javascript">';
    echo "window.location.href = 'dashboard.php?page=feedback&action=show';";
    echo '</script>';
  ob_end_flush();
?>