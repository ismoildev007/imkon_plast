$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
    autoplay: true,
    speed: 300,
    cssEase: 'linear',
    pauseOnHover: true,

});
$('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows: false,
    fade: true,
    focusOnSelect: true,
    autoplay: true,
    speed: 300,
    cssEase: 'linear',
    pauseOnHover: true,
});


$('.img_zoom img').addClass('img-enlargable').click(function () {
    var src = $(this).attr('src');
    $('<div>').css({
        background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
        backgroundSize: 'contain',
        width: '100%', height: '100%',
        position: 'fixed',
        zIndex: '10000',
        top: '0', left: '0',
        cursor: 'zoom-out'
    }).click(function () {
        $(this).remove();
    }).appendTo('body');
});

$('.slider-video').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    prevArrow: "<button type='button' class='slick-prev slick-arrow'><i class='far fa-chevron-left'></i></button>",
    nextArrow: "<button type='button' class='slick-next slick-arrow'><i class='far fa-chevron-right'></i></button>",
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
        },]
});


$('.inf-1').click(function (e) {
    if ($('.inf-1 .more-info').hasClass('show')) {
        $('.inf-1 .more-info').removeClass('show');
        $('.inf-1 .info').removeClass('show');
    }
    else {
        $('.inf-1 .more-info').addClass('show');
        $('.inf-1 .info').addClass('show');
    }

});
$('.inf-2').click(function (e) {
    if ($('.inf-2 .more-info').hasClass('show')) {
        $('.inf-2 .more-info').removeClass('show');
        $('.inf-2 .info').removeClass('show');
    }
    else {
        $('.inf-2 .more-info').addClass('show');
        $('.inf-2 .info').addClass('show');
    }

});
$('.inf-3').click(function (e) {
    if ($('.inf-3 .more-info').hasClass('show')) {
        $('.inf-3 .more-info').removeClass('show');
        $('.inf-3 .info').removeClass('show');
    }
    else {
        $('.inf-3 .more-info').addClass('show');
        $('.inf-3 .info').addClass('show');
    }

});
$('.inf-4').click(function (e) {
    if ($('.inf-4 .more-info').hasClass('show')) {
        $('.inf-4 .more-info').removeClass('show');
        $('.inf-4 .info').removeClass('show');
    }
    else {
        $('.inf-4 .more-info').addClass('show');
        $('.inf-4 .info').addClass('show');
    }

});

$(document).ready(function () {

    $('input[data-plugin=\'phone-mask\']').inputmask({
        'mask': '+\\9\\9\\8 (99) 999-99-99'
    })
});

$('#vid_modal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('video') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#yt_vid').attr('src', '');
    modal.find('#yt_vid').attr('src', recipient);
})

