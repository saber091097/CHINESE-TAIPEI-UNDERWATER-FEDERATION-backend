// const authLogIn = document.querySelector('#authentication-modal');
// const accountCreate = document.querySelector('.createAccount');

// function close() {
//     // authLogIn.classList.add('none');
//     accountCreate.classList.add('none');
// }

const nickName = document.querySelector(".innerbox-nickName");
const mail = document.querySelector(".innerbox-mail");
const password = document.querySelector(".innerbox-password");
const pwCheck = document.querySelector(".innerbox-pwCheck");


function create(){

    var nickNameValue = document.getElementById("nickName").value;
    var mailValue = document.getElementById("mail").value;
    // var pwValue = document.getElementById("password").value;
    // var passwordValue = document.formCreate.password.value;
    // var pwCheckValue = document.getElementById("pwCheck").value;
    // var passwordCheckValue = document.formCreate.password.value;

    if (nickNameValue == "") {
        nickName.innerHTML = "";
        nickName.innerHTML = `
        <label class="" for="nickName"><span class="ts ts-red ts75">暱稱</span><span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="nickName" type="text" name="name" value="" placeholder="輸入暱稱">
        <span class="ts ts-red">請輸入暱稱</span>
        `;
    }else if (mailValue == "") {
        mail.innerHTML = "";
        mail.innerHTML = `
        <label class="" for="mail"><span class="ts ts-red ts75">電子郵件地址</span><span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="mail" type="text" name="email" value="" placeholder="輸入電子郵件地址">
        <span class="ts ts-red">輸入電子郵件地址</span>
        `;
    }else if (!checkEmail(mailValue)){
        var wrongMailValue = formCreate.email.value;
        mail.innerHTML = "";
        mail.innerHTML = `
        <label class="" for="mail"><span class="ts ts-red ts75">電子郵件地址</span><span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="mail" type="text" name="email" value="${wrongMailValue}" placeholder="輸入電子郵件地址">
        <span class="ts ts-red">輸入正確的電子郵件地址</span>
        `;
    }else if (formCreate.password.value == "" || formCreate.password.value.length < 8 || checkPw(formCreate.password.value)) {
        password.innerHTML = "";
        password.innerHTML = `
        <label class="" for="password"><span class="ts ts-red ts75">密碼</span><span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="password" type="password" name="password" value="" placeholder="輸入 8 個字元，包含至少一個大寫或小寫英文與至少一個數字">
        <span class="ts ts-red">請輸入 8 個字元，包含至少一個大寫或小寫英文與至少一個數字</span>
        `;
    }else if (formCreate.pwCheck.value !== formCreate.password.value) {
        pwCheck.innerHTML = "";
        pwCheck.innerHTML = `
        <label class="" for="pwCheck"><span class="ts ts-red ts75">確認密碼</span><span class="ts ts-red star">*</span></label>
        <input class="input-red input-text w-full focus:outline-none" id="pwCheck" type="password" name="pwCheck" value="" placeholder="再次輸入密碼">
        <span class="ts ts-red">確認密碼輸入不符</span>
        `;
    }else
    formCreate.submit();




    if (!nickNameValue == "") {
        nickName.innerHTML = "";
        nickName.innerHTML = `
        <label class="" for="nickName"><span class="ts ts75">暱稱</span><span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="nickName" type="text" name="name" value="${nickNameValue}" placeholder="輸入暱稱">
        `;
    };

    if (!mailValue == "" && checkEmail(mailValue)) {
        mail.innerHTML = "";
        mail.innerHTML = `
        <label class="" for="mail"><span class="ts ts75">電子郵件地址</span><span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="mail" type="text" name="email" value="${mailValue}" placeholder="輸入電子郵件地址">
        `;
    };

    if (!formCreate.password.value == "" && !formCreate.password.value.length < 8 && !checkPw(formCreate.password.value)) {
        var newPwValue = formCreate.password.value;
        password.innerHTML = "";
        password.innerHTML = `
        <label class="" for="password"><span class="ts ts75">密碼</span><span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="password" type="password" name="password" value="${newPwValue}" placeholder="輸入 8 個字元，包含至少一個大寫或小寫英文與至少一個數字">
        `;
    };

    if (formCreate.pwCheck.value == formCreate.password.value) {
        var newPwCkValue = formCreate.pwCheck.value;
        pwCheck.innerHTML = "";
        pwCheck.innerHTML = `
        <label class="" for="pwCheck"><span class="ts ts75">確認密碼</span><span class="ts star">*</span></label>
        <input class="input-text w-full focus:outline-none" id="pwCheck" type="password" name="pwCheck" value="${newPwCkValue}" placeholder="再次輸入密碼">
        `;
    };



};

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

// function checkPw() {
//     var pw = document.getElementById("password").value;
//     if (pw.length >= 8) {
//         return (false);
//     } else {
//         return (true);
//     }

// };


// function checkPwck() {
//     var pwck = document.getElementById("pwCheck").value;
//     if (pwck.length >= 8) {
//         return (false);
//     } else {
//         return (true);
//     }

// };


// function checkPassword(e) {
//     var re = /^[A-Za-z0-9]+$/;
//     if ((e.value.length >= 6)) {
//         return false;
//     } else
//         return true;
// }


// function checkPw(e) {
//     var pwValue = document.getElementById("password").value;
//     if (pwValue.length >= 8){
//         return (false);
//     } else
//         return (true);
// };


function checkPw(e) {

    if (e.match(/[A-Za-z]/g) && e.match(/[0-9]/g)) {
        return false;
    } else
        return true;

};






















// 信箱是否重複 驗證 (後端controller 感覺比較好做)
// fetch({
//     url: "",
//     type:"post",
//     data:{"email": email},
//     dataType:"json",
//     async:false,
//     success:function(data) {
//         if(data.msg=="false"){

//         }else{
//             return (true);
//         }
//     }
// });



// formData.append('add_qty', parseInt(qty.value));
//             formData.append('product_id',  {{ $details->id }});
//             formData.append('_token',  '{{ csrf_token() }}');
// fetch('/add_to_cart', {
//     method: 'POST',
//     body: formData
// })
// .then(response => response.json())
// .catch(error => {
//     alert('新增失敗, 請再嘗試一次!')
//     return 'error';
// })
// .then(response => {
//     if (response != 'error'){
//         if (response.result == 'success')
//             alert('新增成功!')
//         else{
//             alert('新增失敗:' + response.message)
//         }
//     }
// });
