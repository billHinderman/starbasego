jQuery(document).ready(function($) {
  $("*[data-bg-image]").each( function() {
  $(this).css(
      {
        "background":"#790f5b url('"+$(this).data("bg-image")+"')",
        "background-position":"center",
        "background-size":"cover"
      }
    );
  });
});
