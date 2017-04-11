
<div class="container"> 
	<div class="title">
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1><a href="#"> Quản lý tài khoản quản trị</a> </h1> <hr>
				<ol class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                  	<li><a href="dashboard.php?page=admin&action=show">Quản lý tài khoản quản trị</a></li>
				</ol>	
                    <a href="dashboard.php?page=admin&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm tài khoản quản trị</a>				
			</div>
		</div>
	</div> <!-- end title -->

	<div class="table">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<table class="table table-bordered"> 
				    <thead>
				    	<tr>
					        <th>#</th>
				         	<th>Tên đăng nhập</th>
					         <th>Mật khẩu</th>
					        <th>Họ tên</th>
					        <th>Quản lý</th>
				      	</tr>
				    </thead>
				    <tbody>
                            <?php 
                            $count = 1;
                            foreach ($admins as $admin) {
				    		?>
				    		<tr>
				    			<td>  <?= $count ?></td>
				    			<td>  <?= $admin->username ?></td>
				    			<td>  <?= $admin->password?></td>
				    			<td>  <?= $admin->name ?></td>
				    			<td><a href="dashboard.php?page=admin&action=edit&id=<?php echo $admin->admin_id?>"
				    				class="btn btn-warning">Chỉnh sửa</a> 
				    				<a href="dashboard.php?page=admin&action=delete&id=<?php echo $admin->admin_id; ?>"
				    				onclick="return confirm('Tài khoản sẽ bị xóa vĩnh viễn?');"
				    				 class="btn btn-danger ">Xóa</a>		
					        	</td>
				    		</tr>
				    		<?php 
				    		$count++;
				    	}
				    	?>     
                                          
				    </tbody>
				</table> 
			</div>
		</div> 
	</div> <!-- end table -->
</div>
