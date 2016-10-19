    <div class="panel panel-default">
        <div class="panel-heading">Đăng nhập</div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="panel-body">
                <form method="post" action="index.php?page=login&action=login" autocomplete="off">
                    <div class="form-group">
                        <label for="user_name">Tên đăng nhập</label>
                        <input type="text" name="user_name" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label for="user_password">Mật khẩu</label>
                        <input type="password" name="user_password" class="form-control" required />
                    </div>
                    <button class="btn btn-primary" type="submit" value="Login">Đăng nhập</button>
                            <!-- suggest registration -->
                    <a href="?page=register">Đăng ký tài khoản</a>
                </form>
            </div>
        </div>
        <?php include('right-bar.php'); ?>    
    </div>
