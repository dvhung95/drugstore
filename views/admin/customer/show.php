<div class="container"> 
		<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1> <a href="dashboard.php?page=customer&action=show"> Quản lý người dùng </a> </h1> <hr>
					<ol class="breadcrumb">
					  <li><a href="#">Trang chủ</a></li>
					  <li><a href="dashboard.php?page=customer&action=show">Quản lý người dùng</a></li>
					</ol>			
				</div>
			</div>
		</div> <!-- end title -->

		<?php
			$count=1; 
		?>
		
		<div class="table">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered"> 
					    <thead>
					    	<tr>
						      	<th>#</th>
						        <th> Tên đăng nhập </th>
						        <th> Mật Khẩu</th>
						        <th> Tên người dùng</th>
						        <th> Ngày sinh </th>
						        <th> Địa chỉ </th>
						        <th> Số điện thoai </th>
						        <th> Avatar </th>
						        <th> Xóa </th>
					      	</tr>
					    </thead>
					    <tbody>
					    	<?php foreach ($customers as $customer) {
					    		?>
					    		<tr>
					    			<td> <?= $count ?></td>
					    			<td>  <?= $customer->username?></td>
					    			<td>  <?= $customer->password?></td>
					    			<td>  <?= $customer->name?></td>
					    			<td>  <?= $customer->date_of_birth?></td>
					    			<td>  <?= $customer->address?></td>
					    			<td>  <?= $customer->phone_number?></td>
					    			<td> <img width="60" height="60" src="<?= $customer->image;?>"/> </td> 			
					    			<td>
					    				<a href="dashboard.php?page=customer&action=delete&id=<?= $customer->customer_id?>"
					    				onclick="return confirm('Tài khoản sẽ bị xóa vĩnh viễn?');"
					    				 class="btn btn-danger">Xóa</a>		
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

</div><!--  end container -->
