
// const body = document.querySelector("#body");
const callS1 = document.querySelector("#callS1");
const callS2 = document.querySelector("#callS2");
const callS3 = document.querySelector("#callS3");
const callS4 = document.querySelector("#callS4");
const callS5 = document.querySelector("#callS5");

const section1 = document.querySelector("#modal01");
const section2 = document.querySelector("#modal02");
// const section3 = document.querySelector("#modal03");
// const section4 = document.querySelector("#modal04");
// const section5 = document.querySelector("#modal05");

const close_btn1 = document.querySelector(".btn-close1");
const close_btn2 = document.querySelector(".btn-close2");
// const close_btn3 = document.querySelector("#btn-close3");
// const close_btn4 = document.querySelector("#btn-close4");
// const close_btn5 = document.querySelector("#btn-close5");

const selectSup = document.querySelector(".selectSup");
const selectSwim = document.querySelector(".selectSwim");
const selectSaving = document.querySelector(".selectSaving");
const selectC = document.querySelector(".selectClass");

const s1Bread = document.querySelector(".s1Bread");
const s1En = document.querySelector(".s1En");
const s1Title = document.querySelector(".s1Title");

const s2Bread = document.querySelector(".s2Bread");
const s2En = document.querySelector(".s2En");
const s2Title = document.querySelector(".s2Title");

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
        window.location.reload();
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
        window.location.reload();
    })
});


callS1.addEventListener('click' , function(){
    s1Bread.innerHTML = "水上救生";
    s1En.innerHTML = "Life Saving";
    s1Title.innerHTML = "水上救生";
});

callS2.addEventListener('click' , function(){
    s1Bread.innerHTML = "游泳";
    s1En.innerHTML = "Swimming";
    s1Title.innerHTML = "游泳";
});

callS3.addEventListener('click' , function(){
    s2Bread.innerHTML = "風浪板";
    s2En.innerHTML = "Windsurf Board";
    s2Title.innerHTML = "風浪板";
});

callS4.addEventListener('click' , function(){
    s2Bread.innerHTML = "潛水";
    s2En.innerHTML = "Diving";
    s2Title.innerHTML = "潛水";
});

callS5.addEventListener('click' , function(){
    s1Bread.innerHTML = "立式划槳";
    s1En.innerHTML = "SUP";
    s1Title.innerHTML = "立式划槳";
});


// function changeclass(e) {


    // else if (selectC.value == 1) {
    //     s1Bread.innerHTML = "";
    //     s1Bread.innerHTML = "立式划槳";
    //     s1En.innerHTML = "";
    //     s1En.innerHTML = "SUP";
    //     s1Title.innerHTML = "";
    //     s1Title.innerHTML = "立式划槳";
    // }else if (selectC.value == 2) {
    //     s1Bread.innerHTML = "";
    //     s1Bread.innerHTML = "游泳";
    //     s1En.innerHTML = "";
    //     s1En.innerHTML = "Swimming";
    //     s1Title.innerHTML = "";
    //     s1Title.innerHTML = "游泳";
    // }else if (selectC.value == 3) {
    //     s1Bread.innerHTML = "";
    //     s1Bread.innerHTML = "水上救生";
    //     s1En.innerHTML = "";
    //     s1En.innerHTML = "Life Saving";
    //     s1Title.innerHTML = "";
    //     s1Title.innerHTML = "水上救生";
    // }else

//     if (selectC.options[1].selected = true) {
//             s1Bread.innerHTML = "";
//             s1Bread.innerHTML = "立式划槳";
//             s1En.innerHTML = "";
//             s1En.innerHTML = "SUP";
//             s1Title.innerHTML = "";
//             s1Title.innerHTML = "立式划槳";
//         }else if (selectC.options[2].selected = true) {
//             s1Bread.innerHTML = "";
//             s1Bread.innerHTML = "游泳";
//             s1En.innerHTML = "";
//             s1En.innerHTML = "Swimming";
//             s1Title.innerHTML = "";
//             s1Title.innerHTML = "游泳";
//         }else if (selectC.options[3].selected = true) {
//             s1Bread.innerHTML = "";
//             s1Bread.innerHTML = "水上救生";
//             s1En.innerHTML = "";
//             s1En.innerHTML = "Life Saving";
//             s1Title.innerHTML = "";
//             s1Title.innerHTML = "水上救生";
//         }else
// };




// section3.addEventListener("scroll", event => {

//     if (section3.scrollTop > 100) {
//         section3.classList.add('wfull3');
//     }

//     if (section3.scrollTop > 200) {
//         close_btn3.classList.add('appear3');
//     }

//     if (section3.scrollTop < 10) {
//         close_btn3.classList.remove('appear3');
//     }

//     close_btn3.addEventListener('click' ,function(){
//         section3.classList.remove('wfull3');
//         close_btn3.classList.remove('appear3');
//         window.location.reload();
//     })
// });

// section4.addEventListener("scroll", event => {

//     if (section4.scrollTop > 100) {
//         section4.classList.add('wfull4');
//     }

//     if (section4.scrollTop > 200) {
//         close_btn4.classList.add('appear4');
//     }

//     if (section4.scrollTop < 10) {
//         close_btn4.classList.remove('appear4');
//     }

//     close_btn4.addEventListener('click' ,function(){
//         section4.classList.remove('wfull4');
//         close_btn4.classList.remove('appear4');
//         window.location.reload();
//     })
// });

// section5.addEventListener("scroll", event => {

//     if (section5.scrollTop > 100) {
//         section5.classList.add('wfull5');
//     }

//     if (section5.scrollTop > 200) {
//         close_btn5.classList.add('appear5');
//     }

//     if (section5.scrollTop < 10) {
//         close_btn5.classList.remove('appear5');
//     }

//     close_btn5.addEventListener('click' ,function(){
//         section5.classList.remove('wfull5');
//         close_btn5.classList.remove('appear5');
//         window.location.reload();
//     })
// });



var s1_swiper = new Swiper("#s1_mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var s1_swiper2 = new Swiper("#s1_mySwiper2", {
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
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var s2_swiper2 = new Swiper("#s2_mySwiper2", {
    spaceBetween: 10,
    navigation: {
        nextEl: "#s2_swiper_button_next",
        prevEl: "#s2_swiper_button_prev",
    },
    thumbs: {
        swiper: s2_swiper,
    },
});

// var s3_swiper = new Swiper("#s3_mySwiper", {
//     spaceBetween: 10,
//     slidesPerView: 4,
//     freeMode: true,
//     watchSlidesProgress: true,
// });
// var s3_swiper2 = new Swiper("#s3_mySwiper2", {
//     spaceBetween: 10,
//     navigation: {
//         nextEl: "#s3_swiper_button_next",
//         prevEl: "#s3_swiper_button_prev",
//     },
//     thumbs: {
//         swiper: s3_swiper,
//     },
// });

// var s4_swiper = new Swiper("#s4_mySwiper", {
//     spaceBetween: 10,
//     slidesPerView: 4,
//     freeMode: true,
//     watchSlidesProgress: true,
// });
// var s4_swiper2 = new Swiper("#s4_mySwiper2", {
//     spaceBetween: 10,
//     navigation: {
//         nextEl: "#s4_swiper_button_next",
//         prevEl: "#s4_swiper_button_prev",
//     },
//     thumbs: {
//         swiper: s4_swiper,
//     },
// });

// var s5_swiper = new Swiper("#s5_mySwiper", {
//     spaceBetween: 10,
//     slidesPerView: 4,
//     freeMode: true,
//     watchSlidesProgress: true,
// });
// var s5_swiper2 = new Swiper("#s5_mySwiper2", {
//     spaceBetween: 10,
//     navigation: {
//         nextEl: "#s5_swiper_button_next",
//         prevEl: "#s5_swiper_button_prev",
//     },
//     thumbs: {
//         swiper: s5_swiper,
//     },
// });
