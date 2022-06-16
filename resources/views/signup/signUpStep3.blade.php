@extends('template.template')

@section('css')
<link rel="stylesheet" href="{{asset('css/signUpStep3.css')}}">
    <title>報名課程-Step-3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        main{
            width: 100%;
        }
    </style>
@endsection


@section('main')
<main class="flex flex-col items-center ">
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
            <i class="fas fa-check"></i>
        </div>
        <div class="line line-2"></div>
        <div class="c c3 flex justify-center items-center">
            <div class="dot"></div>
        </div>
    </section>
    <section class="container flex flex-col">
        <div class="content content-class w-full">
            <div class="title">
                <h3 class="h3m"></h3>
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
                        <td class="t-name">{{$data->event->event}}</td>
                        <td class="t-type flex justify-center">
                            @if ($data->event->event_type == 2)
                                SUP
                            @elseif ($data->event->event_type == 4)
                                游泳
                            @else
                                救生
                            @endif
                            </td>
                        <td class="t-price price flex justify-end">{{$data->event->price}}</td>
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
                        <td class="td-c flex justify-end">NT4,500</td>
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
        <div class="content flex flex-col w-full">
            <div class="content-data ">
                <div class="title">
                    <h3 class="h3m">確認個人基本資料</h3>
                </div>
                <div class="data">
                    <div class="flex flex-col sm:flex-row w-full">
                        <span class="tm w-full sm:w-1/2">姓名</span>
                        <span class="tl w-full sm:w-1/2">{{$data->name}}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row w-full">
                        <span class="tm w-full sm:w-1/2">身分證字號 (ID Numbers)</span>
                        <span class="tl w-full sm:w-1/2">{{$data->id_card}}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row w-full">
                        <span class="tm w-full sm:w-1/2">性別</span>
                        <span class="tl w-full sm:w-1/2">
                            @if ($data->gender == 1)
                                男
                            @else
                                女
                            @endif
                        </span>
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
                        <span class="tm w-full sm:w-1/2">Line ID</span>
                        <span class="tl w-full sm:w-1/2">{{$data->line_id}}</span>
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
            <div class="content-photo">
                <div class="title">
                    <h3 class="h3m">個人照片</h3>
                </div>
                <div class="headshot flex flex-col">
                    <span class="tm">大頭照</span>
                    <div class="img-headshot">
                        <img src="{{$data->headshot->headshot}}" alt="">
                    </div>
                </div>
                <div class="idCard flex flex-col">
                    <span class="tm">身分證影本</span>
                    <div class="box-idCard flex flex-col sm:flex-row">
                        <img class="img-idCard img-idCard1 h-full" src="{{$data->idcard_front->id_card_img_front}}" alt="">
                        <img class="img-idCard h-full" src="{{$data->idcard_reverse->id_card_img_reverse}}" alt="">
                    </div>
                </div>
            </div>
            <div class="innerbox-btn w-full flex justify-between">
                <button class="btn btn-cancel rounded flex justify-center items-center" type="button">返回修改</button>
                <button class="btn btn-next rounded flex justify-center items-center" type="submit"><a href="/signup4/{{$data->id}}">確認送出</a></button>
            </div>
        </div>


    </section>
</main>
@endsection

@section('js')

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
@endsection

