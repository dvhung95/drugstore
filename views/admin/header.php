<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hằng Long Shpt</title>
  	<!-- Css library -->
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/css/style-quan-tri.css">
	<link rel="stylesheet" href="libs/css/font-awesome.min.css">
	<!-- jQuery library -->
  	<script src="libs/js/jquery.min.js"></script>
  	<script src="libs/js/bootstrap.min.js"></script>
  	<script src="libs/js/jquery.validate.min.js"></script>
  	<script src="libs/js/additional-methods.min.js"></script>
  	<!-- text editor -->
  	 <script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Hằng Long Shpt</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="dashboard.php?page=drug&action=show"><i class="fa fa-medkit fa-fw" aria-hidden="true"></i>Quản lý thuốc</a></li>
					<li><a href="dashboard.php?page=post&action=show"><i class="fa fa-file-text fa-fw" aria-hidden="true"></i>Bài đăng</a></li>
					<li><a href="dashboard.php?page=order&action=show"><i class="fa fa-bookmark fa-fw" aria-hidden="true"></i> Đơn đặt hàng </a></li>
					<li><a href="dashboard.php?page=customer&action=show"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Tài khoản người dùng</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list fa-fw" aria-hidden="true"></i>Khác<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="dashboard.php?page=post_category&action=show">Nhóm bài đăng</a></li>
							<li><a href="dashboard.php?page=drug_category&action=show">Nhóm thuốc</a></li>
							<li><a href="dashboard.php?page=shipper&action=show">Người giao hàng</a></li>
							<li><a href="dashboard.php?page=shippingprice&action=show">Phí giao hàng</a></li>
							<li><a href="dashboard.php?page=feedback&action=show">Hỏi đáp người dùng</a></li>
							<li><a href="dashboard.php?page=admin&action=show">Tài khoản quản trị</a></li>
							<li><a href="dashboard.php?page=message&action=show">Tin nhắn</a></li>
						</ul>
					</li>
				</ul>
				<!-- right-navigation -->
			 	<?php 
			      if(!empty($_SESSION['admin_name']) && !empty($_SESSION['admin_password']) ) {?>
		            <ul class="nav navbar-nav navbar-right">
				      <li><a href="index.php?page=login&action=logout"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất
				    </ul>
			      <?php 
			      } else { 
			      	header("Location: index.php?page=login");
			      } ?>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav> <!-- end navigation -->