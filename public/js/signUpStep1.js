
const address = document.querySelector("#address");
const countyS = document.querySelector(".county");
const districtS = document.querySelector(".district");

countyS.addEventListener('click',function(){
    countyS.classList.add('color-change');
});

districtS.addEventListener('click',function(){
    districtS.classList.add('color-change1');
});


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
const county = select_county.children;

function next(){
    if (formS1.name.value == "") {
        nameBox.innerHTML = "";
        nameBox.innerHTML = `
        <label class="ts ts-red" for="name">真實姓名<span class="ts ts-red star">*</span></label>
        <input class="input-text w-full focus:outline-none input-red" id="name" type="text" name="name" value="" placeholder="請輸入姓名">
        <span class="ts ts-red">請輸入真實姓名</span>
        `;
    }else if (formS1.id.value == "") {
        idBox.innerHTML = "";
        idBox.innerHTML = `
        <label class="ts ts-red" for="id">身分證字號 (ID Numbers)<span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none input-red" id="id" type="text" name="id" value="" placeholder="請輸入身分證字號">
        <span class="ts ts-red">請輸入身分證字號</span>
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
    }else if (formS1.phone.value == "") {
        phoneBox.innerHTML = "";
        phoneBox.innerHTML = `
        <label class="ts ts-red" for="phone">聯絡電話<span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="phone" type="text" name="phone" value="" placeholder="0912345678">
        <span class="ts ts-red">請輸入聯絡電話</span>
        `;
    }else if (formS1.email.value == "") {
        mailBox.innerHTML = "";
        mailBox.innerHTML = `
        <label class="ts ts-red" for="mail">Email<span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="mail" type="text" name="email" value="" placeholder="abc123@google.com">
        <span class="ts ts-red">請輸入Email!</span>
        `;
    }else if (formS1.county.value == "" || formS1.district.value == "") {
        
        warning.innerHTML = `
        <span class="w-full ts ts-red span-red">請選擇完整的縣市與區域</span>
        `;
        countyS.classList.add(('input-red1'));
        districtS.classList.add(('input-red2'));
        

    }else if (formS1.address.value == "") {
        addressInput.innerHTML = "";
        addressInput.innerHTML = `
        <input class="input-red input-text w-full focus:outline-none" id="" type="text" name="address" value="" placeholder="請輸入地址">
        <span class="ts ts-red">請輸入完整地址</span>
        `;
    }else
    formS1.submit();


    if (!formS1.name.value == "") {
        var nameValue = formS1.name.value;
        nameBox.innerHTML = "";
        nameBox.innerHTML = `
        <label class="ts" for="name">真實姓名<span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="name" type="text" name="name" value="${nameValue}" placeholder="請輸入姓名">
        `;
    };

    if (!formS1.id.value == "") {
        var idValue = formS1.id.value;
        idBox.innerHTML = "";
        idBox.innerHTML = `
        <label class="ts" for="id">身分證字號 (ID Numbers)<span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="id" type="text" name="id" value="${idValue}" placeholder="請輸入身分證字號">
        <span class="ts">請輸入身分證字號!</span>
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

    if (!formS1.phone.value == "") {
        var phoneValue = formS1.phone.value;
        phoneBox.innerHTML = "";
        phoneBox.innerHTML = `
        <label class="ts" for="phone">聯絡電話<span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="phone" type="text" name="phone" value="${phoneValue}" placeholder="0912345678">
        `;
    };

    if (!formS1.email.value == "") {
        var mailValue = formS1.mail.value;
        mailBox.innerHTML = "";
        mailBox.innerHTML = `
        <label class="ts" for="mail">Email<span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="mail" type="text" name="email" value="${mailValue}" placeholder="abc123@google.com">
        `;
    };

    if (!formS1.county.value == "" && !formS1.district.value == "") {
        const span_red = document.querySelector(".span-red");

        span_red.classList.add('span-none');

        countyS.classList.add('color-change');

        districtS.classList.add('color-change1');
    };

    if (!formS1.address.value == "") {
        var addressValue = formS1.address.value;
        addressInput.innerHTML = "";
        addressInput.innerHTML = `
        <input class="input-text w-full focus:outline-none" type="text" name="address" value="${addressValue}" placeholder="請輸入地址">
        `;
    };
}

function validateForm(formS1){
	if (!checkEmail(formS1.email.value)){
		mail_warning.innerHTML = `
        <span class="ts ts-red">Email資料有誤，請確認!</span>
        `;
		return(false);	
	}
	formS1.submit();
	return(true);
}

function checkEmail(email){
	index = email.indexOf ('@', 0);	
	if (email.length==0) {
		// alert("請輸入電子郵件地址！");
		return (false);
	} else if (index==-1) {
		// alert("錯誤：必須包含「@」。");
		return (false);
	} else if (index==0) {
		// alert("錯誤：「@」之前不可為空字串。");
		return (false);
	} else if (index==email.length-1) {
		// alert("錯誤：「@」之後不可為空字串。");
		return (false);
	} else
		return (true);
}