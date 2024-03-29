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

    <link rel="stylesheet" href="{{ asset('css/for_aboutus.css') }}">

    <!-- timeline -->
    <link href="https://assets.website-files.com/61f969f7e3cde769a08142b5/css/nation-and-james.8e5924b2f.min.css"
        rel="stylesheet" type="text/css" />

    {{-- <link rel="stylesheet" href="{{ asset('css/for_aboutus.css') }}"> --}}


    <title>關於我們</title>
    <style>
        /*  */
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

        @media only screen and (max-width: 768px) {
            #authentication-modal {
                /* z-index: 1000000000000; */
            }
        }

        /*  */
        #page {
            width: 100%;
            margin: 80px auto 0 auto;
        }

        @media only screen and (max-width:840px) {
            #page {
                margin: 80px auto 0 auto;
            }
        }
        @media only screen and (max-width:640px) {
            #page {
                margin: 100px auto 0 auto;
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
            z-index: 0;
        }

        #aboutspan {
            position: absolute;
            z-index: 0;
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
            animation-duration: 1s;
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
            animation-duration: 1s;
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
            /* position: relative; */
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

        .nav {
            position: fixed;
            top: 0;
            z-index: 1;
            background-color: #ffffff;
        }

        #dropdownleft ul {
            border-radius: 6px;
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.05), 0px 10px 15px -3px rgba(0, 0, 0, 0.1), 0px 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        #dropdownleft ul li:hover {
            border-radius: 6px;
        }

        #dropdownNavbar ul {
            border-radius: 6px;
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.05), 0px 10px 15px -3px rgba(0, 0, 0, 0.1), 0px 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        #dropdownNavbar ul li a {
            border-radius: 6px;
        }

        #title {
            margin-top: 80px
        }

        /* footer 開始 */
        .left>img {
            width: 313px;
            cursor: pointer;
        }

        @media (max-width:1024px) {
            * body .container .footer .right {
                padding-right: 0;
            }
        }

        /* 漢堡條登出 */
        @media screen and (max-width: 1024px) {
            .hamburger__list-item button {
                position: relative;
                text-decoration: none;
                color: #141414;
                overflow: hidden;
                cursor: pointer;
                padding-left: 5px;
                padding-right: 5px;
                display: inline-block;
                text-transform: uppercase;
                transition: all 200ms linear;
                letter-spacing: 3px;
            }
        }

        @media screen and (max-width: 1024px) {
            .hamburger__list-item button:after {
                position: absolute;
                content: "";
                top: 0;
                margin-top: -2px;
                left: 50%;
                width: 0;
                height: 0;
                opacity: 0;
                transition: all 200ms linear;
            }
        }

        @media screen and (max-width: 1024px) {
            .hamburger__list-item button:hover:after {
                height: 10px;
                opacity: 1;
                left: 0;
                width: 50px;
            }
        }

        @media screen and (max-width: 1024px) {
            .hamburger__list-item button:hover {
                color: #3B54F3;
            }
        }

        @media screen and (max-width: 1024px) {
            .hamburger__list-item.active-nav button:after {
                height: 10px;
                opacity: 1;
                left: 0;
                width: 50px;
            }
        }

        .hamburger__list-item button {
            display: flex;
            width: 100%;
        }

        .hamburger__list-item span {
            width: 60%;
            text-align: start;
        }

        * body .container .dropdownNavbar ul li a:hover {
            color: #3B54F3;
        }

        * body .container .dropdownNavbar ul li:hover {
            background-color: #EBEEFE;
            border-radius: 6px;
        }
    </style>
    {{-- @endsection --}}
</head>

<body>
    <nav class="container flex justify-center max-w-full flex-wrap  section wf-section h-auto"
        style="background-color: white; z-index: 999;">
        <div class="nav flex items-center justify-between" style="color: black;">
            <div class="right ">
                <a href="/">
                    <div class="logo flex">
                        <img src="./img/logo/only_logo.svg" alt="">
                        <div class="name flex flex-col hidden sm:block">
                            <div class="zh-name">
                                <span>台中市水中運動協會</span>
                            </div>
                            <div class="en-name">
                                <span style="font-size:16px; font-weight:400;">CHINESE TAIPEI UNDERWATER
                                    FEDERATION</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- 手機版的menu 開始 -->
            <!-- hamburger menu  -->
            <div class="cd-header lg:hidden">
                <div class="header-wrapper">
                    <div class="nav-but-wrap">
                        <div class="menu-icon hover-target">
                            <span class="menu-icon__line menu-icon__line-left"></span>
                            <span class="menu-icon__line"></span>
                            <span class="menu-icon__line menu-icon__line-right"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- hamburger menu 展開 -->
            <div class="hamburger lg:hidden">
                <div class="hamburger__content">
                    <ul class="hamburger__list">
                        <li class="hamburger__list-item nav-active ">
                            <a href="/news" class="hover-target full md:w-3/5"><span>最新消息</span>
                                <svg width="24" height="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                        fill="#3B54F3" />
                                </svg>
                            </a>
                        </li>

                        <li class="hamburger__list-item ">
                            {{-- <div class="menu about"> --}}
                            <a href="/about" class="hover-target full md:w-3/5"><span>關於我們</span>
                                <svg width="24" height="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                        fill="#3B54F3" />
                                </svg>
                            </a>
                        </li>

                        <li class="hamburger__list-item ">
                            <a href="/Past-presidents" class="hover-target full md:w-3/5"><span>歷屆會長</span>
                                <svg width="24" height="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                        fill="#3B54F3" />
                                </svg>
                            </a>
                        </li>

                        <li class="hamburger__list-item ">
                            <a href="/organization" class="hover-target full md:w-3/5"><span>協會組織架構</span>
                                <svg width="24" height="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                        fill="#3B54F3" />
                                </svg>
                            </a>
                        </li>

                        <li class="hamburger__list-item ">
                            <a href="/Surf-Rescue" class="hover-target full md:w-3/5"><span>救生員資格檢定</span>
                                <svg width="24" height="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                        fill="#3B54F3" />
                                </svg>
                            </a>
                        </li>

                        <li class="hamburger__list-item ">
                            <a href="/classes" class="hover-target full md:w-3/5"><span>課程</span>
                                <svg width="24" height="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                        fill="#3B54F3" />
                                </svg>
                            </a>
                        </li>

                        <li class="hamburger__list-item ">
                            <a href="/album" class="hover-target full md:w-3/5"><span>活動照片</span>
                                <svg width="24" height="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                        fill="#3B54F3" />
                                </svg>
                            </a>
                        </li>
                        @auth
                            <li class="hamburger__list-item "><a href="/personal-center"
                                    class="hover-target full md:w-3/5"><span>個人中心</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                            fill="#3B54F3" />
                                    </svg>
                                </a></li>
                            {{-- 以下漢堡條登出 --}}
                            <li class="hamburger__list-item">
                                <form action="logout" method="POST" class="hover-target full md:w-3/5">
                                    @csrf
                                    <button class="hover-target full md:w-3/5" type="submit">
                                        <span class="hover-target" style="">登出</span>
                                        <svg style="float:right" width="24" height="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                                fill="#3B54F3" />
                                        </svg>
                                    </button>
                                </form>
                            </li>
                            {{-- 以上為漢堡條登出欄位 --}}
                        @endauth
                        @guest
                            <li class="hamburger__list-item "><a data-modal-toggle="authentication-modal"
                                    class="hover-target full md:w-3/5"><span>登入</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                            fill="#3B54F3" />
                                    </svg>
                                </a></li>
                        @endguest
                    </ul>
                </div>
            </div>
            <div class='cursor hidden' id="cursor" style="display:none"></div>
            <div class='cursor2' id="cursor2"></div>
            <div class='cursor3' id="cursor3"></div>
            {{-- </div> --}}
            <!-- 手機版的menu 結束-->
            <div class="left flex justify-end ml-auto lg:block hidden" style="padding-left: 63px;">
                <ul class="flex items-center" style="opacity:">
                    <li class="mr-6"><a href="./news">最新消息</a></li>
                    <li class="mr-6">
                        <button class="flex" id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar">
                            關於我們
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0007 13.172L16.9507 8.22198L18.3647 9.63598L12.0007 16L5.63672 9.63598L7.05072 8.22198L12.0007 13.172Z"
                                    fill="#141414" />
                            </svg>
                        </button>
                    </li class="mr-6">
                    <li class="mr-6"><a href="/classes">課程</a></li>
                    <li class="mr-6"><a href="/album">活動照片</a></li>
                    @auth
                        @if (Auth::user()->power == 1)
                            <li class="mr-6"><a href="/dashboard">後台</a></li>
                        @endif
                        <li class="mr-6">
                            <div data-dropdown-toggle="dropdownleft" class="relative"
                                style="width:36px;height:36px;border-radius:50%;background-color: gainsboro">
                                <span class="absolute"
                                    style="top:50%;left:50%;transform:translate(-50%,-50%);font-size:16px;font-weight:500;color:#4E4E4E">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            </div>
                        </li>
                        {{-- <li class="mr-6">
                            <div class="p-0 nameblack" style='margin-right:5px; '>您好，{{ Auth::user()->name }}</div>
                        </li> --}}

                    @endauth
                    @guest
                        <li data-modal-toggle="authentication-modal">登入</li>
                    @endguest
                </ul>
            </div>


            <div id="dropdownleft" class="hidden z-10 dropdownleft">
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

            <div id="dropdownNavbar" class="hidden z-10 dropdownNavbar" style="color:black">
                <ul class="bg-white text-base">
                    <li>
                        <a href="/about" class="block px-4 py-2 hover:bg-gray-100">關於我們</a>
                    </li>
                    <li>
                        <a href="/Past-presidents" class="block px-4 py-2 hover:bg-gray-100">歷屆會長</a>
                    </li>
                    <li>
                        <a href="/organization" class="block px-4 py-2 hover:bg-gray-100">協會組織架構</a>
                    </li>
                    <li>
                        <a href="/Surf-Rescue" class="block px-4 py-2 hover:bg-gray-100">救生員資格檢定</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="authentication-modal" tabindex="-1" aria-hidden="true" style="z-index: 100;"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full authentication">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <div class="relative bg-white rounded-lg shadow " style="border-radius:16px;">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent"
                        data-modal-toggle="authentication-modal">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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

                    <div class="py-6 px-6 lg:px-8"
                        style="font-weight: 500; box-shadow: 0 0 0 999px rgba(55, 65, 81, 0.5);
                        z-index: 1000;border-radius:16px;">
                        <h3 class="mb-4 text-xl  text-gray-900 " style="font-family:unset;">登入</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm  text-gray-900 "
                                    style="font-weight:500">電子信箱</label>
                                <input type="email" name="email" id="email"
                                    class="text-gray-900 text-sm block w-full p-2.5" placeholder="name@company.com">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm  text-gray-900 "
                                    style="font-weight:500">密碼</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="text-gray-900 text-sm block w-full p-2.5">
                            </div>
                            <div class="flex justify-between my-3">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4"
                                            name="remember">
                                    </div>
                                    <label for="remember" class="ml-2 text-sm  text-gray-900"
                                        style="font-weight:500">{{ __('記住我') }}</label>
                                </div>
                                <a href="{{ route('password.request') }}"
                                    class="text-sm text-blue-700 hover:underline ">忘記密碼</a>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                                 rounded-lg text-sm px-5 py-2.5 text-center ">
                                登入
                            </button>
                            <div class="text-sm  text-gray-500 ">
                                Not registered? <a href="createAccount" class="text-blue-700 hover:underline ">Create
                                    account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main modal -->

        {{-- 大頭貼的下拉式選單 --}}

        {{-- 關於我們的下拉式選單 --}}

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
                    <div class="blue1"
                        style="width: 25px;
              height: 4px;
              background-color: #3B54F3;"></div>
                    <div class="blue2"
                        style="width: 25px;
              height: 4px;
              background-color: #6EEDF0;
              border-radius: 0 25px 25px 0;">
                    </div>
                </div>
                關於我們
            </div>
            <!-- 大標 About -->
            <div id="about" class="z-1">
                <span class="test" id="aboutspan">About</span>
            </div>

            <div class="waveAnimations">
                {{-- <div class="asd">
                    <div id="imgsection">
                        <img id="banner_img" src="{{ asset('img/img_aboutUsBg1.png') }}" alt="">
                    </div>
                </div> --}}

                <!---------------- wave ---------------->
                <section>
                    <svg viewBox="0 0 120 28">
                        <defs>
                            <mask id="xxx">
                                <circle cx="7" cy="12" r="40" fill="#fff" />
                            </mask>

                            <filter id="goo">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
                                <feColorMatrix in="blur" mode="matrix"
                                    values="
                               1 0 0 0 0
                               0 1 0 0 0
                               0 0 1 0 0
                               0 0 0 13 -9"
                                    result="goo" />
                                <feBlend in="SourceGraphic" in2="goo" />
                            </filter>
                            <path id="wave"
                                d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
                        </defs>

                        <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-10"></use>
                        <use id="wave2" class="wave" xlink:href="#wave" x="0" y="-5"></use>


                    </svg>

                </section>

            </div>

        </div>
    </nav>
    {{-- <main style="" >
        <div id="page">
            <!-- 大標 關於我們 -->
            <div id="title" class="content-title flex flex-wrap" style="color:black;">
                <div class="color-line flex" style="margin:0 auto;">
                    <div class="blue1"
                        style="width: 25px;
              height: 4px;
              background-color: #3B54F3;"></div>
                    <div class="blue2"
                        style="width: 25px;
              height: 4px;
              background-color: #6EEDF0;
              border-radius: 0 25px 25px 0;">
                    </div>
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
    </main> --}}

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
                            <div>
                                <img src="/img/Intro.jpg" alt=""
                                    style="width: 100%;border-radius: 8px;height:auto;">
                            </div>

                        </div>
                    </div>
                    <div data-w-id="1b11356a-0a20-9bf6-b946-d66fb4f3a536" class="timeline_item">
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a537-fd5f313d" class="timeline_left">
                            <div class="timeline_date-text outline-text no-margin">1991</div>
                        </div>
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a53a-fd5f313d" class="timeline_centre">
                            <div class="timeline_circle"></div>
                        </div>
                        <div class="timeline_right">
                            <div class="margin-bottom-medium">
                                <p class="paragraph serif white"
                                    style="font-size: 24px;font-weight: 400;opacity: 0.75;text-align: justify;
                                    text-justify:inter-ideograph;">
                                    由台中鵬隆潛水中心總教練詹寓崵率領PADI教練團隊進行潛水授課,從初級、進階、救援、潛水長、助理教練…等在台灣各離島及台中開課,展開潛水、水中環保相關業務。
                                </p>
                            </div>
                            <div class="flex w-full justify-center">
                                <img src="/img/padi.jpg" alt="" style="margin-right: 10px;">
                                <img src="/img/cmas.jpg" alt="" style="width: 210px;">
                            </div>
                        </div>
                    </div>
                    <div data-w-id="1b11356a-0a20-9bf6-b946-d66fb4f3a549" class="timeline_item">
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a54a-fd5f313d" class="timeline_left">
                            <div class="timeline_date-text outline-text no-margin">2009</div>
                        </div>
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a54d-fd5f313d" class="timeline_centre">
                            <div class="timeline_circle"></div>
                        </div>
                        <div class="timeline_right">
                            <div class="margin-bottom-medium">
                                <p class="paragraph serif white"
                                    style="font-size: 24px;font-weight: 400; opacity: 0.75;">
                                    2009年成立台中市水中運動協會成為PADI與CMAS雙系統訓練單位，本會在日月潭月牙灣開始推廣風浪板體驗活動,於頭社風帆的家駐點扎根。</p>
                            </div>
                            <div class="flex justify-center w-full">
                                <img src="/img/S__17866957.jpg" alt=""
                                    style="width: 50%;border-radius: 8px;height: auto;">
                            </div>
                        </div>
                    </div>
                    <div data-w-id="1b11356a-0a20-9bf6-b946-d66fb4f3a549" class="timeline_item">
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a54a-fd5f313d" class="timeline_left">
                            <div class="timeline_date-text outline-text no-margin">2010</div>
                        </div>
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a54d-fd5f313d" class="timeline_centre">
                            <div class="timeline_circle"></div>
                        </div>
                        <div class="timeline_right">
                            <div class="margin-bottom-medium">
                                <p class="paragraph serif white"
                                    style="font-size: 24px;font-weight: 400; opacity: 0.75;">
                                    2010年開辦丙級風浪板教練班講習,這期間在彰濱水域及月牙灣不間段的推廣風浪板。
                                </div>
                            <div class="flex justify-center w-full">
                                <img src="/img/S__17866974.jpg" alt=""
                                    style="width: 100%;border-radius: 8px;height: auto;">
                            </div>
                        </div>
                    </div>
                    <div data-w-id="1b11356a-0a20-9bf6-b946-d66fb4f3a549" class="timeline_item">
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a54a-fd5f313d" class="timeline_left">
                            <div class="timeline_date-text outline-text no-margin">2013</div>
                        </div>
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a54d-fd5f313d" class="timeline_centre">
                            <div class="timeline_circle"></div>
                        </div>
                        <div class="timeline_right">
                            <div class="margin-bottom-medium">
                                <p class="paragraph serif white"
                                    style="font-size: 24px;font-weight: 400; opacity: 0.75;">
                                    立式划槳浪板SUP興起,因為上板容易,老少咸宜,本會於日月潭開辦丙級SUP教練班的第一個單位,帶動日月潭觀光振興經濟,受到當地業者的高度歡迎、支持,並於每個月定期舉辦SUP教練班講習。</p>
                            </div>
                            <div>
                                <img src="/img/S__17866970.jpg" alt=""
                                    style="width: 100%;border-radius: 8px;height: auto;">
                            </div>
                        </div>
                    </div>
                    <div data-w-id="1b11356a-0a20-9bf6-b946-d66fb4f3a549" class="timeline_item">
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a54a-fd5f313d" class="timeline_left">
                            <div class="timeline_date-text outline-text no-margin">2021</div>
                        </div>
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a54d-fd5f313d" class="timeline_centre">
                            <div class="timeline_circle"></div>
                        </div>
                        <div class="timeline_right">
                            <div class="margin-bottom-medium">
                                <p class="paragraph serif white"
                                    style="font-size: 24px;font-weight: 400; opacity: 0.75;">
                                    2021年雲林三條崙海水浴場成立風箏衝浪國際學校,本會於2022隨後再雲林三條崙海水浴場辦理Level-1和Level-2及丙級風浪板教練班。
                                </div>
                            <div>
                                <img src="/img/S__17866978.jpg" alt=""
                                    style="width: 100%;border-radius: 8px;height: 500px;">
                            </div>
                        </div>
                    </div>
                    <div data-w-id="1b11356a-0a20-9bf6-b946-d66fb4f3a549" class="timeline_item">
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a54a-fd5f313d" class="timeline_left">
                            <div class="timeline_date-text outline-text no-margin">2022</div>
                        </div>
                        <div id="w-node-_1b11356a-0a20-9bf6-b946-d66fb4f3a54d-fd5f313d" class="timeline_centre">
                            <div class="timeline_circle"></div>
                        </div>
                        <div class="timeline_right">
                            <div class="margin-bottom-medium">
                                <p class="paragraph serif white"
                                    style="font-size: 24px;font-weight: 400; opacity: 0.75;">
                                    本會申請台灣SUP教學系統第一品牌SUPTUF榮登中華民國經濟部智慧財產局註冊訓練商標。
                                </p>
                                <p class="paragraph serif white"
                                    style="font-size: 24px;font-weight: 400; opacity: 0.75;">
                                    SUPTUF中華民國立式划槳浪板訓練協會教學系統。</p>
                                <p class="paragraph serif white"
                                    style="font-size: 24px;font-weight: 400; opacity: 0.75;">
                                    中華民國政府認證、交通部觀光局、教育部門、各大專院校、風管處…等認可。</p>
                                <p class="paragraph serif white"
                                    style="font-size: 24px;font-weight: 400; opacity: 0.75;">
                                    感謝:教育部體育署、中華民國體育運動總會、中華民國水中運動總會，等單位指導協助。持續以潛水、SUP、風浪板、救生、游泳...等推廣造福民眾加強水域安全知識概念減少溺水事件為宗旨。</p>
                            </div>
                            <div>
                                <img src="/img/S__9109506_0.jpg" alt=""
                                    style="width: 100%;border-radius: 8px; height:auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    {{-- @endsection --}}

    <footer>
        <div class="container max-w-full h-auto">
            <div class="footer w-full">
                {{-- flex-wrap --}}
                <div class="footer_top flex-col md:flex md:flex-row md:justify-between">
                    <div class="left flex flex-col ">
                        <img src="{{ asset('img/logo/CHINESE TAIPEI UNDERWATER FEDERATION-white logo.png') }}"
                            alt="台中市水中運動協會">
                        <span>台中市北區天祥街10號</span>
                        <span>04-22312698</span>
                    </div>
                    <div class="right text-white sm:flex">
                        <ul class="page flex flex-col justify-between">
                            <li class="flex justify-between"><a href="/">首頁</a>
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                </svg>
                            </li>
                            <li class="flex justify-between"> <a href="/about">關於我們</a>
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                </svg>
                            </li>
                            <li class="flex justify-between"> <a href="/Past-presidents">歷屆會長</a>
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                </svg>
                            </li>
                            <li class="flex justify-between"> <a href="/organization">協會組織架構</a>
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                </svg>
                            </li>
                            <li class="flex justify-between"> <a href="/Surf-Rescue">救生員資格檢定</a>
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                </svg>
                            </li>
                            <li class="flex justify-between"> <a href="/classes">課程</a>
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                </svg>
                            </li>
                            <li class="flex justify-between"><a href="/album">活動照片</a>
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                </svg>
                            </li>
                        </ul>
                        <ul class="link">
                            <li> <a href="https://www.facebook.com/%E5%8F%B0%E4%B8%AD%E5%B8%82%E6%B0%B4%E4%B8%AD%E9%81%8B%E5%8B%95%E5%8D%94%E6%9C%83%E6%BD%9B%E6%B0%B4%E5%A7%94%E5%93%A1%E6%9C%83-203136269701568"
                                    target="_blank">Facebook</a> </li>
                            <li> <a href="https://www.instagram.com/suptuf/" target="_blank">instagram</a></li>
                        </ul>
                    </div>
                </div>

                <div class="copyright text-white opacity-50 w-full flex sm:justify-start md:justify-end">
                    <span>© COPYRIGHT 2022 台中水中運動協會 All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </footer>
    {{-- <footer class="w-full" data-scroll-section id="footer">
        <div class="container max-w-full ">
            <div class="footer flex justify-center">
                <div class="footer_container">
                    <div class="footer_logo_menu flex-col sm:flex sm:flex-row sm:justify-between">
                        <div class="left flex flex-col ">
                            <img src="{{ asset('img/logo/CHINESE TAIPEI UNDERWATER FEDERATION-white logo.png') }}"
                                alt="台中市水中運動協會">
                            <span>台中市北區天祥街10號</span>
                            <span>04-22312698</span>
                        </div>
                        <div class="right text-white sm:flex ">
                            <ul class="page flex flex-col justify-between">
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
                    </div>
                    <div class="copyright text-white opacity-50 w-full flex sm:justify-start md:justify-end">
                        <span>© COPYRIGHT 2022 台中水中運動協會 All Rights Reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}

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
            } else if (document.documentElement.scrollTop > 350) {
                document.getElementById("aboutspan").className = "test0";
            }
        }
    </script>

    <script src="{{ asset('js/hamburgerMenu.js') }}"></script>

    {{-- @endsection --}}


</body>

</html>
