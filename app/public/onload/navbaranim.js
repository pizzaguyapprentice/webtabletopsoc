function swing() {
        $('.krakenimg').animate({rotate: '-10deg'}, {
            step: function(now, fx) {
                $(this).css('transform', 'rotate(' + now + ')');
            },
            duration: 500,
            complete: function() {
                $(this).animate({rotate: '10deg'}, {
                    step: function(now, fx) {
                        $(this).css('transform', 'rotate(' + now + ')');
                    },
                    duration: 500,
                    complete: swing
                });
            }
        });
    }


$(document).ready(function () {
  $(".menu-item").each(function (index) {
    const menuItem = $(this);

    const delayTime = 300 * index;



    menuItem
      .delay(delayTime)
      .css("visibility", "visible")
      .animate({ opacity: 1 }, 600);
  });

  swing();
});
