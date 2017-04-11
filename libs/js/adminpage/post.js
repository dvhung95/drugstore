$().ready(function(){
	$("#add_post").validate({
		errorElement: 'div',
		rules: {
			post_title: {
				required: true,
				maxlength: 200,
				minlength: 5
			},
			content: {
				required: true,
				minlength: 100
			},
			image: {
				accept: "image/*"
			}
		},
		messages: {
			post_title: {
				required: "Vui lòng nhập tiêu đề",
				maxlength: "Tiêu đề nhiều nhất 200 ký tự",
				minlength: "Tiêu đề ít nhất 5 ký tự"
			},
			content: {
				required: "Vui lòng điền nội dung",
				minlength: "Nội dung ít nhất 100 ký tự"
			},
			image: {
				accept: "Sai định dạng file"
			}
		}
	});
})