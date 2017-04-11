$().ready(function(){
	$("#add_drug_category").validate({
		errorElement: 'div',
		rules: {
			category_name: {
				required: true,
				maxlength: 30,
				alphanumeric: true
			},
			description: "required"
		},
		messages: {
			category_name: {
				required: "Vui lòng điền tên nhóm thuốc",
				maxlength: "Tên nhóm thuốc tối đa 30 ký tự",
				alphanumeric: "Tên không được ký tự đặc biệt"
			},
			description: "Vui lòng ghi miêu tả"
		}
	});
	$.validator.addMethod( "alphanumeric", function( value, element ) {
		return this.optional( element ) || /^\w+$/i.test( value );
	}, "Letters, numbers, and underscores only please" );
})