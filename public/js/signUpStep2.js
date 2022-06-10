const hInput = document.querySelector("#upload");
const c1Input = document.querySelector("#upload-idC1");
const c2Input = document.querySelector("#upload-idC2");


function readURL(hInput){

    if(hInput.files && hInput.files[0]){

        var imageTagID = hInput.getAttribute("targetID");

        var reader = new FileReader();

        reader.onload = function (e) {

            var img = document.getElementById(imageTagID);

            // const box1 = document.querySelector('#in-inner-idCard1');

            img.setAttribute("src", e.target.result)

            // box1.classList.add('none');
            img.classList.add('show');
        }
        reader.readAsDataURL(hInput.files[0]);

    }

};

// function readURL1(c1Input){

//     if(c1Input.files && c1Input.files[0]){

//         var imageTagID1 = c1Input.getAttribute("targetID");

//         var reader1 = new FileReader();  

//         reader1.onload = function (e) {

//             var img1 = document.getElementById(imageTagID1);

//             const box1 = document.querySelector('#in-inner-idCard1');

//             img1.setAttribute("src", e.target.result)

//             box1.classList.add('none1');
//             img1.classList.add('show');
//         }

//         reader1.readAsDataURL(c1Input.files[0]);

//     }

// };

// function readURL2(c2Input){

//     if(c2Input.files && c2Input.files[0]){

//         var imageTagID2 = c2Input.getAttribute("targetID");

//         var reader2 = new FileReader();  

//         reader2.onload = function (e) {

//             var img2 = document.getElementById(imageTagID2);

//             const box2 = document.querySelector('#in-inner-idCard2');

//             img2.setAttribute("src", e.target.result)

//             box2.classList.add('none2');
//             img2.classList.add('show');
//         }

//         reader2.readAsDataURL(c2Input.files[0]);

//     }
// };

var oDragWrap1 = document.querySelector('.box-idCard1');

oDragWrap1.addEventListener( 
    "dragenter", 
    function(e) { 
        e.preventDefault(); 
    }, false 
);

oDragWrap1.addEventListener( 
    "dragleave", 
    function(e) { 
        dragleaveHandler(e); 
    }, false 
);

oDragWrap1.addEventListener( 
    "dragover", 
    function(e) { 
        e.preventDefault(); 
    }, false 
);

oDragWrap1.addEventListener( 
    "drop", function(e) { 
    dropHandler1(e); 
    }, 
    false 
);

var dropHandler1 = function(e) { 
    e.preventDefault();
    var fileList1 = e.dataTransfer.files;

    if (fileList1.length == 0) { 
        return; 
    } 
    if (fileList1[0].type.indexOf("image") === -1) { 
        return; 
    } 
    
    var reader1 = new FileReader(); 

    var img1 = document.createElement("img"); 
    reader1.onload = function(e) { 
        img1.src = this.result;
        oDragWrap1.innerHTML = "";
        oDragWrap1.appendChild(img1);
    }; 
    reader1.readAsDataURL(fileList1[0]); 
};


var oDragWrap2 = document.querySelector('.box-idCard2');

oDragWrap2.addEventListener( 
    "dragenter", 
    function(e) { 
        e.preventDefault(); 
    }, 
    false 
);

oDragWrap2.addEventListener( 
    "dragleave", 
    function(e) { 
        dragleaveHandler(e); 
    }, false 
);

oDragWrap2.addEventListener( 
    "dragover", 
    function(e) { 
        e.preventDefault(); 
    }, false 
);

oDragWrap2.addEventListener( 
    "drop", function(e) { 
    dropHandler2(e); 
    }, 
    false 
);

var dropHandler2 = function(e) { 
    e.preventDefault();
    var fileList2 = e.dataTransfer.files;

    if (fileList2.length == 0) { 
        return; 
    } 
    if (fileList2[0].type.indexOf("image") === -1) { 
        return; 
    } 
    
    var reader2 = new FileReader(); 

    var img2 = document.createElement("img"); 
    reader2.onload = function(e) { 
        img2.src = this.result;
        oDragWrap2.innerHTML = "";
        oDragWrap2.appendChild(img2);
    }; 
    reader2.readAsDataURL(fileList2[0]); 
};

const lineId = document.querySelector(".innerbox-id");
const contacter = document.querySelector(".innerbox-contact-per");
const contactPhone = document.querySelector(".innerbox-contact-phone");
const headshot = document.querySelector(".box-headshot");
const idCard1 = document.querySelector(".box-idCard1");
const idCard2 = document.querySelector(".box-idCard2");
const classC1 = document.querySelector(".check1");
const classC2 = document.querySelector(".check2");
const classC3 = document.querySelector(".check3");
const classC4 = document.querySelector(".check4");

const warningH = document.querySelector(".warning-head");
const warningC1 = document.querySelector(".warning-idC1");
const warningC2 = document.querySelector(".warning-idC2");
const warningClass = document.querySelector(".warning-class");

const headshotInp = document.querySelector(".div-upload");
const tH = document.querySelector(".title-h");
const tC1 = document.querySelector(".title-idC1");
const tC2 = document.querySelector(".title-idC2");
const sH = document.querySelector(".star-h");
const sC1 = document.querySelector(".star-idC1");
const sC2 = document.querySelector(".star-idC2");
const tC = document.querySelector(".title-C");
const sC = document.querySelector(".star-C");

function check(){

    var checked = document.querySelector('[name=class]:checked')

    if (formS2.lineId.value == "") {
        lineId.innerHTML = "";
        lineId.innerHTML = `
        <label class="ts ts-red" for="name">Line ID<span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="name" type="text" name="lineId" value="" placeholder="line ID">
        <span class="ts ts-red">請輸入Line ID</span>
        `;
    }else if (formS2.contact.value == "") {
        contacter.innerHTML = "";
        contacter.innerHTML = `
        <label class="ts ts-red" for="contact">緊急聯絡人<span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="contact" type="text" name="contact" value="" placeholder="緊急聯絡人姓名">
        <span class="ts ts-red">請輸入緊急聯絡人姓名</span>
        `;
    }else if (formS2.contactPhone.value == "") {
        contactPhone.innerHTML = "";
        contactPhone.innerHTML = `
        <label class="ts ts-red" for="contactPhone">緊急聯絡人電話<span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="contactPhone" type="text" name="contactPhone" value="" placeholder="緊急聯絡人電話">
        <span class="ts ts-red">請輸入緊急聯絡人電話</span>
        `;
    }else if (formS2.headshot.value == "") {
        warningH.innerHTML = `
        <span class="ts ts-red">請上傳大頭照</span>
        `;
        headshotInp.classList.add(('input-red'));
        tH.classList.add(('red-tsd'));
        sH.classList.add(('red-star'));
    }else if (formS2.idCard1.value == "") {
        warningC1.innerHTML = `
        <span class="ts ts-red">請上傳身分證 正面影本</span>
        `;
        idCard1.classList.add(('input-red2'));
        tC1.classList.add(('red-tsd'));
        sC1.classList.add(('red-star'));
    }else if (formS2.idCard2.value == "") {
        warningC2.innerHTML = `
        <span class="ts ts-red">請上傳身分證 反面影本</span>
        `;
        idCard2.classList.add(('input-red2'));
        tC2.classList.add(('red-tsd'));
        sC2.classList.add(('red-star'));
    // }else if (formS2.class[0].checked && formS2.class[3].checked) {
    //     alert('若是已選擇課程，請勿再選擇[無]!');
    // }else if (formS2.class[1].checked && formS2.class[3].checked){
    //     alert('若是已選擇課程，請勿再選擇[無]!');
    // }else if (formS2.class[2].checked && formS2.class[3].checked){
    //     alert('若是已選擇課程，請勿再選擇[無]!');
    }else if (!checked){
        warningClass.innerHTML = `
        <span class="ts ts-red">請選擇選修課程 或 [無]</span>
        `;
        classC1.classList.add(('input-red'));
        classC2.classList.add(('input-red3'));
        classC3.classList.add(('input-red4'));
        classC4.classList.add(('input-red5'));
        tC.classList.add(('red-tsd'));
        sC.classList.add(('red-star'));
    }else
    formS2.submit();



    if (!formS2.lineId.value == "") {
        var lineIdV = formS2.lineId.value;
        lineId.innerHTML = "";
        lineId.innerHTML = `
        <label class="ts" for="name">Line ID<span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="name" type="text" name="lineId" value="${lineIdV}" placeholder="line ID">
        `;
    }
    
    if (!formS2.contact.value == "") {
        var contactV = formS2.contact.value;
        contacter.innerHTML = "";
        contacter.innerHTML = `
        <label class="ts" for="contact">緊急聯絡人<span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="contact" type="text" name="contact" value="${contactV}" placeholder="緊急聯絡人姓名">
        `;
    }
    
    if (!formS2.contactPhone.value == "") {
        var contactPV = formS2.contactPhone.value;
        contactPhone.innerHTML = "";
        contactPhone.innerHTML = `
        <label class="ts" for="contactPhone">緊急聯絡人電話<span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="contactPhone" type="text" name="contactPhone" value="${contactPV}" placeholder="緊急聯絡人電話">
        `;
    }
    
    if (!formS2.headshot.value == "") {
        warningH.innerHTML = "";
        headshotInp.classList.remove(('input-red'));
        tH.classList.remove(('red-tsd'));
        sH.classList.remove(('red-star'));
    }
    
    if (!formS2.idCard1.value == "") {
        warningC1.innerHTML = "";
        idCard1.classList.remove(('input-red2'));
        tC1.classList.remove(('red-tsd'));
        sC1.classList.remove(('red-star'));
    }
    
    if (!formS2.idCard2.value == "") {
        warningC2.innerHTML = "";
        idCard2.classList.remove(('input-red2'));
        tC2.classList.remove(('red-tsd'));
        sC2.classList.remove(('red-star'));
    
    }
    if (checked){
        warningClass.innerHTML =  "";
        classC1.classList.remove(('input-red'));
        classC2.classList.remove(('input-red3'));
        classC3.classList.remove(('input-red4'));
        classC4.classList.remove(('input-red5'));
        tC.classList.remove(('red-tsd'));
        sC.classList.remove(('red-star'));
    }
}
