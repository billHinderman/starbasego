jQuery(document).ready(function($) {
  $(window).on('resize', function() {
  	$("*[data-fill]").each(function() {
  		if($(this).attr('data-fill') == 'strict') {
  			$(this).css({
    			"height":$(window).height(),
    			"position":"relative"});
  		} else {
  			$(this).css({
    			"min-height":$(window).height(),
    			"position":"relative"});
  		}
  	});
  });
  $(window).resize();
});
