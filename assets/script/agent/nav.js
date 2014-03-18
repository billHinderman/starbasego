jQuery(document).ready(function($) {
  $("*[data-menu]").on('click', function() {
    $("body").toggleClass("menu");
  });
});
