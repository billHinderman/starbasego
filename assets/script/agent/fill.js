jQuery(document).ready(function($) {
  $(window).on('resize', function() {
    $("*[data-fill]").css({"min-height":$(window).height(),"width": "100%"});
  });
  $(window).resize();
});
