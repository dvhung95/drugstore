<div id="create_order">
<?php
	$quantity = $_POST['quantity'];
	$drug_id = $_POST['drug_id'];
	$drug_name = $_POST['drug_name'];
	$price = $_POST['price'];
	$c = new CustomersModel();
	$customer_id = $c->getLoggedCustomerId($_SESSION['user_name'],$_SESSION['user_password']);
?>
	<div class="col-xs-8 col-sm-7 col-sm-push-1">
		<form id="add_order" method="POST" action="index.php?page=order&action=add&status=return">
			<div class="row title">
				<div class="col-xs-12 col-sm-9 col-sm-push-3">
					Đơn hàng của bạn
				</div>	
			</div>	
			<div class="row drug-information">
				<input id="price" type="hidden" name="price" value="<?=$price?>" >
				<input type="hidden" name="customer_id" value="<?=$customer_id?>">
				<input type="hidden" name="drug_id" value="<?=$drug_id?>">
				<p>Thông tin sản phẩm: </p>
				<div class="col-xs-12 col-sm-11 col-sm-push-1">
					<div class="row">
						<span>Tên sản phẩm: <?= $drug_name?></span>
					</div>	
					<div class="row">
						<span>Số lượng: </span>
						<input type="number" id="quantity" name="quantity" style="width: 50px" min="1" value="<?=$quantity?>">
					</div>
					<div class="row">
						<span>Đơn giá (VND): </span> <span id="tmp_price"><?=$price?></span>
					</div>
				</div>
			</div>
			<div class="row order-information">
				<p>Thông tin giao nhận</p>
				<div class="col-xs-12 col-sm-11 col-sm-push-1">
					<div class="row">
						<?php
							$date = date('Y-m-d');
							$date_show = date('d-m-Y');
						?>
						<span> Ngày đặt hàng: <?=$date_show?></span>
						<input type="hidden" name="order_date" value="<?=$date?>">
					</div>
					<div class="row">
						<span>Nơi nhận hàng: </span>
						<input type="text" name="ship_address" style="width: 300px; margin: 5px auto;"  required="">
					</div>
					<div class="row">
						<span>Thành phố/tỉnh</span>
						<input type="text" id="ship_city" name="ship_city" style="width: 100px; margin: 5px auto;" required="">
					</div>
					<div class="row">
						<span>Phí giao hàng (VND):</span> <span id="tmp_shipping_price"></span>
					</div>
				</div>
			</div>
			<div class="row total-price">
				<span>Tổng cộng (VND): </span> <span id="tmp_total_price"></span>
			</div>
			<div class="row">
				<button class="btn btn-warning" type="submit" name="submit">Đặt hàng</button>
			</div>
		</form>
	</div>
    	
 <?php include('views/user/right-bar.php'); ?>  
</div>
<script type="text/javascript" src="libs/js/userpage/order.js"></script>