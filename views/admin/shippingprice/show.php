
	<div class="container"> 
		<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1><a href="#"> Quản lý phí chuyển</a> </h1> <hr>
					<ol class="breadcrumb">
                        <li><a href="#">Trang chủ</a></li>
                      	<li><a href="dashboard.php?page=shippingprice&action=show">Quản lý phí chuyển</a></li>
					</ol>	
                        <a href="dashboard.php?page=shippingprice&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm phí chuyển</a>				
				</div>
			</div>
		</div> <!-- end title -->

		<div class="table">
			<div class="row">
				<div class="col-xs-12 col-sm-9 ">
					<table class="table table-bordered"> 
					    <thead>
					    	<tr>
						        <th>#</th>
					         	<th>Tên thành phố/tỉnh</th>
						        <th>Giá (VND) </th>
						        <th style="width: 200px">Quản lý</th>
					      	</tr>
					    </thead>
					    <tbody>
                                <?php 
                                $count = 1;
                                foreach ($shippingprices as $shippingprice) {
					    		?>
					    		<tr>
					    			<td>  <?= $count ?></td>
					    			<td>  <?= $shippingprice->ship_city?></td>
					    			<td>  <?= $shippingprice->price ?></td>
					    			<td style="width: 200px"><a href="dashboard.php?page=shippingprice&action=edit&id=<?php echo $shippingprice->shipping_price_id?>"
					    				class="btn btn-warning">Chỉnh sửa</a> 
					    				<a href="dashboard.php?page=shippingprice&action=delete&id=<?php echo $shippingprice->shipping_price_id; ?>"
					    				onclick="return confirm('Phí chuyển sẽ bị xóa vĩnh viễn?');"
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
