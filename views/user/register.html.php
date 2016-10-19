    <div class="panel panel-default">
        <div class="panel-heading">Đăng ký tài khoản</div>
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="panel-body">
                        <form method="post" action="index.php?page=register&action=register_user" 
                        enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="user_name">Tên đăng nhập</label>
                                <input type="text" name="user_name" class="form-control" required> 
                            </div>
                            <div class="form-group">
                                <label for="user_password">Mật khẩu</label>
                                <input type="password" name="user_password" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="repeated_user_password">Nhập lại mật khẩu</label>
                                <input type="password" name="repeated_user_password" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="name">Tên</label>
                                <input type="text" name="name" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="date_of_birth">Ngày sinh</label>
                                <input type="date" name="date_of_birth" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input type="text" name="address" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Số điện thoại</label>
                                <input type="text" name="phone_number"class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="name">Hình đại diện</label>
                                <input type="file" name="image" class="form-control"> 
                            </div>
                            <button class="btn btn-primary" type="submit" value="Register">Đăng ký</button>
                    </form>
                </div>
            </div>
        
            <?php include('right-bar.php'); ?>
        </div>
    </div>
