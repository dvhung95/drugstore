<?php
  (array)$posts = $this->postsModel->getAllPosts();
  require 'Pagination.php';
  // Pagination
  $page_infor = array(
      'current_page'  => isset($_GET['p']) ? $_GET['p'] : 1, 
      'total_record'  => sizeof($posts),
      'limit'         => 4,
      'link_full'     => 'http://localhost:81/drug-store/index.php?page=post&p=',
      'link_first'    => 'http://localhost:81/drug-store/index.php?page=post',
  );
  $paging = new Pagination();
  $paging->init($page_infor);
  $news_end = $paging->_config['start']+$paging->_config['limit'];
  if($news_end > $paging->_config['total_record']){
    $news_end = $paging->_config['total_record'];

  }
?>  
<!-- post list -->
<div class=" col-sm-8 col-xs-12 news">
  <h3 class="col-sm-12">Tin tức</h3>
  <div style="clear: both"></div>
	<?php
  for($i=$paging->_config['start'];$i<$news_end;$i++){
    ?>
     <div class="product row">
        <div class="col-sm-3 col-xs-6 product-img">
          <img src="<?=$posts[$i]->image ?>" alt="">
        </div>
        <div class="col-sm-9 col-xs-6 product-title">
          <a href="index.php?postid=<?=$posts[$i]->post_id?>"><?=substr($posts[$i]->post_title, 0 ,100)?></a>
          <p> <?=substr($posts[$i]->content, 0, 300)." ..."?> </p> 
          <div class="col-sm-12 col-xs-6 more text-right">
            <a href="index.php?postid=<?=$posts[$i]->post_id?>">Xem thêm</a>
          </div>
        </div>
      </div>
    <?php
  }?>
  <!-- Pagination menu -->
  <div class="pagination-menu">
      <?=$paging->html()?>
  </div> 
  <!-- end pagination menu -->
</div>
<!-- end post list -->


<!-- right section -->
<?php include('right-bar.php'); ?>
