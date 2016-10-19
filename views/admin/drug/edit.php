
	<div class="container"> 
		<div class="title">
				<div class="row">	
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1> sửa sản phẩm </h1> <hr>
						<ol class="breadcrumb">
                                                    <li><a href="#">Trang chủ</a></li>
                                                  <li><a href="dashboard.php?page=drug&action=show">quản lí sản phẩm</a></li>
                                                  <li><a href="dashboard.php?page=drug&action=edit">sửa sản phẩm</a></li>
						</ol>	
                                                <a href="dashboard.php?page=drug&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm Sản Phẩm</a>				
					</div>
				</div>
		</div> <!-- end title -->

		<div class="edit-drug">
			<div class="panel panel-default">
			  	<div class="panel-heading">Thông tin sản phẩm</div>
			  	<div class="panel-body">
                        <form method="post" action="dashboard.php?page=drug&action=edit&status=return"
                        enctype="multipart/form-data">
                            
                        <input type="hidden" name="drug_id" value="<?= $drug->drug_id?>"/>
                        <div class="form-group">
				        	<label for="drug_category_id">Nhóm thuốc</label>
				        	<input type="text" name="drug_category_id" class="form-control" value="<?=  $drug->drug_category_id?>" required> 
			        	</div>
                        <div class="form-group">
				        	<label for="drug_name">Tên thuốc</label>
				        	<input type="text" name="drug_name" class="form-control" value="<?= $drug->drug_name?>" required> 
			        	</div>
                       <div class="form-group">
				        	<label for="description">Miêu tả </label>
				        	<textarea name="description" rows="3" class="form-control" 
				        	value="<?= $drug->description?>" required=""> <?= $drug->description?></textarea>
			        	</div>
                        <div class="form-group">
				        	<label for="ingredient">Thành phần</label>
				        	<textarea name="ingredient"  rows="5" class="form-control" 
				        	value="<?= $drug->ingredient?>" required=""><?= $drug->ingredient?></textarea>
			        	</div>
                        <div class="form-group">
				        	<label for="guide_to_use">Cách dùng</label>
				        	<textarea name="guide_to_use"  rows="5" class="form-control" 
				        	value="<?= $drug->guide_to_use?>" required=""><?= $drug->guide_to_use?></textarea>
			        	</div>
                        <div class="form-group">
				        	<label for="more_information">Thông tin thêm</label>
				        	<textarea name="more_information"  rows="3" class="form-control" value="<?= $drug->more_information?>"><?= $drug->more_information?></textarea>
			        	</div>
                        <div class="form-group">
				        	<label for="price">Giá</label>
				        	<input type="text" name="price" class="form-control" value="<?= $drug->price?>" required> 
			        	</div>
                        
                        <div class="form-group">
				        	<label for="name">Hình ảnh </label>
				        	<?php $drug->image?>
				        	<img src="<?= $drug->image?>" width="80" height="80" />
				        	<input type="file" name="image" class="form-control"> 
			        	</div>
                        <button class="btn btn-primary" type="submit" name="save" value="save">Thay đổi</button>
			        	<a href="dashboard.php?page=drug&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
			        </form>
			  	</div>
			</div>
		</div> <!-- end edit drug -->
