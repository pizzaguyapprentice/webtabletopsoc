
$(document).ready(function() {

  $('.menu-item').each(function(index) {

    const menuItem = $(this);

    const delayTime = 300 * index;

    menuItem.delay(delayTime).css('visibility', 'visible').animate({ opacity: 1 }, 600); 
  });
});
