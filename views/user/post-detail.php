<?php
  $id = $_GET['postid'];
  (array)$post_detail = $this->postsModel->searchPost($id);
  (array)$post_similar = $this->postsModel->getSamePosts($post_detail[0]

    ->post_category_id, $post_detail[0]->post_id); 
?>

<div class="bread">
  <a href="index.php">Trang chủ</a> >
  <a href="tin-tuc.php">Tin tức</a> >
  <?=$post_detail[0]->post_title ?>
</div>
<!-- post details -->
<div class="col-sm-8 col-xs-12 detail">
  <?php if (!empty($post_detail[0]->image)) {?>
  <div class="col-sm-5 col-xs-12 detail-img">
    <img src="<?=$post_detail[0]->image ?>">
  </div>
  <h2 class="col-sm-7 col-xs-12 detail-title">
  <?php } else { ?>
  <h2 class="col-sm-12 col-xs-12 detail-title">
  <?php } ?>
    <?=$post_detail[0]->post_title ?>
  </h2>
  <div class="col-sm-12 col-xs-12 detail-body"> <?=$post_detail[0]->content ?></div>
  <!-- facebook comment -->
  <div class="fb-comments" data-href="" data-width="700px" data-numposts="5"></div>
</div> <!-- end post details -->
<!-- right section -->
<?php include('right-bar.php'); ?> <!-- end section -->
<!-- similar post -->
<?php 
  if(!empty($post_similar)) {?>
  <div class="similar col-sm-8 col-xs-12">
  <h3> Tin tức liên quan </h3>
    <?php
    $c1 = 0; 
    foreach ($post_similar as $key_s=> $value_s){
      $c1++;
      if($c1 < 4){?>
        <div class="col-sm-4 col-xs-12 news-item text-center">
          <img src="<?=$value_s->image ?>" alt="">
          <p class="news-title"><a href="index.php?postid=<?=$value_s->post_id ?>"><?=substr($value_s->post_title, 0, 100)." ..." ?></a></p>
        </div>
      <?php } else break;
    }?>
  </div>
<?php } ?>
<!-- end similar post -->

        