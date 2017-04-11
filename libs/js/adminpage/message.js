$().ready(function(){
	$("#add_message").validate({
		errorElement: 'div',
		rules: {
			title: {
				required: true,
				maxlength: 200,
				minlength: 5
			},
			content: {
				required: true,
				minlength: 50
			},
			image: {
				required: true,
				accept: "image/*"
			}
		},
		messages: {
			title: {
				required: "Vui lòng nhập tiêu đề",
				maxlength: "Tiêu đề nhiều nhất 200 ký tự",
				minlength: "Tiêu đề ít nhất 5 ký tự"
			},
			content: {
				required: "Vui lòng điền nội dung",
				minlength: "Nội dung ít nhất 50 ký tự"
			},
			image: {
				required: "Vui lòng đăng hình ảnh",
				accept: "Sai định dạng file"
			}
		}
	});
})