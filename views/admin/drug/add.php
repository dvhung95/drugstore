
	<div class="container"> 
		<div class="title">
				<div class="row">	
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1> Thêm sản phẩm </h1> <hr>
						<ol class="breadcrumb">
                                                    <li><a href="#">Trang chủ</a></li>
                                                  <li><a href="dashboard.php?page=drug&action=show">quản lí sản phẩm</a></li>
                                                  <li><a href="dashboard.php?page=drug&action=add">thêm mới sản phẩm</a></li>
						</ol>	
                                                <a href="dashboard.php?page=drug&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm Sản Phẩm</a>				
					</div>
				</div>
		</div> <!-- end title -->

		<div class="add-drug">
			<div class="panel panel-default">
			  	<div class="panel-heading">Thông tin thuốc</div>
			  	<div class="panel-body">
                                    <form method="post" action="dashboard.php?page=drug&action=add&status=return" enctype="multipart/form-data">
                                        <div class="form-group">
				        	<label for="name">Nhóm thuốc</label>
				        	<input type="text"  name="drug_category_id" class="form-control" required=""> 
                                        </div>
                                        <div class="form-group">
				        	<label for="name">Tên thuốc</label>
				        	<input type="text"  name="drug_name" class="form-control" required=""> 
			        	</div>
                                        <div class="form-group">
				        	<label for="name">Miêu tả</label>
				        	<textarea name="description" rows="3" class="form-control" required=""></textarea>
			        	</div>
			        	<div class="form-group">
				        	<label for="ingredient">Thành phần</label>
				        	<textarea name="ingredient"  rows="5" class="form-control" required=""></textarea>
			        	</div>
			        	<div class="form-group">
				        	<label for="name">Cách dùng</label>
				        	<textarea name="guide_to_use"  rows="5" class="form-control" required=""></textarea>
			        	</div>
			        	<div class="form-group">
				        	<label for="name">Thông tin thêm</label>
				        	<textarea name="more_information"  rows="3" class="form-control"></textarea>
			        	</div>
                                        <div class="form-group">
				        	<label for="name">Giá</label>
				        	<input type="text" name="price" class="form-control" required=""> 
			        	</div>
                                        <div class="form-group">
				        	<label for="name">Hình ảnh</label>
				        	<input type="file" name="image" class="form-control"> 
			        	</div>
                                        
                                        <button class="btn btn-primary" type="submit" name="save" value="save">Lưu</button>
			        	<a href="dashboard.php?page=drug&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
			        </form>
			  	</div>
			</div>
		</div> <!-- end add drug -->
