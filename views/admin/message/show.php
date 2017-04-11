<div class="container"> 
		<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1> <a href="dashboard.php?page=message&action=show"> Quản lý tin nhắn </a> </h1> <hr>
					<ol class="breadcrumb">
					  <li><a href="search.php">Trang chủ</a></li>
					  <li><a href="dashboard.php?page=message&action=show">Quản lý tin nhắn</a></li>
					</ol>	
					<a href="dashboard.php?page=message&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Soạn tin nhắn mới</a>			
				</div>
			</div>
		</div> <!-- end title -->

		<?php
			$count=1; 
		?>
		
		<div class="table">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered"> 
					    <thead>
					    	<tr>
						      	<th>#</th>
						        <th>Tiêu đề</th>
						        <th>Hình ảnh </th>
						        <th>Nội dung</th>
						        <th>Quản lý</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	<?php
					    	$count = 1;
					    	foreach ($messages as $message) {
					    		?>
					    		<tr>
					    			<td> <?= $count ?></td>
					    			<td>  <?= $message->title ?></td>
					    			<td> <img width="60" heght="60" src="<?= $message->image;?>"/> </td>
					    			<td> <?php echo substr($message->content, 0, 300); echo '...'?>  </td>	
					    			<td>
					    				<a href="dashboard.php?page=message&action=delete&id=<?= $message->message_id ?>"
					    				onclick="return confirm('Tin nhắn sẽ bị xóa vĩnh viễn?');"
					    				 class="btn btn-danger">Xóa</a>		
						        	</td>
					    		</tr>
					    		<?php 
					    		$count++;
					    	}
					    	?>     
					    </tbody>
					</table> 
				</div>
			</div> 
		</div> <!-- end table -->

</div><!--  end container -->
