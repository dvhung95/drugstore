<?php
  $id = $this->customersModel->getLoggedCustomerId($_SESSION['user_name'],$_SESSION['user_password']);
  $customer = $this->customersModel->getCustomerById($id);
?>
<!-- breadcrumb -->
<div class="bread">
  <a href="index.php?page=home">Trang chủ</a> >
  <a href="index.php?page=user&action=show">Thông tin tài khoản</a> 
</div>
<!-- show detail of drug -->
<div class="col-sm-8 col-xs-12 detail">
  <?php if (!empty($customer->image)) {?>
  <div class="col-sm-5 col-xs-12 detail-img">
    <img src="<?=$customer->image ?>">
  </div>
  <?php } else {?>
    <div class="col-sm-5 col-xs-12 detail-img">
    <img src="images/users/user.png">
  </div>
  <?php }?> 
  <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
    <p><strong>Tên</strong>: <?= $customer->name?></p>
    <p><strong>Ngày sinh</strong>: <?= $customer->date_of_birth?></p>
    <p><strong>Địa chỉ</strong>: <?= $customer->address?></p>
    <p><strong>Số điện thoại</strong>: <?= $customer->phone_number?></p>
    <hr>
    <p><strong>Tên đăng nhập</strong>: <?= $customer->username?></p>
    <p><strong>Mật khẩu</strong>: <?php $count=strlen($customer->password);
      for($i=0;$i<$count;$i++){
        echo "*";
      }
    ?></p>
    <div class="col-md-12 order">
      <form method="post" action="?page=user&action=edit" class="form-cart">
        <div class="i2"><button type="submit" class="btn btn-warning"><i class="fa fa-edit fa-fw" aria-hidden="true"></i> Chỉnh sửa </button></div>
      </form>
    </div>
  </div>
</div> <!-- end show detail of drug -->
<!-- right section -->
<?php include('views/user/right-bar.php'); ?>

        