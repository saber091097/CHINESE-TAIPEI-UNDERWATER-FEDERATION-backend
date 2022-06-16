@extends('template.template')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<link rel="stylesheet" href="{{asset('css/signUpStep1.css')}}">
<title>報名課程-Step-1</title>
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
            <div class="dot"></div>
        </div>
        <div class="line line-1"></div>
        <div class="c c2">
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
                        <td class="t-name">{{$event->event}}</td>
                        <td class="t-type flex justify-center">
                            @if ($event->event_type == 1)
                                風浪板
                            @elseif ($event->event_type == 2)
                                SUP
                            @elseif ($event->event_type == 3)
                                潛水
                            @elseif ($event->event_type == 4)
                                游泳
                            @else
                                救生
                            @endif
                        </td>
                        <td class="t-price price flex justify-end">NT{{$event->price}}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="flex justify-end">
                        <td class="">付款方式統一為匯款</td>
                    </tr>
                </tfoot>
            </table>
            <table class="table-ts w-full">
                <tbody>
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
                <tfoot>
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
        <form action="/signup2" method="POST" name="formS1" class="content content-form flex flex-col w-full">
            @csrf
            <div class="title">
                <h3 class="h3m">基本資料</h3>
            </div>
            <div class="innerbox-name flex flex-col w-full">
                <label class="ts" for="name">真實姓名<span class="ts star">*</span></label>
                <input class="input-text w-full focus:outline-none" id="name" type="text" name="name" value="" placeholder="請輸入姓名">
            </div>

            <div class="innerbox-id flex flex-col w-full">
                <label class="ts" for="id">身分證字號 (ID Numbers)<span class="ts star">*</span></label>
                <input class="input-text w-full focus:outline-none" id="id" type="text" name="id" value="" placeholder="請輸入身分證字號"
                onkeyup="value=value. replace(/[^\a-\z\A-\Z0-9]/g,'')">
            </div>

            <div class="innerbox-sex flex flex-col">
                <p class="ts">性別<span class="ts star">*</span></p>
                <div class="flex">
                    <input class="form-check-input h-4 w-4 mt-1
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
            </div>

            <div class="innerbox-phone flex flex-col">
                <label class="ts" for="phone">聯絡電話<span class="ts star">*</span></label>
                <input class="input-text w-full focus:outline-none" id="phone" type="text" name="phone" value="" placeholder="0912345678"
                onkeyup="value=value.replace(/[^0-9 \-\+\)\(]/g,'')">
            </div>

            <div class="innerbox-mail flex flex-col">
                <label class="ts" for="email">Email<span class="ts star">*</span></label>
                <input class="input-text w-full focus:outline-none" id="email" type="text" name="email" value="" placeholder="abc123@google.com"
                onkeyup="value=value. replace(/[^\a-\z\A-\Z0-9\@\.]/g,'')">
            </div>

            <div class="innerbox-address flex flex-col">
                <label class="ts" for="address">通訊地址<span class="ts star">*</span></label>
                <div class="flex address flex-wrap">
                    <div id="address" class="w-full">
                        <div class="w-full flex flex-col sm:flex-row selector-c">
                            <input hidden class="js-demeter-tw-zipcode-selector" data-city="#county" data-dist="#district"/>
                            <div id="select-county" class="select">
                                <select id="county" class="w-full h-full county" name="county" placeholder="請選擇縣市"></select>
                            </div>
                            <div id="select-district" class="select flex flex-col">
                                <select id="district" class="w-full h-full district" name="district" placeholder="請選擇鄉鎮區"></select>
                            </div>
                        </div>
                        <div class="warning"></div>
                    </div>
                </div>
                <div class="input-address w-full flex flex-col">
                    <input class="input-text w-full focus:outline-none" id="addressinput" type="text" name="address" value="" placeholder="請輸入地址">
                </div>
            </div>

            <div class="innerbox-btn w-full flex justify-between">
                <button class="btn btn-cancel rounded flex justify-center items-center" type="button">取消</button>
                <button class="btn btn-next rounded flex justify-center items-center" onclick="next()" type="button">下一步</button>
            </div>
        </form>
    </section>

</main>
@endsection

@section('js')

<script src="{{asset('js/signUpStep1.js')}}"></script>
<script
src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>

<script src="{{asset('js/tw-city-dis.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
@endsection

