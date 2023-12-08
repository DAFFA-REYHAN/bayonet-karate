(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


    // Initiate the wowjs
    new WOW().init();


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Testimonial carousel
    $(".berita-carousel").owlCarousel({
        loop: false,
        dots: false,
        nav: true,
        margin: 20,
        navText: [
            `<i class="fa fa-chevron-left"></i>`,
            `<i class="fa fa-chevron-right"></i>`
        ],
        autoplay: false,
        slideTransition: 'linear',
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2
            },
            800: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });




}
)(jQuery);

function password_show_hide() {
    var x = document.getElementById("password");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('section');

    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
            const navLink = document.querySelector(`.nav-link[data-target="${entry.target.id}"]`);

            if (entry.isIntersecting) {
                navLink.classList.add('active');
            } else {
                navLink.classList.remove('active');
            }
        });
    }, { rootMargin: '0px', threshold: 0.5 });

    sections.forEach(function (section) {
        observer.observe(section);
    });
});
