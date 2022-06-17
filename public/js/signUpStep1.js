
const address = document.querySelector("#address");
const countyS = document.querySelector(".county");
const districtS = document.querySelector(".district");

// countyS.addEventListener('click',function(){
//     countyS.classList.add('color-change');
// });

// districtS.addEventListener('click',function(){
//     districtS.classList.add('color-change1');
// });


const nameBox = document.querySelector(".innerbox-name");
const idBox = document.querySelector(".innerbox-id");
const sexBox = document.querySelector(".innerbox-sex");
const phoneBox = document.querySelector(".innerbox-phone");
const mailBox = document.querySelector(".innerbox-mail");
const addressBox = document.querySelector(".innerbox-address");
const addressSelect = document.querySelector(".address");
const addressInput = document.querySelector(".input-address");
const select_county = document.querySelector(".select-county");
const select_district = document.querySelector(".select-district");
const warning = document.querySelector(".warning");
const mail_warning = document.querySelector(".mail-warning");

function next(){

    var nameValue = document.getElementById("name").value;
    var idValue = document.getElementById("id").value;
    var phoneValue = document.getElementById("phone").value;
    var emailValue = document.getElementById("email").value;
    // var emailV = formS1.elements["email"].value;

    var countyValue = document.getElementById("county").value;
    var districtValue = document.getElementById("district").value;
    var addressValue = document.getElementById("addressinput").value;

    if (formS1.name.value == "") {
        nameBox.innerHTML = "";
        nameBox.innerHTML = `
        <label class="ts ts-red" for="name">真實姓名<span class="ts ts-red star">*</span></label>
        <input class="input-text w-full focus:outline-none input-red" id="name" type="text" name="name" value="" placeholder="請輸入姓名">
        <span class="ts ts-red">請輸入真實姓名</span>
        `;
    }else if (checkName(nameValue)) {
        nameBox.innerHTML = "";
        nameBox.innerHTML = `
        <label class="ts ts-red" for="name">真實姓名<span class="ts ts-red star">*</span></label>
        <input class="input-text w-full focus:outline-none input-red" id="name" type="text" name="name" value="${nameValue}" placeholder="請輸入姓名">
        <span class="ts ts-red">真實姓名只能輸入中文或英文</span>
        `;
    }else if (formS1.id.value == "") {
        idBox.innerHTML = "";
        idBox.innerHTML = `
        <label class="ts ts-red" for="id">身分證字號 (ID Numbers)<span class="ts ts-red star">*</span></label>
        <input class="input-text w-full focus:outline-none input-red" id="id" type="text" name="id" value="" placeholder="請輸入身分證字號">
        <span class="ts ts-red">請輸入身分證字號</span>
        `;
    }else if (!checkID(idValue)) {
        idBox.innerHTML = "";
        idBox.innerHTML = `
        <label class="ts ts-red" for="id">身分證字號 (ID Numbers)<span class="ts ts-red star">*</span></label>
        <input class="input-text w-full focus:outline-none input-red" id="id" type="text" name="id" value="${idValue}" placeholder="請輸入身分證字號">
        <span class="ts ts-red">請確認身分證字號輸入的格式</span>
        `;
    }else if (!formS1.sex[0].checked && !formS1.sex[1].checked){
        sexBox.innerHTML = "";
        sexBox.innerHTML = `
        <p class="ts ts-red">性別<span class="ts ts-red star">*</span></p>
        <div class="flex">
            <input class="input-red form-check-input h-4 w-4 mt-1
            appearance-none rounded-full border border-gray-300 bg-white
            checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200
            align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" id="male" type="radio" name="sex" value="1">
            <label class="ts ts-red label-male form-check-label inline-block text-gray-800 cursor-pointer" for="male">男</label>

            <input class="input-red form-check-input h-4 w-4 mt-1
            appearance-none rounded-full border border-gray-300 bg-white
            checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200
            align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" id="female" type="radio" name="sex" value="2">
            <label class="ts ts-red form-check-label inline-block text-gray-800 cursor-pointer" for="female">女</label>
        </div>
        <span class="ts ts-red">請選擇性別</span>
        `;
    }else if (phoneValue == "") {
        phoneBox.innerHTML = "";
        phoneBox.innerHTML = `
        <label class="ts ts-red" for="phone">聯絡電話<span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="phone" type="text" name="phone" value="" placeholder="0912345678"
        onkeyup="value=value.replace(/[^0-9 \-\+\)\(]/g,'')">
        <span class="ts ts-red">請輸入聯絡電話</span>
        `;
    }else if (formS1.phone.value.length < 7) {
        phoneBox.innerHTML = "";
        phoneBox.innerHTML = `
        <label class="ts ts-red" for="phone">聯絡電話<span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="phone" type="text" name="phone" value="" placeholder="0912345678"
        onkeyup="value=value.replace(/[^0-9 \-\+\)\(]/g,'')">
        <span class="ts ts-red">請確認聯絡電話輸入的格式</span>
        `;
    }else if (formS1.email.value == "") {
        mailBox.innerHTML = "";
        mailBox.innerHTML = `
        <label class="ts ts-red" for="email">Email<span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="email" type="text" name="email" value="" placeholder="abc123@google.com"
        onkeyup="value=value. replace(/[^\a-\z\A-\Z0-9\@\.]/g,'')">
        <span class="ts ts-red">請輸入Email</span>
        `;
    }else if (!checkEmail(formS1.email.value)){
		mailBox.innerHTML = "";
        mailBox.innerHTML = `
        <label class="ts ts-red" for="email">Email<span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="email" type="text" name="email" value="${emailValue}" placeholder="abc123@google.com"
        onkeyup="value=value. replace(/[^\a-\z\A-\Z0-9\@\.]/g,'')">
        <span class="ts ts-red">請確認Email輸入的格式</span>
        `;
	}else if (countyValue == "" || districtValue == "") {

        warning.innerHTML = `
        <span class="w-full ts ts-red span-red">請選擇完整的縣市與區域</span>
        `;
        countyS.classList.add(('input-red1'));
        districtS.classList.add(('input-red2'));


    }else if (formS1.address.value == "") {
        addressInput.innerHTML = "";
        addressInput.innerHTML = `
        <input class="input-red input-text w-full focus:outline-none" id="addressinput" type="text" name="address" value="" placeholder="請輸入地址">
        <span class="ts ts-red">請輸入完整地址</span>
        `;
    }else if (checkAddress(formS1.address.value)) {
        var addressValue = formS1.address.value;
        addressInput.innerHTML = "";
        addressInput.innerHTML = `
        <input class="input-red input-text w-full focus:outline-none" id="addressinput" type="text" name="address" value="${addressValue}" placeholder="請輸入地址">
        <span class="ts ts-red">請確認地址輸入的格式</span>
        `;
    }else
    formS1.submit();

    console.log(formS1);

    if (!nameValue == "" && !checkName(nameValue)) {
        nameBox.innerHTML = "";
        nameBox.innerHTML = `
        <label class="ts" for="name">真實姓名<span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="name" type="text" name="name" value="${nameValue}" placeholder="請輸入姓名">
        `;
    };

    if (!idValue == "" && checkID(idValue)) {
        idBox.innerHTML = "";
        idBox.innerHTML = `
        <label class="ts" for="id">身分證字號 (ID Numbers)<span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="id" type="text" name="id" value="${idValue}" placeholder="請輸入身分證字號">
        `;
    };

    if (formS1.sex[0].checked) {
        sexBox.innerHTML = "";
        sexBox.innerHTML = `
        <p class="ts">性別<span class="ts star">*</span></p>
        <div class="flex">
            <input checked class="form-check-input h-4 w-4 mt-1
            appearance-none rounded-full border border-gray-300 bg-white
            checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200
            align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" id="male" type="radio" name="sex" value="1">
            <label class="ts label-male form-check-label inline-block text-gray-800 cursor-pointer" for="male">男</label>

            <input class="form-check-input h-4 w-4 mt-1
            appearance-none rounded-full border border-gray-300 bg-white
            checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200
            align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" id="female" type="radio" name="sex" value="2">
            <label class="ts form-check-label inline-block text-gray-800 cursor-pointer" for="female">女</label>
        </div>
        `;
    };

    if (formS1.sex[1].checked) {
        sexBox.innerHTML = "";
        sexBox.innerHTML = `
        <p class="ts">性別<span class="ts star">*</span></p>
        <div class="flex">
            <input class="form-check-input h-4 w-4 mt-1
            appearance-none rounded-full border border-gray-300 bg-white
            checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200
            align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" id="male" type="radio" name="sex" value="1">
            <label class="ts label-male form-check-label inline-block text-gray-800 cursor-pointer" for="male">男</label>

            <input checked class="form-check-input h-4 w-4 mt-1
            appearance-none rounded-full border border-gray-300 bg-white
            checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200
            align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" id="female" type="radio" name="sex" value="2">
            <label class="ts form-check-label inline-block text-gray-800 cursor-pointer" for="female">女</label>
        </div>
        `;
    };

    if (!phoneValue == "" && formS1.phone.value.length >= 7) {
        phoneBox.innerHTML = "";
        phoneBox.innerHTML = `
        <label class="ts" for="phone">聯絡電話<span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="phone" type="text" name="phone" value="${phoneValue}" placeholder="0912345678"
        onkeyup="value=value.replace(/[^0-9 \-\+\)\(]/g,'')">
        `;
    };

    if (!formS1.email.value == "" && checkEmail(emailValue)) {
        mailBox.innerHTML = "";
        mailBox.innerHTML = `
        <label class="ts" for="email">Email<span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="email" type="text" name="email" value="${emailValue}" placeholder="abc123@google.com"
        onkeyup="value=value. replace(/[^\a-\z\A-\Z0-9\@\.]/g,'')">
        `;
    };

    if (!countyValue == "" && !districtValue == "") {
        warning.innerHTML ="";

        countyS.classList.add('color-change');

        districtS.classList.add('color-change1');
    };

    if (!addressValue == "" && !checkAddress(formS1.address.value)) {
        addressInput.innerHTML = "";
        addressInput.innerHTML = `
        <input class="input-text w-full focus:outline-none" id="addressinput" type="text" name="address" value="${addressValue}" placeholder="請輸入地址">
        `;
    };

};
// ------------------姓名認證-----------------------
function checkName(strName){

    var namereg = /^[\u4E00-\u9FA5A-Za-z\s]+(·[\u4E00-\u9FA5A-Za-z]+)*$/;

    if(namereg.test(strName)){
        return (false);
    }else
        return (true);

};

// ------------------身分證認證-----------------------

function checkID(idStr){

    var letters = new Array('A', 'B', 'C', 'D',
        'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M',
        'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V',
        'X', 'Y', 'W', 'Z', 'I', 'O');

    var multiply = new Array(1, 9, 8, 7, 6, 5,
                             4, 3, 2, 1);
    var nums = new Array(2);
    var firstChar;
    var firstNum;
    var lastNum;
    var total = 0;

    var regExpID=/^[a-z](1|2)\d{8}$/i;
    if (idStr.search(regExpID)==-1) {
     return false;
    } else {
      firstChar = idStr.charAt(0).toUpperCase();
      lastNum = idStr.charAt(9);
    }

    for (var i=0; i<26; i++) {
      if (firstChar == letters[i]) {
        firstNum = i + 10;
        nums[0] = Math.floor(firstNum / 10);
        nums[1] = firstNum - (nums[0] * 10);
        break;
      }
    }

    for(var i=0; i<multiply.length; i++){
      if (i<2) {
        total += nums[i] * multiply[i];
      } else {
        total += parseInt(idStr.charAt(i-1)) *
                 multiply[i];
      }
    }

    if ((10 - (total % 10))!= lastNum) {
      return false;
    }
    return true;
  }
// ------------------護照號碼認證-----------------------

// function checkPassport(code){
//     // var code = formS1.id.value;
//     if(!code || !/^((1[45]\d{7})|(G\d{8})|(P\d{7})|(S\d{7,8}))?$/.test(code)){
//         return false;
//     }else
//     return true;
// };

// ------------------email認證-----------------------
function checkEmail(mail){
    index = mail.indexOf ('@', 0);
    if (index==-1) {
        return (false);
    } else if (index==0) {
        return (false);
    } else if (index==mail.length-1) {;
        return (false);
    } else
        return (true);
};

// ------------------地址認證-----------------------

function checkAddress(strAddress){

    var addressreg = /^([\u4e00-\u9fa5])+\d|([\u4e00\u4e8c\u4e09\u56db\u4e94\u516d\u4e03\u516b\u4e5d\u5341])/;

    if(addressreg.test(strAddress)){
        return (false);
    }else
        return (true);

};

// ------------------手機認證-----------------------
// function checkCellhone(phone) {
//     // re = /1{2}[0-9]{8}$/;
//     // if (!re.test(phone)){
//     //     return (false);
//     // } else
//     // return (true);
//     var MobileReg = /^(09)[0-9]{8}$/;
//     (phone.match(MobileReg)) ? true : false
// };

// function fucCheckTEL(phone) {
//     var i,j,strTemp;
//     strTemp="0123456789-()# ";
//     for (i=0;i<phone.length;i++)
//     {
//     j=strTemp.indexOf(phone.charAt(i));
//     if (j==-1)
//     {
//         return 0;
//     }
//     }
//         return 1;
// }

