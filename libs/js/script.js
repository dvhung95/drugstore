
$(document).ready(function () {
    var loc = window.location.href;
    $(".nav li a").each(function() {
        if (loc.indexOf($(this).attr("href")) != -1) {
            $(this).addClass("active");
        }
    });
});