<?php 
  $id = $_GET['id'];
  $messageModel = new messageModel();
  $message = $messageModel->getMessageByID($id);
  if(isset( $_SESSION['user_name']) && isset($_SESSION['user_password'])) { 
?>  
    <!-- breadcrumb -->
    <div class="bread">
      <a href="index.php">Trang chủ</a> >
      <a href="index.php?page=message&action=show">Tin nhắn</a> >
      <?=$message->title ?>
    </div> <!-- end breadcrumb -->
    <!-- message detail -->
    <div class="col-sm-8 col-xs-12 detail">
      <?php if (!empty($message->image)) {
      ?>
      <div class="col-sm-5 col-xs-12 detail-img">
        <img src="<?=$message->image ?>">
      </div>
      <h2 class="col-sm-7 col-xs-12 detail-title">
      <?php } else { 
      ?>
      <h2 class="col-sm-12 col-xs-12 detail-title">
      <?php } 
      ?>
        <?=$message->title ?>
      </h2>
      <a class="delete" href="index.php?page=message&action=delete&id=<?=$message->message_id?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
      <div class="col-sm-12 col-xs-12 detail-body"> <?=$message->content ?></div>
    </div> <!-- end message details -->
  <?php } 
  ?>
  <!-- right section -->
  <?php include('views/user/right-bar.php'); 
  ?>  

  

          