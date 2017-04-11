
<div class="container"> 
	<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1><a href="dashboard.php?page=shipper&action=add">Thêm người giao hàng</a> </h1> <hr>
					<ol class="breadcrumb">
                     	<li><a href="#">Trang chủ</a></li>
                      	<li><a href="dashboard.php?page=shipper&action=show">Quản lý người giao hàng</a></li>
                  		<li><a href="dashboard.php?page=shipper&action=add">Thêm người giao hàng</a></li>
					</ol>				
				</div>
			</div>
	</div> <!-- end title -->

	<div class="add-shipper">
		<div class="panel panel-default">
		  	<div class="panel-heading">Thông tin cá nhân</div>
		  	<div id="test"></div>
		  		<div class="panel-body">
                    <form id="add_shipper" method="post" action="dashboard.php?page=shipper&action=add&status=return">
                        <div class="form-group">
				        	<label for="name">Họ tên</label>
				        	<input type="text" name="name" class="form-control" style="width: 200px;"> 
                        </div>
                        <div class="form-group">
				        	<label for="date_of_birth">Ngày sinh</label>
				        	<input type="date" name="date_of_birth" class="form-control" style="width: 200px;" > 
		        		</div>
                        <div class="form-group">
				        	<label for="phone_number">Số điện thoại</label>
				        	<input type="text"  name="phone_number" class="form-control" style="width: 200px;" > 
		        		</div>
                        <div class="form-group">
				        	<label for="address">Địa chỉ</label>
				        	<input type="text"  name="address" class="form-control" style="width: 400px;" > 
		        		</div>
                        <button class="btn btn-primary" type="submit" name="save" value="save">Lưu</button>
		        	<a href="dashboard.php?page=shipper&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
		        </form>
		  	</div>
		</div>
	</div> <!-- end add admin -->
</div>
<script type="text/javascript" src="libs/js/adminpage/shipper.js"></script>
