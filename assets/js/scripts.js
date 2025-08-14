$(document).ready(function () {
    $("#close-global-banner").click(function closeNav() {
        $(".global-banner").addClass("d-none");
    })
});

$(document).ready(function () {
    $(".side-bar-button").click(function openSideMenu() {
        $(".side-menu").addClass("show");
        $(".effect-layer").addClass("show");
        // $(".side-menu>div").removeClass("d-none");
    });
});

$(document).ready(function () {
    $(".effect-layer").click(function closeSideMenu() {
        $(".effect-layer").removeClass("show");
    });
});

$(document).ready(function () {
    $(".btn-close-menu").click(function closeSideMenuBtn() {
        $(".side-menu").removeClass("show");
        // $(".side-menu").css("transition-delay", "0.6s");
        $(".effect-layer").removeClass("show");
        // if ($(".effect-layer").hasClass('show') == false) {
        //     $(".side-menu>div").addClass("d-none");
        // }
    });
})


$(document).ready(function () {
    $("#eye-icon-div").click(function showPassword() {
        if ($("#password").attr("type") == "password") {
            $("#password").attr("type", "text");
            $("#eye-icon-div").html(
                `
                    <svg onclick="showPassword() width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.1303 8.8531C21.2899 10.0732 21.2899 11.9268 20.1303 13.1469C18.1745 15.2047 14.8155 18 11 18C7.18448 18 3.82549 15.2047 1.86971 13.1469C0.710098 11.9268 0.710098 10.0732 1.86971 8.8531C3.82549 6.79533 7.18448 4 11 4C14.8155 4 18.1745 6.79533 20.1303 8.8531Z" stroke="#6C7275" stroke-width="1.5"/>
                        <path d="M14 11C14 12.6569 12.6569 14 11 14C9.34315 14 8 12.6569 8 11C8 9.34315 9.34315 8 11 8C12.6569 8 14 9.34315 14 11Z" stroke="#6C7275" stroke-width="1.5"/>
                        <path d="M20.4454 1.35358L1.35355 20.4455" stroke="#6C7275" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                `
            )
        } else {
            $("#password").attr("type", "password");
            $("#eye-icon-div").html(
                `
                    <svg onclick="showPassword()" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.1303 5.8531C21.2899 7.07317 21.2899 8.92683 20.1303 10.1469C18.1745 12.2047 14.8155 15 11 15C7.18448 15 3.82549 12.2047 1.86971 10.1469C0.710098 8.92683 0.710098 7.07317 1.86971 5.8531C3.82549 3.79533 7.18448 1 11 1C14.8155 1 18.1745 3.79533 20.1303 5.8531Z"
                            stroke="#6C7275" stroke-width="1.5" />
                        <path
                            d="M14 8C14 9.65685 12.6569 11 11 11C9.34315 11 8 9.65685 8 8C8 6.34315 9.34315 5 11 5C12.6569 5 14 6.34315 14 8Z"
                            stroke="#6C7275" stroke-width="1.5" />
                    </svg>
                `
            )
        }
    });
});

$(document).ready(function () {
    $("#eye-icon2").click(function showPassword2() {
        if ($("#password2").attr("type") == "password") {
            $("#password2").attr("type", "text");
            $("#eye-icon2").html(
                `
                    <svg onclick="showPassword() width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.1303 8.8531C21.2899 10.0732 21.2899 11.9268 20.1303 13.1469C18.1745 15.2047 14.8155 18 11 18C7.18448 18 3.82549 15.2047 1.86971 13.1469C0.710098 11.9268 0.710098 10.0732 1.86971 8.8531C3.82549 6.79533 7.18448 4 11 4C14.8155 4 18.1745 6.79533 20.1303 8.8531Z" stroke="#6C7275" stroke-width="1.5"/>
                        <path d="M14 11C14 12.6569 12.6569 14 11 14C9.34315 14 8 12.6569 8 11C8 9.34315 9.34315 8 11 8C12.6569 8 14 9.34315 14 11Z" stroke="#6C7275" stroke-width="1.5"/>
                        <path d="M20.4454 1.35358L1.35355 20.4455" stroke="#6C7275" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                `
            )
        } else {
            $("#password2").attr("type", "password");
            $("#eye-icon2").html(
                `
                    <svg onclick="showPassword()"
                        width="22" height="16" viewBox="0 0 22 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.1303 5.8531C21.2899 7.07317 21.2899 8.92683 20.1303 10.1469C18.1745 12.2047 14.8155 15 11 15C7.18448 15 3.82549 12.2047 1.86971 10.1469C0.710098 8.92683 0.710098 7.07317 1.86971 5.8531C3.82549 3.79533 7.18448 1 11 1C14.8155 1 18.1745 3.79533 20.1303 5.8531Z"
                            stroke="#6C7275" stroke-width="1.5" />
                        <path
                            d="M14 8C14 9.65685 12.6569 11 11 11C9.34315 11 8 9.65685 8 8C8 6.34315 9.34315 5 11 5C12.6569 5 14 6.34315 14 8Z"
                            stroke="#6C7275" stroke-width="1.5" />
                    </svg>
                `
            )
        }
    });
});

$(document).ready(function () {
    $(".effect-layer").click(function closeSideMenu() {
        $(".side-menu").removeClass("show");
        $(".effect-layer").removeClass("show");
    });
});


// Initialize slide-1-swiper
var swiper = new Swiper(".slide-1-swiper", {
    effect: "coverflow",
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    slidesPerView: 1,
    spaceBetween: 0,
    pagination: {
        el: ".swiper-pagination",
        // dynamicBullets: true,
    },
});

// Initialize slide-3-swiper
var swiper = new Swiper(".slide-3-swiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    scrollbar: {
        el: ".swiper-scrollbar",
        // hide: true,
    },
    breakpoints: {
        0: {

            slidesPerView: 1.3,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 24,
        }
    },
});

$("#join-section-input").focusout(function () {
    $("#join-section-form").removeClass("focus");
});

$("#join-section-input").focus(function () {
    $("#join-section-form").addClass("focus");
});

$(document).ready(function () {
    const currentLocation = window.location.href;
    $('nav .pages-links a').each(function () {
        if (this.href === currentLocation) {
            // $('nav .pages-links a').removeClass('active');
            $(this).addClass('active');
        }
    });
});

// Initialize slide-4-swiper
var swiper = new Swiper(".slide-4-swiper", {
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
            grid: {
                rows: 1,
            },
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 24,
            grid: {
                rows: 1,
            },
        },
        992: {
            slidesPerView: 2,
            spaceBetween: 24,
            grid: {
                rows: 3,
            },
        }
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    }
});
