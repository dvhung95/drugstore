
	<div class="container">     
		<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1> <a href="dashboard.php?page=drug&action=show"> Quản lý thuốc </a> </h1> <hr>
					<ol class="breadcrumb">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="dashboard.php?page=drug&action=show">Quản lý thuốc </a></li>
					</ol>	
                        <a href="dashboard.php?page=drug&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm thuốc mới</a>	
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
						        <th>Nhóm Thuốc</th>
					         	<th>Tên thuốc</th>
					         	<th>mô tả</th>
						        <th>Thành phần</th>
                                <th>Hướng dẫn</th>
                                <th>Thông tin thêm</th>
                              	<th> Giá </th>
                                <th>Hình ảnh</th>
                             	<th>Quản lý</th>
					      	</tr>
					    </thead>
					    <tbody>
                                <?php foreach ($drugs as $drug) {

					    		?>
					    		<tr>
					    			<td>  <?= $count ?></td>
					    			<td>  <?= $drug->drug_category_id ?></td>
					    			<td>  <?= $drug->drug_name ?></td>
					    			<td>  <?php echo substr($drug->description, 0, 300); echo '...'?></td>  			
					    			<td>  <?php echo substr($drug->ingredient, 0, 300); echo '...'?></td>
                                                                <td>  <?php echo substr($drug->guide_to_use, 0, 300); echo '...'?></td>
                                                                <td>  <?= $drug->more_information ?></td>
                                                                <td>  <?= $drug->price?></td>
                                                                <td> <img width="60" height="60" src="<?= $drug->image;?>"/> </td>	
					    			<td><a href="dashboard.php?page=drug&action=edit&id=<?php echo $drug->drug_id?>" 
					    				class="btn btn-warning">Chỉnh sửa</a> 
					    				<a href="dashboard.php?page=drug&action=delete&id=<?php echo $drug->drug_id; ?>"
					    				onclick="return confirm('Sản phẩm sẽ bị xóa vĩnh viễn?');"
					    				 class="btn btn-danger delPostButton">Xóa</a>		
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
