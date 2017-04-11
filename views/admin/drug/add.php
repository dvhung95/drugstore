
<div class="container"> 
	<div class="title">
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1> <a href="dashboard.php?page=drug&action=add">Thêm sản phẩm </a> </h1> <hr>
				<ol class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="dashboard.php?page=drug&action=show">Quản lí thuốc </a></li>
                    <li><a href="dashboard.php?page=drug&action=add">Thêm thuốc mới</a></li>
				</ol>					
			</div>
		</div>
	</div> <!-- end title -->
	<!-- form to add drug -->
	<div class="add-drug">
		<div class="panel panel-default">
		  	<div class="panel-heading">Thông tin thuốc</div>
		  	<div class="panel-body">
		  		<div class="row">
		  			<div class="col-xs-12 col-sm-5">
		  				<form id="add_drug" method="post" action="dashboard.php?page=drug&action=add&status=return" enctype="multipart/form-data">
			                <div class="form-group">
					        	<label for="name">Nhóm thuốc</label>
					        	<select name="drug_category_id" class="form-control" style="width: 200px;">
									<?php
							  		foreach ($categories as $category) {
								  			?>
								  			<option value="<?= $category->drug_category_id?>">
								  				<?php echo $category->category_name?>
								  			</option>
								  			<?php
								  		}
							  		?>
								</select>
			                </div>
			                <div class="form-group">
					        	<label for="name">Tên thuốc</label>
					        	<input name="drug_name" class="form-control"> 
				        	</div>
			                <div class="form-group">
					        	<label for="name">Miêu tả</label>
					        	<textarea name="description" rows="3" class="form-control" ></textarea>
				        	</div>
				        	<div class="form-group">
					        	<label for="ingredient">Thành phần</label>
					        	<textarea name="ingredient"  rows="5" class="form-control"  ></textarea>
				        	</div>
				        	<div class="form-group">
					        	<label for="name">Cách dùng</label>
					        	<textarea  name="guide_to_use"  rows="5" class="form-control" ></textarea>
				        	</div>
				        	<div class="form-group">
					        	<label for="name">Thông tin thêm</label>
					        	<textarea  name="more_information"  rows="3" class="form-control"></textarea>
				        	</div>
			                <div class="form-group">
					        	<label for="name">Giá</label>
					        	<input id="price" name="price" class="form-control" style="width: 200px;" > 
				        	</div>
			                <div class="form-group">
					        	<label for="name">Hình ảnh</label>
					        	<input type="file" id="image" name="image" class="form-control-file"> 
				        	</div>
			                                
			                <button class="btn btn-primary" type="submit" name="save" value="save">Lưu</button>
				        	<a href="dashboard.php?page=drug&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
				        </form>
		  			</div>
		  		</div> <!-- end row -->
		  	</div>
		</div>
	</div> <!-- end form to add drug -->
</div>
<script type="text/javascript" src="libs/js/adminpage/drug.js"></script>
