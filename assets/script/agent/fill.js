jQuery(document).ready(function($) {
  $(window).on('resize', function() {
    $("*[data-fill]").css({"min-height":$(window).height(),"position":"relative","width": "100%"});
  });
  $(window).resize();
});
