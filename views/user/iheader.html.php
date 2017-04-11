<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hằng Long Shpt</title>
  <!-- Css library -->
  <link href="libs/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="libs/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="libs/css/style.css">
  <!-- jQuery library -->
  <script src="libs/js/jquery.min.js"></script>
  <script src="libs/js/bootstrap.min.js"></script>
  <script src="libs/js/jquery.validate.min.js"></script>
  <script src="libs/js/additional-methods.min.js"></script>
  <!-- for facebook comment -->
  <meta property="fb:app_id" content="{1928234804070443}" />
  <meta property="fb:admins" content="{100002804986223}"/>

</head>
<body>
    <!-- js for facebook comment -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- end js for facebook comment -->

    <header>
      <div class="container">
        <div class="row">
          <div class="logo">
            <h1>Hằng Long Shpt</h1>
          </div>
        </div>

        <?php
          // show message icon and the number of messages
          function showMessage(){
            $count = 0;
            $mes = new MessageModel();
            $count = sizeof($mes->getMessagesByCustomer($_SESSION['user_name']));
                 $icon = "<a href='index.php?page=message&action=show'> <i class='fa fa-envelope' aria-hidden='true'></i><span class='badge'>$count</span></a>";
                echo $icon;
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
                  <?php 
                  if(isset( $_SESSION['user_name']) && isset($_SESSION['user_password']) ) { ?>
                          <div class="left"> 
                              <li><?php showMessage(); ?></li>
                          </div>
                          <div class="right"> 
                            <li> Xin chào, <a href="?page=user&action=show"><span class="emphasis"><?php echo $_SESSION["user_name"]; ?></span></a> </li>
                            <li> <a href="?page=login&action=logout">Đăng xuất</a> </li>
                          </div>
                  <?php 
                  } else { ?>
                    <div class="left">  
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
          <!-- slide show -->
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



