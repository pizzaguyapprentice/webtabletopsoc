$(document).ready(function () {
    $(".panel").each(function (index) {
        const panelItem = $(this);
        const delayTime = 300 * index;

        panelItem
            .css({ opacity: 0, visibility: 'visible' })
            .delay(delayTime)
            .animate({ opacity: 1 }, 600);
    });

    $(".menu-item").each(function (index) {
        const menuItem = $(this);
        const delayTime = 300 * index;

        menuItem
            .css({ opacity: 0, visibility: 'visible' })
            .delay(delayTime)
            .animate({ opacity: 1 }, 600);
    });

    function swing() {
        $('.krakenimg').animate({ deg: -10 }, {
            duration: 500,
            step: function (now) {
                $(this).css('transform', 'rotate(' + now + 'deg)');
            },
            complete: function () {
                $(this).animate({ deg: 10 }, {
                    duration: 500,
                    step: function (now) {
                        $(this).css('transform', 'rotate(' + now + 'deg)');
                    },
                    complete: swing
                });
            }
        });
    }

    swing();
});


