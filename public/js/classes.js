
const body = document.querySelector("#body");
const callS1 = document.querySelector("#callS1");
const callS2 = document.querySelector("#callS2");
const callS3 = document.querySelector("#callS3");
const callS4 = document.querySelector("#callS4");
const callS5 = document.querySelector("#callS5");

const section1 = document.querySelector("#s1");
const section2 = document.querySelector("#s2");
const section3 = document.querySelector("#s3");
const section4 = document.querySelector("#s4");
const section5 = document.querySelector("#s5");

const close_btn1 = document.querySelector("#btn-close1");
const close_btn2 = document.querySelector("#btn-close2");
const close_btn3 = document.querySelector("#btn-close3");
const close_btn4 = document.querySelector("#btn-close4");
const close_btn5 = document.querySelector("#btn-close5");

const list1 = document.querySelector("#list1");
const s1_container = document.querySelector("#s1-container");


section1.addEventListener("scroll", event => {

    if (section1.scrollTop > 100) {
        section1.classList.add('wfull1');
    }

    if (section1.scrollTop > 200) {
        close_btn1.classList.add('appear1');
    }

    if (section1.scrollTop < 10) {
        close_btn1.classList.remove('appear1');
    }

    close_btn1.addEventListener('click' ,function(){
        section1.classList.remove('wfull1');
        close_btn1.classList.remove('appear1');
        body.classList.add('bodyToTop');
    })

    callS1.addEventListener('click' ,function(){
        body.classList.remove('bodyToTop');
        // section1.scrollTop = 0;

        // section1.scrollTo(0,-1);

        // section1.classList.add('w975-1');
    })

});

section2.addEventListener("scroll", event => {

    if (section2.scrollTop > 100) {
        section2.classList.add('wfull2');
    }

    if (section2.scrollTop > 200) {
        close_btn2.classList.add('appear2');
    }

    if (section2.scrollTop < 10) {
        close_btn2.classList.remove('appear2');
    }

    close_btn2.addEventListener('click' ,function(){
        section2.classList.remove('wfull2');
        close_btn2.classList.remove('appear2');
        body.classList.add('bodyToTop')
    })

    callS2.addEventListener('click' ,function(){
        body.classList.remove('bodyToTop');
        // section2.scrollTop = 0;
    })
});

section3.addEventListener("scroll", event => {

    if (section3.scrollTop > 100) {
        section3.classList.add('wfull3');
    }

    if (section3.scrollTop > 200) {
        close_btn3.classList.add('appear3');
    }

    if (section3.scrollTop < 10) {
        close_btn3.classList.remove('appear3');
    }

    close_btn3.addEventListener('click' ,function(){
        section3.classList.remove('wfull3');
        close_btn3.classList.remove('appear3');
        body.classList.add('bodyToTop')
    })

    callS3.addEventListener('click' ,function(){
        body.classList.remove('bodyToTop');
        // section3.scrollTop = 0;
    })
});

section4.addEventListener("scroll", event => {

    if (section4.scrollTop > 100) {
        section4.classList.add('wfull4');
    }

    if (section4.scrollTop > 200) {
        close_btn4.classList.add('appear4');
    }

    if (section4.scrollTop < 10) {
        close_btn4.classList.remove('appear4');
    }

    close_btn4.addEventListener('click' ,function(){
        section4.classList.remove('wfull4');
        close_btn4.classList.remove('appear4');
        body.classList.add('bodyToTop')
    })

    callS4.addEventListener('click' ,function(){
        body.classList.remove('bodyToTop');
        // section4.scrollTop = 0;
    })
});

section5.addEventListener("scroll", event => {

    if (section5.scrollTop > 100) {
        section5.classList.add('wfull5');
    }

    if (section5.scrollTop > 200) {
        close_btn5.classList.add('appear5');
    }

    if (section5.scrollTop < 10) {
        close_btn5.classList.remove('appear5');
    }

    close_btn5.addEventListener('click' ,function(){
        section5.classList.remove('wfull5');
        close_btn5.classList.remove('appear5');
        body.classList.add('bodyToTop')
    })

    callS5.addEventListener('click' ,function(){
        body.classList.remove('bodyToTop');
        // section5.scrollTop = 0;
    })
});





var s1_swiper = new Swiper("#s1_mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var s1_swiper2 = new Swiper("#s1_mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
        nextEl: "#s1_swiper_button_next",
        prevEl: "#s1_swiper_button_prev",
    },
    thumbs: {
        swiper: s1_swiper,
    },
});

var s2_swiper = new Swiper("#s2_mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var s2_swiper2 = new Swiper("#s2_mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
        nextEl: "#s2_swiper_button_next",
        prevEl: "#s2_swiper_button_prev",
    },
    thumbs: {
        swiper: s2_swiper,
    },
});

var s3_swiper = new Swiper("#s3_mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var s3_swiper2 = new Swiper("#s3_mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
        nextEl: "#s3_swiper_button_next",
        prevEl: "#s3_swiper_button_prev",
    },
    thumbs: {
        swiper: s3_swiper,
    },
});

var s4_swiper = new Swiper("#s4_mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var s4_swiper2 = new Swiper("#s4_mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
        nextEl: "#s4_swiper_button_next",
        prevEl: "#s4_swiper_button_prev",
    },
    thumbs: {
        swiper: s4_swiper,
    },
});

var s5_swiper = new Swiper("#s5_mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var s5_swiper2 = new Swiper("#s5_mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
        nextEl: "#s5_swiper_button_next",
        prevEl: "#s5_swiper_button_prev",
    },
    thumbs: {
        swiper: s5_swiper,
    },
});
