  
        <!-- news -->
        <div class=" col-sm-8 col-xs-12 news">
          <h3 class="col-sm-12">Tin tức</h3>
          <div style="clear: both"></div>
      		<?php
          $c1 = 0; 
          foreach ($posts as $post){
            $c1++;
            if($c1 < 5){?>
              <div class="product row">
                <div class="col-sm-3 col-xs-6 product-img">
                  <img src="<?=$post->image ?>" alt="">
                </div>
                <div class="col-sm-9 col-xs-6 product-title">
                  <a href="index.php?postid=<?=$post->post_id?>"><?=substr($post->post_title, 0 ,100)?></a>
                </div>
                <div class="col-sm-9 col-xs-6 product-body">
                  <?=substr($post->content, 0, 300)." ..."?>
                </div>
                <div class="col-sm-9 col-xs-6 more text-right">
                  <a href="index.php?postid=<?=$post->post_id?>">Xem thêm</a>
                </div>
              </div>
  		      <?php } else break;
          }?>
        </div>
        <!-- end news -->

         <!-- right-bar -->
          <?php include('right-bar.php'); ?>
