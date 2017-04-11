<?php
  $id = $_GET['drugid'];
  (array)$drug_detail = $this->drugsModel->getDrug($id);
  (array)$drug_similar = $this->drugsModel->getSameDrugs($drug_detail[0]->drug_category_id, $drug_detail[0]->drug_id);
?>
<!-- breadcrumb -->
<div class="bread">
  <a href="index.php?page=home">Trang chủ</a> >
  <a href="index.php?page=product">Sản phẩm</a> >
  <?=$drug_detail[0]->drug_name ?>
</div> <!-- end breadcrumb -->
<!-- details of drug -->
<div class="col-sm-8 col-xs-12 detail">
  <?php if (!empty($drug_detail[0]->image)) {?>
  <div class="col-sm-5 col-xs-12 detail-img">
    <img src="<?=$drug_detail[0]->image ?>">
  </div>
  <h2 class="col-sm-7 col-xs-12 detail-title">
  <?php } else { ?>
  <h2 class="col-sm-12 col-xs-12 detail-title"> <?php } ?>
    <?=$drug_detail[0]->drug_name ?>
    <div class="price">
      Giá: <?=$drug_detail[0]->price ?> VND
    </div>

    <?php if(isset($_SESSION['user_name'])){
      ?>
      <div class="col-md-12 order">
        <form method="post" action="?page=order&action=add" class="form-cart">
          <label class="i1"> Số lượng </label>
          <input type="number" size="1" maxlength="2" name="quantity" value="1" min="1"/>
          <input type="hidden" name="drug_id" value="<?=$drug_detail[0]->drug_id?>" />
          <input type="hidden" name="drug_name" value="<?=$drug_detail[0]->drug_name?>" />
          <input type="hidden" name="price" value="<?=$drug_detail[0]->price?>"/>
          <div class="i2"><button type="submit" class="btn btn-warning"><i class="fa fa-cart-plus fa-fw" aria-hidden="true"></i> Đặt mua</button></div>
        </form>
      </div>
      <?php
    }
    ?>
    </h2>

  <div class="col-sm-12 col-xs-12 detail-body"> 
    <p><?=$drug_detail[0]->description ?></p> 

    <?php if (!empty($drug_detail[0]->ingredient)) {?>
    <h4>Thành phần</h4>
    <p><?=$drug_detail[0]->ingredient ?></p>
    <?php } ?>
    
    <?php if (!empty($drug_detail[0]->guide_to_use)) {?>
    <h4>Hướng dẫn sử dụng</h4>
    <p><?=$drug_detail[0]->guide_to_use ?> </p>
    <?php } ?>

    <?php if (!empty($drug_detail[0]->more_information)) {?>
    <h4>Phụ lục</h4>
    <p><?=$drug_detail[0]->more_information ?> </p>
    <?php } ?>
  </div>
</div>
<!-- end details of drug-->
<!-- right section -->
<?php include('right-bar.php'); ?> <!-- end right section -->
<!-- similar drug -->
<?php if(!empty($drug_similar)) {?>
<div class="similar col-sm-8 col-xs-12">
<h3> Sản phẩm tương tự</h3>
  <?php
  $c1 = 0; 
  foreach ($drug_similar as $key_s=> $value_s){
    $c1++;
    if($c1 < 4){?>
      <div class="col-sm-4 col-xs-12 news-item text-center">
        <img src="<?=$value_s->image ?>" alt="">
        <p class="news-title"><a href="index.php?drugid=<?=$value_s->drug_id?>"><?=substr($value_s->drug_name, 0, 100)." ..." ?></a></p>
      </div>
    <?php } else break;
  }?>
</div>
<?php } ?> <!-- end similar drug -->

        