<div class="panel panel-default">
    <div class="panel-heading">Đăng nhập</div>
   <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="panel-body">
            <form method="post" action="index.php?page=login&action=login" autocomplete="off">
                <div class="form-group">
                    <label for="user_name">Tên đăng nhập</label>
                    <input type="text" id="user_name" name="user_name" class="form-control" 
                      required> 
                </div>
                <div class="form-group">
                    <label for="user_password">Mật khẩu</label>
                    <input type="password" id="user_password" name="user_password" class="form-control" 
                     required />
                </div>
                <div id="checkExistResult" style="color: red;"></div>
                <button id="login" class="btn btn-primary" type="submit" value="Login">Đăng nhập</button>
                        <!-- suggest registration -->
                <a href="?page=register">Đăng ký tài khoản</a>
            </form>
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">     
    </div>
    <?php include('right-bar.php'); ?>    
</div>
