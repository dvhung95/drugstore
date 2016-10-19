<div class="container"> 
		<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1> <a href="dashboard.php?page=post&action=show"> Quản lý bài đăng </a> </h1> <hr>
					<ol class="breadcrumb">
					  <li><a href="search.php">Trang chủ</a></li>
					  <li><a href="dashboard.php?page=post&action=show">Quản lý bài đăng</a></li>
					</ol>	
					<a href="dashboard.php?page=post&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm bài đăng</a>			
				</div>
			</div>
		</div> <!-- end title -->

		<?php
			$count='0'; 
		?>
		
		<div class="table">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered"> 
					    <thead>
					    	<tr>
						      	<th>#</th>
						      	<th> ID </th>
						        <th>Tiêu đề</th>
						        <th>Hình ảnh </th>
						      	<th>Nhóm bài đăng</th>
						        <th>Nội dung</th>
						        <th>Quản lý</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	<?php foreach ($posts as $post) {
					    		$count++;
					    		?>
					    		<tr>
					    			<td> <?= $count ?></td>
					    			<td> <?php echo substr($post->post_id, 0, 100);?> </td>
					    			<td>  <?= $post->post_title ?></td>
					    			<td> <img width="60" heght="60" src="<?= $post->image;?>"/> </td>
					    			<td>  <?= $post->post_category_id ?></td>   			
					    			<td> <?php echo substr($post->content, 0, 300); echo '...'?>  </td>	
					    			<td><a href="dashboard.php?page=post&action=edit&id=<?= $post->post_id?>"
					    				class="btn btn-warning">Chỉnh sửa</a> 
					    				<a href="dashboard.php?page=post&action=delete&id=<?= $post->post_id ?>"
					    				onclick="return confirm('Bài viết sẽ bị xóa vĩnh viễn?');"
					    				 class="btn btn-danger">Xóa</a>		
						        	</td>
					    		</tr>
					    		<?php 
					    	}
					    	?>     
					    </tbody>
					</table> 
				</div>
			</div> 
		</div> <!-- end table -->

</div><!--  end container -->
