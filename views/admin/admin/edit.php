<div class="container"> 
	<div class="title">
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1> <a href="#"> Sửa tài khoản quản trị </a></h1> <hr>
				<ol class="breadcrumb">
                	<li><a href="#">Trang chủ</a></li>
                  	<li><a href="dashboard.php?page=admin&action=show">Quản lý tài khoản quản trị</a></li>
                  	<li><a href="dashboard.php?page=admin&action=add">Sửa tài khoản quản trị</a></li>
				</ol>	
            		<a href="dashboard.php?page=admin&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm tài khoản quản trị</a>				
			</div>
		</div>
	</div> <!-- end title -->

	<div class="edit-admin">
		<div class="panel panel-default">
		  	<div class="panel-heading">Thông tin tài khoản</div>
		  		<div class="panel-body">
                    <form id="add_admin" method="post" action="dashboard.php?page=admin&action=edit&status=return"
                    enctype="multipart/form-data">
                    <input type="hidden" name="admin_id" value="<?= $admin->admin_id?>"/>
                    <div class="form-group">
			        	<p><strong>Tên đăng nhập:</strong> <?=$admin->username?></p> 
			        	<input type="hidden" name="username" class="form-control" value="<?= $admin->username?>" > 
		        	</div>
                    <div class="form-group">
			        	<label for="password">Mật khẩu</label>
			        	<input type="password" id="password" name="password" class="form-control" value="<?= $admin->password?>" style="width: 200px;" > 
		        	</div>
                    <div class="form-group">
			        	<label for="re_password">Nhập lại mật khẩu</label>
			        	<input type="password" name="re_password" class="form-control" value="<?= $admin->password?>" style="width: 200px;"> 
		        	</div>
                    <div class="form-group">
			        	<label for="name">Họ tên</label>
			        	<input type="text" name="name" class="form-control" value="<?= $admin->name?>" style="width: 200px;"> 
		        	</div>
                    <button class="btn btn-primary" type="submit" name="save" value="save">Thay đổi</button>
		        	<a href="dashboard.php?page=admin&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
		        </form>
		  	</div>
		</div>
	</div> <!-- end edit admin -->
</div>
<script type="text/javascript" src="libs/js/adminpage/admin.js"></script>
