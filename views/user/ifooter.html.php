
         
        </div>
      </div>
    </div>
    <!-- end main content -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 contact">
            <h3>Thông tin liên hệ</h3>
            <p class="company"> Công Ty Trách Nhiệm Hữu Hạn Đầu Tư Và Phát Triển Hằng Long Shpt</p>
            <p> <i class="fa fa-map-marker fa-fw" aria-hidden="true"></i> Địa chỉ: Số nhà P2, ngõ B9 khu tập thể Thủ Lệ I, Phường Ngọc Khánh, Quận Ba Đình, Hà Nội </p>
            <p> <i class="fa fa-phone fa-fw" aria-hidden="true"></i>Điện thoại: 0437661751 </p>
            <p><i class="fa fa-money fa-fw" aria-hidden="true"></i> Mã số thuế: 0105135540</p>
            <p> <i class="fa fa-cart-plus fa-fw" aria-hidden="true"></i> Lĩnh vực buôn bán: Tổng hợp</p>
          </div>
          <div class="col-sm-6 col-xs-12 map">
            <div id="map"></div>
            <script>
              function initMap() {
                var myLatLng ={lat: 21.029148, lng: 105.807911};

                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 15,
                  center: myLatLng
                });

                var marker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  title: 'Hello World!'
                });
              }
            </script>
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBESamr5FVw7CHbhUNr260ZVi6UWLvsdE&callback=initMap">
            </script>
          </div>
        </div>
      </div>
    </footer>
    <div class="foot-bot">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 social text-center">
            <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
            <i class="fa fa-google-plus fa-2x" aria-hidden="true"></i>
            <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
          </div>
          <div class="col-sm-6 col-xs-12 design text-center">
            Thiết kế bởi 4c13 Hanu Team
          </div>
        </div>
      </div>
    </div>

    <script src="libs/js/jquery.min.js"></script>
    <script src="libs/js/bootstrap.min.js"></script>
  </body>
</html>