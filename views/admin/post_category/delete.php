<?php
  ob_start();
    $model = new PostCategoryModel();
    $model->deletePostCategory($id);
    echo '<script language="javascript">';
    echo 'alert("Nhóm bài đăng đã bị xóa.");';
    echo "window.location.href = 'dashboard.php?page=post_category&action=show';";
    echo '</script>';
  ob_end_flush();
?>