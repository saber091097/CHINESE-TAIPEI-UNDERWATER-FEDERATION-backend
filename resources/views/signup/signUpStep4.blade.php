@extends('template.template')
@section('css')
<title>報名課程-Step-4</title>
<link rel="stylesheet" href="{{asset('css/signUpStep4.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        main{
            width: 100%;
        }
    </style>
@endsection

@section('main')
<main class="flex flex-col items-center">
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
    <section class="container flex flex-col items-center w-full">
        <div class="content-success flex flex-col items-center w-full">
            <div class="icon-success flex justify-center">
                <img src="/img/icon/ic_success.png" alt="">
            </div>
            <h2 class="h2m">報名成功</h2>
        </div>

        <div class="content flex flex-col w-full">
            <div class="content-data ">
                <div class="title">
                    <h3 class="h3m">SUP教練教練班</h3>
                </div>
                <div class="data w-full">
                    <div class="flex flex-col sm:flex-row w-full">
                        <span class="tm w-full sm:w-1/2">課程日期</span>
                        <span class="tl w-full sm:w-1/2">6/17 ~6/18</span>
                    </div>
                    <div class="flex flex-col sm:flex-row w-full">
                        <span class="tm w-full sm:w-1/2">姓名</span>
                        <span class="tl w-full sm:w-1/2">{{$data->name}}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row w-full">
                        <span class="tm w-full sm:w-1/2">聯絡電話</span>
                        <span class="tl w-full sm:w-1/2">{{$data->phone}}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row w-full">
                        <span class="tm w-full sm:w-1/2">Email</span>
                        <span class="tl w-full sm:w-1/2">{{$data->email}}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row w-full">
                        <span class="tm w-full sm:w-1/2">通訊地址</span>
                        <span class="tl w-full sm:w-1/2">{{$data->addr}}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row w-full">
                        <span class="tm w-full sm:w-1/2">緊急聯絡人</span>
                        <span class="tl w-full sm:w-1/2">{{$data->emer_name}}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row w-full">
                        <span class="tm w-full sm:w-1/2">緊急連絡人電話</span>
                        <span class="tl w-full sm:w-1/2">{{$data->emer_phone}}</span>
                    </div>
                </div>
            </div>
            <div class="content-price w-full">
                <div class="title">
                    <h3 class="h3m">報名費用</h3>
                </div>
                <h2 class="h2m">
                    @if ($data->plus4 == 0)
                    NT{{$data->event->price}}
                    @else
                    NT{{$data->event->price}} + 1500 * ({{$data->plus1}}+{{$data->plus2}}+{{$data->plus3}})
                    @endif
                </h2>
                <p class="ps w-full">
                    <span class="ts">請依照下方匯款資訊進行匯款，並且</span>
                    <span class="tsr">回傳單據</span>
                    <span class="ts">以及</span>
                    <span class="tsr">個人大頭照</span>
                    <span class="ts">至</span>
                    <span class="tsb">Facebook粉絲專頁</span>
                    <span class="ts">，才算報名成功唷!</span>
                </p>
                <div class="account w-full flex flex-col">
                    <span class="ts tsg">匯款帳戶</span>
                    <span class="ts">銀行：兆豐金控</span>
                    <span class="ts">帳號：(017)00410765400</span>
                    <span class="ts">姓名：詹寓崵</span>
                </div>
            </div>
            <div class="innerbox-btn w-full flex justify-center items-center">
                <button class="btn btn-next rounded flex justify-center items-center"><a href="/">返回首頁</a></button>
            </div>
        </div>


    </section>
</main>
@endsection

@section('js')

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
@endsection

