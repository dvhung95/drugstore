<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hang Long Shpt</title>

    <!-- Bootstrap -->
    <link href="libs/css/bootstrap.min.css" rel="stylesheet">
    <link href="libs/css/bootstrap-theme.min.css" rel="stylesheet" /> 
    <link rel="stylesheet" href="libs/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="libs/css/style.css">

    <script type="text/javascript" src="libs/js/script.js"></script>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <header>
      <div class="container">
        <div class="row">
          <div class="logo">
            <h1>Hằng Long Shpt</h1>
          </div>
        </div>

        <?php
          // show cart icon and the number of carts
          function cartNotice(){
            if(isset($_SESSION["cart_products"])){
              $count = $_SESSION["cart_products"];
            } else {
              session_start();
              $_SESSION["cart_products"] ="";
              $count = 0;
            }
             if($count=0){
                $cart_icon = ' <a href="index.php?page=shoping-cart&action=show"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>';
                echo $cart_icon;
              } else {
                 $cart_icon = "<a href='index.php?page=shoping-cart&action=show'> <i class='fa fa-shopping-cart' aria-hidden='true'></i> <span class='badge'>{$count}</span></a>";
                echo $cart_icon;
              }
          } 
        ?>
         <!-- adds active class based on the view -->
        <?php
                $url = "$_SERVER[REQUEST_URI]";
                $parts = parse_url($url);
                parse_str($parts['query'], $query);
                $home =  ( $query['page'] == 'home') ? 'class="active"' : '';
                $product =  ( $query['page'] == 'product') ? 'class="active"' : '';
                $post =  ( $query['page'] == 'post') ? 'class="active"' : '';
                $introduce =  ( $query['page'] == 'introduce') ? 'class="active"' : '';
                $feedback =  ( $query['page'] == 'feedback') ? 'class="active"' : '';
        ?>

        <!-- navigation -->
        <div class="row">
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a <?php echo $home ?>  href="?page=home">Trang chủ</a></li>
              <li><a <?php echo $product ?> href="?page=product">Sản phẩm</a></li>
              <li><a <?php echo $post ?> href="?page=post">Tin tức</a></li>
              <li><a <?php echo $introduce ?> href="?page=introduce">Giới thiệu</a></li>
              <li><a <?php echo $feedback ?> href="?page=feedback">Hỏi đáp</a></li>
            </ul>
            <!-- right navigation -->
            <ul class="nav navbar-nav navbar-right">
              <span id="session">
                  <?php if(isset( $_SESSION['user_name']) && isset($_SESSION['user_password']) ) { ?>
                  <div class="left"> 
                      <li><?php cartNotice(); ?></li>
                  </div>
                  <div class="right"> 
                    <li> Xin chào, <span class="emphasis"><?php echo $_SESSION["user_name"]; ?></span> </li>
                    <li> <a href="?page=login&action=logout">Đăng xuất</a> </li>
                  </div>
                  <?php } else { ?>
                    <div class="left">  
                      <li> <?php cartNotice() ?></li>
                    </div>
                    <div class="right"> 
                        <li><a href="?page=register">Đăng ký</a></li>
                        <li><a href="?page=login">Đăng nhập</a></li>
                    </div>
                  <?php } ?>
              </span>
            </ul>
          </div>
        </div>
        <!-- end navigation -->
      </div>
    </header>
    <!-- end header -->
    <!-- main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="slideshow">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="images/banners/banner1.jpg" alt="drug">
                </div>
                <div class="item">
                  <img src="images/banners/banner2.jpeg" alt="Flower">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Trước</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Sau</span>
              </a>
            </div>
          </div>
          <!-- end slideshow -->
        </div>
        <div class="row">
