<?php 
  $drugsModel = new DrugsModel();
  $postsModel = new PostsModel();
?>
 
          <!-- new products -->
          <div class="col-sm-8 col-xs-12 new-products">
            <h3>Sản phẩm mới</h3>
            <!-- product row -->
      			<?php
            $c = 0; 
            foreach ($drugsModel->getAllDrugs() as $drugkey => $drugvalue){
              $c++;
              if($c < 4){?>
              <div class="product row">
                <div class="col-sm-3 col-xs-6 product-img">
                  <img src="<?=$drugvalue->image ?>" alt="">
                </div>
                <div class="col-sm-9 col-xs-6 product-title">
                  <a href="index.php?drugid=<?=$drugvalue->drug_id?>"><?=substr($drugvalue->drug_name, 0 ,100)?></a>
                </div>
                <div class="col-sm-9 col-xs-6 product-body">
                  <?=substr($drugvalue->description, 0, 300)." ..."?>
                </div>
                <div class="col-sm-9 col-xs-6 more text-right">
                  <a href="index.php?drugid=<?=$drugvalue->drug_id?>">Xem thêm</a>
                </div>
              </div>
  			      <?php } else break;
            }?>

            <!-- end product row -->

          </div>
          <!-- end new products -->
           <!-- right-bar -->
            <?php include('right-bar.php'); ?>
        </div>
        
        <!-- news -->
        <div class="news">
          <h3 class="col-sm-12">Tin tức</h3>
          <div style="clear: both"></div>
      		<?php
          $c1 = 0; 
          foreach ($postsModel->getAllPosts() as $key => $value){
            $c1++;
            if($c1 < 4){?>
              <div class="col-sm-3 col-xs-12 news-item text-center">
                <img src="<?=$value->image ?>" alt="">
                <p class="news-title"><a href="index.php?postid=<?=$value->post_id ?>"><?=substr($value->post_title, 0, 100)." ..." ?></a></p>
              </div>
  		      <?php } else break;
          }?>
        </div>
        <!-- end news -->
