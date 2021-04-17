$(document).ready(function () {
    $('.header-burger').click(function (event) {
        $('.header-burger, .menu-nav').toggleClass('active');
        $('body').toggleClass('lock');
    });

    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top,
            burger = $('.header-burger'),
            menuNav = $('.menu-nav');

            if(burger.attr('class').includes('active')){
                $('body').removeClass('lock');
                burger.removeClass('active');
                menuNav.removeClass('active');
            }

        $('body,html').animate({scrollTop: top}, 1500);
    });
});


$(document).ready(function () {
    $('.slider').slick({
        arrows: false,
        dots: true,
        slidesToShow: 1,
        autoplay: false,
        speed: 1000,
    });

    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    $('#contactform').on('submit', function (e) {
        e.preventDefault();

        console.log('contactform');

        $.ajax({
            type: 'POST',
            url: '/sendmail',
            data: $('#contactform').serialize(),
            success: function (data) {
                if (data.result == 'success') {
                    console.log('data.result = ', data.result);
                    $('#senderror').hide();
                    $('#sendmessage').show();
                    $('#contactform')[0].reset();
                }

                if (data.result == 'failed') {
                    console.log('data = ', data);
                    $('#senderror').show();
                    $('#sendmessage').hide();
                }
            },
            error: function () {
                console.log('error ajax');
                // $('#senderror').show();
                // $('#sendmessage').hide();
            }
        });
    });
});



const raitengItemsList = document.querySelectorAll('.raiteng_item');
const raitengItemsArray = Array.prototype.slice.call(raitengItemsList);

raitengItemsArray.forEach(item =>
    item.addEventListener('click', () => {
        const { itemValue } = item.dataset;
        item.parentNode.dataset.totalValue = itemValue;
    })
);
