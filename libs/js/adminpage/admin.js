$().ready(function(){
	$("#add_admin").validate({
		errorElement: 'div',
		rules: {
			username: {
				required: true,
				alphanumeric: true,
				maxlength: 20
			},
			password: {
				required: true,
				minlength: 5
			},
			re_password: {
				required: true,
				equalTo: "#password"
			},
			name: {
				required: true,
				lettersonly: true,
				minlength: 2
			}
		},
		messages: {
			username: {	
				required: "Vui lòng nhập tên đăng nhập",
				alphanumeric: "Tên không được chứa ký tự đặc biệt",
				maxlength: "Tên đăng nhập tối đa 20 ký tự"
			},
			password: {
				required: "Vui lòng nhập mật khẩu",
				minlength: "Mật khẩu ít nhất 5 ký tự"
			},
			re_password: {
				required: "Vui lòng điền lại mật khẩu",
				equalTo: "Mật khẩu không khớp"
			},
			name: {
				required: "Vui lòng nhập tên",
				lettersonly: "Tên không được chứa số và ký tự đặc biệt",
				minlength: "Tên ít nhất 2 ký tự"
			}
		}
	});
	$.validator.addMethod( "alphanumeric", function( value, element ) {
		return this.optional( element ) || /^\w+$/i.test( value );
	}, "Letters, numbers, and underscores only please" );
	$.validator.addMethod( "lettersonly", function( value, element ) {
		if(/[0-9\'^£$%&*()}{@#~?><>,|=_+¬-]/.test( value ) == true){
			return false;
		} else {
			return true;
		};
	}, "Letters only please" );  
	
	// check username is available or not
	$('#username').change(function(){
		var username = $('#username').val();
		$.ajax({
			url: "dashboard.php?page=admin&action=check",
			type: 'GET',
			data: 'username='+ username,
			success: function(result){
				if(result == 0) {
					$('#check_user_exist').show();
					$('#check_user_exist').html(username + ' đã tồn tại');
				} else {
					$('#check_user_exist').hide();
				}
			}
		})
	});
	
})
