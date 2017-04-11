$().ready(function(){
	$("#add_drug").validate({
		errorElement: 'div',
		rules: {
			drug_name: {
				required: true,
				maxlength: 200
			},
			description: "required",
			ingredient: "required",
			guide_to_use: "required",
			price: {
				required: true,
				isFloat: true
			},
			image: {
				required: true,
				accept: "image/*"
			}
		},
		messages: {
			drug_name: {
				required: "Vui lòng nhập tên thuốc",
				maxlength: "Tên thuốc nhiều nhất 200 ký tự"
			},
			description: "Vui lòng ghi miêu tả",
			ingredient: "Vui lòng ghi thành phần",
			guide_to_use: "Vui lòng ghi hướng dẫn sử dụng",
			price: {
				required: "Vui lòng ghi giá"
			},
			image: {
				required: "Vui lòng đăng hình ảnh",
				accept: "Sai định dạng file"
			}
		}
	});
	$.validator.addMethod( "isFloat", function( value, element ) {
		return this.optional( element ) || /^-?\d*(\.\d+)?$/i.test( value );
	}, "Nhập số thập phân" );
})

$().ready(function(){
	$("#edit_drug").validate({
		errorElement: 'div',
		rules: {
			drug_name: {
				required: true,
				maxlength: 200
			},
			description: "required",
			ingredient: "required",
			guide_to_use: "required",
			price: {
				required: true,
				isFloat: true
			},
			image: {
				accept: "image/*"
			}
		},
		messages: {
			drug_name: {
				required: "Vui lòng nhập tên thuốc",
				maxlength: "Tên thuốc nhiều nhất 200 ký tự"
			},
			description: "Vui lòng ghi miêu tả",
			ingredient: "Vui lòng ghi thành phần",
			guide_to_use: "Vui lòng ghi hướng dẫn sử dụng",
			price: {
				required: "Vui lòng ghi giá"
			},
			image: {
				accept: "Sai định dạng file"
			}
		}
	});
	$.validator.addMethod( "isFloat", function( value, element ) {
		return this.optional( element ) || /^-?\d*(\.\d+)?$/i.test( value );
	}, "Nhập số thập phân" );
})
