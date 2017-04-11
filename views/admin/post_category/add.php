<div class="container"> 
	<div class="title">
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1> <a href="dashboard.php?page=post_category&action=add"> Thêm nhóm bài đăng </a> </h1> <hr>
				<ol class="breadcrumb">
				  <li><a href="dashboard.php/page=home">Trang chủ</a></li>
				  <li><a href="dashboard.php?page=post_category&action=show">Quản lý nhóm bài đăng</a></li>
				  <li><a href="dashboard.php?page=post_category&action=add">Thêm nhóm bài đăng</a></li>
				</ol>			
			</div>
		</div>
	</div> <!-- end title -->
	
	<div class="add_post_category">
		<div class="panel panel-default">
		  	<div class="panel-heading">Thông tin nhóm bài đăng</div>
		  		<div class="panel-body">
                    <form id="add_post_category" method="post" action="dashboard.php?page=post_category&action=add&status=return"
                    enctype="multipart/form-data">
                    <div class="form-group">
			        	<label for="category_name">Tên nhóm</label>
			        	<input name="category_name" class="form-control" style="width: 300px;"> 
		        	</div>
                    <div class="form-group">
			        	<label for="description">Miêu tả</label>
			        	<textarea name="description" rows="5" class="form-control"></textarea>
		        	</div>
                    <button class="btn btn-primary" type="submit" name="save" value="save">Lưu</button>
		        	<a href="dashboard.php?page=post_categoryt&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
		        </form>
		  	</div>
		</div>
	</div> <!-- end add post -->
</div>
<script type="text/javascript" src="libs/js/adminpage/post_category.js"></script>