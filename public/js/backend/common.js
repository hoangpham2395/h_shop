// Date picker
$(function () {
    $('.datepicker').datepicker();
});

// Active sidebar
$(document).ready(function() {
	$('ul.sidebar-menu > li').removeClass('active');
	$('.sidebar-menu #' + alias).addClass('active');
});