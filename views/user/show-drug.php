<?php
  $id = $_GET['drugid'];
  (array)$drugs = $this->drugsModel->getAllDrugs();
  require 'Pagination.php';
  // Pagination
  $page_infor = array(
      'current_page'  => isset($_GET['p']) ? $_GET['p'] : 1, 
      'total_record'  => sizeof($drugs),
      'limit'         => 4,
      'link_full'     => 'http://localhost:81/drug-store/index.php?page=product&p=',
      'link_first'    => 'http://localhost:81/drug-store/index.php?page=product',
  );
  $paging = new Pagination();
  $paging->init($page_infor);
  $news_end = $paging->_config['start']+$paging->_config['limit'];
  if($news_end > $paging->_config['total_record']){
    $news_end = $paging->_config['total_record'];

  }
?>
    <!-- News -->
    <div class="col-sm-8 col-xs-12 products">
      <h3>Sản phẩm</h3>
      <!-- product row -->
      <div class="products-row row">
      <?php
      for($i=$paging->_config['start'];$i<$news_end;$i++){
        ?>
         <!-- product item -->
          <div class="col-sm-6 col-xs-12 text-center products">
            <div class="product-page-img">
              <img src="<?=$drugs[$i]->image ?>" alt="">
            </div>
            <div class="product-page-title">
              <a href="index.php?drugid=<?=$drugs[$i]->drug_id?>">
                <?=substr($drugs[$i]->drug_name, 0 ,100)?>
              </a>
            </div>
            <div class="product-page-body">
              <?=substr($drugs[$i]->description, 0, 200)." ..."?>
            </div>
          </div> <!-- end product item -->
        <?php
      }?>
      </div> 
      <!-- end product row -->
      <!-- Pagination menu -->
      <div class="text-center">
          <?=$paging->html()?>
      </div> 
      <!-- end pagination menu -->
    </div>
    <!-- end products -->
<?php include('right-bar.php');?>