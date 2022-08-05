
const saving = document.querySelector("#saving");
const swimming = document.querySelector("#swimming");
const windsurf = document.querySelector("#windsurf");
const diving = document.querySelector("#diving");
const sup = document.querySelector("#sup");

const section1 = document.querySelector("#modal01");
const section2 = document.querySelector("#modal02");
const section3 = document.querySelector("#WINDSURFModal");
const section4 = document.querySelector("#DIVINGFModal");
const section5 = document.querySelector("#SUPModal");

const close_btn1 = document.querySelector(".btn-close1");
const close_btn2 = document.querySelector(".btn-close2");
const close_btn3 = document.querySelector(".btn-close3");
const close_btn4 = document.querySelector(".btn-close4");
const close_btn5 = document.querySelector(".btn-close5");

// const selectSup = document.querySelector(".selectSup");
// const selectSwim = document.querySelector(".selectSwim");
// const selectSaving = document.querySelector(".selectSaving");
// const selectC = document.querySelector(".selectClass");

const s1Bread = document.querySelector(".s1Bread");
const s1En = document.querySelector(".s1En");
const s1Title = document.querySelector(".s1Title");

const s2Bread = document.querySelector(".s2Bread");
const s2En = document.querySelector(".s2En");
const s2Title = document.querySelector(".s2Title");

const s3Bread = document.querySelector(".s3Bread");
const s3En = document.querySelector(".s3En");
const s3Title = document.querySelector(".s3Title");

const s4Bread = document.querySelector(".s4Bread");
const s4En = document.querySelector(".s4En");
const s4Title = document.querySelector(".s4Title");

const s5Bread = document.querySelector(".s5Bread");
const s5En = document.querySelector(".s5En");
const s5Title = document.querySelector(".s5Title");

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
        window.location.reload();
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
        window.location.reload();
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
        close_btn5.classList.add('appear5');
    }

    close_btn5.addEventListener('click' ,function(){
        section5.classList.remove('wfull5');
        close_btn5.classList.add('appear5');
        window.location.reload();
    })
});


saving.addEventListener('click' , function(){
    s1Bread.innerHTML = "水上救生";
    s1En.innerHTML = "Life Saving";
    s1Title.innerHTML = "水上救生";
});

swimming.addEventListener('click' , function(){
    s2Bread.innerHTML = "游泳";
    s2En.innerHTML = "Swimming";
    s2Title.innerHTML = "游泳";
});

windsurf.addEventListener('click' , function(){
    s4Bread.innerHTML = "風浪板";
    s4En.innerHTML = "Windsurf Board";
    s4Title.innerHTML = "風浪板";
});

diving.addEventListener('click' , function(){
    s5Bread.innerHTML = "潛水";
    s5En.innerHTML = "Diving";
    s5Title.innerHTML = "潛水";
});

sup.addEventListener('click' , function(){
    s3Bread.innerHTML = "立式划槳";
    s3En.innerHTML = "SUP";
    s3Title.innerHTML = "立式划槳";
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






var saving_swiper = new Swiper("#saving_mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var saving_swiper2 = new Swiper("#saving_mySwiper2", {
    spaceBetween: 10,
    loop: true,
    navigation: {
        nextEl: "#saving_swiper_button_next",
        prevEl: "#saving_swiper_button_prev",
    },
    thumbs: {
        swiper: saving_swiper,
    },
});

var swimming_swiper = new Swiper("#swimming_mySwiper", {
    spaceBetween: 10,
    loop: true,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var swimming_swiper2 = new Swiper("#swimming_mySwiper2", {
    spaceBetween: 10,
    loop: true,
    navigation: {
        nextEl: "#swimming_swiper_button_next",
        prevEl: "#swimming_swiper_button_prev",
    },
    thumbs: {
        swiper: swimming_swiper,
    },
});

var windsurf_swiper = new Swiper("#windsurf_mySwiper", {
    spaceBetween: 10,
    loop: true,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var windsurf_swiper2 = new Swiper("#windsurf_mySwiper2", {
    spaceBetween: 10,
    loop: true,
    navigation: {
        nextEl: "#windsurf_swiper_button_next",
        prevEl: "#windsurf_swiper_button_prev",
    },
    thumbs: {
        swiper: windsurf_swiper,
    },
});

var diving_swiper = new Swiper("#diving_mySwiper", {
    spaceBetween: 10,
    loop: true,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var diving_swiper2 = new Swiper("#diving_mySwiper2", {
    spaceBetween: 10,
    loop: true,
    navigation: {
        nextEl: "#diving_swiper_button_next",
        prevEl: "#diving_swiper_button_prev",
    },
    thumbs: {
        swiper: diving_swiper,
    },
});

var sup_swiper = new Swiper("#sup_mySwiper", {
    spaceBetween: 10,
    loop: true,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var sup_swiper2 = new Swiper("#sup_mySwiper2", {
    spaceBetween: 10,
    loop: true,
    navigation: {
        nextEl: "#sup_swiper_button_next",
        prevEl: "#sup_swiper_button_prev",
    },
    thumbs: {
        swiper: sup_swiper,
    },
});
