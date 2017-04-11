
$().ready(function(){
	$('#sender_name').change(function(){
		var sender_name = $('#sender_name').val();
		$("#validateSender").css('color', 'red');
		if(/[0-9\'^£$%&*()}{@#~?><>,|=_+¬-]/.test(sender_name) == true){
			$('#validateSender').show();	
			$('#validateSender').html('Tên không được chứa số và ký tự đặc biệt');
		} else {
			$('#validateSender').hide();
		}
	});
	$('#email').change(function(){
		var email = $("#email").val();
		var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(re.test(email) == false){
			$("#email").after("<div class='emailError'>Email không hợp lệ</div>");
			$(".emailError").css('color', 'red');
		} else {
			$( "div" ).remove( ".emailError" );
		}
	});
	$('#phone_number').change(function(){
		var phone = $('#phone_number').val();
		if(/^\d+$/.test(phone) == false){
			$('#phone_number').after("<div class='phoneError'> Sai số điện thoại </div>");
			$('.phoneError').css('color', 'red');
		} else {
			$( "div" ).remove( ".phoneError" );
		}
	});
})