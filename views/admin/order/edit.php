
<div class="container"> 
	<div class="title">
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1> <a href="#">Sửa thông tin đơn hàng </a></h1> <hr>
				<ol class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="dashboard.php?page=order&action=show">Quản lý đơn hàng</a></li>
                    <li><a href="dashboard.php?page=order&action=edit">Sửa thông tin đơn hàng</a></li>
				</ol>					
			</div>
		</div>
	</div> <!-- end title -->

	<div class="edit-order">
		<div class="panel panel-default">
		  	<div class="panel-heading">Thông tin đơn hàng</div>
		  		<div class="panel-body">
                    <form id="edit_order" method="post" action="dashboard.php?page=order&action=edit&status=return">
                        
                    <input type="hidden" name="order_id" value="<?= $order->order_id?>"/>
                    <div class="form-group">
			        	<label for="shipper_id">Người giao hàng</label>
			        	<select name="shipper_id" class="form-control" style="width: 200px;">
					  		<option value=""> </option>			        		
							<?php
					  		foreach ($shippers as $shipper) {
						  			?>
						  			<option value="<?= $shipper->shipper_id?>" 
						  				<?php 
							  				if($shipper->shipper_id == $order->shipper_id) {echo "selected";}
							  			?>					  			
							  		>
							  			<?= $shipper->name?>
						  			</option>
						  			<?php
						  		}
					  		?>
						</select> 
		        	</div>
		        	<div class="form-group">
		        		<label for="shipped_date"></label>
		        		<input type="date" name="shipped_date" class="form-control" style="width: 200px;"
		        			<?php 
				  				if($order->shipped_date!='0000-00-00') {echo "value='$order->shipped_date'";}
				  			?>		
		        		>
		        	</div>
                    
                    <button class="btn btn-primary" type="submit" name="save" value="save">Thay đổi</button>
		        	<a href="dashboard.php?page=order&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
		        </form>
		  	</div>
		</div>
	</div> <!-- end edit drug -->
</div>
<script type="text/javascript" src="libs/js/adminpage/drug.js"></script>