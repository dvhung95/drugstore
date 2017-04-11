$(document).ready(function () {
    var loc = window.location.href;
    $(".nav li a").each(function() {
        if (loc.indexOf($(this).attr("href")) != -1) {
            $(this).addClass("active");
        }
    });
});

$(document).ready(function () {

	$('.qa').each(function() {
		$(this).click(function() {
		
			if(($(this).find('.a.show')).length){
				console.log('haiz');
				($(this).find('.a.show')).removeClass('show');
			} else{
				console.log('haiz');
				($(this).find('.a')).addClass('show');
			}
		});
	});
});

