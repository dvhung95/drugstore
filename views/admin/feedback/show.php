
	<div class="container"> 
		<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1><a href="#"> Hỏi đáp người dùng</a> </h1> <hr>
					<ol class="breadcrumb">
                        <li><a href="#">Trang chủ</a></li>
                      	<li><a href="dashboard.php?page=feedback&action=show"> Hỏi đáp người dùng</a></li>
					</ol>				
				</div>
			</div>
		</div> <!-- end title -->

		<div class="table">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered"> 
					    <thead>
					    	<tr>
						        <th>#</th>
					         	<th>Tên người gửi</th>
						         <th>Email</th>
						        <th>Điện thoại</th>
						        <th>Nội dung</th>
						        <th>Trạng thái</th>
						        <th>Quản lý</th>
					      	</tr>
					    </thead>
					    <tbody>
                                <?php 
                                $count = 1;
                                foreach ($feedbacks as $fb) {
					    		?>
					    		<tr>
					    			<td>  <?= $count ?></td>
					    			<td>  <?= $fb->sender_name ?></td>
					    			<td>  <?= $fb->email ?></td>
					    			<td>  <?= $fb->phone_number ?></td>
					    			<td>  <?= $fb->content ?></td>
					    			<td>  <?= $fb->is_replied ?></td>	
					    			<td><a href="dashboard.php?page=feedback&action=delete&id=<?php echo $fb->feedback_id; ?>"
					    				onclick="return confirm('Xóa câu hỏi vĩnh viễn?');"
					    				 class="btn btn-danger ">Xóa</a>
					    				<a href="dashboard.php?page=feedback&action=replied&id=<?php echo $fb->feedback_id?>" 
					    				onclick="return confirm('Xác nhận đã trả lời?');" 
					    				class="btn btn-warning">Trả lời</a> 
					    						
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
