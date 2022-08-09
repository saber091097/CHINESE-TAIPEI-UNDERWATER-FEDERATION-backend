@extends('template.template')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="{{ asset('css/classes.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
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

        .footer {
            background-color: #3B54F3;
        }

        @keyframes moveToTop {
                    from {
                        transform: translateY(100%);
                    }

                    to {
                        transform: translateY(0%);
                    }
                }

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
                    <div id="saving" data-modal-toggle="modal01"
                        class="in-in-innerbox in-innerbox-top w-full h-1/2 flex justify-center items-center bg-center bg-cover cursor-pointer">
                        <div class="title flex flex-col justify-between items-center">
                            <h2 class="h2m">水上救生</h2>
                            <h5 class="h5">Life Saving</h5>
                        </div>
                    </div>
                    <div id="swimming" data-modal-toggle="modal02"
                        class="in-in-innerbox in-innerbox-btm w-full h-1/2 flex justify-center items-center bg-center bg-cover cursor-pointer">
                        <div class="title flex flex-col justify-between items-center">
                            <h2 class="h2m">游泳</h2>
                            <h5 class="h5">Swimming</h5>
                        </div>
                    </div>
                </div>
                <div id="windsurf" data-modal-toggle="WINDSURFModal"
                    class="in-innerbox in-innerbox-right w-full md:w-1/2 h-full flex  justify-center items-center bg-center bg-cover cursor-pointer">
                    <div class="title flex flex-col justify-between items-center">
                        <h2 class="h2m">風浪板</h2>
                        <h5 class="h5">Windsurf Board</h5>
                    </div>
                </div>
            </div>
            <div id="diving" data-modal-toggle="DIVINGFModal"
                class="innerbox innerbox-btm w-full h-1/2 flex justify-center items-center bg-center bg-cover cursor-pointer">
                <div class="title flex flex-col justify-between items-center">
                    <h2 class="h2m">潛水</h2>
                    <h5 class="h5">Diving</h5>
                </div>
            </div>
        </div>
        <div id="sup" data-modal-toggle="SUPModal"
            class="box box-right w-full md:w-1/2 h-full flex justify-center items-center bg-center bg-cover cursor-pointer">
            <div class="title flex flex-col justify-between items-center">
                <h2 class="h2m">立式划槳</h2>
                <h5 class="h5">SUP</h5>
            </div>
        </div>
        <!------------------------------ model01 救生----------------------------------------->
            <section id="modal01" tabindex="-1" aria-hidden="true"
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
                                        <div id="saving_mySwiper" class="swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17866980.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17866982.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17866983.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17866984.jpg') }}" />
                                                </div>                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17866985.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17866986.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17866987.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17866988.jpg') }}" />
                                                </div>
                                            </div>
                                            <div id="saving_swiper_button_next" class="swiper-button-next"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                            <div id="saving_swiper_button_prev" class="swiper-button-prev"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                            <div id="saving_swiper_pagination" class="swiper-pagination"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                        </div>
                                    </div>
                                    <div class="fixed-ts-box w-full flex flex-col">
                                        <div class="select-box flex flex-col w-full">
                                            <label class="ts" for="class-select">選擇課程</label>
                                            <select id="class-select5-rwd" class="selectClass"
                                                onchange="changeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
                                                <option value="0">請選擇課程</option>
                                                @foreach ($saving as $item)
                                                    @if ($item->closedate > Carbon\Carbon::now())
                                                        <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="price-box">
                                            <span class="ts">含保險、器材、救生衣</span>
                                        </div>
                                        <a id="changelink1" target="_blank" href="#"
                                            class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                        <span class="phone">電洽報名 04-22312698</span>
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
                                                    role="tab" aria-controls="s1-tabs-1" aria-selected="true"
                                                    tabindex="1">
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
                                        <div class="tab-content" id="s1-tabs-tabContent">
                                            <div class="tabs-1 tab-pane fade show active flex flex-col" id="s1-tabs-1"
                                                role="tabpanel" aria-labelledby="s1-tabs-1-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-2 tab-pane fade flex flex-col" id="s1-tabs-2" role="tabpanel"
                                                aria-labelledby="s1-tabs-2-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-3 tab-pane fade flex flex-col" id="s1-tabs-3" role="tabpanel"
                                                aria-labelledby="s1-tabs-3-tab">
                                                請選擇課程

                                            </div>
                                            <div class="tabs-4 tab-pane fade flex flex-col" id="s1-tabs-4" role="tabpanel"
                                                aria-labelledby="s1-tabs-4-tab">
                                                請選擇課程
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-in-innerbox-left w-4/12 flex justify-end">
                                    <div class="fixed-box sticky top-10 flex flex-col">
                                        <div class="select-box flex flex-col w-full">
                                            <div class="select-box flex flex-col w-full">
                                                <label class="ts" for="class-select5">選擇課程</label>
                                                <select id="class-select5" class="selectClass" onchange="changeclass(this)"
                                                    style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    @foreach ($saving as $item)
                                                        @if ($item->closedate > Carbon\Carbon::now())
                                                            <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="price-box w-full">
                                            <span class="ts">含保險、器材、救生衣</span>
                                        </div>
                                        <a id="changelink" target="_blank" href="#"
                                            class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                        <span class="phone w-full">電洽報名 04-22312698</span>
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
                                class="btn-close btn-close2 block fixed rounded-full"></button>
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
                                        <li id="" class="s2Bread inpage"></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="class_title1" class="class-title flex flex-col">
                                <h5 id="" class="s2En h5"></h5>
                                <h2 id="" class="s2Title h2m"></h2>
                            </div>
                            <div class="class-content w-full flex flex-row">
                                <div class="in-in-innerbox-right w-8/12 ">
                                    <div id="banner1" class="banner w-full">
                                        <div id="swimming_mySwiper" class="swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891403.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891405.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891407.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891408.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891409.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891410.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891411.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891412.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891413.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891414.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891416.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891417.jpg') }}" />
                                                </div>                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891418.jpg') }}" />
                                                </div>
                                            </div>
                                            <div id="swimming_swiper_button_next" class="swiper-button-next"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                            <div id="swimming_swiper_button_prev" class="swiper-button-prev"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                            <div id="swimming_swiper_pagination" class="swiper-pagination"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                        </div>
                                    </div>
                                    <div class="fixed-ts-box w-full flex flex-col">
                                        <div class="select-box flex flex-col w-full">
                                            <label class="ts" for="class-select">選擇課程</label>
                                            <select id="class-select5-rwd" class="selectClass"
                                                onchange="changeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
                                                <option value="0">請選擇課程</option>
                                                @foreach ($swimming as $item)
                                                    @if ($item->closedate > Carbon\Carbon::now())
                                                        <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="price-box">
                                            <span class="ts">含保險、器材、救生衣</span>
                                        </div>
                                        <a id="changelink" target="_blank" href="#"
                                            class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                        <span class="phone">電洽報名 04-22312698</span>
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
                                                    role="tab" aria-controls="s1-tabs-1" aria-selected="true"
                                                    tabindex="1">
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
                                                <select id="class-select5" class="selectClass" onchange="changeclass(this)"
                                                    style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    @foreach ($swimming as $item)
                                                        @if ($item->closedate > Carbon\Carbon::now())
                                                            <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="price-box">
                                                <span class="ts">含保險、器材、救生衣</span>
                                            </div>
                                            <a id="changelink" href="#" target="_blank"
                                                class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                            <span class="phone">電洽報名 04-22312698</span>
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
                                class="btn-close btn-close5 block fixed rounded-full"></button>
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
                                        <li id="" class="s4Bread inpage"></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="class_title1" class="class-title flex flex-col">
                                <h5 id="" class="s4En h5"></h5>
                                <h2 id="" class="s4Title h2m"></h2>
                            </div>
                            <div class="class-content w-full flex flex-row">
                                <div class="in-in-innerbox-right w-8/12 ">
                                    <div id="banner1" class="banner w-full">
                                        <div id="sup_mySwiper" class="swiper">
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
                                            <div id="sup_swiper_button_next" class="swiper-button-next"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                            <div id="sup_swiper_button_prev" class="swiper-button-prev"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                            <div id="sup_swiper_pagination" class="swiper-pagination"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                        </div>
                                    </div>
                                    <div class="fixed-ts-box w-full flex flex-col">
                                        <div class="select-box flex flex-col w-full">
                                            <label class="ts" for="class-select">選擇課程</label>
                                            <select id="class-select5-rwd" class="selectClass"
                                                onchange="changeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
                                                <option value="0">請選擇課程</option>
                                                @foreach ($sup as $item)
                                                    @if ($item->closedate > Carbon\Carbon::now())
                                                        <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="price-box">
                                            <span class="ts">含保險、器材、救生衣</span>
                                        </div>
                                        <a id="changelink" target="_blank" href="#"
                                            class="w-full singUp-btn flex justify-center items-cente">線上報名</a>
                                        <span class="phone">電洽報名 04-22312698</span>
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
                                                    role="tab" aria-controls="s1-tabs-1" aria-selected="true"
                                                    tabindex="1">
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
                                                <select id="class-select5" class="selectClass" onchange="changeclass(this)"
                                                    style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    @foreach ($sup as $item)
                                                        @if ($item->closedate > Carbon\Carbon::now())
                                                            <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="price-box">
                                                <span class="ts">含保險、器材、救生衣</span>
                                            </div>
                                            <a id="changelink" target="_blank" href="#"
                                                class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                            <span class="phone">電洽報名 04-22312698</span>
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
                            <button id="" data-modal-toggle="WINDSURFModal"
                                class="btn-close btn-close3 block fixed rounded-full"></button>
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
                                        <li id="" class="s4Bread inpage"></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="class_title1" class="class-title flex flex-col">
                                <h5 id="" class="s4En h5"></h5>
                                <h2 id="" class="s4Title h2m"></h2>
                            </div>
                            <div class="class-content w-full flex flex-row">
                                <div class="in-in-innerbox-right w-8/12 ">
                                    <div id="banner1" class="banner w-full">
                                        <div id="windsurf_mySwiper" class="swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891460.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891462.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891463.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891464.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891465.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891466.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891467.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891468.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891469.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891470.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891471.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891473.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891474.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891475.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891476.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891477.jpg') }}" />
                                                </div>
                                            </div>
                                            <div id="windsurf_swiper_button_next" class="swiper-button-next"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                            <div id="windsurf_swiper_button_prev" class="swiper-button-prev"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                            <div id="windsurf_swiper_pagination" class="swiper-pagination"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                        </div>
                                    </div>
                                    <div class="fixed-ts-box w-full flex flex-col">
                                        <div class="select-box flex flex-col w-full">
                                            <label class="ts" for="class-select">選擇課程</label>
                                            <select id="class-select5-rwd" class="selectClass"
                                                onchange="changeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
                                                <option value="0">請選擇課程</option>
                                                @foreach ($windsurf as $item)
                                                    @if ($item->closedate > Carbon\Carbon::now())
                                                        <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="price-box">
                                            <span class="ts">含保險、器材、救生衣</span>
                                        </div>
                                        <button disabled="true"
                                            class="w-full singUp-btn flex justify-center items-center">洽詢本會</button>
                                        <span class="phone">電洽報名 04-22312698</span>
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
                                                    role="tab" aria-controls="s1-tabs-1" aria-selected="true"
                                                    tabindex="1">
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
                                                <select id="class-select5" class="selectClass" onchange="changeclass(this)"
                                                    style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    @foreach ($windsurf as $item)
                                                        @if ($item->closedate > Carbon\Carbon::now())
                                                            <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="ts">含保險、器材、救生衣</span>
                                        </div>
                                        <button disabled="true"
                                            class="w-full singUp-btn flex justify-center items-center">洽詢本會</button>
                                        <span class="phone">電洽報名 04-22312698</span>
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
                            <button id="" data-modal-toggle="DIVINGFModal"
                                class="btn-close btn-close4 block fixed rounded-full"></button>
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
                                        <li id="" class="s5Bread inpage"></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="class_title1" class="class-title flex flex-col">
                                <h5 id="" class="s5En h5"></h5>
                                <h2 id="" class="s5Title h2m"></h2>
                            </div>
                            <div class="class-content w-full flex flex-row">
                                <div class="in-in-innerbox-right w-8/12 ">
                                    <div id="banner1" class="banner w-full">
                                        <div id="diving_mySwiper" class="swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891423.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891425.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891426.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891427.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891428.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891429.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891430.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891431.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891432.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891433.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891434.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891436.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891437.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17891438.jpg') }}" />
                                                </div>
                                            </div>
                                            <div id="diving_swiper_button_next" class="swiper-button-next"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                            <div id="diving_swiper_button_prev" class="swiper-button-prev"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                            <div id="diving_swiper_pagination" class="swiper-pagination"
                                                style="--swiper-theme-color: #00ff07e6;"></div>
                                        </div>
                                    </div>
                                    <div class="fixed-ts-box w-full flex flex-col">
                                        <div class="select-box flex flex-col w-full">
                                            <label class="ts" for="class-select">選擇課程</label>
                                            <select id="class-select5-rwd" class="selectClass"
                                                onchange="changeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
                                                <option value="0">請選擇課程</option>
                                                @foreach ($diving as $item)
                                                    @if ($item->closedate > Carbon\Carbon::now())
                                                        <option value="{{ $item->id }}">{{ $item->event }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="price-box">
                                            <span class="ts">含保險、器材、救生衣</span>
                                        </div>
                                        <button disabled="true"
                                            class="w-full singUp-btn flex justify-center items-center">洽詢本會</button>
                                        <span class="phone">電洽報名 04-22312698</span>
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
                                                    role="tab" aria-controls="s1-tabs-1" aria-selected="true"
                                                    tabindex="1">
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
                                                <select id="class-select5" class="selectClass" onchange="changeclass(this)"
                                                    style="padding: 9px 13px;border-radius:6px;">
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
                                        </div>
                                        <div class="price-box">
                                            <span class="ts">含保險、器材、救生衣</span>
                                        </div>
                                        <button disabled="true"
                                            class="w-full singUp-btn flex justify-center items-center">洽詢本會</button>
                                        <span class="phone">電洽報名 04-22312698</span>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
    </main>
@endsection


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/classes.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script>
        function changeclass(getId) {
            var id = getId.value
            let formData = new FormData();
            formData.append('_method', 'POST');
            formData.append('_token', '{{ csrf_token() }}');
            if (id == 0) {
                const sup_intr = document.querySelector('#s1-tabs-1')
                const sup_proc = document.querySelector('#s1-tabs-2')
                const sup_dire = document.querySelector('#s1-tabs-3')
                const sup_notice = document.querySelector('#s1-tabs-4')
                const formsup = document.querySelector('#supform')
                sup_intr.innerHTML = "請選擇課程"
                sup_proc.innerHTML = "請選擇課程"
                sup_dire.innerHTML = "請選擇課程"
                sup_notice.innerHTML = "請選擇課程"
            } else {
                fetch('/changeclasses/' + id, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        return response.json();
                    }).then(data => {
                        const sup_intr = document.querySelector('#s1-tabs-1')
                        const sup_proc = document.querySelector('#s1-tabs-2')
                        const sup_dire = document.querySelector('#s1-tabs-3')
                        const sup_notice = document.querySelector('#s1-tabs-4')
                        const formsup = document.querySelector('#supform')
                        const link = document.querySelector('#changelink')
                        sup_intr.innerHTML = data.event_intr
                        sup_proc.innerHTML = data.event_proc
                        sup_dire.innerHTML = data.event_dire
                        sup_notice.innerHTML = data.event_notice
                        console.log(link);
                        document.getElementById("changelink").href = data.link;
                    })
            }
        }

        function changeclass_rwd(getId) {
            var id = getId.value
            let formData = new FormData();
            formData.append('_method', 'POST');
            formData.append('_token', '{{ csrf_token() }}');
            if (id == 0) {
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
            } else {
                fetch('/changeclasses/' + id, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        return response.json();
                    }).then(data => {
                        const sup_intr = document.querySelector('#s1-tabs-1')
                        const sup_proc = document.querySelector('#s1-tabs-2')
                        const sup_dire = document.querySelector('#s1-tabs-3')
                        const sup_notice = document.querySelector('#s1-tabs-4')
                        const formsup_rwd = document.querySelector('#supform-rwd')
                        const link = document.querySelector('#changelink1')
                        sup_intr.innerHTML = data.event_intr
                        sup_proc.innerHTML = data.event_proc
                        sup_dire.innerHTML = data.event_dire
                        sup_notice.innerHTML = data.event_notice
                        document.getElementById("changelink1").href = data.link;
                    })
            }
        }
    </script>
@endsection
