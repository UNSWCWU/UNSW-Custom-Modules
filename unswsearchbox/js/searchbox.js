(function ($) {
  Drupal.behaviors.unswsearchbox = {
    attach: function(context, settings) {
      	  
      //Default search text in top search box
      $('.block-unswsearchbox #edit-keyword')
        .val('Search')
        .css('color', '#999')
        .focus(function(){
          $(this).css('color', 'black');
          if ($(this).val() == 'Search') {
            $(this).val('');
          }
        })
        .blur(function(){
          $(this).css('color', '#999');
          if ($(this).val() == '') {
            $(this).val('Search');
          }
      });
      
    }
  };
})(jQuery);
