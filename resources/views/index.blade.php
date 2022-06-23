@extends('template.template')

    @section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/locomotive-scroll.css')}}" /> --}}
    <title>台中市水中運動協會</title>
    @endsection

        @section('main')
        <div class="banner relative">
            <picture>
                <source class="forwidth" media="(max-width:320px)" srcset="./img/banner/Banner-320px.png"
                    data-scroll-section>
                <source class="forwidth" media="(max-width:834px)" srcset="./img/banner/Banner-834px.png"
                    data-scroll-section>
                <img class="forwidth" src="./img/banner/Banner-1440px.png" alt="" data-scroll-section>
            </picture>
            <div class="slogan absolute flex items-center">
                <span class="" data-scroll-section>沒事多玩水 多玩水沒事</span>
            </div>
        </div>

        <!------------ popup開始 ------------>
        <div id="CMASModal" tabindex="-1" aria-hidden="true"
            class="hidden fixed overflow-y-auto overflow-x-hidden w-full top-0 right-0 left-0 z-50 h-full justify-center items-center CMASModal h-modal">
            <div class="relative w-full h-full  CMAS">
                <div class="relative bg-white CMAS-bg">
                    <div class="flex justify-between items-start CMAS-close">
                        <button type="button" class="absolute top-3 CMAS-botton" data-modal-toggle="CMASModal">
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
                    <div class="p-8 flex CMAS-content pb-14">
                        <div class="CMAS-img">
                            <img src="/img/logo_cmas_popup.svg" alt="">
                        </div>
                        <div class="CMAS-text">
                            <p class="CMAS-title">
                                CMAS潛水
                            </p>
                            <p class="CMAS-words">
                                全名為Confederation Mondiale Activites Scubaquatiques，世界水中運動聯盟。CMAS 成立於1958 年
                                ，由德國、比利時、巴西、法國、希臘、義大利、摩納哥、葡萄牙、瑞士、美國、南斯拉夫 等11
                                個國家，在比利時首都布魯塞爾，所共同成立的聯盟組織。CMAS是一個獨立的非營利組織，目前已分佈於一百多個國家，有超過千萬人數的會員，及實際參與的潛水員和無數的潛水中心、俱樂部加入，是世界各地認同的國際合格認證系統。
                            </p>
                            <a href="https://www.cmas.org" class="flex">
                                了解更多
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.0044 9.414L7.3974 18.021L5.9834 16.607L14.5894 8H7.0044V6H18.0044V17H16.0044V9.414V9.414Z" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="PADIModal" tabindex="-1" aria-hidden="true"
            class="hidden fixed overflow-y-auto overflow-x-hidden w-full top-0 right-0 left-0 z-50 h-full justify-center items-center PADIModal h-modal">
            <div class="relative w-full h-full  PADI">
                <div class="relative bg-white PADI-bg">
                    <div class="flex justify-between items-start PADI-close">
                        <button type="button" class="absolute top-3 PADI-botton" data-modal-toggle="PADIModal">
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
                    <div class="p-8 flex PADI-content pb-14">
                        <div class="PADI-img">
                            <img src="/img/logo_padi_popup.svg" alt="">
                        </div>
                        <div class="PADI-text">
                            <p class="PADI-title">
                                PADI潛水
                            </p>
                            <p class="PADI-words">
                                PADI是國際專業潛水教練協會(Profesional Association of Diver
                                Instructor)的簡稱，成立於1966年，總部位於美國加州，為世界最大的潛水會員組織，同時也是世界領先的水肺潛水訓練機構。協會擁有數十年的管理經驗，已有超過2,500萬的會員數，提供24種教學語言同時也有PADI
                                elearning網上教學，一般在4-7即可完成初級課程學習。 PADI協會更關注學員在取得潛水牌時會更注重海洋生態的環境保護。
                            </p>
                            <a href="https://www.padi.com/zh-hant" class="flex">
                                了解更多
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.0044 9.414L7.3974 18.021L5.9834 16.607L14.5894 8H7.0044V6H18.0044V17H16.0044V9.414V9.414Z" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="SUPTUFModal" tabindex="-1" aria-hidden="true"
            class="hidden fixed overflow-y-auto overflow-x-hidden w-full top-0 right-0 left-0 z-50 h-full justify-center items-center SUPTUFModal h-modal">
            <div class="relative w-full h-full  SUPTUF">
                <div class="relative bg-white SUPTUF-bg">
                    <div class="flex justify-between items-start SUPTUF-close">
                        <button type="button" class="absolute top-3 SUPTUF-botton" data-modal-toggle="SUPTUFModal">
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
                    <div class="p-8 flex SUPTUF-content pb-14">
                        <div class="SUPTUF-img">
                            <img src="/img/logo_sup_popup.svg" alt="">
                        </div>
                        <div class="SUPTUF-text">
                            <p class="SUPTUF-title">
                                SUPTUF
                            </p>
                            <p class="SUPTUF-words">
                                以SUP立式划槳教練課程,選修風浪板、獨木舟三合一Windsupyak板，推動水上運動觀光及帶動地方觀光和繁榮提升SUP風浪板/獨木舟運動風氣及培訓專業教練人才。
                                發展專利著作SUPTUF(中華民國立式划槳浪板訓練協會)教學系統認證。有品牌有信譽的標章SUPTUF已經榮獲中華民國經濟部智慧財產局註冊、認證。
                            </p>
                            <a href="#" class="flex">
                                了解更多
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.0044 9.414L7.3974 18.021L5.9834 16.607L14.5894 8H7.0044V6H18.0044V17H16.0044V9.414V9.414Z" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="backgroundimg relative" data-scroll-section data-scroll-section-inview>
            <div class="about_us">
                <div class="about_us-top">
                    <div class="about_us-title">
                        <div class="color-line flex">
                            <div class="blue1"></div>
                            <div class="blue2"></div>
                        </div>
                        <span class="zh-aboutus my-1">關於我們</span>
                        <span class="en-aboutus">About us</span>
                    </div>
                </div>
                <div class="about_us-mid">
                    培訓優良水中運動選手及提供水中活動愛好者完整且安全的休閒管道。本會成立後下設有：游泳、水上救生、風浪板、SUP、潛水，可充分協助本市推展各種水中競賽、休閒、救生活動及水上安全事宜。
                </div>
                <div class="about_us-bottom">
                    <a href="about" class="flex">了解更多
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                        </svg>
                    </a>
                </div>
                <img class="absolute" src="./img/index-diving01-img.svg" alt="">
            </div>
            {{-- <div class="marquee">
                <div class="marquee w-full">
                    <p data-scroll data-scroll-speed="30" data-scroll-direction="horizontal">
                        WINDSURFING&emsp;DIVING&emsp;SUP&emsp;WINDSURFING&emsp;DIVING&emsp;SUP&emsp;WINDSURFING&emsp;DIVING&emsp;SUP&emsp;WINDSURFING&emsp;DIVING&emsp;SUP
                    </p>
                </div>
            </div> --}}
            <div class="img">
                <img class="absolute img02" src="./img/index-diving02-img.svg" alt="">
            </div>
            <div class="certification">
                <div class="certification-top flex flex-col">
                    <div class="color-line flex">
                        <div class="blue1"></div>
                        <div class="blue2"></div>
                    </div>
                    <span class="zh-aboutus my-1">三大認證系統</span>
                    <span class="en-aboutus">Three certification systems</span>
                </div>
                <div class="certification-bottom flex justify-between">
                    <div class="certification-board flex flex-col bg-white items-center" data-modal-toggle="CMASModal">
                        <div class="certification-img w-full">
                            <img src="./img/CMAS logo.png" alt="">
                        </div>
                        <div class="certification-intr flex justify-between">
                            <div class="certification-name">
                                CMAS潛水
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="certification-board flex flex-col bg-white items-center" data-modal-toggle="PADIModal">
                        <div class="certification-img w-full">
                            <img src="./img/PADI logo.png" alt="">
                        </div>
                        <div class="certification-intr flex justify-between">
                            <div class="certification-name">
                                PADI潛水
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="certification-board flex flex-col bg-white items-center"
                        data-modal-toggle="SUPTUFModal">
                        <div class="certification-img w-full">
                            <img src="./img/SUPTUF logo.png" alt="">
                        </div>
                        <div class="certification-intr flex justify-between">
                            <div class="certification-name">
                                SUPTUF
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 熱門課程 old -->
            <div class="popular-courses">
                <div class="popular-courses-top flex flex-col">
                    <div class="color-line flex">
                        <div class="blue1"></div>
                        <div class="blue2"></div>
                    </div>
                    <span class="zh-aboutus my-1">熱門課程</span>
                    <span class="en-aboutus">Popular Courses</span>
                </div>
                <div class="popular-courses-imgs flex">
                    <div class="courses1 flex relative" onclick="location.href='/classes'" style="cursor: pointer">
                        <p class="absolute hidden">立式浪板</p>
                    </div>
                    <div class="courses2 flex relative" onclick="location.href='/classes'" style="cursor: pointer">
                        <p class="absolute hidden">潛水</p>
                    </div>
                    <div class="courses3 flex relative" onclick="location.href='/classes'" style="cursor: pointer">
                        <p class="absolute hidden">風浪板</p>
                    </div>
                </div>
            </div>

            <!-- 最新消息 old -->
            <div class="news flex justify-between">
                <div class="news-left">
                    <div class="news-left-top">
                        <div class="color-line flex">
                            <div class="blue1"></div>
                            <div class="blue2"></div>
                        </div>
                        <span class="zh-aboutus my-1">最新消息</span>
                        <span class="en-aboutus">NEWS</span>
                    </div>
                    <div class="news-left-bottom">
                        <a href="./news" class="flex">
                            <span>了解更多</span>
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="news-right">
                    @foreach ($news as $item)
                    <div class="placard-news">
                        <a href="./event/{{$item->id}}" class="flex">
                            <div class="placard-left mr-auto">
                                <div class="time">
                                    <label for="event"></label>
                                    <button>
                                        @if ($item->anno_type==1)
                                        公告
                                        @else
                                        好消息
                                        @endif
                                    </button>
                                    <span>{{substr($item->updated_at,0,10)}} updated</span>
                                </div>
                                <div class="event">
                                    <span>{{$item->event}}</span>
                                </div>
                            </div>
                            <div class="placard-right flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    {{-- <div class="placard-news">
                        <a href="./event/" class="flex">
                            <div class="placard-left mr-auto">
                                <div class="time">
                                    <label for="event"></label>
                                    <button>公告</button>
                                    <span>2022.05.22</span>
                                </div>
                                <div class="event">
                                    <span>6月18-19日月潭SUP三合一教練班</span>
                                </div>
                            </div>
                            <div class="placard-right flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="placard-news">
                        <a href="./event.html" class="flex">
                            <div class="placard-left mr-auto">
                                <div class="time">
                                    <label for="event"></label>
                                    <button>公告</button>
                                    <span>2022.05.22</span>
                                </div>
                                <div class="event">
                                    <span>6月18-19日月潭SUP三合一教練班</span>
                                </div>
                            </div>
                            <div class="placard-right flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="placard-news">
                        <a href="./event.html" class="flex">
                            <div class="placard-left mr-auto">
                                <div class="time">
                                    <label for="event"></label>
                                    <button>公告</button>
                                    <span>2022.05.22</span>
                                </div>
                                <div class="event">
                                    <span>6月18-19日月潭SUP三合一教練班</span>
                                </div>
                            </div>
                            <div class="placard-right flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="placard-news">
                        <a href="./event.html" class="flex">
                            <div class="placard-left mr-auto">
                                <div class="time">
                                    <label for="event"></label>
                                    <button>公告</button>
                                    <span>2022.05.22</span>
                                </div>
                                <div class="event">
                                    <span>6月18-19日月潭SUP三合一教練班</span>
                                </div>
                            </div>
                            <div class="placard-right flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                </svg>
                            </div>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- 熱門課程 -->
        {{-- <div class="popular-courses">
            <div class="popular-courses-top flex flex-col">
                <div class="color-line flex">
                    <div class="blue1"></div>
                    <div class="blue2"></div>
                </div>
                <span class="zh-aboutus">熱門課程</span>
                <span class="en-aboutus">Popular Courses</span>
            </div>
            <div class="popular-courses-imgs flex">
                <div class="courses1 flex relative">
                    <p class="absolute hidden">立式浪板</p>
                </div>
                <div class="courses2 flex relative">
                    <p class="absolute hidden">潛水</p>
                </div>
                <div class="courses3 flex relative">
                    <p class="absolute hidden">風浪板</p>
                </div>
            </div>
        </div> --}}

        <!-- 最新消息 -->
        {{-- <div class="news flex justify-between">
            <div class="news-left">
                <div class="news-left-top">
                    <div class="color-line flex">
                        <div class="blue1"></div>
                        <div class="blue2"></div>
                    </div>
                    <span class="zh-aboutus">最新消息</span>
                    <span class="en-aboutus">NEWS</span>
                </div>
                <div class="news-left-bottom">
                    <a href="./news.html" class="flex">
                        <span>了解更多</span>
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="news-right">
                <div class="placard-news">
                    <a href="./event.html" class="flex">
                        <div class="placard-left mr-auto">
                            <div class="time">
                                <label for="event"></label>
                                <button>公告</button>
                                <span>2022.05.22</span>
                            </div>
                            <div class="event">
                                <span>6月18-19日月潭SUP三合一教練班</span>
                            </div>
                        </div>
                        <div class="placard-right flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="placard-news">
                    <a href="./event.html" class="flex">
                        <div class="placard-left mr-auto">
                            <div class="time">
                                <label for="event"></label>
                                <button>公告</button>
                                <span>2022.05.22</span>
                            </div>
                            <div class="event">
                                <span>6月18-19日月潭SUP三合一教練班</span>
                            </div>
                        </div>
                        <div class="placard-right flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="placard-news">
                    <a href="./event.html" class="flex">
                        <div class="placard-left mr-auto">
                            <div class="time">
                                <label for="event"></label>
                                <button>公告</button>
                                <span>2022.05.22</span>
                            </div>
                            <div class="event">
                                <span>6月18-19日月潭SUP三合一教練班</span>
                            </div>
                        </div>
                        <div class="placard-right flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="placard-news">
                    <a href="./event.html" class="flex">
                        <div class="placard-left mr-auto">
                            <div class="time">
                                <label for="event"></label>
                                <button>公告</button>
                                <span>2022.05.22</span>
                            </div>
                            <div class="event">
                                <span>6月18-19日月潭SUP三合一教練班</span>
                            </div>
                        </div>
                        <div class="placard-right flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div> --}}

        <!-- QA -->
        <div id="question" class="question-backgroundimg" data-scroll-section data-scroll-section-inview>
            <div class="question-area flex justify-between" >
                <div class="question-left flex flex-col">
                    <div class="color-line flex">
                        <div class="blue1"></div>
                        <div class="blue2"></div>
                    </div>
                    <span class="zh-aboutus my-1">常見問題</span>
                    <span class="en-aboutus">FAQ</span>
                </div>
                <div class="question-right flex flex-wrap" >
                    <div class="question">
                        <details close>
                            <summary onclick="changeimg1()" class="icon flex justify-between">
                                <span>不會游泳可以玩潛水嗎？</span>
                                <svg xmlns="http://www.w3.org/2000/svg" id="icon">
                                    <path id="path" d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" />
                                </svg>
                            </summary>
                            <div class="answer">
                                <p>可以的，潛水裝備裡面有面鏡，呼吸管，蛙鞋，我們會教你如何利用這三寶學會潛泳，而且很容易花沒幾分鐘就學會了～</p>
                            </div>
                        </details>
                    </div>
                    <div class="question" >
                        <details close>
                            <summary onclick="changeimg2()" class="icon2 flex justify-between">
                                <span>參加SUP活動，如果不會游泳掉到水裡怎麼辦？</span>
                                <svg xmlns="http://www.w3.org/2000/svg" id="icon">
                                    <path id="path2" d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" />
                                </svg>
                            </summary>
                            <div class="answer">
                                <p>您放心，只要穿上救生衣，在水裏是沉不下去的，還有腳繩幫您確保落水後人和板子不會分開，所以相當安全。</p>
                            </div>
                        </details>
                    </div>
                    <div class="question">
                        <details close>
                            <summary onclick="changeimg3()" class="icon3 flex justify-between">
                                <span>風浪板會不會很難學？</span>
                                <svg xmlns="http://www.w3.org/2000/svg" id="icon">
                                    <path id="path3" d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" />
                                </svg>
                            </summary>
                            <div class="answer">
                                <p>跟學騎腳踏車一樣，只要你學會了，你這一輩子都會騎了。</p>
                            </div>
                        </details>
                    </div>
                    <div class="question">
                        <details close>
                            <summary onclick="changeimg4()" class="icon4 flex justify-between">
                                <span>如果還有其他問題怎麼辦?</span>
                                <svg xmlns="http://www.w3.org/2000/svg" id="icon">
                                    <path id="path4" d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" />
                                </svg>
                            </summary>
                            <div class="answer">
                                <p>可以滑到頁尾的地方有fb,ig連結可以私訊我們。</p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomimg w-full flex" data-scroll-section>
            <a href="/album" class="w-1/2 relative eventimg ">
                <div class="gray w-full h-full absolute top-0">
                </div>
                <div class="h-full">
                    <figure class="h-full"><img src="/img/Rectangle77.png" /></figure>
                </div>
                <div class="eventcontent absolute flex flex-col">
                    <div class="title">活動照片</div>
                    <div class="link flex ">
                        <span>了解更多</span>
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <path
                            d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                        </svg>
                    </div>
                </div>

            </a>
            <a href="/classes" class="w-1/2 relative classesimg">
                <div class="gray w-full h-full absolute top-0">
                </div>
                <div class="h-full">
                    <figure class="h-full"><img src="/img/Rectangle78.png" /></figure>
                </div>
                <div class="classescontent absolute flex flex-col">
                    <div class="title">課程</div>
                    <div class="link flex ">
                        <span>了解更多</span>
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <path
                            d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                        </svg>
                    </div>
                </div>

            </a>
        </div>
        @endsection

    @section('js')
    <script>
        count1 = 0
        count2 = 0
        count3 = 0
        count4 = 0

        function changeimg1() {
            var icon = document.querySelector('#icon')
            var path = document.querySelector('#path')
            if (count1 == 0) {
                path.setAttribute('d', "M5 11H19V13H5V11Z")
                count1 += 1
            } else {
                path.setAttribute('d', "M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z")
                count1 -= 1
            }
        }
        function changeimg2() {

            var icon = document.querySelector('#icon2')
            var path = document.querySelector('#path2')
            if (count2 == 0) {
                path.setAttribute('d', "M5 11H19V13H5V11Z")
                count2 += 1
            } else {
                path.setAttribute('d', "M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z")
                count2 -= 1
            }
        }
        function changeimg3() {

            var icon = document.querySelector('#icon3')
            var path = document.querySelector('#path3')
            if (count3 == 0) {
                path.setAttribute('d', "M5 11H19V13H5V11Z")
                count3 += 1
            } else {
                path.setAttribute('d', "M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z")
                count3 -= 1
            }
        }
        function changeimg4() {

            var icon = document.querySelector('#icon4')
            var path = document.querySelector('#path4')
            if (count4 == 0) {
                path.setAttribute('d', "M5 11H19V13H5V11Z")
                count4 += 1
            } else {
                path.setAttribute('d', "M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z")
                count4 -= 1
            }
        }
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script> --}}
    {{-- <script src="{{asset('js/script.js')}}"></script> --}}
    @endsection

