$().ready(function(){
	$("#add_shipper").validate({
		errorElement: 'div',
		rules: {
			name: {
				required: true,
				minlength: 2,
				lettersonly: true
			},
			date_of_birth: "required",
			phone_number: {
				required: true,
				number: true,
				maxlength: 12	
			},
			address: "required"
		},
		messages: {
			name: {
				required: "Vui lòng điền tên",
				minlength: "Tên ít nhất 2 ký tự",
				lettersonly: "Tên không được chứa số và ký tự đặc biệt"
			},
			date_of_birth: "Vui lòng nhập ngày sinh",
			phone_number: {
				required: "Vui lòng điền số điện thoại",
				number: "Vui lòng nhập số",
				maxlength: "Số điện thoại tối đa 12 chữa số"
			},
			address: "Vui lòng điền địa chỉ"
		}
	});
	$.validator.addMethod( "lettersonly", function( value, element ) {
		if(/[0-9\'^£$%&*()}{@#~?><>,|=_+¬-]/.test( value ) == true){
			return false;
		} else {
			return true;
		};
	}, "Letters only please" );
})