{{-- @extends('template.template') --}}

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    {{-- @section('css') --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <!-- flowbite CDN 彈出式視窗 -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <!-- timeline -->
    <link href="https://assets.website-files.com/61f969f7e3cde769a08142b5/css/nation-and-james.8e5924b2f.min.css"
        rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/nav&footer.css') }}">


    <title>關於我們</title>
    <style>
        body {
            font-family: 'Noto Sans TC', sans-serif;
            font-weight: unset;
        }

        .outline-text,
        .sans-serif {
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke: 1px #ffffff;
        }



        @media only screen and (max-width: 767px) {

            .outline-text,
            .sans-serif {
                -webkit-text-fill-color: transparent;
                -webkit-text-stroke: 0.5px #ffffff;
            }

        }

        /*  */
        #page {
            width: 100%;
            margin: 80px auto 0 auto;
        }

        @media only screen and (max-width:840px) {
            #page {
                margin: 24px auto 0 auto;
            }
        }

        #title {
            width: 112px;
            height: 50px;
            margin: 0 auto -25px auto;
            font-size: 24px;
            font-weight: 500;
        }

        #about {
            width: 100%;
            /* height: 290px; */
            /* line-height: 290px; */
            height: 328px;
            /* line-height: 328px; */
            font-size: 200px;
            font-weight: 700;
            color: #D9D9D9;
            position: relative;
            overflow: hidden;
            z-index: 10;
        }

        #aboutspan {
            position: absolute;
            z-index: 10;
            /* bottom: -290px; */
            left: 50%;
            transform: translateX(-50%);
            opacity: 1;
            height: 290px;
            line-height: 290px;
        }

        @keyframes float {
            from {
                opacity: 0;
                /* bottom: -290px; */
                top: 328px;
            }

            to {
                opacity: 0.2;
                /* bottom: 0; */
                top: 0;
            }
        }

        @keyframes float_rwd {
            from {
                opacity: 0;
                top: 180px;
            }

            to {
                opacity: 0.2;
                top: 0;
            }
        }



        .test0 {
            position: absolute;
            bottom: -328px;
            left: 50%;
            transform: translateX(-50%);
        }

        .test {
            position: absolute;
            bottom: -328px;
            left: 50%;
            transform: translateX(-50%);
            opacity: 1;
            z-index: 10;
            animation-name: float;
            animation-duration: 1.5s;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
        }

        .test1 {
            position: absolute;
            /* bottom: 0; */
            left: 50%;
            transform: translateX(-50%);
            /* opacity: 0.2; */
            animation-name: float;
            animation-duration: 1.5s;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
            z-index: 10;
        }

        @media only screen and (max-width:768px) {
            #title {
                width: 96px;
                font-size: 24px;
                margin: 0 auto 0 auto;
            }

            #about {
                font-size: 75px;
                /* line-height: 109px; */
                /* height: 109px; */
                /* margin-bottom: 71px; */
                height: 180px;
                line-height: 180px;
            }

            #aboutspan {
                line-height: 109px;
                height: 109px;
            }

            .test {
                animation-name: float_rwd;
            }
        }





        #imgsection {
            background-image: url('/img/img_aboutBanner.jpeg');
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            min-height: 735px;
            background-repeat: no-repeat;
            /* margin-top: 38px; */
            z-index: 999999;
            background-color: white;
        }

        #banner_img {
            position: sticky;
            width: 110%;
            /* z-index: 999; */
            top: -1px;
        }

        #timeline {
            background-image: url('./img/about_bg.png');
            background-position: center;
            background-size: cover;

        }

        @media screen and (max-width:1024px) {
            #timeline {
                background-image: url('./img/about_bg_black.png');
                background-position: center;
                background-size: cover;

            }
        }

        .overlay-fade-top {
            background-image: unset;
        }

        .overlay-fade-bottom {
            background-image: unset;
        }

        .body {
            cursor: auto;
        }

        #modal_content {
            /* 遮色片 */
            /* box-shadow: 0 0 0 999px rgba(136, 139, 147, 0.3); */
            /* box-shadow: 0 0 0 999px rgba(20, 20, 20, 0.3); */
            box-shadow: 0 0 0 999px rgba(55, 65, 81, 0.5);
            z-index: 1000;
        }
    </style>
    {{-- @endsection --}}
</head>

<body>
    <nav class="container flex justify-center max-w-full flex-wrap  section wf-section h-auto"
        style="background-color: white; z-index: 999;">
        <div class="nav flex items-center justify-between" style="color: black;">
            <div class="right ">
                <a href="index">
                    <div class="logo flex">
                        <img src="./img/logo/only_logo.svg" alt="">
                        <div class="name flex flex-col hidden lg:block">
                            <div class="zh-name">
                                <span>台中市水中運動協會</span>
                            </div>
                            <div class="en-name">
                                <span style="font-size:16px; font-weight:500;">CHINESE TAIPEI UNDERWATER FEDERATION</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="burger mr-4 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z" />
                </svg>
            </div>
            <div class="left flex justify-end ml-auto lg:block hidden">
                <ul class="flex items-center" style="opacity: 0.6">
                    <li><a href="./news.html">最新消息</a></li>
                    <li>
                        <button class="flex" id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar">
                            關於我們
                            <img src="./img/icon/ic_arrow-down.svg" alt="">
                        </button>
                    </li>
                    <li><a href="./classes.html">課程</a></li>
                    <li><a href="album">活動照片</a></li>
                    @auth
                        @if (Auth::user()->power == 1)
                            <li><a href="/dashboard">後台</a></li>
                        @endif
                        <li>
                            <button data-dropdown-toggle="dropdownleft">
                                <img src="{{ asset('img/icon/Avatar.png') }}" alt="">
                            </button>
                        </li>
                        <li>
                            <div class="p-0 nameblack" style='margin-right:5px; '>{{ Auth::user()->name }}</div>
                        </li>

                    @endauth
                    @guest
                        <li data-modal-toggle="authentication-modal">登入</li>
                    @endguest
                </ul>
            </div>

        </div>

        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div id="modal_content" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent"
                        data-modal-toggle="authentication-modal">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white"
                            style="font-family: 'Noto Sans TC', sans-serif;">登入</h3>
                        <form class="space-y-6" action="#">
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">電子信箱</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="name@company.com" required>
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">密碼</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value=""
                                            class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                            required>
                                    </div>
                                    <label for="remember"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        style="margin-bottom:0 ;">記住我</label>
                                </div>
                                <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500"
                                    style="height:20px;line-height: 20px;font-family: 'Noto Sans TC', sans-serif;">忘記密碼</a>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">登入</button>
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                Not registered? <a href="#"
                                    class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- 大頭貼的下拉式選單 --}}
        <div id="dropdownleft" class="hidden z-10 dropdownleft" >
            <ul class="bg-white rounded-lg">
                <li class="block px-4 py-2 hover:bg-gray-100 rounded-lg">
                    <a href="/personal-center" style="color: black">個人中心</a>
                </li>
                <li class="block px-4 py-2 hover:bg-gray-100 rounded-lg">
                    <form action="logout" method="POST" class="d-flex m-0" id="logout">
                        @csrf
                        <button type="submit" style="color: red;width:100%;left:0;">登出</button>
                    </form>
                </li>
            </ul>
        </div>
        {{-- 關於我們的下拉式選單 --}}
        <div id="dropdownNavbar" class="hidden z-10 dropdownNavbar" style="color:black">
            <ul class="bg-white">
                <li>
                    <a href="about"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">關於我們</a>
                </li>
                <li>
                    <a href="Past-presidents"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">歷屆會長</a>
                </li>
                <li>
                    <a href="./organization .html"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">協會組織架構</a>
                </li>
                <li>
                    <a href="./surf-Rescue.html"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">救生員資格檢定</a>
                </li>
            </ul>
        </div>
        {{-- 分隔線 --}}
        <!-- <div class="flex justify-center items-center" style="width:100%;height: 503px;">
      <div class="name">
        <div class="line flex justify-center">
          <div class="line1" style="width: 25px;height:4px;background-color: #3B54F3;"></div>
          <div class="line2" style="width: 25px;height:4px;background-color: #6EEDF0;border-radius: 0px 25px 25px 0px;">
          </div>
        </div>
        <div class="title" style="font-size: 28px;font-weight:500;color:#141414;opacity:0.96;margin-top: 8px;">關於我們
        </div>
      </div>
    </div>
    <img src="./img/Mask group.png" alt="" style="width:100%; height: 735px;"> -->

        {{-- @section('main') --}}
        <div id="page">
            <!-- 大標 關於我們 -->
            <div id="title" class="content-title flex flex-wrap z-10" style="color:black;">
                <div class="color-line flex" style="margin:0 auto;">
                    <div class="blue1" style="width: 25px;
              height: 4px;
              background-color: #3B54F3;"></div>
                    <div class="blue2" style="width: 25px;
              height: 4px;
              background-color: #6EEDF0;
              border-radius: 0 25px 25px 0;"></div>
                </div>
                關於我們
            </div>
            <!-- 大標 About -->
            <div id="about" class="z-1">
                <span class="test" id="aboutspan">About</span>
            </div>
            <div id="imgsection">
                <img id="banner_img" src="{{ asset('img/img_aboutUsBg1.png') }}" alt="">
            </div>
        </div>
    </nav>


    <main data-w-id="62042371c2f75a04a47ec666" class="body">
        <div id="timeline" class="section-timeline">
            <div class="timeline-container">
                <div class="timeline-component">
                    <div class="overlay-fade-top"></div>
                    <div class="timeline-progress">
                        <div class="timeline_progress-bar"></div>
                    </div>
                    <div data-w-id="1b11356a-0a20-9bf6-b946-d66fb4f3a52a" class="timeline_item">
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a52b-fd5f313d" class="timeline_left">
                            <div class="timeline_date-text outline-text no-margin">1989</div>
                        </div>
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a52e-fd5f313d" class="timeline_centre">
                            <div class="timeline_circle"></div>
                        </div>
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a530-fd5f313d" class="timeline_right">
                            <div class="margin-bottom-medium">
                                <p class="paragraph serif white mb-2" style="font-weight: 500;
                    font-size: 24px;
                    line-height: 32px;">救生員分門別類</p>
                                <p class="paragraph serif white"
                                    style="font-weight: 400; font-size: 18px; opacity: 0.75;">
                                    我國為參加日本舉行的「亞洲蹼泳錦標賽」，仍以「中華台北水中運動協會」名稱申請加入世界水中運動聯盟 (CMAS)
                                    組織，正式開啟本會成立及邁向國際舞臺的新頁。
                                </p>
                            </div>
                            <div>
                                <img src="/img/certification.jpg" alt=""
                                    style="width: 100%;border-radius: 8px;height:auto;">
                            </div>

                        </div>
                    </div>
                    <div data-w-id="1b11356a-0a20-9bf6-b946-d66fb4f3a536" class="timeline_item">
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a537-fd5f313d" class="timeline_left">
                            <div class="timeline_date-text outline-text no-margin">1911</div>
                        </div>
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a53a-fd5f313d" class="timeline_centre">
                            <div class="timeline_circle"></div>
                        </div>
                        <div class="timeline_right">
                            <div class="margin-bottom-medium">
                                <p class="paragraph serif white mb-2" style="font-weight: 500;
                    font-size: 24px;
                    line-height: 32px;">推廣水中運動</p>
                                <p class="paragraph serif white"
                                    style="font-size: 18px;font-weight: 400;opacity: 0.75;">
                                    本會獲內政部核准成立「中華民國水中運動協會」，並以行政院體委會為目的事業主關機關，開始推展水中運動及救攤等任務。
                                </p>
                            </div>
                            <div>
                                <img src="/img/img_about_pic01.png" alt=""
                                    style="width: 100%;border-radius: 8px;height: auto;">
                            </div>
                            <div data-w-id="0a138b73-59f6-d1e4-718b-f003283e3dd5" class="image-wrapper">

                            </div>

                        </div>
                    </div>
                    <div data-w-id="1b11356a-0a20-9bf6-b946-d66fb4f3a549" class="timeline_item">
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a54a-fd5f313d" class="timeline_left">
                            <div class="timeline_date-text outline-text no-margin">2007</div>
                        </div>
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a54d-fd5f313d" class="timeline_centre">
                            <div class="timeline_circle"></div>
                        </div>
                        <div class="timeline_right">
                            <div class="margin-bottom-medium">
                                <p class="paragraph serif white mb-2" style="font-weight: 500;
                    font-size: 24px;
                    line-height: 32px;">正式獲內政部核准成立</p>
                                <p class="paragraph serif white"
                                    style="font-size: 18px;font-weight: 400; opacity: 0.75;">
                                    本會獲內政部核准成立「中華民國水中運動協會」，並以行政院體委會為目的事業主關機關，開始推展水中運動及救攤等任務。</p>
                            </div>
                            <div>
                                <!-- <img src="/img/img_lifeSaving.png" alt="" style="width: 100%;border-radius: 8px;height: 400px;"> -->
                            </div>
                            <div data-w-id="9b376ea9-8851-772e-f6da-9fa5255bbe9e" class="image-wrapper">

                            </div>

                        </div>
                    </div>
                    <div class="overlay-fade-bottom"></div>
                </div>
            </div>
        </div>

    </main>
    {{-- @endsection --}}

    <footer>
        <div class="container max-w-full h-auto">
            <div class="footer flex flex-wrap justify-between w-full">
                <div class="left flex flex-col ">
                    <span>台中市北區天祥街10號</span>
                    <span>04-22312698</span>
                </div>
                <div class="right flex text-white">
                    <ul class="page">
                        <li class="flex justify-between">首頁
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                            </svg>
                        </li>
                        <li class="flex justify-between">關於我們
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                            </svg>
                        </li>
                        <li class="flex justify-between">課程
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                            </svg>
                        </li>
                        <li class="flex justify-between">活動照片
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                            </svg>
                        </li>
                    </ul>
                    <ul class="link">
                        <li>Facebook</li>
                        <li>instagram</li>
                    </ul>
                </div>
                <div class="copyright text-white opacity-50 w-full flex justify-end">
                    <span>© COPYRIGHT 2022 台中水中運動協會 All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </footer>


    {{-- @section('js') --}}

    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=61f969f7e3cde769a08142b5"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="https://assets.website-files.com/61f969f7e3cde769a08142b5/js/nation-and-james.07ac02985.js"
        type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>


    <script>
        window.onscroll = function() {
            myfunction()
        };

        function myfunction() {
            if (document.documentElement.scrollTop < 350) {
                document.getElementById("aboutspan").className = "test1";
            } else if (document.documentElement.scrollTop > 500) {
                document.getElementById("aboutspan").className = "test0";
            }
        }
    </script>
    {{-- @endsection --}}


</body>

</html>
