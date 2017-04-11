$().ready(function(){
		// check username is available or not
	$('#user_password').change(function(){
		var username = $('#user_name').val();
		var password = $('#user_password').val();
		$.ajax({
			url: "index.php?page=login&action=check",
			type: 'GET',
			data: 'username='+username+'&password='+password,
			success: function(result){
				$('#checkExistResult').html(result);
				if(result == 0) {
					$('#checkExistResult').show();
					$('#checkExistResult').html('Tài khoản hoặc mật khẩu không đúng');
				} else {
					$('#checkExistResult').hide();
				}
			}
		})
	});
})