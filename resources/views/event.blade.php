@extends('template.template')

    @section('css')
    <link rel="stylesheet" href="{{asset('css/event.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav&footer.css')}}">

    <title>{{$events->event}}</title>
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
                        <li>{{$events->event}}</li>
                    </ul>
                </div>
                <div class="content w-full">
                    <div class="news">
                        <div class="news-title flex flex-wrap">
                            最新消息
                        </div>
                    </div>
                    <div class="event-title">
                        {{$events->event}}
                    </div>
                    <div class="time">
                        <button>
                            @if ($events->anno_type==1)
                            課程
                            @else
                            好消息
                            @endif
                        </button>
                        <span>{{substr($events->updated_at,0,10)}} updated</span>
                    </div>
                    <div class="event-content">
                        <span>
                            {!! $events->event_intr !!}
                        </span>
                        <span>
                            {!! $events->event_proc !!}
                        </span>
                        <div id="tohidden" @if ($events->anno_type == 2) hidden @endif>
                            <div class="flex flex-col innerbox" >
                                <h3 class="tm">指導單位</h3>
                                {!! $events->event_dire !!}
                            </div>
                            <div class="flex flex-col innerbox">
                                <h3 class="tm">注意事項</h3>
                                {!! $events->event_notice !!}
                            </div>
                            <div class="flex flex-col innerbox bgGray mt-9">
                                <h3 class="tm">匯款資訊</h3>
                                <p class="tm">ATM兆豐國際商銀台中分行(017)</p>
                                <p class="tm">帳號:00410765400</p>
                            </div>
                        </div>
                    </div>
                    <div id="delbut" @if ($events->anno_type == 2) hidden @endif>
                        <div class="btn-content w-full flex">
                            <a href="{{$events->link}}"><button class="flex justify-center items-center">報名課程</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection



