<div class="container"> 
	<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1> <a href="#">Thêm người giao hàng</a> </h1> <hr>
					<ol class="breadcrumb">
                     	<li><a href="#">Trang chủ</a></li>
                      	<li><a href="dashboard.php?page=shipper&action=show">Quản lý người giao hàng</a></li>
                  		<li><a href="dashboard.php?page=shipper&action=add">Thêm người giao hàng</a></li>
					</ol>	
                        <a href="dashboard.php?page=shipper&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm người giao hàng</a>				
				</div>
			</div>
	</div> <!-- end title -->

	<div class="edit-shipper">
		<div class="panel panel-default">
		  	<div class="panel-heading">Thông tin tài khoản</div>
		  		<div class="panel-body">
                    <form id="add_shipper" method="post" action="dashboard.php?page=shipper&action=edit&status=return"
                    enctype="multipart/form-data">
                    <input type="hidden" style="width: 200px;" name="shipper_id" value="<?= $shipper->shipper_id?>"/>
                    <div class="form-group">
			        	<label for="name">Họ tên</label>
			        	<input style="width: 200px;" name="name" class="form-control" value="<?= $shipper->name?>"> 
		        	</div>
                    <div class="form-group">
			        	<label for="date_of_birth">Nhập lại mật khẩu</label>
			        	<input type="date" style="width: 200px;" name="date_of_birth" class="form-control" value="<?= $shipper->date_of_birth?>" > 
		        	</div>
                    <div class="form-group">
			        	<label for="phone_number">Số điện thoại</label>
			        	<input style="width: 200px;" name="phone_number"  class="form-control" value="<?= $shipper->phone_number?>" > 
		        	</div>
                    <div class="form-group">
			        	<label for="address">Địa chỉ</label>
			        	<input style="width: 400px; name="address" class="form-control" value="<?= $shipper->address?>" > 
		        	</div>
                    <button class="btn btn-primary" type="submit" name="save" value="save">Thay đổi</button>
		        	<a href="dashboard.php?page=shipper&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
		        </form>
		  	</div>
		</div>
	</div> <!-- end edit shipper -->
</div>
<script type="text/javascript" src="libs/js/adminpage/shipper.js"></script>
