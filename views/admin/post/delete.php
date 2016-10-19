<?php
  ob_start();
    $pModel = new PostsModel();
    $pModel->deletePost($id);
    echo '<script language="javascript">';
    echo 'alert("Bài đăng đã bị xóa.");';
    echo "window.location.href = 'dashboard.php?page=post&action=show';";
    echo '</script>';
  ob_end_flush();
?>