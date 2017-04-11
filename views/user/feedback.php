
<!-- form for feedback -->
<div class="col-sm-push-4 col-sm-4 col-xs-12 mes">
  <form id="feedback" method="post" action="?page=feedback&status=return">
    <div class="form-group">
      <h3>Gửi câu hỏi</h3>
      <input class="form-control" type="text" id="sender_name" name="sender_name" value="" placeholder="Tên của bạn" required="">
      <div id="validateSender"></div>
      <input class="form-control" type="text" id="email" name="email" value="" placeholder="Email" required="">
      <input class="form-control" type="text" id="phone_number" name="phone_number" value="" placeholder="Số điện thoại" required="">
      <textarea class="form-control" rows="5" id="content" name="content" placeholder="Nội dung" required=""></textarea>
      <button type="submit" class="btn btn-primary">Gửi</button>
    </div>
  </form>
</div> 
<!-- end form for feedback -->
<script type="text/javascript" src="libs/js/userpage/feedback.js"></script>


