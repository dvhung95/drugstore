
<div class="container"> 
	<div class="title">
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1><a href="#"> Quản lý tài khoản quản trị</a> </h1> <hr>
				<ol class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                  	<li><a href="dashboard.php?page=order&action=show">Quản lý đơn hàng</a></li>
				</ol>				
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
				         	<th>Khách hàng</th>
					        <th>Thuốc</th>
					        <th>Số lượng</th>
					        <th>Ngày đặt hàng</th>
					        <th>Địa chỉ nhận</th>
					        <th>Giá đơn hàng (VND)</th>
					        <th>Người giao hàng</th>
					        <th>Ngày giao hàng</th>
					        <th>Quản lý</th>
				      	</tr>
				    </thead>
				    <tbody>
                            <?php 
                            $count = 1;
                            $s = new ShippingPriceModel();
                            $c = new CustomersModel();
                            $d = new DrugsModel();
                            $sp = new ShipperModel();
                            foreach ($orders as $order) {
                            	$shippingPrice = $s->getShippingPriceById($order->shipping_price_id);
                            	$customer = $c->getCustomerById($order->customer_id);
                            	$drug = $d->searchDrugById($order->drug_id);
                            	$shipper = $sp->getShipper($order->shipper_id);
                            	$price = $shippingPrice + $drug->price + $order->quantity;
				    		?>
				    		<tr>
				    			<td>  <?= $count ?></td>
				    			<td>  <?= $customer->name ?></td>
				    			<td>  <?= $drug->drug_name?></td>
				    			<td>  <?= $order->quantity ?></td>
				    			<td>  <?= $order->order_date?></td>
				    			<td>  <?= $order->ship_address ?></td>
				    			<td>  <?= $price?></td>
				    			<td>  <?php if($shipper!=null) { echo $shipper->name;
						    				} else {
						    					echo "chưa có";
				    					}?>		
		    					</td>
				    			<td>  <?php if($order->shipped_date!='0000-00-00') { echo $order->shipped_date;
				    				} else {
				    					echo "chưa giao hàng";
				    					}?>		
				    			</td>
				    			<td><a href="dashboard.php?page=order&action=edit&id=<?php echo $order->order_id?>"
				    				class="btn btn-warning">Chỉnh sửa</a> 
				    				<a href="dashboard.php?page=order&action=delete&id=<?php echo $order->order_id; ?>"
				    				onclick="return confirm('Đơn hàng sẽ bị xóa vĩnh viễn?');"
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
