<div class="container"> 
	<div class="title">
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1> <a href="#"> Sửa Phí chuyển </a></h1> <hr>
				<ol class="breadcrumb">
                	<li><a href="#">Trang chủ</a></li>
                  	<li><a href="dashboard.php?page=shippingprice&action=show">Quản lý Phí chuyển</a></li>
                  	<li><a href="dashboard.php?page=shippingprice&action=add">Thêm phí chuyển</a></li>
				</ol>	
            		<a href="dashboard.php?page=shippingprice&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm phí chuyển</a>				
			</div>
		</div>
	</div> <!-- end title -->

	<div class="add-shippingprice">
		<div class="panel panel-default">
		  	<div class="panel-heading">Thông tin Phí Chuyển</div>
		  		<div class="panel-body">
		  			<div class="col-xs-12 col-sm-3">
	                    <form id="add_shippingpriceprice" method="post" action="dashboard.php?page=shippingprice&action=edit&status=return">
	                    	<input type="hidden" name="shipping_price_id" value="<?= $shippingprice->shipping_price_id?>">
	                        <div class="form-group">
					        	<label for="ship_city">Tên thành phố/tỉnh</label>
					        	<input type="text" name="ship_city" class="form-control" value="<?= $shippingprice->ship_city?>"> 
	                        </div>
	                        <div class="form-group">
					        	<label for="price">Giá</label>
					        	<input type="float" name="price" class="form-control" value="<?= $shippingprice->price?>"> 
			        		</div>
	                        <button class="btn btn-primary" type="submit" name="save" value="save">Lưu</button>
			        		<a href="dashboard.php?page=shippingprice&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
			        	</form>
			        </div>
		  	</div>
		</div>
	</div> <!-- end add shippingprice -->
</div>
<script type="text/javascript" src="libs/js/adminpage/shippingprice.js"></script>
