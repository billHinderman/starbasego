jQuery(document).ready(function($) {
  $('#s').on('focusin',function() {
  	$('#searchform').addClass('focus');
  });
  $('#s').on('focusout',function() {
  	$('#searchform').removeClass('focus');
  });
});
