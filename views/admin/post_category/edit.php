<div class="container"> 
	<div class="title">
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1> <a href="dashboard.php?page=post_category&action=show"> Quản lý nhóm bài đăng </a> </h1> <hr>
				<ol class="breadcrumb">
				  <li><a href="#">Trang chủ</a></li>
				  <li><a href="dashboard.php?page=post_category&action=show">Quản lý nhóm bài đăng</a></li>
				</ol>	
				<a href="dashboard.php?page=post_category&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm nhóm bài đăng</a>			
			</div>
		</div>
	</div> <!-- end title -->
	
	<div class="edit-post-category">
		<div class="panel panel-default">
		  	<div class="panel-heading">Thông tin nhóm bài đăng</div>
		  	<div class="panel-body">
                    <form id="add_post_category" method="post" action="dashboard.php?page=post_category&action=edit&status=return">
                    <input type="hidden" name="post_category_id" value="<?= $cate->post_category_id?>"/>
                    <div class="form-group">
			        	<label for="category_name">Tên nhóm</label>
			        	<input type="text" name="category_name" class="form-control" value="<?= $cate->category_name?>" style="width: 300px;" required> 
		        	</div>
                    <div class="form-group">
			        	<label for="description">Miêu tả</label>
			        	<textarea rows="5" class="form-control" name="description" value="<?= $cate->description?>" required><?= $cate->description ?></textarea>
		        	</div>
                    <button class="btn btn-primary" type="submit" name="save" value="save">Thay đổi</button>
		        	<a href="dashboard.php?page=post_category&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
		        </form>
		  	</div>
		</div>
	</div> <!-- end edit post -->
</div>
<script type="text/javascript" src="libs/js/adminpage/post_category.js"></script>

