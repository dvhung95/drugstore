<?php
  $search_key = $_POST['keyword'];
  (array)$drugs = $this->drugsModel->searchDrug($search_key);
  (array)$posts = $this->postsModel->searchPost($search_key);
?>
  <!-- breadcrumb -->
  <div class="bread">
    <a href="index.php">Trang chủ</a> >
    Tìm kiếm > <?= $search_key?>
  </div><!--  end breadcrumb -->
  <h1 class="text-center page-title">Tìm kiếm</h1>
  <!-- Drugs -->
  <?php if(!empty($drugs)) { ?>
    <div class="col-sm-8 col-xs-12 news">
      <h3>Sản phẩm</h3>
      <?php foreach ($drugs as $drugvalue){ ?>
      <!-- news row -->
      <div class="news-row row">
        <div class="col-sm-3 col-xs-6 news-img">
          <img src="<?=$drugvalue->image ?>" alt="">
        </div>
        <div class="col-sm-9 col-xs-6 product-title">
          <?=substr($drugvalue->drug_name, 0 ,100)?>
        </div>
        <div class="col-sm-9 col-xs-6 product-body">
          <?=substr($drugvalue->description, 0, 200)." ..."?>
        </div>
        <div class="col-sm-9 col-xs-6 more text-right"><a href="index.php?drugid=<?=$drugvalue->drug_id?>">Xem thêm</a></div>
      </div>
      <!-- end news row -->
    <?php } ?>
  </div>
  <?php } ?>
  <!-- end drugs -->

  <?php if(empty($drugs)&& empty($posts) ){ ?>
    <div class="no-result text-center col-sm-8 col-xs-12">Không có kết quả nào cho từ khóa
      <strong> <?=$search_key ?> </strong>
    </div>
  <?php  } ?>
  <!-- right aside -->
  <?php include('right-bar.php'); ?> <!-- end right aside -->

  <!-- Posts -->
  <?php if(!empty($posts)) { ?>
    <div class="col-sm-8 col-xs-12 news">
      <h3>Tin tức</h3>
      <?php foreach ($posts as $value) { ?>
      <!-- news row -->
      <div class="product row">
        <div class="col-sm-3 col-xs-6 product-img">
          <img src="<?=$value->image ?>" alt="">
        </div>
        <div class="col-sm-9 col-xs-6 product-title">
          <a href="index.php?postid=<?=$value->post_id?>"><?=substr($value->post_title, 0 ,100)?></a>
          <p> <?=substr($value->content, 0, 300)." ..."?> </p> 
          <div class="col-sm-12 col-xs-6 more text-right">
            <a href="index.php?postid=<?=$value->post_id?>">Xem thêm</a>
          </div>
        </div>
      </div>
      <!-- end news row -->
    <?php } ?>
  </div>
  <?php } ?>
  <!-- end Posts -->


