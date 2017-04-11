<div class="container"> 
	<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1> <a href="dashboard.php?page=message&action=add">Thêm mới tin nhắn </a></h1> <hr>
					<ol class="breadcrumb">
                       	<li><a href="#">Trang chủ</a></li>
                     	<li><a href="dashboard.php?page=message&action=show">Quản lý tin nhắn</a></li>
                     	<li><a href="dashboard.php?page=message&action=add">Thêm mới tin nhắn</a></li>
					</ol>				
				</div>
			</div>
	</div> <!-- end title -->
	<!-- form to add message -->
	<div class="add-message">
		<div class="panel panel-default">
		  	<div class="panel-heading">Soạn tin nhắn</div>
		  	<div class="panel-body">
                    <form id="add_message" method="post" action="dashboard.php?page=message&action=add&status=return"
                    enctype="multipart/form-data">
                    <div class="form-group">
                    	<div class="row title">
                    		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					        	<label for="title">Tiêu đề</label>
			        			<input type="text" id="title" name="title" class="form-control"> 
                    		</div>
                    	</div>
		        	</div>
                    <div class="form-group">
                    	<div class="row content">
                    		<div class="col-xs-12 col-sm-4">
					        	<label for="content">Nội dung</label>
		        				<textarea rows="10" class="form-control" id="content"  name="content"></textarea>
                    		</div>
                    	</div>
		        	</div> 
		        	<div class="form-group">
                    	<div class="row content">
                    		<div class="col-xs-12 col-sm-4">
					        	<label for="username">Tên đăng nhập của khách hàng</label>
					        	<p>Lưu ý: Không điền nếu muốn gửi tin nhắn cho tất cả</p>
		        				<input type="text" class="form-control" name="username">
                    		</div>
                    	</div>
		        	</div>
                    <div class="form-group">
			        	<label for="name">Hình ảnh </label>
			        	<input type="file" id="image" name="image" class="form-control-file"> 
		        	</div>
                    <button class="btn btn-primary" type="submit" name="save" value="save">Lưu</button>
		        	<a href="dashboard.php?page=message&action=show" class="btn btn-default" name ="cancel"> Hủy bỏ</a>
		        </form>
		  	</div>
		</div>
	</div> <!-- end form to add message -->
</div>
<script>
    CKEDITOR.replace( 'content' );
</script>
<script type="text/javascript" src="libs/js/adminpage/message.js"></script> 
