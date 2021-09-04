// // ===================back to top ====================
// home page
$(window).on('load', function() {
    $(".load-wrap").fadeOut(1000);
    $(".main").fadeIn(1000);
});


var btn = $('#button-back-top');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});
// // =================scoll header====================
window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    var height = "200px"
    header.classList.toggle("sticky", window.scrollY > 0);
});

//     // fillter location
selectedLocation.addEventListener("click", () => {
    ContainerLocation.classList.add("active");
});

listOptionLocation.forEach(o => {
    o.addEventListener("click", () => {
        selectedLocation.innerHTML = o.querySelector("label").innerHTML;
        ContainerLocation.classList.remove("active");
    })
});

//video
const modalVideo = document.querySelector(".modal-video")
const getBtns = document.querySelectorAll('.js-video')
const modalVideoClose = document.querySelector(".js-modal-video-close")
const modalVideoContainer = document.querySelector(".video-wrap")
    // hàm hiển thị modal đăng nhập (thêm class open vào modal)
function showModal() {
    modalVideo.classList.add('open')
}
// hàm ẩn modal  (loại bỏ class open ra khỏi modal)
function hideModal() {
    modalVideo.classList.remove('open')
}

for (const getBtn of getBtns) {
    getBtn.addEventListener('click', showModal)
}
modalVideoClose.addEventListener('click', hideModal)

modalVideoContainer.addEventListener('click', function(event) {
    event.stopPropagation()
});
$('#slider').slick({
    fade: !0,
    cssEase: 'linear',
    touchMove: true,
    speed: 600,
    autoplay: true,
    autoplaySpeed: 6000,
    pauseOnHover: false,
    useTransform: true,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrows: true,
            speed: 600,
            autoplay: true,
            autoplaySpeed: 6000,
        }
    }],
    responsive: [{
        breakpoint: 740,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrows: false,
            speed: 600,
            autoplay: true,
            autoplaySpeed: 6000,
        }
    }]
});

// /// list tour product

$('.list-tour').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    arrows: false,
    dots: true,
    speed: 1000,
    autoplay: false,
    autoplaySpeed: 4000,
    touchMove: true,
    responsive: [{
            breakpoint: 1324,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
                infinite: true,
                speed: 1000,
            }
        },
        {
            breakpoint: 1025,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: false,
                speed: 1000,
            }
        },
        {
            breakpoint: 739,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                speed: 1000,
            }
        },
        {
            breakpoint: 440,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 1000,
            }
        }

    ]
});

// //stamp
$('.stamp-photo-list').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    arrows: false,
    dots: false,
    arrows: true,
    speed: 2000,
    autoplay: false,
    autoplaySpeed: 4000,
    touchMove: true,
    responsive: [{
            breakpoint: 1324,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
                infinite: true,
                speed: 1000,
            }
        },
        {
            breakpoint: 1025,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: false,
                speed: 1000,
            }
        },
        {
            breakpoint: 739,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                speed: 1000,
            }
        },
        {
            breakpoint: 440,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 1000,
            }
        }

    ]
});


$('.review__slide').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: false,
    dots: true,
    speed: 2000,
    autoplay: false,
    autoplaySpeed: 4000,
    touchMove: true,
    responsive: [{
            breakpoint: 1324,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                speed: 1000,
            }
        },
        {
            breakpoint: 1025,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: false,
                speed: 1000,
            }
        },
        {
            breakpoint: 739,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 1000,
            }
        },
        {
            breakpoint: 440,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 1000,
            }
        }

    ]
});

//tab login
// const a = document.querySelector.bind(document)
// const aa = document.querySelectorAll.bind(document)
var tabsh = document.querySelectorAll('.form-header__action')
var panes = document.querySelectorAll('.form-body')
    
tabsh.forEach((tabsk, index) => {
    const panel = panes[index];
    tabsk.onclick = function() {
        var tabpl = document.querySelector('.form-header__action.active')
        var formgt = document.querySelector('.form-body.active')
        tabpl.classList.remove('active')
        formgt.classList.remove('active')

        this.classList.add('active')
        panel.classList.add('active')
    }
});

// // ====================== tab login================

