$().ready(function(){
	$("#add_post_category").validate({
		errorElement: 'div',
		rules: {
			category_name: {
				required: true,
				maxlength: 30
			},
			description: "required"
		},
		messages: {
			category_name: {
				required: "Vui lòng điền tên nhóm bài đăng",
				maxlength: "Tên nhóm bài đăng tối đa 30 ký tự"
			},
			description: "Vui lòng ghi miêu tả"
		}
	});
})