
<div class="container"> 
	<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1> <a href="#">Thêm người giao hàng</a> </h1> <hr>
					<ol class="breadcrumb">
                     	<li><a href="#">Trang chủ</a></li>
                      	<li><a href="dashboard.php?page=shipper&action=show">Quản lý người giao hàng</a></li>
					</ol>	
                        <a href="dashboard.php?page=shipper&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm người giao hàng</a>				
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
				         	<th>Họ tên</th>
					         <th>Ngày sinh</th>
					        <th>Số điện thoại</th>
					        <th>Địa chỉ</th>
					        <th>Quản lý</th>
				      	</tr>
				    </thead>
				    <tbody>
                            <?php 
                            $count = 1;
                            foreach ($shippers as $shipper) {
				    		?>
				    		<tr>
				    			<td>  <?= $count ?></td>
				    			<td>  <?= $shipper->name?></td>
				    			<td>  <?= $shipper->date_of_birth?></td>
				    			<td>  <?= $shipper->phone_number?></td>
				    			<td>  <?= $shipper->address?></td>
				    			<td><a href="dashboard.php?page=shipper&action=edit&id=<?php echo $shipper->shipper_id?>"
				    				class="btn btn-warning">Chỉnh sửa</a> 
				    				<a href="dashboard.php?page=shipper&action=delete&id=<?php echo $shipper->shipper_id; ?>"
				    				onclick="return confirm('Xác nhận xóa vĩnh viễn?');"
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
