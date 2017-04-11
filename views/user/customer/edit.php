<?php
  $id = $this->customersModel->getLoggedCustomerId($_SESSION['user_name'],$_SESSION['user_password']);
  $customer = $this->customersModel->getCustomerById($id);
?>
<!-- breadcrumd-->
<div class="bread">
  <a href="index.php?page=home">Trang chủ</a> >
  <a href="index.php?page=user&action=show">Thông tin tài khoản</a> 
</div> <!-- end breadcrumb -->

<!-- customer details -->
<div class="col-sm-8 col-xs-12 detail">
  <form method="post" action="?page=user&action=edit&status=return" enctype="multipart/form-data">
  <!--  for avatar -->
  <?php if (!empty($customer->image)) {?>
    <div class="col-sm-5 col-xs-12 detail-img">
      <img src="<?=$customer->image ?>">
      <div class="form-group">
        <p><strong>Đổi avatar</strong></p>
      <input type="file" name="image" class="form-control"> 
      </div>
    </div>
  <?php } else {?>
  <div class="col-sm-5 col-xs-12 detail-img">
    <img src="images/users/user.png">
    <div class="form-group">
      <p><strong>Đổi avatar</strong></p>
      <input type="file" name="image" class="form-control"> 
    </div>
  </div> <!-- end for avatar -->
  <?php }?> 
  <!-- for other customer details -->
  <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
    <div class="add-post">
      <div class="panel panel-default">
          <div class="panel-heading">Thông tin tài khoản</div>
          <div class="panel-body">

                <input type="hidden" name="customer_id" value="<?= $customer->customer_id?>"/>
                <input type="hidden" name="username" value="<?= $customer->username?>"/>
                <div class="form-group">
                  <label for="name">Họ và tên</label>
                  <input type="text" name="name" class="form-control" value="<?= $customer->name?>" required> 
                </div>
                <div class="form-group">
                  <label for="date_of_birth">Ngày sinh</label>
                  <input type="date" name="date_of_birth" value="<?= $customer->date_of_birth ?>" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="address">Địa chỉ</label>
                  <input type="text" name="address" value="<?= $customer->address ?>" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="phone_number">Số điện thoại</label>
                  <input type="text" name="phone_number" value="<?= $customer->phone_number?>" class="form-control" required>
                </div>
                <hr>
                <p><strong>Tên đăng nhập</strong>: <?= $customer->username?></p>
                <div class="form-group">
                  <label for="password">Mật Khẩu</label>
                  <input type="password" name="password" value="<?= $customer->password?>" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="re_password">Ghi lại mật Khẩu</label>
                  <input type="password" name="re_password" value="<?= $customer->password?>" class="form-control" required>
                </div>

                        <button class="btn btn-primary" type="submit" name="save" value="save">Thay đổi</button>
                <a href="?page=user&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
              </form>
          </div>
      </div>
    </div> 
  </div> <!-- end for customer details -->
</div> <!-- end customer details -->

<!-- right section -->
<?php include('views/user/right-bar.php'); ?>

          