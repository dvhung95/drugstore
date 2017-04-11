$().ready(function(){
	$("#add_shippingprice").validate({
		errorElement: 'div',
		rules: {
			ship_city: {
				required: true,
				minlength: 2,
				lettersonly: true
			},
			price: {
				required: true,
				number: true
			}
		},
		messages: {
			ship_city: {
				required: "Vui lòng điền địa điểm",
				minlength: "Ít nhất 2 ký tự",
				lettersonly: "Không được chứa số và ký tự đặc biệt"
			},
			price: {
				required: "Vui lòng nhập giá",
				number: "Vui lòng nhập số"
			}
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
