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
                                                onchange="savingchangeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
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
                                        <div id="saving-viewphone-rwd">
                                            <a id="changelink" href="#"
                                                class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                        </div>
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
                                                    id="saving-tabs-1-tab" data-bs-toggle="pill" data-bs-target="#saving-tabs-1"
                                                    role="tab" aria-controls="saving-tabs-1" aria-selected="true"
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
                                                    id="saving-tabs-2-tab" data-bs-toggle="pill" data-bs-target="#saving-tabs-2"
                                                    role="tab" aria-controls="saving-tabs-2" aria-selected="false">
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
                                                    id="saving-tabs-3-tab" data-bs-toggle="pill" data-bs-target="#saving-tabs-3"
                                                    role="tab" aria-controls="saving-tabs-3" aria-selected="false">
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
                                                    id="saving-tabs-4-tab" data-bs-toggle="pill" data-bs-target="#saving-tabs-4"
                                                    role="tab" aria-controls="saving-tabs-4" aria-selected="false">
                                                    <span class="tab-span tab-span4">注意事項</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="s1-tabs-tabContent">
                                            <div class="tabs-1 tab-pane fade show active flex flex-col" id="saving-tabs-1"
                                                role="tabpanel" aria-labelledby="saving-tabs-1-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-2 tab-pane fade flex flex-col" id="saving-tabs-2" role="tabpanel"
                                                aria-labelledby="saving-tabs-2-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-3 tab-pane fade flex flex-col" id="saving-tabs-3" role="tabpanel"
                                                aria-labelledby="saving-tabs-3-tab">
                                                請選擇課程

                                            </div>
                                            <div class="tabs-4 tab-pane fade flex flex-col" id="saving-tabs-4" role="tabpanel"
                                                aria-labelledby="saving-tabs-4-tab">
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
                                                <select id="class-select5" class="selectClass" onchange="savingchangeclass(this)"
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
                                        <div id="saving-viewphone">
                                            <a id="changelink" href="#"
                                                class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                        </div>
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
                                                onchange="swimmingchangeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
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
                                        <div id="swimming-viewphone-rwd">
                                            <a id="changelink" href="#"
                                                class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                        </div>
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
                                                    id="swimming-tabs-1-tab" data-bs-toggle="pill" data-bs-target="#swimming-tabs-1"
                                                    role="tab" aria-controls="swimming-tabs-1" aria-selected="true"
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
                                                    id="swimming-tabs-2-tab" data-bs-toggle="pill" data-bs-target="#swimming-tabs-2"
                                                    role="tab" aria-controls="swimming-tabs-2" aria-selected="false">
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
                                                    id="swimming-tabs-3-tab" data-bs-toggle="pill" data-bs-target="#swimming-tabs-3"
                                                    role="tab" aria-controls="swimming-tabs-3" aria-selected="false">
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
                                                    id="swimming-tabs-4-tab" data-bs-toggle="pill" data-bs-target="#swimming-tabs-4"
                                                    role="tab" aria-controls="swimming-tabs-4" aria-selected="false">
                                                    <span class="tab-span tab-span4">注意事項</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="s1-tabs-tabContent">
                                            <div class="tabs-1 tab-pane fade show active flex flex-col" id="swimming-tabs-1"
                                                role="tabpanel" aria-labelledby="swimming-tabs-1-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-2 tab-pane fade flex flex-col" id="swimming-tabs-2" role="tabpanel"
                                                aria-labelledby="swimming-tabs-2-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-3 tab-pane fade flex flex-col" id="swimming-tabs-3" role="tabpanel"
                                                aria-labelledby="swimming-tabs-3-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-4 tab-pane fade flex flex-col" id="swimming-tabs-4" role="tabpanel"
                                                aria-labelledby="swimming-tabs-4-tab">
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
                                                <select id="class-select5" class="selectClass" onchange="swimmingchangeclass(this)"
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
                                            <div id="swimming-viewphone">
                                                <a id="changelink" href="#"
                                                    class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                            </div>
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
                                        <li id="" class="s3Bread inpage"></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="class_title1" class="class-title flex flex-col">
                                <h5 id="" class="s3En h5"></h5>
                                <h2 id="" class="s3Title h2m"></h2>
                            </div>
                            <div class="class-content w-full flex flex-row">
                                <div class="in-in-innerbox-right w-8/12 ">
                                    <div id="banner1" class="banner w-full">
                                        <div id="sup_mySwiper" class="swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17785018.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17785077.jpg') }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('img/S__17785107.jpg') }}" />
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
                                                onchange="supchangeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
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
                                        <div id="sup-viewphone-rwd">
                                            <a id="changelink" href="#"
                                                class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                        </div>
                                        <span class="phone">電洽報名 04-22312698</span>
                                    </div>
                                    <div class="tab w-full">
                                        <ul class="nav nav-tabs flex flex-row flex-wrap list-none border-b-0 items-center"
                                            id="s1-tabs-tab" role="tablist">
                                            <li class="nav-item">
                                                <a href="#sup-tabs-1"
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
                                                    id="sup-tabs-1-tab" data-bs-toggle="pill" data-bs-target="#sup-tabs-1"
                                                    role="tab" aria-controls="sup-tabs-1" aria-selected="true"
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
                                                    id="sup-tabs-2-tab" data-bs-toggle="pill" data-bs-target="#sup-tabs-2"
                                                    role="tab" aria-controls="sup-tabs-2" aria-selected="false">
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
                                                    id="sup-tabs-3-tab" data-bs-toggle="pill" data-bs-target="#sup-tabs-3"
                                                    role="tab" aria-controls="sup-tabs-3" aria-selected="false">
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
                                                    id="sup-tabs-4-tab" data-bs-toggle="pill" data-bs-target="#sup-tabs-4"
                                                    role="tab" aria-controls="sup-tabs-4" aria-selected="false">
                                                    <span class="tab-span tab-span4">注意事項</span>
                                                </a>
                                            </li>
                                        </ul>
                                        {{-- @foreach ($data as $item) --}}
                                        <div class="tab-content" id="s1-tabs-tabContent">
                                            <div class="tabs-1 tab-pane fade show active flex flex-col" id="sup-tabs-1"
                                                role="tabpanel" aria-labelledby="sup-tabs-1-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-2 tab-pane fade flex flex-col" id="sup-tabs-2" role="tabpanel"
                                                aria-labelledby="sup-tabs-2-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-3 tab-pane fade flex flex-col" id="sup-tabs-3" role="tabpanel"
                                                aria-labelledby="sup-tabs-3-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-4 tab-pane fade flex flex-col" id="sup-tabs-4" role="tabpanel"
                                                aria-labelledby="sup-tabs-4-tab">
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
                                                <select id="class-select5" class="selectClass" onchange="supchangeclass(this)"
                                                    style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
                                                    @foreach ($sup as $item)
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
                                        <div id="sup-viewphone">
                                            <a id="changelink" href="#"
                                                class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                        </div>
                                        <span class="phone">電洽報名 04-22312698</span>
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
                                                onchange="windsurfchangeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
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
                                        <div id="windsurf-viewphone-rwd">
                                            <a id="changelink" href="#"
                                                class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                        </div>
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
                                                    id="windsurf-tabs-1-tab" data-bs-toggle="pill" data-bs-target="#windsurf-tabs-1"
                                                    role="tab" aria-controls="windsurf-tabs-1" aria-selected="true"
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
                                                    id="windsurf-tabs-2-tab" data-bs-toggle="pill" data-bs-target="#windsurf-tabs-2"
                                                    role="tab" aria-controls="windsurf-tabs-2" aria-selected="false">
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
                                                    id="windsurf-tabs-3-tab" data-bs-toggle="pill" data-bs-target="#windsurf-tabs-3"
                                                    role="tab" aria-controls="windsurf-tabs-3" aria-selected="false">
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
                                                    id="windsurf-tabs-4-tab" data-bs-toggle="pill" data-bs-target="#windsurf-tabs-4"
                                                    role="tab" aria-controls="windsurf-tabs-4" aria-selected="false">
                                                    <span class="tab-span tab-span4">注意事項</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="s1-tabs-tabContent">
                                            <div class="tabs-1 tab-pane fade show active flex flex-col" id="windsurf-tabs-1"
                                                role="tabpanel" aria-labelledby="windsurf-tabs-1-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-2 tab-pane fade flex flex-col" id="windsurf-tabs-2" role="tabpanel"
                                                aria-labelledby="windsurf-tabs-2-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-3 tab-pane fade flex flex-col" id="windsurf-tabs-3" role="tabpanel"
                                                aria-labelledby="windsurf-tabs-3-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-4 tab-pane fade flex flex-col" id="windsurf-tabs-4" role="tabpanel"
                                                aria-labelledby="windsurf-tabs-4-tab">
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
                                                <select id="class-select5" class="selectClass" onchange="windsurfchangeclass(this)"
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
                                        <div id="windsurf-viewphone">
                                            <a id="changelink" href="#"
                                                class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                        </div>
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
                                                onchange="divingchangeclass_rwd(this)" style="padding: 9px 13px;border-radius:6px;">
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
                                        <div id="diving-viewphone-rwd">
                                            <a id="changelink" href="#"
                                                class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                        </div>
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
                                                    id="diving-tabs-1-tab" data-bs-toggle="pill" data-bs-target="#diving-tabs-1"
                                                    role="tab" aria-controls="diving-tabs-1" aria-selected="true"
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
                                                    id="diving-tabs-2-tab" data-bs-toggle="pill" data-bs-target="#diving-tabs-2"
                                                    role="tab" aria-controls="diving-tabs-2" aria-selected="false">
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
                                                    id="diving-tabs-3-tab" data-bs-toggle="pill" data-bs-target="#diving-tabs-3"
                                                    role="tab" aria-controls="diving-tabs-3" aria-selected="false">
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
                                                    id="diving-tabs-4-tab" data-bs-toggle="pill" data-bs-target="#diving-tabs-4"
                                                    role="tab" aria-controls="diving-tabs-4" aria-selected="false">
                                                    <span class="tab-span tab-span4">注意事項</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="s1-tabs-tabContent">
                                            <div class="tabs-1 tab-pane fade show active flex flex-col" id="diving-tabs-1"
                                                role="tabpanel" aria-labelledby="diving-tabs-1-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-2 tab-pane fade flex flex-col" id="diving-tabs-2" role="tabpanel"
                                                aria-labelledby="diving-tabs-2-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-3 tab-pane fade flex flex-col" id="diving-tabs-3" role="tabpanel"
                                                aria-labelledby="diving-tabs-3-tab">
                                                請選擇課程
                                            </div>
                                            <div class="tabs-4 tab-pane fade flex flex-col" id="diving-tabs-4" role="tabpanel"
                                                aria-labelledby="diving-tabs-4-tab">
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
                                                <select id="class-select5" class="selectClass" onchange="divingchangeclass(this)"
                                                    style="padding: 9px 13px;border-radius:6px;">
                                                    <option value="0">請選擇課程</option>
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
                                        <div id="diving-viewphone">
                                            <a id="changelink" href="#"
                                                class="w-full singUp-btn flex justify-center items-center">線上報名</a>
                                        </div>
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
        // 潛水 modal 設定

function divingchangeclass(getId) {
    var id = getId.value
    let formData = new FormData();
    formData.append('_method', 'POST');
    formData.append('_token', '{{ csrf_token() }}');
    if (id == 0) {
        const diving_intr = document.querySelector('#diving-tabs-1')
        const diving_proc = document.querySelector('#diving-tabs-2')
        const diving_dire = document.querySelector('#diving-tabs-3')
        const diving_notice = document.querySelector('#diving-tabs-4')
        const viewphone = document.querySelector('#diving-viewphone')
        diving_intr.innerHTML = "請選擇課程"
        diving_proc.innerHTML = "請選擇課程"
        diving_dire.innerHTML = "請選擇課程"
        diving_notice.innerHTML = "請選擇課程"
        viewphone.innerHTML = `<a id="changelink" target="_blank" href="#"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
    } else {
        fetch('/changeclasses/' + id, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                return response.json();
            }).then(data => {
                const diving_intr = document.querySelector('#diving-tabs-1')
                const diving_proc = document.querySelector('#diving-tabs-2')
                const diving_dire = document.querySelector('#diving-tabs-3')
                const diving_notice = document.querySelector('#diving-tabs-4')
                const viewphone = document.querySelector('#diving-viewphone')
                diving_intr.innerHTML = data.event_intr
                diving_proc.innerHTML = data.event_proc
                diving_dire.innerHTML = data.event_dire
                diving_notice.innerHTML = data.event_notice
                if (data.link == null) {
                    viewphone.innerHTML = `<div
                                        class="w-full singUp-btn flex justify-center items-center"><span style="margin-right:10px;">報名請洽</span>
                                        <div class="flex phone-content flex-col justify-center items-center">
                                        <p>協會 連絡電話：04-22312698</p>
                                        <p>總教練 詹寓崵：0930-975535</p></div></div>`
                }else{
                    viewphone.innerHTML = `<a id="changelink" target="_blank" href="${data.link}"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
                }
            })
    }
}

function divingchangeclass_rwd(getId) {
    var id = getId.value
    let formData = new FormData();
    formData.append('_method', 'POST');
    formData.append('_token', '{{ csrf_token() }}');
    if (id == 0) {
        const diving_intr = document.querySelector('#diving-tabs-1')
        const diving_proc = document.querySelector('#diving-tabs-2')
        const diving_dire = document.querySelector('#diving-tabs-3')
        const diving_notice = document.querySelector('#diving-tabs-4')
        const viewphone = document.querySelector('#diving-viewphone-rwd')
        diving_intr.innerHTML = "請選擇課程"
        diving_proc.innerHTML = "請選擇課程"
        diving_dire.innerHTML = "請選擇課程"
        diving_notice.innerHTML = "請選擇課程"
        viewphone.innerHTML = `<a id="changelink" target="_blank" href="#"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
    } else {
        fetch('/changeclasses/' + id, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                return response.json();
            }).then(data => {
                const diving_intr = document.querySelector('#diving-tabs-1')
                const diving_proc = document.querySelector('#diving-tabs-2')
                const diving_dire = document.querySelector('#diving-tabs-3')
                const diving_notice = document.querySelector('#diving-tabs-4')
                const viewphone = document.querySelector('#diving-viewphone-rwd')
                diving_intr.innerHTML = data.event_intr
                diving_proc.innerHTML = data.event_proc
                diving_dire.innerHTML = data.event_dire
                diving_notice.innerHTML = data.event_notice
                if (data.link == null) {
                    viewphone.innerHTML = `<div
                                        class="w-full singUp-btn flex justify-center items-center"><span style="margin-right:10px;">報名請洽</span>
                                        <div class="flex phone-content flex-col justify-center items-center">
                                        <p>協會 連絡電話：04-22312698</p>
                                        <p>總教練 詹寓崵：0930-975535</p></div></div>`
                }else{
                    viewphone.innerHTML = `<a id="changelink" target="_blank" href="${data.link}"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
                }
            })
    }
}

// 風浪板 modal 設定

function windsurfchangeclass(getId) {
    var id = getId.value
    let formData = new FormData();
    formData.append('_method', 'POST');
    formData.append('_token', '{{ csrf_token() }}');
    if (id == 0) {
        const windsurf_intr = document.querySelector('#windsurf-tabs-1')
        const windsurf_proc = document.querySelector('#windsurf-tabs-2')
        const windsurf_dire = document.querySelector('#windsurf-tabs-3')
        const windsurf_notice = document.querySelector('#windsurf-tabs-4')
        const viewphone = document.querySelector('#windsurf-viewphone')
        windsurf_intr.innerHTML = "請選擇課程"
        windsurf_proc.innerHTML = "請選擇課程"
        windsurf_dire.innerHTML = "請選擇課程"
        windsurf_notice.innerHTML = "請選擇課程"
        viewphone.innerHTML = `<a id="changelink" href="#"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
    } else {
        fetch('/changeclasses/' + id, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                return response.json();
            }).then(data => {
                const windsurf_intr = document.querySelector('#windsurf-tabs-1')
                const windsurf_proc = document.querySelector('#windsurf-tabs-2')
                const windsurf_dire = document.querySelector('#windsurf-tabs-3')
                const windsurf_notice = document.querySelector('#windsurf-tabs-4')
                const viewphone = document.querySelector('#windsurf-viewphone')
                windsurf_intr.innerHTML = data.event_intr
                windsurf_proc.innerHTML = data.event_proc
                windsurf_dire.innerHTML = data.event_dire
                windsurf_notice.innerHTML = data.event_notice
                console.log(data.link);
                if (data.link == null) {
                    viewphone.innerHTML = `<div
                                        class="w-full singUp-btn flex justify-center items-center"><span style="margin-right:10px;">報名請洽</span>
                                        <div class="flex phone-content flex-col justify-center items-center">
                                        <p>協會 連絡電話：04-22312698</p>
                                        <p>總教練 詹寓崵：0930-975535</p></div></div>`
                }else{
                    viewphone.innerHTML = `<a id="changelink" target="_blank" href="${data.link}"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
                }
            })
    }
}

function windsurfchangeclass_rwd(getId) {
    var id = getId.value
    let formData = new FormData();
    formData.append('_method', 'POST');
    formData.append('_token', '{{ csrf_token() }}');
    if (id == 0) {
        const windsurf_intr = document.querySelector('#windsurf-tabs-1')
        const windsurf_proc = document.querySelector('#windsurf-tabs-2')
        const windsurf_dire = document.querySelector('#windsurf-tabs-3')
        const windsurf_notice = document.querySelector('#windsurf-tabs-4')
        const viewphone = document.querySelector('#windsurf-viewphone-rwd')
        windsurf_intr.innerHTML = "請選擇課程"
        windsurf_proc.innerHTML = "請選擇課程"
        windsurf_dire.innerHTML = "請選擇課程"
        windsurf_notice.innerHTML = "請選擇課程"
        viewphone.innerHTML = `<a id="changelink" href="#"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
    } else {
        fetch('/changeclasses/' + id, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                return response.json();
            }).then(data => {
                const windsurf_intr = document.querySelector('#windsurf-tabs-1')
                const windsurf_proc = document.querySelector('#windsurf-tabs-2')
                const windsurf_dire = document.querySelector('#windsurf-tabs-3')
                const windsurf_notice = document.querySelector('#windsurf-tabs-4')
                const viewphone = document.querySelector('#windsurf-viewphone-rwd')
                windsurf_intr.innerHTML = data.event_intr
                windsurf_proc.innerHTML = data.event_proc
                windsurf_dire.innerHTML = data.event_dire
                windsurf_notice.innerHTML = data.event_notice
                if (data.link == null) {
                    viewphone.innerHTML = `<div
                                        class="w-full singUp-btn flex justify-center items-center"><span style="margin-right:10px;">報名請洽</span>
                                        <div class="flex phone-content flex-col justify-center items-center">
                                        <p>協會 連絡電話：04-22312698</p>
                                        <p>總教練 詹寓崵：0930-975535</p></div></div>`
                }else{
                    viewphone.innerHTML = `<a id="changelink" target="_blank" href="${data.link}"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
                }
            })
    }
}

// 游泳 modal 設定

function swimmingchangeclass(getId) {
    var id = getId.value
    let formData = new FormData();
    formData.append('_method', 'POST');
    formData.append('_token', '{{ csrf_token() }}');
    if (id == 0) {
        const swimming_intr = document.querySelector('#swimming-tabs-1')
        const swimming_proc = document.querySelector('#swimming-tabs-2')
        const swimming_dire = document.querySelector('#swimming-tabs-3')
        const swimming_notice = document.querySelector('#swimming-tabs-4')
        const viewphone = document.querySelector('#swimming-viewphone')
        swimming_intr.innerHTML = "請選擇課程"
        swimming_proc.innerHTML = "請選擇課程"
        swimming_dire.innerHTML = "請選擇課程"
        swimming_notice.innerHTML = "請選擇課程"
        viewphone.innerHTML = `<a id="changelink" target="_blank" href="#"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
    } else {
        fetch('/changeclasses/' + id, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                return response.json();
            }).then(data => {
                const swimming_intr = document.querySelector('#swimming-tabs-1')
                const swimming_proc = document.querySelector('#swimming-tabs-2')
                const swimming_dire = document.querySelector('#swimming-tabs-3')
                const swimming_notice = document.querySelector('#swimming-tabs-4')
                const viewphone = document.querySelector('#swimming-viewphone')
                swimming_intr.innerHTML = data.event_intr
                swimming_proc.innerHTML = data.event_proc
                swimming_dire.innerHTML = data.event_dire
                swimming_notice.innerHTML = data.event_notice
                if (data.link == null) {
                    viewphone.innerHTML = `<div
                                        class="w-full singUp-btn flex justify-center items-center"><span style="margin-right:10px;">報名請洽</span>
                                        <div class="flex phone-content flex-col justify-center items-center">
                                        <p>協會 連絡電話：04-22312698</p>
                                        <p>總教練 詹寓崵：0930-975535</p></div></div>`
                }else{
                    viewphone.innerHTML = `<a id="changelink" target="_blank" href="${data.link}"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
                }
            })
    }
}

function swimmingchangeclass_rwd(getId) {
    var id = getId.value
    let formData = new FormData();
    formData.append('_method', 'POST');
    formData.append('_token', '{{ csrf_token() }}');
    if (id == 0) {
        const swimming_intr = document.querySelector('#swimming-tabs-1')
        const swimming_proc = document.querySelector('#swimming-tabs-2')
        const swimming_dire = document.querySelector('#swimming-tabs-3')
        const swimming_notice = document.querySelector('#swimming-tabs-4')
        const viewphone = document.querySelector('#swimming-viewphone-rwd')
        swimming_intr.innerHTML = "請選擇課程"
        swimming_proc.innerHTML = "請選擇課程"
        swimming_dire.innerHTML = "請選擇課程"
        swimming_notice.innerHTML = "請選擇課程"
        viewphone.innerHTML = `<a id="changelink" target="_blank" href="#"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
    } else {
        fetch('/changeclasses/' + id, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                return response.json();
            }).then(data => {
                const swimming_intr = document.querySelector('#swimming-tabs-1')
                const swimming_proc = document.querySelector('#swimming-tabs-2')
                const swimming_dire = document.querySelector('#swimming-tabs-3')
                const swimming_notice = document.querySelector('#swimming-tabs-4')
                const viewphone = document.querySelector('#swimming-viewphone-rwd')
                swimming_intr.innerHTML = data.event_intr
                swimming_proc.innerHTML = data.event_proc
                swimming_dire.innerHTML = data.event_dire
                swimming_notice.innerHTML = data.event_notice
                if (data.link == null) {
                    viewphone.innerHTML = `<div
                                        class="w-full singUp-btn flex justify-center items-center"><span style="margin-right:10px;">報名請洽</span>
                                        <div class="flex phone-content flex-col justify-center items-center">
                                        <p>協會 連絡電話：04-22312698</p>
                                        <p>總教練 詹寓崵：0930-975535</p></div></div>`
                }else{
                    viewphone.innerHTML = `<a id="changelink" target="_blank" href="${data.link}"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
                }
            })
    }
}

// 救生 modal 設定

function savingchangeclass(getId) {
    var id = getId.value
    let formData = new FormData();
    formData.append('_method', 'POST');
    formData.append('_token', '{{ csrf_token() }}');
    if (id == 0) {
        const saving_intr = document.querySelector('#saving-tabs-1')
        const saving_proc = document.querySelector('#saving-tabs-2')
        const saving_dire = document.querySelector('#saving-tabs-3')
        const saving_notice = document.querySelector('#saving-tabs-4')
        const viewphone = document.querySelector('#saving-viewphone')
        saving_intr.innerHTML = "請選擇課程"
        saving_proc.innerHTML = "請選擇課程"
        saving_dire.innerHTML = "請選擇課程"
        saving_notice.innerHTML = "請選擇課程"
        viewphone.innerHTML = `<a id="changelink" target="_blank" href="#"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
    } else {
        fetch('/changeclasses/' + id, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                return response.json();
            }).then(data => {
                const saving_intr = document.querySelector('#saving-tabs-1')
                const saving_proc = document.querySelector('#saving-tabs-2')
                const saving_dire = document.querySelector('#saving-tabs-3')
                const saving_notice = document.querySelector('#saving-tabs-4')
                const viewphone = document.querySelector('#saving-viewphone')
                saving_intr.innerHTML = data.event_intr
                saving_proc.innerHTML = data.event_proc
                saving_dire.innerHTML = data.event_dire
                saving_notice.innerHTML = data.event_notice
                if (data.link == null) {
                    viewphone.innerHTML = `<div
                                        class="w-full singUp-btn flex justify-center items-center"><span style="margin-right:10px;">報名請洽</span>
                                        <div class="flex phone-content flex-col justify-center items-center">
                                        <p>協會 連絡電話：04-22312698</p>
                                        <p>總教練 詹寓崵：0930-975535</p></div></div>`
                }else{
                    viewphone.innerHTML = `<a id="changelink" target="_blank" href="${data.link}"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
                }
            })
    }
}

function savingchangeclass_rwd(getId) {
    var id = getId.value
    let formData = new FormData();
    formData.append('_method', 'POST');
    formData.append('_token', '{{ csrf_token() }}');
    if (id == 0) {
        const saving_intr = document.querySelector('#saving-tabs-1')
        const saving_proc = document.querySelector('#saving-tabs-2')
        const saving_dire = document.querySelector('#saving-tabs-3')
        const saving_notice = document.querySelector('#saving-tabs-4')
        const viewphone = document.querySelector('#saving-viewphone-rwd')
        saving_intr.innerHTML = "請選擇課程"
        saving_proc.innerHTML = "請選擇課程"
        saving_dire.innerHTML = "請選擇課程"
        saving_notice.innerHTML = "請選擇課程"
        viewphone.innerHTML = `<a id="changelink" target="_blank" href="#"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
    } else {
        fetch('/changeclasses/' + id, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                return response.json();
            }).then(data => {
                const saving_intr = document.querySelector('#saving-tabs-1')
                const saving_proc = document.querySelector('#saving-tabs-2')
                const saving_dire = document.querySelector('#saving-tabs-3')
                const saving_notice = document.querySelector('#saving-tabs-4')
                const viewphone = document.querySelector('#saving-viewphone-rwd')
                saving_intr.innerHTML = data.event_intr
                saving_proc.innerHTML = data.event_proc
                saving_dire.innerHTML = data.event_dire
                saving_notice.innerHTML = data.event_notice
                if (data.link == null) {
                    viewphone.innerHTML = `<div
                                        class="w-full singUp-btn flex justify-center items-center"><span style="margin-right:10px;">報名請洽</span>
                                        <div class="flex phone-content flex-col justify-center items-center">
                                        <p>協會 連絡電話：04-22312698</p>
                                        <p>總教練 詹寓崵：0930-975535</p></div></div>`
                }else{
                    viewphone.innerHTML = `<a id="changelink" target="_blank" href="${data.link}"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
                }
            })
    }
}

// sup modal 設定

function supchangeclass(getId) {
    var id = getId.value
    let formData = new FormData();
    formData.append('_method', 'POST');
    formData.append('_token', '{{ csrf_token() }}');
    if (id == 0) {
        const sup_intr = document.querySelector('#sup-tabs-1')
        const sup_proc = document.querySelector('#sup-tabs-2')
        const sup_dire = document.querySelector('#sup-tabs-3')
        const sup_notice = document.querySelector('#sup-tabs-4')
        const viewphone = document.querySelector('#sup-viewphone')
        sup_intr.innerHTML = "請選擇課程"
        sup_proc.innerHTML = "請選擇課程"
        sup_dire.innerHTML = "請選擇課程"
        sup_notice.innerHTML = "請選擇課程"
        viewphone.innerHTML = `<a id="changelink" target="_blank" href="#"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
    } else {
        fetch('/changeclasses/' + id, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                return response.json();
            }).then(data => {
                const sup_intr = document.querySelector('#sup-tabs-1')
                const sup_proc = document.querySelector('#sup-tabs-2')
                const sup_dire = document.querySelector('#sup-tabs-3')
                const sup_notice = document.querySelector('#sup-tabs-4')
                const viewphone = document.querySelector('#sup-viewphone')
                sup_intr.innerHTML = data.event_intr
                sup_proc.innerHTML = data.event_proc
                sup_dire.innerHTML = data.event_dire
                sup_notice.innerHTML = data.event_notice
                if (data.link == null) {
                    viewphone.innerHTML = `<div
                                        class="w-full singUp-btn flex justify-center items-center"><span style="margin-right:10px;">報名請洽</span>
                                        <div class="flex phone-content flex-col justify-center items-center">
                                        <p>協會 連絡電話：04-22312698</p>
                                        <p>總教練 詹寓崵：0930-975535</p></div></div>`
                }else{
                    viewphone.innerHTML = `<a id="changelink" target="_blank" href="${data.link}"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
                }
            })
    }
}

function supchangeclass_rwd(getId) {
    var id = getId.value
    let formData = new FormData();
    formData.append('_method', 'POST');
    formData.append('_token', '{{ csrf_token() }}');
    if (id == 0) {
        const sup_intr = document.querySelector('#sup-tabs-1')
        const sup_proc = document.querySelector('#sup-tabs-2')
        const sup_dire = document.querySelector('#sup-tabs-3')
        const sup_notice = document.querySelector('#sup-tabs-4')
        const viewphone = document.querySelector('#sup-viewphone-rwd')
        sup_intr.innerHTML = "請選擇課程"
        sup_proc.innerHTML = "請選擇課程"
        sup_dire.innerHTML = "請選擇課程"
        sup_notice.innerHTML = "請選擇課程"
        viewphone.innerHTML = `<a id="changelink" target="_blank" href="#"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
    } else {
        fetch('/changeclasses/' + id, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                return response.json();
            }).then(data => {
                const sup_intr = document.querySelector('#sup-tabs-1')
                const sup_proc = document.querySelector('#sup-tabs-2')
                const sup_dire = document.querySelector('#sup-tabs-3')
                const sup_notice = document.querySelector('#sup-tabs-4')
                const viewphone = document.querySelector('#sup-viewphone-rwd')
                sup_intr.innerHTML = data.event_intr
                sup_proc.innerHTML = data.event_proc
                sup_dire.innerHTML = data.event_dire
                sup_notice.innerHTML = data.event_notice
                if (data.link == null) {
                    viewphone.innerHTML = `<div
                                        class="w-full singUp-btn flex justify-center items-center"><span style="margin-right:10px;">報名請洽</span>
                                        <div class="flex phone-content flex-col justify-center items-center">
                                        <p>協會 連絡電話：04-22312698</p>
                                        <p>總教練 詹寓崵：0930-975535</p></div></div>`
                }else{
                    viewphone.innerHTML = `<a id="changelink" target="_blank" href="${data.link}"
                                        class="w-full singUp-btn flex justify-center items-center">線上報名</a>`
                }
            })
    }
}
    </script>
@endsection
