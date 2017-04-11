
<div class="container"> 
	<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1><a href="dashboard.php?page=admin&action=add">Thêm tài khoản quản trị</a> </h1> <hr>
					<ol class="breadcrumb">
                     	<li><a href="#">Trang chủ</a></li>
                      	<li><a href="dashboard.php?page=admin&action=show">Quản lý tài khoản quản trị</a></li>
                      	<li><a href="dashboard.php?page=admin&action=add">Thêm tài khoản quản trị</a></li>
					</ol>					
				</div>
			</div>
	</div> <!-- end title -->

	<div class="add-admin">
		<div class="panel panel-default">
		  	<div class="panel-heading">Thông tin tài khoản</div>
		  	<div id="test"></div>
		  		<div class="panel-body">
                    <form id="add_admin" method="post" action="dashboard.php?page=admin&action=add&status=return" enctype="multipart/form-data">
                        <div class="form-group">
				        	<label for="username">Tên đăng nhập</label>
				        	<input type="text" id="username" name="username" class="form-control" style="width: 200px;"> 
				        	<div id="check_user_exist" style="color: red;"></div>
                        </div>
                        <div class="form-group">
				        	<label for="password">Mật khẩu</label>
				        	<input type="password" id="password" name="password" class="form-control" style="width: 200px;" > 
		        		</div>
                        <div class="form-group">
				        	<label for="re_password">Nhập lại mật khẩu</label>
				        	<input type="password"  name="re_password" class="form-control" style="width: 200px;"> 
		        		</div>
                        <div class="form-group">
				        	<label for="name">Họ tên</label>
				        	<input type="name"  name="name" class="form-control" style="width: 200px;"> 
		        		</div>
                        <button class="btn btn-primary" type="submit" name="save" value="save">Lưu</button>
		        	<a href="dashboard.php?page=admin&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
		        </form>
		  	</div>
		</div>
	</div> <!-- end add admin -->
</div>
<script type="text/javascript" src="libs/js/adminpage/admin.js"></script>
