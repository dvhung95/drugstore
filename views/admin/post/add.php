<div class="container"> 
	<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1><a href="dashboard.php?page=post&action=add"> Thêm bài đăng </a></h1> <hr>
					<ol class="breadcrumb">
                       	<li><a href="#">Trang chủ</a></li>
                     	<li><a href="dashboard.php?page=post&action=show">Quản lý bài đăng</a></li>
                     	<li><a href="dashboard.php?page=post&action=add">Thêm mới bài đăng</a></li>
					</ol>				
				</div>
			</div>
	</div> <!-- end title -->
	<!-- form to add post -->
	<div class="add-post">
		<div class="panel panel-default">
		  	<div class="panel-heading">Thông tin bài đăng</div>
		  	<div class="panel-body">
                    <form id="add_post" method="post" action="dashboard.php?page=post&action=add&status=return"
                    enctype="multipart/form-data">
                    <div class="form-group">
			        	<label for="post_title">Tiêu đề</label>
			        	<input id="post_title" name="post_title" class="form-control" style="width: 500px;"> 
		        	</div>
                    <div class="form-group">
			        	<label for="category">Nhóm bài đăng</label>
			        	<select name="post_category_id" class="form-control" style="width: 200px;">
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
			        	<textarea rows="10" class="form-control" id="content" name="content"></textarea>
		        	</div>
                    <div class="form-group">
			        	<label for="name">Hình ảnh </label>
			        	<input type="file" id="image" name="image" class="form-control-file"> 
		        	</div>
                    <button class="btn btn-primary" type="submit" name="save" value="save">Lưu</button>
		        	<a href="dashboard.php?page=post&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
		        </form>
		  	</div>
		</div>
	</div> <!-- end form to add post -->
</div>
<script type="text/javascript" src="libs/js/adminpage/post.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
