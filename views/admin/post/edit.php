<div class="container"> 
	<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1> <a href="#">Sửa bài đăng</a> </h1> <hr>
					<ol class="breadcrumb">
                       	<li><a href="#">Trang chủ</a></li>
                     	<li><a href="dashboard.php?page=post&action=show">quản lý bài đăng</a></li>
                     	<li><a href="dashboard.php?page=post&action=edit">Sửa bài đăng</a></li>
					</ol>	
                        <a href="dashboard.php?page=post&action=add" class="btn btn-success"><i class="fa fa-plus"
                         aria-hidden="true"></i> Thêm bài đăng </a>				
				</div>
			</div>
	</div> <!-- end title -->
	<!-- form to edit post -->
	<div class="edit-post">
		<div class="panel panel-default">
		  	<div class="panel-heading">Thông tin bài đăng</div>
		  	<div class="panel-body">
                    <form id="add_post" method="post" action="dashboard.php?page=post&action=edit&status=return"
                    enctype="multipart/form-data">
                    <input type="hidden" name="post_id" value="<?= $post->post_id?>"/>
                    <div class="form-group">
			        	<label for="post_title">Tiêu đề</label>
			        	<input type="text" name="post_title" class="form-control" value="<?= $post->post_title?>" style="width: 500px;"> 
		        	</div>
                    <div class="form-group">
			        	<label for="category">Nhóm bài đăng</label>
			        	<select name="post_category_id" class="form-control" style="width: 200px;">
							<?php
					  		foreach ($categories as $category) {
						  			?>
						  			<option value="<?= $category->post_category_id?>" 
										<?php if ($post->post_category_id==$category->post_category_id) {
											echo "class='active'"; } ?>
						  			>
						  				<?php echo $category->category_name?>
						  			</option>
						  			<?php
						  		}
						  	?>
						</select>
                    </div>
                    <div class="form-group">
			        	<label for="content">Nội dung</label>
			        	<textarea rows="10" class="form-control" name="content" value="<?= $post->content?>" required><?= $post->content ?></textarea>
		        	</div>
                    <div class="form-group">
			        	<label for="name">Hình ảnh</label>
			        	<?php $post->image?>

			        	<img src="<?= $post->image?>" width="80" height="80" />
			        	<input type="file" name="image" class="form-control-file"> 
		        	</div>
                    <button class="btn btn-primary" type="submit" name="save" value="save">Thay đổi</button>
		        	<a href="dashboard.php?page=post&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
		        </form>
		  	</div>
		</div>
	</div> <!-- end form to edit post -->
</div>
<script type="text/javascript" src="libs/js/adminpage/post.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>