<?php
  $messageModel = new messageModel();
  $messages = $messageModel->getMessagesByCustomer($_SESSION['user_name']);
?>
<!-- message list -->
<div class=" col-sm-8 col-xs-12 news">
  <h3 class="col-sm-12">Tin nhắn</h3>
  <div style="clear: both"></div>
	<?php
  if(isset( $_SESSION['user_name']) && isset($_SESSION['user_password'])) {
  foreach ($messages as $message){?>
      <div class="product row">
        <div class="col-sm-3 col-xs-6 product-img">
          <img src="<?=$message->image ?>" alt="">
        </div>
        <div class="col-sm-9 col-xs-6 product-title">
          <a href="index.php?page=message&action=show&id=<?=$message->message_id?>"><?=substr($message->title, 0 ,100)?></a>
        </div>
        <div class="col-sm-9 col-xs-6 product-body">
          <?=substr($message->content, 0, 300)." ..."?>
        </div>
        <div class="col-sm-9 col-xs-6 more text-right">
          <a href="index.php?page=message&action=show&id=<?=$message->message_id?>">Xem thêm </a>| 
          <a href="index.php?page=message&action=delete&id=<?=$message->message_id?>">Xóa</a>
        </div>
      </div>
    <?php }
  } ?>
</div>
<!-- end news -->

 <!-- right-bar -->
  <?php include('views/user/right-bar.php'); ?>
