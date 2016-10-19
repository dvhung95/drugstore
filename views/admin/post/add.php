	<div class="container"> 
		<div class="title">
				<div class="row">	
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1> Thêm bài đăng </h1> <hr>
						<ol class="breadcrumb">
	                       	<li><a href="#">Trang chủ</a></li>
	                     	<li><a href="dashboard.php?page=post&action=show">quản lý bài đăng</a></li>
	                     	<li><a href="dashboard.php?page=post&action=add">thêm mới bài đăng</a></li>
						</ol>	
	                        <a href="dashboard.php?page=post&action=add" class="btn btn-success"><i class="fa fa-plus"
	                         aria-hidden="true"></i> Thêm bài đăng </a>				
					</div>
				</div>
		</div> <!-- end title -->
		<div class="message">
		</div>
		
		<div class="add-post">
			<div class="panel panel-default">
			  	<div class="panel-heading">Thông tin bài đăng</div>
			  	<div class="panel-body">
                        <form method="post" action="dashboard.php?page=post&action=add&status=return"
                        enctype="multipart/form-data">
                        <div class="form-group">
				        	<label for="post_title">Tiêu đề</label>
				        	<input type="text" name="post_title" class="form-control" required> 
			        	</div>
                        <div class="form-group">
				        	<label for="category">Nhóm bài đăng</label>
				        	<select name="post_category_id" class="form-control" required>
								<?php
						  		foreach ($categories as $category) {
							  			?>
							  			<option value="<?= $category->post_category_id?>">
							  				<?php echo $category->category_name?>
							  			</option>
							  			<?php
							  		}
							  	?>
							</select>
                        </div>
                        <div class="form-group">
				        	<label for="content">Nội dung</label>
				        	<textarea rows="10" class="form-control" name="content" required></textarea>
			        	</div>
                        <div class="form-group">
				        	<label for="name">Hình ảnh (URL)</label>
				        	<input type="file" name="image" class="form-control"> 
			        	</div>
                        <button class="btn btn-primary" type="submit" name="save" value="save">Lưu</button>
			        	<a href="dashboard.php?page=post&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
			        </form>
			  	</div>
			</div>
		</div> <!-- end add post -->

