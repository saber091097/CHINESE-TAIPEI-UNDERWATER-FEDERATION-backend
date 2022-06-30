<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/nav&footer.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">


    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        .nameblack:hover {
            color: black;
            /* opacity: .6; */
            cursor: auto;
        }

    </style>
    @yield('css')
</head>

<body>
    <div class="container flex justify-center max-w-full flex-wrap" data-scroll-container>
        <nav class="nav flex md:items-center justify-between" data-scroll-section>
            <div class="left ">
                <a href="/">
                    <div class="logo flex">
                        <img src="{{ asset('img/logo/only_logo.svg') }}" alt="">
                        {{-- hidden sm:block --}}
                        <div class="name flex flex-col ">
                            <div class="zh-name">
                                <span>台中市水中運動協會</span>
                            </div>
                            <div class="en-name">
                                <span>CHINESE TAIPEI UNDERWATER FEDERATION</span>
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
                <!-- hamburger menu 展開 -->
                <div class="hamburger">
                    <div class="hamburger__content">
                        <ul class="hamburger__list">
                            <li class="hamburger__list-item nav-active "><a href="/news"
                                    class="hover-target full md:w-3/5"><span>最新消息</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                            fill="#3B54F3" />
                                    </svg>
                                </a></li>

                            <li class="hamburger__list-item ">
                                {{-- <div class="menu about"> --}}
                                <a href="/about" class="hover-target full md:w-3/5"><span>關於我們</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                            fill="#3B54F3" />
                                    </svg></a>
                                {{-- </div> --}}
                                {{-- <div class="submenu aboutSub">
                                    <div class="sub_wrap">
                                      <div class="subtitle">
                                        <span title="prev">關於我們</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" fill="#3B54F3"/></svg>
                                      </div>

                                      <ul>
                                        <li><a href="#">關於我們</a></li>
                                        <li><a href="#">歷屆會長</a></li>
                                        <li><a href="#">協會組織架構</a></li>
                                        <li><a href="#">救生員資格檢定</a></li>
                                      </ul>
                                    </div>
                                </div> --}}
                            </li>

                            <li class="hamburger__list-item "><a href="/Past-presidents"
                                    class="hover-target full md:w-3/5"><span>歷屆會長</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                            fill="#3B54F3" />
                                    </svg>
                                </a></li>

                            <li class="hamburger__list-item "><a href="/organization"
                                    class="hover-target full md:w-3/5"><span>協會組織架構</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                            fill="#3B54F3" />
                                    </svg>
                                </a></li>

                            <li class="hamburger__list-item "><a href="/Surf-Rescue"
                                    class="hover-target full md:w-3/5"><span>救生員資格檢定</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                            fill="#3B54F3" />
                                    </svg>
                                </a></li>

                            <li class="hamburger__list-item "><a href="/classes"
                                    class="hover-target full md:w-3/5"><span>課程</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                            fill="#3B54F3" />
                                    </svg>
                                </a></li>

                            <li class="hamburger__list-item "><a href="/album"
                                    class="hover-target full md:w-3/5"><span>活動照片</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                            fill="#3B54F3" />
                                    </svg>
                                </a></li>
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
                                {{-- <li class="hamburger__list-item "><a href="logout"
                                        class="logout_post hover-target full md:w-3/5"><span>登出</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"
                                                fill="#3B54F3" />
                                        </svg>
                                    </a></li> --}}
                                {{-- 以下漢堡條登出 --}}
                                <li class="hamburger__list-item">
                                    <form action="logout" method="POST" class="hover-target full md:w-3/5">
                                        @csrf
                                        <button class="hover-target full md:w-3/5" type="submit">
                                            <span class="hover-target"
                                                style="">登出</span>
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
                <div class='cursor' id="cursor"></div>
                <div class='cursor2' id="cursor2"></div>
                <div class='cursor3' id="cursor3"></div>
            </div>
            <!-- 手機版的menu 結束-->

            <!-- 桌機版的menu -->
            <div class="left flex justify-end ml-auto hidden lg:block">
                <ul class="flex items-center">
                    <li class="mr-6 hoverText"><a href="/news">最新消息</a></li>
                    <li class="mr-6 hoverText">
                        <button class="flex" id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar">
                            關於我們
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0007 13.172L16.9507 8.22198L18.3647 9.63598L12.0007 16L5.63672 9.63598L7.05072 8.22198L12.0007 13.172Z"
                                    fill="#141414" />
                            </svg>
                        </button>
                    </li>
                    <li class="mr-6 hoverText"><a href="/classes">課程</a></li>
                    <li class="mr-6 hoverText"><a href="/album">活動照片</a></li>
                    @auth
                        @if (Auth::user()->power == 1)
                            <li class="mr-6 hoverText"><a href="/dashboard">後台</a></li>
                        @endif
                        <li class="mr-6 hoverText">
                            <div data-dropdown-toggle="dropdownleft" class="relative"
                                style="width:36px;height:36px;border-radius:50%;background-color: gainsboro;cursor: pointer;">
                                <span class="absolute"
                                    style="top:50%;left:50%;transform:translate(-50%,-50%);font-size:16px;font-weight:500;">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            </div>
                        </li>
                    @endauth
                    @guest
                        <li class="login mr-6 hoverText" data-modal-toggle="authentication-modal">登入</li>
                    @endguest
                </ul>
            </div>
        </nav>
        <div id="authentication-modal" tabindex="-1" aria-hidden="true" style="z-index: 60;"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-28 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full authentication">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <div class="relative bg-white rounded-lg shadow ">
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

                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 ">登入</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">電子信箱</label>
                                <input type="email" name="email" id="email"
                                    class="text-gray-900 text-sm block w-full p-2.5" placeholder="name@company.com">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">密碼</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="text-gray-900 text-sm block w-full p-2.5">
                            </div>
                            <div class="flex justify-between my-3">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4"
                                            name="remember">
                                    </div>
                                    <label for="remember"
                                        class="ml-2 text-sm font-medium text-gray-900">{{ __('記住我') }}</label>
                                </div>
                                <a href="{{ route('password.request') }}"
                                    class="text-sm text-blue-700 hover:underline ">忘記密碼</a>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                                font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                登入
                            </button>
                            <div class="text-sm font-medium text-gray-500 ">
                                Not registered? <a href="createAccount" class="text-blue-700 hover:underline ">Create
                                    account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="dropdownleft" class="hidden dropdownleft" style="z-index: 100; ">
            <ul class="bg-white rounded-lg">
                <li class="block px-4 py-2 hover:bg-gray-100 rounded-lg">
                    <a href="/personal-center">個人中心</a>
                </li>
                <li class="block px-4 py-2 hover:bg-gray-100 rounded-lg">
                    <form action="logout" method="POST" class="d-flex m-0" id="logout">
                        @csrf
                        <button type="submit" style="color: red;width:100%;left:0;">登出</button>
                    </form>
                </li>
            </ul>
        </div>

        <div id="dropdownNavbar" class="hidden dropdownNavbar" style="z-index: 100;">
            <ul class="bg-white">
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
        @yield('main')
        <footer class="w-full" data-scroll-section id="footer">
            <div class="container max-w-full ">
                <div class="footer flex justify-center">
                    <div class="footer_container">
                        <div class="footer_logo_menu flex-col md:flex md:flex-row md:justify-between">
                            <div class="left flex flex-col ">
                                <img src="{{ asset('img/logo/CHINESE TAIPEI UNDERWATER FEDERATION-white logo.png') }}"
                                    alt="台中市水中運動協會">
                                <span>台中市北區天祥街10號</span>
                                <span>04-22312698</span>
                            </div>
                            <div class="right text-white sm:flex ">
                                <ul class="page flex flex-col justify-between">
                                    <li class="flex justify-between"><a href="/">首頁</a>
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                        </svg></a>
                                    </li>
                                    <li class="flex justify-between"> <a href="/about">關於我們</a>
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                        </svg></a>
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
                                    <li> <a href="https://www.instagram.com/suptuf/" target="_blank">instagram</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="copyright text-white opacity-50 w-full flex sm:justify-start md:justify-end">
                            <span>© COPYRIGHT 2022 台中水中運動協會 All Rights Reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/hamburgerMenu.js') }}"></script>
    @yield('js')
</body>

</html>
