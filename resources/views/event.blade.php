@extends('template.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/event.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav&footer.css') }}">

    <title>{{ $events->event }}</title>
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
                    <li>{{ $events->event }}</li>
                </ul>
            </div>
            <div class="content w-full">
                <div class="news">
                    <div class="news-title flex flex-wrap">
                        最新消息
                    </div>
                </div>
                <div class="event-title">
                    {{ $events->event }}
                </div>
                <div class="time">
                    <button>
                        @if ($events->anno_type == 1)
                            課程
                        @else
                            好消息
                        @endif
                    </button>
                    <span>{{ substr($events->updated_at, 0, 10) }} updated</span>
                </div>
                <div class="event-content">
                    <span>
                        {!! $events->event_intr !!}
                    </span>

                    @if ($events->anno_type == 1)
                    <div id="tohidden">
                        <div class="flex flex-col innerbox">
                            <h3 class="tm">指導單位</h3>
                            {!! $events->event_dire !!}
                        </div>
                        <span>
                            {!! $events->event_proc !!}
                        </span>
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
                    @endif
                </div>
                @if ($events->anno_type == 1)
                    <div id="delbut" class="delbut">
                        @if ($events->link == null)
                            <div class="btn-content w-full flex">
                                <button class="flex justify-center items-center open-phone"
                                    onclick="openphone()" data-modal-toggle="phoneModal">報名課程</button>
                            </div>
                            <div id="phoneModal" tabindex="-1" aria-hidden="true"
                                class="hidden fixed overflow-y-auto overflow-x-hidden w-full top-0 right-0 left-0 z-50 h-full justify-center items-center PADIModal h-modal">
                                <div class="relative w-full h-full ">
                                    <div class="relative bg-white" style="top: 50%;left:50%;transform:translate(-50%,-50%);width:400px;height:150px;font-size:20px;border-radius:10px;">
                                        <div class="flex justify-center items-start phone-close">
                                            <p style="margin-top: 5%;">報名請洽</p>
                                            <button type="button" class="absolute top-3 "
                                                data-modal-toggle="phoneModal" style="width: 30px;right:0;margin-right:10px;">
                                                <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0 22C0 9.84974 9.84974 0 22 0C34.1503 0 44 9.84974 44 22C44 34.1503 34.1503 44 22 44C9.84974 44 0 34.1503 0 22Z"
                                                        fill="#F3F6F9" />
                                                    <g opacity="0.7">
                                                        <path
                                                            d="M22.0007 20.586L26.9507 15.636L28.3647 17.05L23.4147 22L28.3647 26.95L26.9507 28.364L22.0007 23.414L17.0507 28.364L15.6367 26.95L20.5867 22L15.6367 17.05L17.0507 15.636L22.0007 20.586Z"
                                                            fill="#141414" />
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex phone-content flex-col justify-center items-center">
                                            <p>協會 連絡電話：04-22312698</p>
                                            <p>總教練 詹寓崵：0930-975535</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="btn-content w-full flex">
                                <a href="{{ $events->link }}" target="_blank"><button class="flex justify-center items-center">報名課程</button></a>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection
