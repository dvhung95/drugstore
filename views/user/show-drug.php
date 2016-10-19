    <!-- News -->
    <div class="col-sm-8 col-xs-12 products">
      <h3>Sản phẩm</h3>
      <!-- product row -->
      
      <div class="products-row row">
      <?php foreach ($drugs as $drugvalue){ ?>
        <!-- product item -->
        <div class="col-sm-6 col-xs-12 text-center products">
          <div class="product-page-img">
            <img src="<?=$drugvalue->image ?>" alt="">
          </div>
          <div class="product-page-title">
            <a href="index.php?drugid=<?=$drugvalue->drug_id?>">
              <?=substr($drugvalue->drug_name, 0 ,100)?>
            </a>
          </div>
          <div class="product-page-body">
            <?=substr($drugvalue->description, 0, 200)." ..."?>
          </div>
        </div>
        <!-- end product item -->
       <?php } ?>   
      </div>
       
      <!-- end product row -->
    </div>
    <!-- end products -->
<?php include('right-bar.php');?>