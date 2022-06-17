@extends('template.template')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

    <link rel="stylesheet" href="{{ asset('css/signUpStep2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>報名課程-Step-2</title>

@endsection

@section('main')
    <main class="flex flex-col items-center w-full">
        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop">
                <div class="wave waveTop"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
                <div class="wave waveMiddle"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave waveBottom"></div>
            </div>
        </div>
        <div class="underWaveWrapper"></div>
        <section class="progress flex flex-row items-center">
            <div class="c c1 flex justify-center items-center">
                <i class="fas fa-check"></i>
            </div>
            <div class="line line-1"></div>
            <div class="c c2 flex justify-center items-center">
                <div class="dot"></div>
            </div>
            <div class="line line-2"></div>
            <div class="c c3">
            </div>
        </section>
        <section class="container flex flex-col">
            <div class="content content-class w-full">
                <div class="title">
                    <h3 class="h3m">報名課程</h3>
                </div>
                <table class="table w-full">
                    <thead>
                        <tr class="flex">
                            <th class="t-name flex">課程名稱</th>
                            <th class="t-type">類型</th>
                            <th class="t-price flex justify-end">總價</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="flex">
                            <td class="t-name">{{$event}}</td>
                            <td class="t-type flex justify-center">SUP</td>
                            <td class="t-price price flex justify-end">NT4,500</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="flex justify-end">
                            <td class="">付款方式統一為匯款</td>
                        </tr>
                    </tfoot>
                </table>
                <table class="table-ts w-full">
                    <tbody class="w-full">
                        <tr>
                            <td class="td-t">課程名稱</td>
                            <td class="td-c flex justify-end">SUP教練教練班</td>
                        </tr>
                        <tr>
                            <td class="td-t">類型</td>
                            <td class="td-c flex justify-end">SUP</td>
                        </tr>
                        <tr>
                            <td class="td-t">總價</td>
                            <td class="td-c flex justify-end t-price price">NT4,500</td>
                        </tr>
                    </tbody>
                    <tfoot class="w-full">
                        <tr class="">
                            <td></td>
                            <td class="flex justify-end">付款方式統一為匯款</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="account w-full flex flex-col">
                    <span class="ts tsg">匯款帳戶</span>
                    <span class="ts">銀行：兆豐金控</span>
                    <span class="ts">帳號：(017)00410765400</span>
                    <span class="ts">姓名：詹寓崵</span>
                </div>
            </div>
            <form action="/signup3" method="POST" name="formS2" class="content-form flex flex-col w-full" enctype="multipart/form-data">
                @csrf
                <div class="form-title w-full">
                    <h3 class="h3m">個人基本資料</h3>
                    <div class="w-full flex flex-col sm:flex-row">
                        <span class="w-full sm:w-auto caption">請務必填寫正確資料，</span>
                        <span class="w-full sm:w-auto caption">以利保險作業和證照製作。</span>
                    </div>
                </div>
                <div class="innerbox-id flex flex-col w-full">
                    <label class="ts" for="name">Line ID<span class="ts star">*</span></label>
                    <input class="input-text w-full focus:outline-none" id="name" type="text" name="lineId" value=""
                        placeholder="line ID">
                </div>

                <div class="innerbox-contact flex flex-col sm:flex-row w-full">
                    <div class="w-full sm:w-1/2 innerbox-contact-per flex flex-col">
                        <label class="ts" for="contact">緊急聯絡人<span class="ts star">*</span></label>
                        <input class="input-text w-full focus:outline-none" id="contact" type="text" name="contact" value=""
                            placeholder="緊急聯絡人姓名">
                    </div>
                    <div class="w-full sm:w-1/2 innerbox-contact-phone flex flex-col">
                        <label class="ts" for="contactPhone">緊急聯絡人電話<span
                                class="ts star">*</span></label>
                        <input class="input-text w-full focus:outline-none" id="contactPhone" type="text"
                            name="contactPhone" value="" placeholder="緊急聯絡人電話">
                    </div>
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
                                <input id="upload" onchange="readURL(this)" targetID="headshot_img" name="headshot" id="headshot"
                                    type="file" accept="image/jpeg, image/png" />
                            </div>
                        </div>
                    </div>
                    <span class="caption">將會使用在證照上</span>
                    <div class="warning-head"></div>
                </label>

                <label class="w-full innerbox-idCard flex flex-col cursor-pointer" for="upload-idC1">
                    <p class="ts title-idC1">身分證 正面影本<span class="ts star star-idC1">*</span></p>
                    <input id="upload-idC1" onchange="readURL(this)" targetID="idCard1_img" name="idCard1" type="file"
                        accept="image/jpeg, image/png" />
                    <div class="box-idCard box-idCard1 w-full flex justify-center items-center">
                        <img id="idCard1_img" class="img_idCard1" src="#" alt="">
                        <div id="in-inner-idCard1" class="in-inner-idCard in-inner-idCard1 flex flex-col items-center">
                            <div class="icon">
                                <img class="w-full h-full" src="{{asset('img/icon/ic_image-add-line.svg')}}" alt="" style="opacity: .3">
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
                    <input id="upload-idC2" onchange="readURL(this)" targetID="idCard2_img" name="idCard2" type="file"
                        accept="image/jpeg, image/png" />
                    <div class="box-idCard box-idCard2 w-full flex justify-center items-center">
                        <img id="idCard2_img" class="img_idCard2" src="" alt="">
                        <div id="in-inner-idCard2" class="in-inner-idCard in-inner-idCard2 flex flex-col items-center">
                            <div class="icon">
                                <img class="w-full h-full" src="{{asset('img/icon/ic_image-add-line.svg')}}" alt="" style="opacity: .3">
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
                    <div class="box-class flex flex-col">
                        <div class="form-check form-check-inline">
                            <input name="class1" class="form-check-input check1 appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white
                            checked:bg-blue-600 checked:border-blue-600 mr-2 focus:outline-none transition duration-200 mt-1
                            align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" type="checkbox" id="checkbox1" value="1">
                            <label class="w-4/5 sm:w-11/12 form-check-label inline-block text-gray-800 cursor-pointer" for="checkbox1">獨木舟，加價購 $1,500</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="class2" class="form-check-input check2 appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white
                            checked:bg-blue-600 checked:border-blue-600 mr-2 focus:outline-none transition duration-200 mt-1
                            align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" type="checkbox" id="checkbox2" value="2">
                            <label class="w-4/5 sm:w-11/12 form-check-label inline-block text-gray-800 cursor-pointer" for="checkbox2">風浪板，加價購 $1,500</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="class3" class="form-check-input check3 appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white
                            checked:bg-blue-600 checked:border-blue-600 mr-2 focus:outline-none transition duration-200 mt-1
                            align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" type="checkbox" id="checkbox3" value="3">
                            <label class="w-4/5 sm:w-11/12 form-check-label inline-block text-gray-800 cursor-pointer" for="checkbox3">SUP救生，加價購 $1,500</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="class4" class="form-check-input check4 appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white
                            checked:bg-blue-600 checked:border-blue-600 mr-2 focus:outline-none transition duration-200 mt-1
                            align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" type="checkbox" id="checkbox4" value="4">
                            <label class="w-4/5 sm:w-11/12 form-check-label inline-block text-gray-800 cursor-pointer" for="checkbox4">無</label>
                        </div>
                    </div>
                    <div class="warning-class"></div>
                </div>

                <div class="innerbox-btn w-full flex justify-between">
                    <button class="btn btn-cancel rounded flex justify-center items-center" type="button">上一步</button>
                    <button class="btn btn-next rounded flex justify-center items-center" onclick="check()"
                        type="button">確認資訊</button>
                </div>
            </form>


        </section>
    </main>
@endsection

@section('js')
    <script src="{{asset('js/signUpStep2.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
@endsection
