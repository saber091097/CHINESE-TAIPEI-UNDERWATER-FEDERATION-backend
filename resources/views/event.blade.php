@extends('template.template')

    @section('css')
    <link rel="stylesheet" href="{{asset('css/event.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav&footer.css')}}">

    <title>{{$events[0]->event}}</title>
    @endsection


    @section('main')
        <div class="news flex justify-center">
            <div class="width80 flex justify-center flex-col mt-20">
                <div class="breadcrumb">
                    <ul class="flex justify-start flex-wrap">
                        <li><a href="index.html">首頁</a></li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                            </svg>
                        </li>
                        <li><a href="./news.html">最新消息</a></li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                            </svg>
                        </li>
                        @php
                            // dd($events[0])
                        @endphp
                        <li>{{$events[0]->event}}</li>
                    </ul>
                </div>
                <div class="content">
                    <div class="news">
                        <div class="news-title flex flex-wrap">
                            最新消息
                        </div>
                    </div>
                    <div class="event-title">
                        {{$events[0]->event}}
                    </div>
                    <div class="time">
                        <button>
                            @if ($events[0]->anno_type==1)
                            公告
                            @else
                            好消息
                            @endif
                        </button>
                        <span>{{substr($events[0]->updated_at,0,10)}} updated</span>
                    </div>
                    <div class="event-content">
                        <span>
                            {!! $events[0]->event_intr !!}
                            {{-- 台中市水中運動協會自由潛水課程:
                            free diving LV1課程適用於一般人仕，簡單來說，就是利用閒暇時間，穿著漂亮的水中服裝，長蛙，面鏡呼吸管，休閒輕鬆的水中長蛙運動， 拍一些美美的照片隨時能夠滿足您的需求。<br>
                            <br>
                            推薦協會合約的自由潛水學校Free Pilot 自由領航員潛水中心。<br>
                            小欣教練Line ID：@tsai-art Instagram：@a_shin0601電話：0915262859<br>
                            協會辦公室:台中市北區天祥街10號 電話04-22312698<br>
                            費用:二人成行,每人12300<br>
                            <br>
                            課程： RAID▲LV1課程規劃： 總共：學科X1、平壓課X1、泳池課X2、深水池課X1(五米池)；台中每堂課皆為2小時，海訓考照6小時(實際需2天1夜)。
                            <br>
                            1、 學科：最早0900-最晚2000，期間都能約課。<br>
                            2、平壓專門課：最早0900-最晚2000，期間都能約課。<br>
                            3、泳池課01、02：【課程須配合北區泳池池開放時間】 早場為10：00-12：00、午場為1400-1600 、傍晚場1700-1900、 晚場為19：30-21：30<br>
                            4、深水池：【課程須配合北區深水池開放時間】 1000-1200、1400-1600、1700-1900、1930-2130四個時段。<br>
                            5、深水池無限團練：【課程須配合北區深水池開放時間】 1000-1200、1400-1600、1700-1900、1930-2130四個時段。<br><br> --}}
                        </span>
                    </div>
                </div>

            </div>
        </div>
    @endsection



