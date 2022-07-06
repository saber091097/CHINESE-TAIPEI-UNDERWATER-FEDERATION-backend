@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/Pastpresidents.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <style>
        .past-presidents {
            background-color: #3B54F3;
            width: 100%;
            display: flex;
            justify-content: center;
        }
    </style>
@endsection

@section('main')
    <div class="past-presidents">
        <div class=" bg-white" style="width:80%; margin:32px 0;border-radius:10px;">
            <div class="shopbox flex flex-col" style="padding: 0 10%;">
                <div class="top flex items-center" style="margin-top:40px; margin-bottom:25px;">
                    <h3 style="font-size:32px;">最新消息發布</h3>
                </div>
                <form action="/joinlist/joinlist/addpeople/{{$data->id}}/addpeoplestore" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="innerbox-name flex flex-col w-full">
                        <label class="ts" for="name">真實姓名<span class="ts star">*</span></label>
                        <input class="input-text w-full focus:outline-none" id="name" type="text" name="name"
                            value="" placeholder="請輸入姓名">
                    </div>
                    <div class="innerbox-id flex flex-col w-full">
                        <label class="ts" for="id">身分證字號 (ID Numbers)<span class="ts star">*</span></label>
                        <input class="input-text w-full focus:outline-none" id="id" type="text" name="id"
                            value="" placeholder="請輸入身分證字號" onkeyup="value=value. replace(/[^\a-\z\A-\Z0-9]/g,'')">
                    </div>
                    <div class="innerbox-sex flex flex-col">
                        <p class="ts">性別<span class="ts star">*</span></p>
                        <div class="flex">
                            <input
                                class="form-check-input h-4 w-4 mt-1
                            appearance-none rounded-full border border-gray-300 bg-white
                            checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200
                            align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer"
                                id="male" type="radio" name="sex" value="1">
                            <label class="ts label-male form-check-label inline-block text-gray-800 cursor-pointer"
                                for="male">男</label>

                            <input
                                class="form-check-input h-4 w-4 mt-1
                            appearance-none rounded-full border border-gray-300 bg-white
                            checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200
                            align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer"
                                id="female" type="radio" name="sex" value="2">
                            <label class="ts form-check-label inline-block text-gray-800 cursor-pointer"
                                for="female">女</label>
                        </div>
                    </div>
                    <div class="innerbox-phone flex flex-col">
                        <label class="ts" for="phone">聯絡電話<span class="ts star">*</span></label>
                        <input class="input-text w-full focus:outline-none" id="phone" type="text" name="phone"
                            value="" placeholder="0912345678" onkeyup="value=value.replace(/[^0-9 \-\+\)\(]/g,'')">
                    </div>
                    <div class="innerbox-mail flex flex-col">
                        <label class="ts" for="email">Email<span class="ts star">*</span></label>
                        <input class="input-text w-full focus:outline-none" id="email" type="text" name="email"
                            value="" placeholder="abc123@google.com"
                            onkeyup="value=value. replace(/[^\a-\z\A-\Z0-9\@\.]/g,'')">
                    </div>
                    <div class="innerbox-address flex flex-col">
                        <label class="ts" for="address">通訊地址<span class="ts star">*</span></label>
                        <div class="input-address w-full flex flex-col">
                            <input class="input-text w-full focus:outline-none" id="addressinput" type="text"
                                name="address" value="" placeholder="請輸入地址">
                        </div>
                    </div>
                    <div class="innerbox-id flex flex-col w-full">
                        <label class="ts" for="name">Line ID<span class="ts star">*</span></label>
                        <input class="input-text w-full focus:outline-none" id="name" type="text" name="lineId" value=""
                            placeholder="line ID">
                    </div>
                    <div class="w-full sm:w-1/2 innerbox-contact-per flex flex-col">
                        <label class="ts" for="contact">緊急聯絡人<span class="ts star">*</span></label>
                        <input class="input-text w-full focus:outline-none" id="contact" type="text" name="contact"
                            value="" placeholder="緊急聯絡人姓名">
                    </div>
                    <div class="w-full sm:w-1/2 innerbox-contact-phone flex flex-col">
                        <label class="ts" for="contactPhone">緊急聯絡人電話<span class="ts star">*</span></label>
                        <input class="input-text w-full focus:outline-none" id="contactPhone" type="text"
                            name="contactPhone" value="" placeholder="緊急聯絡人電話">
                    </div>
                    <div class="innerbox-id flex flex-col w-full">
                        <label class="ts" for="fivenumber">匯款後五碼<span class="ts star">*</span></label>
                        <input class="input-text w-full focus:outline-none" id="fivenumber" type="text" name="fivenumber" value=""
                            placeholder="匯款後五碼">
                    </div>
                    <label class="w-full innerbox-headshot flex flex-col cursor-pointer" for="upload">
                        <p class="ts title-h">大頭照<span class="ts star star-h">*</span></p>
                        <div class="box-headshot w-full flex">
                            <div class="icon flex justify-center">
                                <img id="headshot_img" src="/img/icon/img_avatar.png" alt="">
                            </div>
                            <div class="box-upload flex justify-center items-center">
                                <div class="div-upload w-full" for="upload">
                                    <span class="tm w-full flex justify-center items-center">上傳照片</span>
                                    <input id="upload" onchange="readURL(this)" targetID="headshot_img"
                                        name="headshot" id="headshot" type="file" accept="image/jpeg, image/png" />
                                </div>
                            </div>
                        </div>
                        <span class="caption">將會使用在證照上</span>
                        <div class="warning-head"></div>
                    </label>
                    <label class="w-full innerbox-idCard flex flex-col cursor-pointer" for="upload-idC1">
                        <p class="ts title-idC1">身分證 正面影本<span class="ts star star-idC1">*</span></p>
                        <input id="upload-idC1" onchange="readURL(this)" targetID="idCard1_img" name="idCard1"
                            type="file" accept="image/jpeg, image/png" />
                        <div class="box-idCard box-idCard1 w-full flex justify-center items-center">
                            <img id="idCard1_img" class="img_idCard1" src="#" alt="">
                            <div id="in-inner-idCard1"
                                class="in-inner-idCard in-inner-idCard1 flex flex-col items-center">
                                <div class="icon">
                                    <img class="w-full h-full" src="{{ asset('img/icon/ic_image-add-line.svg') }}"
                                        alt="" style="opacity: .3">
                                </div>
                                <p class="w-full flex">
                                    <span class="ts tsb">上傳身分證 正面</span>
                                    <span class="ts">或是拖曳照片到此</span>
                                </p>
                                <span class="caption">PNG, JPG up to 10MB</span>
                            </div>
                        </div>
                        <div class="warning-idC1"></div>
                    </label>
                    <label class="w-full innerbox-idCard flex flex-col cursor-pointer" for="upload-idC2">
                        <p class="ts title-idC2">身分證 反面影本<span class="ts star star-idC2">*</span></p>
                        <input id="upload-idC2" onchange="readURL(this)" targetID="idCard2_img" name="idCard2"
                            type="file" accept="image/jpeg, image/png" />
                        <div class="box-idCard box-idCard2 w-full flex justify-center items-center">
                            <img id="idCard2_img" class="img_idCard2" src="" alt="">
                            <div id="in-inner-idCard2"
                                class="in-inner-idCard in-inner-idCard2 flex flex-col items-center">
                                <div class="icon">
                                    <img class="w-full h-full" src="{{ asset('img/icon/ic_image-add-line.svg') }}"
                                        alt="" style="opacity: .3">
                                </div>
                                <p class="w-full flex">
                                    <span class="ts tsb">上傳身分證 反面</span>
                                    <span class="ts">或是拖曳照片到此</span>
                                </p>
                                <span class="caption">PNG, JPG up to 10MB</span>
                            </div>
                        </div>
                        <div class="warning-idC2"></div>
                    </label>
                    <div class="w-full innerbox-class flex flex-col">
                        <p class="ts title-C">選修課程 (可複選)<span class="ts star star-C">*</span></p>
                        <div class="box-class flex">
                            <div class="form-check form-check-inline">
                                <input name="class1"
                                    class="form-check-input check1 appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white
                                    checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200
                                    align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer"
                                    type="checkbox" id="checkbox1" value="1">
                                <label class="w-4/5 sm:w-11/12 form-check-label inline-block text-gray-800 cursor-pointer"
                                    for="checkbox1">獨木舟，加價購 $1,500</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="class2"
                                    class="form-check-input check2 appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white
                                    checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200
                                    align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer"
                                    type="checkbox" id="checkbox2" value="2">
                                <label class="w-4/5 sm:w-11/12 form-check-label inline-block text-gray-800 cursor-pointer"
                                    for="checkbox2">風浪板，加價購 $1,500</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="class3"
                                    class="form-check-input check3 appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white
                                    checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200
                                    align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer"
                                    type="checkbox" id="checkbox3" value="3">
                                <label class="w-4/5 sm:w-11/12 form-check-label inline-block text-gray-800 cursor-pointer"
                                    for="checkbox3">SUP救生，加價購 $1,500</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="class4"
                                    class="form-check-input check4 appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white
                                    checked:bg-blue-600 checked:border-blue-600 mr-2 focus:outline-none transition duration-200 mt-1
                                    align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer"
                                    type="checkbox" id="checkbox4" value="4">
                                <label class="w-4/5 sm:w-11/12 form-check-label inline-block text-gray-800 cursor-pointer"
                                    for="checkbox4">無</label>
                            </div>
                        </div>
                        <div class="warning-class"></div>
                    </div>
                    <div class="remitstate_type">
                        匯款狀態：
                        <select name="remitstate_type" id="remitstate_type" style="padding:4px 40px 4px 12px; border-radius:5px;">
                            <option value="1">未匯款</option>
                            <option value="2">已完成匯款</option>
                        </select>
                    </div>
                    <div class="innerbox-id flex flex-col w-full">
                        <label class="ts" for="remark">備註<span class="ts star">*</span></label>
                        <input class="input-text w-full focus:outline-none" id="remark" type="text" name="remark" value=""
                            placeholder="備註">
                    </div>
                    <div class="flex justify-center" style="margin: 10px;">
                        <button type="submit"
                            style="padding: 8px 16px;background-color:seagreen;color:white;border-radius:5px;">新增</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
