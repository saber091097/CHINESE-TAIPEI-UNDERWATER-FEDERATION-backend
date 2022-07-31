@extends('template.template')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="{{ asset('css/classes.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/nav&footer.css') }}"> --}}
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>課程總覽</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            padding: 0;
            margin: 0;
        }

        body main {
            top: 80px;
        }

        body main .section {
            animation: moveToTop 1s;
        }

        footer {
            width: 100%;
        }
        .footer{
            background-color: #3B54F3;
        }

        /* @keyframes moveToTop {
            from {
                transform: translateY(100%);
            }

            to {
                transform: translateY(0%);
            }
        } */

        td {
            border: 1px solid black;
        }
    </style>
@endsection

@section('main')
    <main id="main" class="flex flex-col-reverse md:flex-row w-full md:h-screen ">
        <div class="box box-left w-full md:w-1/2 h-full flex flex-col-reverse md:flex-col">
            <div class="innerbox innerbox-top w-full h-1/2 flex flex-col-reverse md:flex-row">
                <div class="in-innerbox in-innerbox-left w-full md:w-1/2 h-full flex flex-col-reverse md:flex-col">
                    <div id="callS1" data-modal-toggle="modal01"
                        class="in-in-innerbox in-innerbox-top w-full h-1/2 flex justify-center items-center bg-center bg-cover cursor-pointer">
                        <div class="title flex flex-col justify-between items-center">
                            <h2 class="h2m">水上救生</h2>
                            <h5 class="h5">Life Saving</h5>
                        </div>
                    </div>
                    <div id="callS2" data-modal-toggle="modal02"
                        class="in-in-innerbox in-innerbox-btm w-full h-1/2 flex justify-center items-center bg-center bg-cover cursor-pointer">
                        <div class="title flex flex-col justify-between items-center">
                            <h2 class="h2m">游泳</h2>
                            <h5 class="h5">Swimming</h5>
                        </div>
                    </div>
                </div>
                <div id="callS3" data-modal-toggle="WINDSURFModal"
                    class="in-innerbox in-innerbox-right w-full md:w-1/2 h-full flex  justify-center items-center bg-center bg-cover cursor-pointer">
                    <div class="title flex flex-col justify-between items-center">
                        <h2 class="h2m">風浪板</h2>
                        <h5 class="h5">Windsurf Board</h5>
                    </div>
                </div>
            </div>
            <div id="callS4" data-modal-toggle="DIVINGFModal"
                class="innerbox innerbox-btm w-full h-1/2 flex justify-center items-center bg-center bg-cover cursor-pointer">
                <div class="title flex flex-col justify-between items-center">
                    <h2 class="h2m">潛水</h2>
                    <h5 class="h5">Diving</h5>
                </div>
            </div>
        </div>
        <div id="callS5" data-modal-toggle="SUPModal"
            class="box box-right w-full md:w-1/2 h-full flex justify-center items-center bg-center bg-cover cursor-pointer">
            <div class="title flex flex-col justify-between items-center">
                <h2 class="h2m">立式划槳</h2>
                <h5 class="h5">SUP</h5>
            </div>
        </div>
        <!------------------------------ model01 救生----------------------------------------->
            <section id="modal01" tabindex="-1" aria-hidden="true"
                class="section hidden overflow-y-auto overflow-x-hidden bg-white flex flex-col justify-between items-center">
                <div id="s1-container" class="s1-container s-container w-full h-full bg-white flex flex-col justify-between items-center">
                    <div class="w-full h-full s1-innerbox s-innerbox flex flex-col items-center">
                        <div class="w-full s1-innerbox-top s-innerbox-top flex justify-end">
                            <button id="" data-modal-toggle="modal01" class="btn-close btn-close1 block fixed rounded-full"></button>
                        </div>
                        <div class="s1-innerbox-btm s-innerbox-btm w-4/5 flex flex-col">
                            <div id="list1" class="list w-full flex justify-between">
                                <div class="breadcrumb">
                                    <ul class="flex items-center justify-start">
                                        <li><a href="index.html">首頁</a></li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                                            </svg>
                                        </li>
                                        <li><a href="classes">課程</a></li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                                            </svg>
                                        </li>
                                        <li id="" class="s1Bread inpage"></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="class_title1" class="class-title flex flex-col">
                                <h5 id="" class="s1En h5"></h5>
                                <h2 id="" class="s1Title h2m"></h2>
                            </div>
                            <div class="class-content w-full flex flex-row">
                                <div class="in-in-innerbox-right w-8/12 ">
                                    <div id="banner1" class="banner w-full">
                                        <div id="s1_mySwiper2"
                                            style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                            class="swiper mySwiper2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082119.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082097.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082099.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082100.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082109.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082111.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082117.jpg') }}" />
                                                </div>
                                            </div>
                                            <div id="s1_swiper_button_next" class="swiper-button-next"></div>
                                            <div id="s1_swiper_button_prev" class="swiper-button-prev"></div>
                                        </div>
                                        <div id="s1_mySwiper" thumbsSlider="" class="swiper mySwiper">
                                            <div class="swiper-wrapper swiper-btm">
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082119.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082097.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082099.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082100.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082109.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082111.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082117.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="fixed-ts-box w-full flex flex-col">
                                            <div class="select-box flex flex-col w-full">
                                                <label class="ts" for="class-select">選擇課程</label>
                                                <select id="class-select5-rwd" class="selectClass" onchange="changeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    {{-- <option class="selectSup" value="1">立式划槳</option>
                                                    <option class="selectSwim" value="2">游泳</option>
                                                    <option class="selectSaving" value="3">水上救生</option> --}}
                                                    @foreach ($saving as $item)
                                                        @if ($item->closedate > Carbon\Carbon::now())
                                                            <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="price-box">
                                                {{-- @foreach ($data as $item) --}}
                                                <h1 id="price-rwd"> NT</h1>{{-- {{ $data->price }} --}}
                                                {{-- @endforeach --}}

                                                <span class="ts">含保險、器材、救生衣</span>
                                            </div>
                                            {{-- @foreach ($data as $item) --}}

                                            <form action="/signup1/" method="POST" id="supform-rwd">
                                                @csrf
                                                <button class="w-full singUp-btn flex justify-center items-center"
                                                    type="submit">線上報名</button>
                                                <span class="phone">電洽報名 04-22312698</span>
                                            </form>
                                            {{-- @endforeach --}}
                                        </div>
                                    <div class="tab w-full">
                                        <ul class="nav nav-tabs flex flex-row flex-wrap list-none border-b-0 items-center"
                                            id="s1-tabs-tab" role="tablist">
                                            <li class="nav-item">
                                                <a href="#s1-tabs-1"
                                                    class="
                                                active
                                                nav-link
                                                nav-link1
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-1-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-1"
                                                    role="tab" aria-controls="s1-tabs-1" aria-selected="true" tabindex="1">
                                                    <span class="tab-span tab-span1">活動介紹</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#s1-tabs-2"
                                                    class="
                                                nav-link
                                                nav-link2
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-2-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-2"
                                                    role="tab" aria-controls="s1-tabs-2" aria-selected="false">
                                                    <span class="tab-span tab-span2">課程流程</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#s1-tabs-3"
                                                    class="
                                                nav-link
                                                nav-link3
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-3-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-3"
                                                    role="tab" aria-controls="s1-tabs-3" aria-selected="false">
                                                    <span class="tab-span tab-span3">指導單位</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#s1-tabs-4"
                                                    class="
                                                nav-link
                                                nav-link4
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-4-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-4"
                                                    role="tab" aria-controls="s1-tabs-4" aria-selected="false">
                                                    <span class="tab-span tab-span4">注意事項</span>
                                                </a>
                                            </li>
                                        </ul>
                                        {{-- @foreach ($data as $item) --}}
                                        <div class="tab-content" id="s1-tabs-tabContent">
                                            <div class="tabs-1 tab-pane fade show active flex flex-col" id="s1-tabs-1"
                                                role="tabpanel" aria-labelledby="s1-tabs-1-tab">
                                                {{-- {!! $data->event_intr !!} --}}
                                                請選擇課程
                                            </div>
                                            <div class="tabs-2 tab-pane fade flex flex-col" id="s1-tabs-2" role="tabpanel"
                                                aria-labelledby="s1-tabs-2-tab">
                                                {{-- {!! $data->event_proc !!} --}}
                                                請選擇課程

                                            </div>
                                            <div class="tabs-3 tab-pane fade flex flex-col" id="s1-tabs-3" role="tabpanel"
                                                aria-labelledby="s1-tabs-3-tab">
                                                {{-- {!! $data->event_dire !!} --}}
                                                請選擇課程

                                            </div>
                                            <div class="tabs-4 tab-pane fade flex flex-col" id="s1-tabs-4" role="tabpanel"
                                                aria-labelledby="s1-tabs-4-tab">
                                                {{-- {!! $data->event_notice !!} --}}
                                                請選擇課程

                                            </div>
                                        </div>
                                        {{-- @endforeach --}}
                                    </div>
                                </div>
                                <div class="in-in-innerbox-left w-4/12 flex justify-end">
                                    <div class="fixed-box sticky top-10 flex flex-col">
                                        <div class="select-box flex flex-col w-full">
                                            <div class="select-box flex flex-col w-full">
                                                <label class="ts" for="class-select5">選擇課程</label>
                                                <select id="class-select5" class="selectClass" onchange="changeclass(this)" style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    {{-- <option class="selectSup" value="1">立式划槳</option>
                                                    <option class="selectSwim" value="2">游泳</option>
                                                    <option class="selectSaving" value="3">水上救生</option> --}}
                                                    @foreach ($saving as $item)
                                                        @if ($item->closedate > Carbon\Carbon::now())
                                                            <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="price-box">
                                                {{-- @foreach ($data as $item) --}}
                                                <h1 id="price"> NT</h1>{{-- {{ $data->price }} --}}

                                                {{-- @endforeach --}}
                                                <span class="ts">含保險、器材、救生衣</span>
                                            </div>
                                            {{-- @foreach ($data as $item) --}}

                                            <form action="/signup1/" method="POST" id="supform">
                                                @csrf
                                                <button class="w-full singUp-btn flex justify-center items-center"
                                                    type="submit">線上報名</button>
                                                <span class="phone">電洽報名 04-22312698</span>
                                            </form>
                                            {{-- @endforeach --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        <!------------------------------ model02 游泳----------------------------------------->
            <section id="modal02" tabindex="-1" aria-hidden="true"
                class="section hidden overflow-y-auto overflow-x-hidden bg-white flex flex-col justify-between items-center">
                <div id="s1-container"
                    class="s1-container s-container w-full h-full bg-white flex flex-col justify-between items-center">
                    <div class="w-full h-full s1-innerbox s-innerbox flex flex-col items-center">
                        <div class="w-full s1-innerbox-top s-innerbox-top flex justify-end">
                            <button id="" data-modal-toggle="modal02"
                                class="btn-close btn-close1 block fixed rounded-full"></button>
                        </div>
                        <div class="s1-innerbox-btm s-innerbox-btm w-4/5 flex flex-col">
                            <div id="list1" class="list w-full flex justify-between">
                                <div class="breadcrumb">
                                    <ul class="flex items-center justify-start">
                                        <li><a href="index.html">首頁</a></li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                                            </svg>
                                        </li>
                                        <li><a href="classes">課程</a></li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                                            </svg>
                                        </li>
                                        <li id="" class="s1Bread inpage"></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="class_title1" class="class-title flex flex-col">
                                <h5 id="" class="s1En h5"></h5>
                                <h2 id="" class="s1Title h2m"></h2>
                            </div>
                            <div class="class-content w-full flex flex-row">
                                <div class="in-in-innerbox-right w-8/12 ">
                                    <div id="banner1" class="banner w-full">
                                        <div id="s1_mySwiper2"
                                            style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                            class="swiper mySwiper2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082119.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082097.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082099.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082100.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082109.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082111.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082117.jpg') }}" />
                                                </div>
                                            </div>
                                            <div id="s1_swiper_button_next" class="swiper-button-next"></div>
                                            <div id="s1_swiper_button_prev" class="swiper-button-prev"></div>
                                        </div>
                                        <div id="s1_mySwiper" thumbsSlider="" class="swiper mySwiper">
                                            <div class="swiper-wrapper swiper-btm">
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082119.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082097.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082099.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082100.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082109.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082111.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082117.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="fixed-ts-box w-full flex flex-col">
                                            <div class="select-box flex flex-col w-full">
                                                <label class="ts" for="class-select">選擇課程</label>
                                                <select id="class-select5-rwd" class="selectClass" onchange="changeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    {{-- <option class="selectSup" value="1">立式划槳</option>
                                                    <option class="selectSwim" value="2">游泳</option>
                                                    <option class="selectSaving" value="3">水上救生</option> --}}
                                                    @foreach ($swimming as $item)
                                                        @if ($item->closedate > Carbon\Carbon::now())
                                                            <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="price-box">
                                                {{-- @foreach ($data as $item) --}}
                                                <h1 id="price-rwd"> NT</h1>{{-- {{ $data->price }} --}}
                                                {{-- @endforeach --}}

                                                <span class="ts">含保險、器材、救生衣</span>
                                            </div>
                                            {{-- @foreach ($data as $item) --}}

                                            <form action="/signup1/" method="POST" id="supform-rwd">
                                                @csrf
                                                <button class="w-full singUp-btn flex justify-center items-center"
                                                    type="submit">線上報名</button>
                                                <span class="phone">電洽報名 04-22312698</span>
                                            </form>
                                            {{-- @endforeach --}}
                                        </div>
                                    <div class="tab w-full">
                                        <ul class="nav nav-tabs flex flex-row flex-wrap list-none border-b-0 items-center"
                                            id="s1-tabs-tab" role="tablist">
                                            <li class="nav-item">
                                                <a href="#s1-tabs-1"
                                                    class="
                                                active
                                                nav-link
                                                nav-link1
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-1-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-1"
                                                    role="tab" aria-controls="s1-tabs-1" aria-selected="true" tabindex="1">
                                                    <span class="tab-span tab-span1">活動介紹</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#s1-tabs-2"
                                                    class="
                                                nav-link
                                                nav-link2
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-2-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-2"
                                                    role="tab" aria-controls="s1-tabs-2" aria-selected="false">
                                                    <span class="tab-span tab-span2">課程流程</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#s1-tabs-3"
                                                    class="
                                                nav-link
                                                nav-link3
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-3-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-3"
                                                    role="tab" aria-controls="s1-tabs-3" aria-selected="false">
                                                    <span class="tab-span tab-span3">指導單位</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#s1-tabs-4"
                                                    class="
                                                nav-link
                                                nav-link4
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-4-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-4"
                                                    role="tab" aria-controls="s1-tabs-4" aria-selected="false">
                                                    <span class="tab-span tab-span4">注意事項</span>
                                                </a>
                                            </li>
                                        </ul>
                                        {{-- @foreach ($data as $item) --}}
                                        <div class="tab-content" id="s1-tabs-tabContent">
                                            <div class="tabs-1 tab-pane fade show active flex flex-col" id="s1-tabs-1"
                                                role="tabpanel" aria-labelledby="s1-tabs-1-tab">
                                                {{-- {!! $data->event_intr !!} --}}
                                                請選擇課程
                                            </div>
                                            <div class="tabs-2 tab-pane fade flex flex-col" id="s1-tabs-2" role="tabpanel"
                                                aria-labelledby="s1-tabs-2-tab">
                                                {{-- {!! $data->event_proc !!} --}}
                                                請選擇課程

                                            </div>
                                            <div class="tabs-3 tab-pane fade flex flex-col" id="s1-tabs-3" role="tabpanel"
                                                aria-labelledby="s1-tabs-3-tab">
                                                {{-- {!! $data->event_dire !!} --}}
                                                請選擇課程

                                            </div>
                                            <div class="tabs-4 tab-pane fade flex flex-col" id="s1-tabs-4" role="tabpanel"
                                                aria-labelledby="s1-tabs-4-tab">
                                                {{-- {!! $data->event_notice !!} --}}
                                                請選擇課程

                                            </div>
                                        </div>
                                        {{-- @endforeach --}}
                                    </div>
                                </div>
                                <div class="in-in-innerbox-left w-4/12 flex justify-end">
                                    <div class="fixed-box sticky top-10 flex flex-col">
                                        <div class="select-box flex flex-col w-full">
                                            <div class="select-box flex flex-col w-full">
                                                <label class="ts" for="class-select5">選擇課程</label>
                                                <select id="class-select5" class="selectClass" onchange="changeclass(this)" style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    {{-- <option class="selectSup" value="1">立式划槳</option>
                                                    <option class="selectSwim" value="2">游泳</option>
                                                    <option class="selectSaving" value="3">水上救生</option> --}}
                                                    @foreach ($swimming as $item)
                                                        @if ($item->closedate > Carbon\Carbon::now())
                                                            <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="price-box">
                                                {{-- @foreach ($data as $item) --}}
                                                <h1 id="price"> NT</h1>{{-- {{ $data->price }} --}}

                                                {{-- @endforeach --}}
                                                <span class="ts">含保險、器材、救生衣</span>
                                            </div>
                                            {{-- @foreach ($data as $item) --}}

                                            <form action="/signup1/" method="POST" id="supform">
                                                @csrf
                                                <button class="w-full singUp-btn flex justify-center items-center"
                                                    type="submit">線上報名</button>
                                                <span class="phone">電洽報名 04-22312698</span>
                                            </form>
                                            {{-- @endforeach --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        <!------------------------------ SUPModal SUP立式划槳---------------------------------->
            <section id="SUPModal" tabindex="-1" aria-hidden="true"
                class="section hidden overflow-y-auto overflow-x-hidden bg-white flex flex-col justify-between items-center">
                <div id="s1-container"
                    class="s1-container s-container w-full h-full bg-white flex flex-col justify-between items-center">
                    <div class="w-full h-full s1-innerbox s-innerbox flex flex-col items-center">
                        <div class="w-full s1-innerbox-top s-innerbox-top flex justify-end">
                            <button id="" data-modal-toggle="modal01"
                                class="btn-close btn-close1 block fixed rounded-full"></button>
                        </div>
                        <div class="s1-innerbox-btm s-innerbox-btm w-4/5 flex flex-col">
                            <div id="list1" class="list w-full flex justify-between">
                                <div class="breadcrumb">
                                    <ul class="flex items-center justify-start">
                                        <li><a href="index.html">首頁</a></li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                                            </svg>
                                        </li>
                                        <li><a href="classes">課程</a></li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                                            </svg>
                                        </li>
                                        <li id="" class="s1Bread inpage"></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="class_title1" class="class-title flex flex-col">
                                <h5 id="" class="s1En h5"></h5>
                                <h2 id="" class="s1Title h2m"></h2>
                            </div>
                            <div class="class-content w-full flex flex-row">
                                <div class="in-in-innerbox-right w-8/12 ">
                                    <div id="banner1" class="banner w-full">
                                        <div id="s1_mySwiper2"
                                            style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                            class="swiper mySwiper2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082119.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082097.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082099.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082100.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082109.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082111.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082117.jpg') }}" />
                                                </div>
                                            </div>
                                            <div id="s1_swiper_button_next" class="swiper-button-next"></div>
                                            <div id="s1_swiper_button_prev" class="swiper-button-prev"></div>
                                        </div>
                                        <div id="s1_mySwiper" thumbsSlider="" class="swiper mySwiper">
                                            <div class="swiper-wrapper swiper-btm">
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082119.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082097.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082099.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082100.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082109.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082111.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082117.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="fixed-ts-box w-full flex flex-col">
                                            <div class="select-box flex flex-col w-full">
                                                <label class="ts" for="class-select">選擇課程</label>
                                                <select id="class-select5-rwd" class="selectClass" onchange="changeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    {{-- <option class="selectSup" value="1">立式划槳</option>
                                                    <option class="selectSwim" value="2">游泳</option>
                                                    <option class="selectSaving" value="3">水上救生</option> --}}
                                                    @foreach ($sup as $item)
                                                        @if ($item->closedate > Carbon\Carbon::now())
                                                            <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="price-box">
                                                {{-- @foreach ($data as $item) --}}
                                                <h1 id="price-rwd"> NT</h1>{{-- {{ $data->price }} --}}
                                                {{-- @endforeach --}}

                                                <span class="ts">含保險、器材、救生衣</span>
                                            </div>
                                            {{-- @foreach ($data as $item) --}}

                                            <form action="/signup1/" method="POST" id="supform-rwd">
                                                @csrf
                                                <button class="w-full singUp-btn flex justify-center items-center"
                                                    type="submit">線上報名</button>
                                                <span class="phone">電洽報名 04-22312698</span>
                                            </form>
                                            {{-- @endforeach --}}
                                        </div>
                                    <div class="tab w-full">
                                        <ul class="nav nav-tabs flex flex-row flex-wrap list-none border-b-0 items-center"
                                            id="s1-tabs-tab" role="tablist">
                                            <li class="nav-item">
                                                <a href="#s1-tabs-1"
                                                    class="
                                                active
                                                nav-link
                                                nav-link1
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-1-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-1"
                                                    role="tab" aria-controls="s1-tabs-1" aria-selected="true" tabindex="1">
                                                    <span class="tab-span tab-span1">活動介紹</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#s1-tabs-2"
                                                    class="
                                                nav-link
                                                nav-link2
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-2-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-2"
                                                    role="tab" aria-controls="s1-tabs-2" aria-selected="false">
                                                    <span class="tab-span tab-span2">課程流程</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#s1-tabs-3"
                                                    class="
                                                nav-link
                                                nav-link3
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-3-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-3"
                                                    role="tab" aria-controls="s1-tabs-3" aria-selected="false">
                                                    <span class="tab-span tab-span3">指導單位</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#s1-tabs-4"
                                                    class="
                                                nav-link
                                                nav-link4
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-4-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-4"
                                                    role="tab" aria-controls="s1-tabs-4" aria-selected="false">
                                                    <span class="tab-span tab-span4">注意事項</span>
                                                </a>
                                            </li>
                                        </ul>
                                        {{-- @foreach ($data as $item) --}}
                                        <div class="tab-content" id="s1-tabs-tabContent">
                                            <div class="tabs-1 tab-pane fade show active flex flex-col" id="s1-tabs-1"
                                                role="tabpanel" aria-labelledby="s1-tabs-1-tab">
                                                {{-- {!! $data->event_intr !!} --}}
                                                請選擇課程
                                            </div>
                                            <div class="tabs-2 tab-pane fade flex flex-col" id="s1-tabs-2" role="tabpanel"
                                                aria-labelledby="s1-tabs-2-tab">
                                                {{-- {!! $data->event_proc !!} --}}
                                                請選擇課程

                                            </div>
                                            <div class="tabs-3 tab-pane fade flex flex-col" id="s1-tabs-3" role="tabpanel"
                                                aria-labelledby="s1-tabs-3-tab">
                                                {{-- {!! $data->event_dire !!} --}}
                                                請選擇課程

                                            </div>
                                            <div class="tabs-4 tab-pane fade flex flex-col" id="s1-tabs-4" role="tabpanel"
                                                aria-labelledby="s1-tabs-4-tab">
                                                {{-- {!! $data->event_notice !!} --}}
                                                請選擇課程

                                            </div>
                                        </div>
                                        {{-- @endforeach --}}
                                    </div>
                                </div>
                                <div class="in-in-innerbox-left w-4/12 flex justify-end">
                                    <div class="fixed-box sticky top-10 flex flex-col">
                                        <div class="select-box flex flex-col w-full">
                                            <div class="select-box flex flex-col w-full">
                                                <label class="ts" for="class-select5">選擇課程</label>
                                                <select id="class-select5" class="selectClass" onchange="changeclass(this)" style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    {{-- <option class="selectSup" value="1">立式划槳</option>
                                                    <option class="selectSwim" value="2">游泳</option>
                                                    <option class="selectSaving" value="3">水上救生</option> --}}
                                                    @foreach ($sup as $item)
                                                        @if ($item->closedate > Carbon\Carbon::now())
                                                            <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="price-box">
                                                {{-- @foreach ($data as $item) --}}
                                                <h1 id="price"> NT</h1>{{-- {{ $data->price }} --}}

                                                {{-- @endforeach --}}
                                                <span class="ts">含保險、器材、救生衣</span>
                                            </div>
                                            {{-- @foreach ($data as $item) --}}

                                            <form action="/signup1/" method="POST" id="supform">
                                                @csrf
                                                <button class="w-full singUp-btn flex justify-center items-center"
                                                    type="submit">線上報名</button>
                                                <span class="phone">電洽報名 04-22312698</span>
                                            </form>
                                            {{-- @endforeach --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        <!------------------------------ WINDSURFModal 風浪板 ---------------------------------->
            <section id="WINDSURFModal" tabindex="-1" aria-hidden="true"
                class="section hidden overflow-y-auto overflow-x-hidden bg-white flex flex-col justify-between items-center">
                <div id="s1-container"
                    class="s1-container s-container w-full h-full bg-white flex flex-col justify-between items-center">
                    <div class="w-full h-full s1-innerbox s-innerbox flex flex-col items-center">
                        <div class="w-full s1-innerbox-top s-innerbox-top flex justify-end">
                            <button id="" data-modal-toggle="modal01"
                                class="btn-close btn-close1 block fixed rounded-full"></button>
                        </div>
                        <div class="s1-innerbox-btm s-innerbox-btm w-4/5 flex flex-col">
                            <div id="list1" class="list w-full flex justify-between">
                                <div class="breadcrumb">
                                    <ul class="flex items-center justify-start">
                                        <li><a href="index.html">首頁</a></li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                                            </svg>
                                        </li>
                                        <li><a href="classes">課程</a></li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                                            </svg>
                                        </li>
                                        <li id="" class="s1Bread inpage"></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="class_title1" class="class-title flex flex-col">
                                <h5 id="" class="s1En h5"></h5>
                                <h2 id="" class="s1Title h2m"></h2>
                            </div>
                            <div class="class-content w-full flex flex-row">
                                <div class="in-in-innerbox-right w-8/12 ">
                                    <div id="banner1" class="banner w-full">
                                        <div id="s1_mySwiper2"
                                            style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                            class="swiper mySwiper2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082119.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082097.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082099.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082100.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082109.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082111.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__14082117.jpg') }}" />
                                                </div>
                                            </div>
                                            <div id="s1_swiper_button_next" class="swiper-button-next"></div>
                                            <div id="s1_swiper_button_prev" class="swiper-button-prev"></div>
                                        </div>
                                        <div id="s1_mySwiper" thumbsSlider="" class="swiper mySwiper">
                                            <div class="swiper-wrapper swiper-btm">
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082119.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082097.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082099.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082100.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082109.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082111.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/img/S__14082117.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="fixed-ts-box w-full flex flex-col">
                                            <div class="select-box flex flex-col w-full">
                                                <label class="ts" for="class-select">選擇課程</label>
                                                <select id="class-select5-rwd" class="selectClass" onchange="changeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    {{-- <option class="selectSup" value="1">立式划槳</option>
                                                    <option class="selectSwim" value="2">游泳</option>
                                                    <option class="selectSaving" value="3">水上救生</option> --}}
                                                    @foreach ($windsurf as $item)
                                                        @if ($item->closedate > Carbon\Carbon::now())
                                                            <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="price-box">
                                                {{-- @foreach ($data as $item) --}}
                                                <h1 id="price-rwd"> NT</h1>{{-- {{ $data->price }} --}}
                                                {{-- @endforeach --}}

                                                <span class="ts">含保險、器材、救生衣</span>
                                            </div>
                                            {{-- @foreach ($data as $item) --}}

                                            <form action="/signup1/" method="POST" id="supform-rwd">
                                                @csrf
                                                <button class="w-full singUp-btn flex justify-center items-center"
                                                    type="submit">線上報名</button>
                                                <span class="phone">電洽報名 04-22312698</span>
                                            </form>
                                            {{-- @endforeach --}}
                                        </div>
                                    <div class="tab w-full">
                                        <ul class="nav nav-tabs flex flex-row flex-wrap list-none border-b-0 items-center"
                                            id="s1-tabs-tab" role="tablist">
                                            <li class="nav-item">
                                                <a href="#s1-tabs-1"
                                                    class="
                                                active
                                                nav-link
                                                nav-link1
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-1-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-1"
                                                    role="tab" aria-controls="s1-tabs-1" aria-selected="true" tabindex="1">
                                                    <span class="tab-span tab-span1">活動介紹</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#s1-tabs-2"
                                                    class="
                                                nav-link
                                                nav-link2
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-2-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-2"
                                                    role="tab" aria-controls="s1-tabs-2" aria-selected="false">
                                                    <span class="tab-span tab-span2">課程流程</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#s1-tabs-3"
                                                    class="
                                                nav-link
                                                nav-link3
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-3-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-3"
                                                    role="tab" aria-controls="s1-tabs-3" aria-selected="false">
                                                    <span class="tab-span tab-span3">指導單位</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#s1-tabs-4"
                                                    class="
                                                nav-link
                                                nav-link4
                                                block
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                border-x-0 border-t-0 border-b-2 border-transparent
                                                focus:border-transparent
                                            "
                                                    id="s1-tabs-4-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-4"
                                                    role="tab" aria-controls="s1-tabs-4" aria-selected="false">
                                                    <span class="tab-span tab-span4">注意事項</span>
                                                </a>
                                            </li>
                                        </ul>
                                        {{-- @foreach ($data as $item) --}}
                                        <div class="tab-content" id="s1-tabs-tabContent">
                                            <div class="tabs-1 tab-pane fade show active flex flex-col" id="s1-tabs-1"
                                                role="tabpanel" aria-labelledby="s1-tabs-1-tab">
                                                {{-- {!! $data->event_intr !!} --}}
                                                請選擇課程
                                            </div>
                                            <div class="tabs-2 tab-pane fade flex flex-col" id="s1-tabs-2" role="tabpanel"
                                                aria-labelledby="s1-tabs-2-tab">
                                                {{-- {!! $data->event_proc !!} --}}
                                                請選擇課程

                                            </div>
                                            <div class="tabs-3 tab-pane fade flex flex-col" id="s1-tabs-3" role="tabpanel"
                                                aria-labelledby="s1-tabs-3-tab">
                                                {{-- {!! $data->event_dire !!} --}}
                                                請選擇課程

                                            </div>
                                            <div class="tabs-4 tab-pane fade flex flex-col" id="s1-tabs-4" role="tabpanel"
                                                aria-labelledby="s1-tabs-4-tab">
                                                {{-- {!! $data->event_notice !!} --}}
                                                請選擇課程

                                            </div>
                                        </div>
                                        {{-- @endforeach --}}
                                    </div>
                                </div>
                                <div class="in-in-innerbox-left w-4/12 flex justify-end">
                                    <div class="fixed-box sticky top-10 flex flex-col">
                                        <div class="select-box flex flex-col w-full">
                                            <div class="select-box flex flex-col w-full">
                                                <label class="ts" for="class-select5">選擇課程</label>
                                                <select id="class-select5" class="selectClass" onchange="changeclass(this)" style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    {{-- <option class="selectSup" value="1">立式划槳</option>
                                                    <option class="selectSwim" value="2">游泳</option>
                                                    <option class="selectSaving" value="3">水上救生</option> --}}
                                                    @foreach ($windsurf as $item)
                                                        @if ($item->closedate > Carbon\Carbon::now())
                                                            <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="price-box">
                                                {{-- @foreach ($data as $item) --}}
                                                <h1 id="price"> NT</h1>{{-- {{ $data->price }} --}}

                                                {{-- @endforeach --}}
                                                <span class="ts">含保險、器材、救生衣</span>
                                            </div>
                                            {{-- @foreach ($data as $item) --}}

                                            <form action="/signup1/" method="POST" id="supform">
                                                @csrf
                                                <button class="w-full singUp-btn flex justify-center items-center"
                                                    type="submit">線上報名</button>
                                                <span class="phone">電洽報名 04-22312698</span>
                                            </form>
                                            {{-- @endforeach --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        <!------------------------------ DIVINGFModal 潛水 ---------------------------------->
            <section id="DIVINGFModal" tabindex="-1" aria-hidden="true"
                class="section hidden overflow-y-auto overflow-x-hidden bg-white flex flex-col justify-between items-center">
            <div id="s1-container"
                class="s1-container s-container w-full h-full bg-white flex flex-col justify-between items-center">
                <div class="w-full h-full s1-innerbox s-innerbox flex flex-col items-center">
                    <div class="w-full s1-innerbox-top s-innerbox-top flex justify-end">
                        <button id="" data-modal-toggle="modal01"
                            class="btn-close btn-close1 block fixed rounded-full"></button>
                    </div>
                    <div class="s1-innerbox-btm s-innerbox-btm w-4/5 flex flex-col">
                        <div id="list1" class="list w-full flex justify-between">
                            <div class="breadcrumb">
                                <ul class="flex items-center justify-start">
                                    <li><a href="index.html">首頁</a></li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                                        </svg>
                                    </li>
                                    <li><a href="classes">課程</a></li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                                        </svg>
                                    </li>
                                    <li id="" class="s1Bread inpage"></li>
                                </ul>
                            </div>
                        </div>
                        <div id="class_title1" class="class-title flex flex-col">
                            <h5 id="" class="s1En h5"></h5>
                            <h2 id="" class="s1Title h2m"></h2>
                        </div>
                        <div class="class-content w-full flex flex-row">
                            <div class="in-in-innerbox-right w-8/12 ">
                                <div id="banner1" class="banner w-full">
                                    <div id="s1_mySwiper2"
                                        style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                        class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/S__14082119.jpg') }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/S__14082097.jpg') }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/S__14082099.jpg') }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/S__14082100.jpg') }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/S__14082109.jpg') }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/S__14082111.jpg') }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/S__14082117.jpg') }}" />
                                            </div>
                                        </div>
                                        <div id="s1_swiper_button_next" class="swiper-button-next"></div>
                                        <div id="s1_swiper_button_prev" class="swiper-button-prev"></div>
                                    </div>
                                    <div id="s1_mySwiper" thumbsSlider="" class="swiper mySwiper">
                                        <div class="swiper-wrapper swiper-btm">
                                            <div class="swiper-slide">
                                                <img src="/img/S__14082119.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/img/S__14082097.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/img/S__14082099.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/img/S__14082100.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/img/S__14082109.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/img/S__14082111.jpg" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/img/S__14082117.jpg" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="fixed-ts-box w-full flex flex-col">
                                        <div class="select-box flex flex-col w-full">
                                            <label class="ts" for="class-select">選擇課程</label>
                                            <select id="class-select5-rwd" class="selectClass" onchange="changeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
                                                <option value="0">請選擇課程</option>
                                                {{-- <option class="selectSup" value="1">立式划槳</option>
                                                <option class="selectSwim" value="2">游泳</option>
                                                <option class="selectSaving" value="3">水上救生</option> --}}
                                                @foreach ($diving as $item)
                                                    @if ($item->closedate > Carbon\Carbon::now())
                                                        <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="price-box">
                                            {{-- @foreach ($data as $item) --}}
                                            <h1 id="price-rwd"> NT</h1>{{-- {{ $data->price }} --}}
                                            {{-- @endforeach --}}

                                            <span class="ts">含保險、器材、救生衣</span>
                                        </div>
                                        {{-- @foreach ($data as $item) --}}

                                        <form action="/signup1/" method="POST" id="supform-rwd">
                                            @csrf
                                            <button class="w-full singUp-btn flex justify-center items-center"
                                                type="submit">線上報名</button>
                                            <span class="phone">電洽報名 04-22312698</span>
                                        </form>
                                        {{-- @endforeach --}}
                                    </div>
                                <div class="tab w-full">
                                    <ul class="nav nav-tabs flex flex-row flex-wrap list-none border-b-0 items-center"
                                        id="s1-tabs-tab" role="tablist">
                                        <li class="nav-item">
                                            <a href="#s1-tabs-1"
                                                class="
                                            active
                                            nav-link
                                            nav-link1
                                            block
                                            font-medium
                                            text-xs
                                            leading-tight
                                            uppercase
                                            border-x-0 border-t-0 border-b-2 border-transparent
                                            focus:border-transparent
                                        "
                                                id="s1-tabs-1-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-1"
                                                role="tab" aria-controls="s1-tabs-1" aria-selected="true" tabindex="1">
                                                <span class="tab-span tab-span1">活動介紹</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#s1-tabs-2"
                                                class="
                                            nav-link
                                            nav-link2
                                            block
                                            font-medium
                                            text-xs
                                            leading-tight
                                            uppercase
                                            border-x-0 border-t-0 border-b-2 border-transparent
                                            focus:border-transparent
                                        "
                                                id="s1-tabs-2-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-2"
                                                role="tab" aria-controls="s1-tabs-2" aria-selected="false">
                                                <span class="tab-span tab-span2">課程流程</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#s1-tabs-3"
                                                class="
                                            nav-link
                                            nav-link3
                                            block
                                            font-medium
                                            text-xs
                                            leading-tight
                                            uppercase
                                            border-x-0 border-t-0 border-b-2 border-transparent
                                            focus:border-transparent
                                        "
                                                id="s1-tabs-3-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-3"
                                                role="tab" aria-controls="s1-tabs-3" aria-selected="false">
                                                <span class="tab-span tab-span3">指導單位</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#s1-tabs-4"
                                                class="
                                            nav-link
                                            nav-link4
                                            block
                                            font-medium
                                            text-xs
                                            leading-tight
                                            uppercase
                                            border-x-0 border-t-0 border-b-2 border-transparent
                                            focus:border-transparent
                                        "
                                                id="s1-tabs-4-tab" data-bs-toggle="pill" data-bs-target="#s1-tabs-4"
                                                role="tab" aria-controls="s1-tabs-4" aria-selected="false">
                                                <span class="tab-span tab-span4">注意事項</span>
                                            </a>
                                        </li>
                                    </ul>
                                    {{-- @foreach ($data as $item) --}}
                                    <div class="tab-content" id="s1-tabs-tabContent">
                                        <div class="tabs-1 tab-pane fade show active flex flex-col" id="s1-tabs-1"
                                            role="tabpanel" aria-labelledby="s1-tabs-1-tab">
                                            {{-- {!! $data->event_intr !!} --}}
                                            請選擇課程
                                        </div>
                                        <div class="tabs-2 tab-pane fade flex flex-col" id="s1-tabs-2" role="tabpanel"
                                            aria-labelledby="s1-tabs-2-tab">
                                            {{-- {!! $data->event_proc !!} --}}
                                            請選擇課程

                                        </div>
                                        <div class="tabs-3 tab-pane fade flex flex-col" id="s1-tabs-3" role="tabpanel"
                                            aria-labelledby="s1-tabs-3-tab">
                                            {{-- {!! $data->event_dire !!} --}}
                                            請選擇課程

                                        </div>
                                        <div class="tabs-4 tab-pane fade flex flex-col" id="s1-tabs-4" role="tabpanel"
                                            aria-labelledby="s1-tabs-4-tab">
                                            {{-- {!! $data->event_notice !!} --}}
                                            請選擇課程

                                        </div>
                                    </div>
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                            <div class="in-in-innerbox-left w-4/12 flex justify-end">
                                <div class="fixed-box sticky top-10 flex flex-col">
                                    <div class="select-box flex flex-col w-full">
                                        <div class="select-box flex flex-col w-full">
                                            <label class="ts" for="class-select5">選擇課程</label>
                                            <select id="class-select5" class="selectClass" onchange="changeclass(this)" style="padding: 9px 13px;border-radius:6px;">
                                                <option value="0">請選擇課程</option>
                                                {{-- <option class="selectSup" value="1">立式划槳</option>
                                                <option class="selectSwim" value="2">游泳</option>
                                                <option class="selectSaving" value="3">水上救生</option> --}}
                                                @foreach ($diving as $item)
                                                    @if ($item->closedate > Carbon\Carbon::now())
                                                        <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="price-box">
                                            {{-- @foreach ($data as $item) --}}
                                            <h1 id="price"> NT</h1>{{-- {{ $data->price }} --}}

                                            {{-- @endforeach --}}
                                            <span class="ts">含保險、器材、救生衣</span>
                                        </div>
                                        {{-- @foreach ($data as $item) --}}

                                        <form action="/signup1/" method="POST" id="supform">
                                            @csrf
                                            <button class="w-full singUp-btn flex justify-center items-center"
                                                type="submit">線上報名</button>
                                            <span class="phone">電洽報名 04-22312698</span>
                                        </form>
                                        {{-- @endforeach --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
@endsection


@section('js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/classes.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    <script>

        function changeclass(getId) {
            var id = getId.value
            let formData = new FormData();
            formData.append('_method', 'POST');
            formData.append('_token', '{{ csrf_token() }}');
            if (id == 0){
                const sup_intr = document.querySelector('#s1-tabs-1')
                const sup_proc = document.querySelector('#s1-tabs-2')
                const sup_dire = document.querySelector('#s1-tabs-3')
                const sup_notice = document.querySelector('#s1-tabs-4')
                const formsup = document.querySelector('#supform')
                const sup_price = document.querySelector('#price')
                sup_intr.innerHTML = "請選擇課程"
                sup_proc.innerHTML = "請選擇課程"
                sup_dire.innerHTML = "請選擇課程"
                sup_notice.innerHTML = "請選擇課程"
                sup_price.innerHTML = "NT"
            }else{
                fetch('/changeclasses/' + id, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    return response.json();
                }).then( data => {
                    const sup_intr = document.querySelector('#s1-tabs-1')
                    const sup_proc = document.querySelector('#s1-tabs-2')
                    const sup_dire = document.querySelector('#s1-tabs-3')
                    const sup_notice = document.querySelector('#s1-tabs-4')
                    const formsup = document.querySelector('#supform')
                    const sup_price = document.querySelector('#price')
                    console.log(sup_price);
                    sup_intr.innerHTML = data.event_intr
                    sup_proc.innerHTML = data.event_proc
                    sup_dire.innerHTML = data.event_dire
                    sup_notice.innerHTML = data.event_notice
                    sup_price.innerHTML = "NT"+data.price
                    formsup.action = "/signup1/"+data.id
                })
            }

            // const selectC = document.querySelector(".selectClass");

            // const s1Bread = document.querySelector(".s1Bread");
            // const s1En = document.querySelector(".s1En");
            // const s1Title = document.querySelector(".s1Title");

            // if (selectC.options[1].selected) {
            //     s1Bread.innerHTML = "";
            //     s1Bread.innerHTML = "立式划槳";
            //     s1En.innerHTML = "";
            //     s1En.innerHTML = "SUP";
            //     s1Title.innerHTML = "";
            //     s1Title.innerHTML = "立式划槳";
            // }else if (selectC.options[2].selected) {
            //     s1Bread.innerHTML = "";
            //     s1Bread.innerHTML = "游泳";
            //     s1En.innerHTML = "";
            //     s1En.innerHTML = "Swimming";
            //     s1Title.innerHTML = "";
            //     s1Title.innerHTML = "游泳";
            // }else if (selectC.options[3].selected) {
            //     s1Bread.innerHTML = "";
            //     s1Bread.innerHTML = "水上救生";
            //     s1En.innerHTML = "";
            //     s1En.innerHTML = "Life Saving";
            //     s1Title.innerHTML = "";
            //     s1Title.innerHTML = "水上救生";
            // }else

        }

        function changeclass_rwd(getId) {
            var id = getId.value
            let formData = new FormData();
            formData.append('_method', 'POST');
            formData.append('_token', '{{ csrf_token() }}');
            if (id == 0){
                const sup_intr = document.querySelector('#s1-tabs-1')
                const sup_proc = document.querySelector('#s1-tabs-2')
                const sup_dire = document.querySelector('#s1-tabs-3')
                const sup_notice = document.querySelector('#s1-tabs-4')
                const formsup = document.querySelector('#supform')
                const sup_price = document.querySelector('#price')
                console.log(sup_price);
                sup_intr.innerHTML = "請選擇課程"
                sup_proc.innerHTML = "請選擇課程"
                sup_dire.innerHTML = "請選擇課程"
                sup_notice.innerHTML = "請選擇課程"
                sup_price.innerHTML = "NT"
            }else{
                fetch('/changeclasses/' + id, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    return response.json();
                }).then( data => {
                    const sup_intr = document.querySelector('#s1-tabs-1')
                    const sup_proc = document.querySelector('#s1-tabs-2')
                    const sup_dire = document.querySelector('#s1-tabs-3')
                    const sup_notice = document.querySelector('#s1-tabs-4')
                    const formsup_rwd = document.querySelector('#supform-rwd')
                    const sup_price = document.querySelector('#price-rwd')
                    sup_intr.innerHTML = data.event_intr
                    sup_proc.innerHTML = data.event_proc
                    sup_dire.innerHTML = data.event_dire
                    sup_notice.innerHTML = data.event_notice
                    sup_price.innerHTML = "NT"+data.price
                    formsup_rwd.action = "/signup1/"+data.id
                })
            }
        }
    </script>
@endsection
