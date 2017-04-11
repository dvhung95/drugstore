<div class="container"> 
		<div class="title">
			<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1> <a href="dashboard.php?page=drug_category&action=show"> Quản lý nhóm thuốc </a> </h1> <hr>
					<ol class="breadcrumb">
					  <li><a href="dashboard.php?page=drug&action=show">Trang chủ</a></li>
					  <li><a href="dashboard.php?page=drug_category&action=show">Quản lý nhóm thuốc</a></li>
					</ol>	
					<a href="dashboard.php?page=drug_category&action=add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm nhóm thuốc</a>			
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
						        <th> Tên nhóm </th>
						        <th> Miêu tả</th>
						        <th>Quản lý</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	<?php 
					    		$count=1;
					    		foreach ($cates as $cate) {
					    		?>
					    		<tr>
					    			<td> <?= $count ?></td>
					    			<td>  <?= $cate->category_name?></td>
					    			<td>  <?= $cate->description ?></td>   			
					    			<td><a href="dashboard.php?page=drug_category&action=edit&id=<?= $cate->drug_category_id?>"
					    				class="btn btn-warning">Chỉnh sửa</a> 
					    				<a href="dashboard.php?page=drug_category&action=delete&id=<?= $cate->drug_category_id ?>"
					    				onclick="return confirm('Nhóm thuốc sẽ bị xóa vĩnh viễn?');"
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
