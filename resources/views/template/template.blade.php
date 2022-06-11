<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @yield('css')
    <style>
        .nameblack:hover {
            color: black;
            opacity: .6;
            cursor: auto;
        }
    </style>
</head>

<body>
    <div class="container flex justify-center max-w-full flex-wrap " data-scroll-container>
        <nav class="nav flex md:items-center justify-between " data-scroll-section>
            <div class="left ">
                <a href="index">
                    <div class="logo flex">
                        <img src="./img/logo/only_logo.svg" alt="">
                        <div class="name flex flex-col  lg:block">
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
            <div class="burger mr-4 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z" />
                </svg>
            </div>
            <div class="left flex justify-end ml-auto lg:block">
                <ul class="flex items-center">
                    <li><a href="./news.html">最新消息</a></li>
                    <li>
                        <button class="flex" id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar">
                            關於我們
                            <img src="./img/icon/ic_arrow-down.svg" alt="">
                        </button>
                    </li>
                    <li><a href="/classes">課程</a></li>
                    <li><a href="#">活動照片</a></li>
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
        </nav>
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full authentication">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">密碼</label>
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
                                Not registered? <a href="/register"
                                    class="text-blue-700 hover:underline ">Create account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="dropdownleft" class="hidden z-10 dropdownleft">
            <ul class="bg-white rounded-lg">
                <li class="block px-4 py-2 hover:bg-gray-100 rounded-lg">
                    <a href="">個人中心</a>
                </li>
                <li class="block px-4 py-2 hover:bg-gray-100 rounded-lg">
                    <form action="logout" method="POST" class="d-flex m-0" id="logout">
                        @csrf
                        <button type="submit" style="color: red;width:100%;left:0;">登出</button>
                    </form>
                </li>
            </ul>
        </div>



        <div id="dropdownNavbar" class="hidden z-10 dropdownNavbar">
            <ul class="bg-white">
                <li>
                    <a href="./about.html"
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
        @yield('main')
        <footer class="w-full" data-scroll-section id="footer">
            <div class="container max-w-full ">
                <div class="footer flex justify-center">
                    <div class="footer_container">
                        <div class="footer_logo_menu flex-col sm:flex sm:flex-row sm:justify-between">
                            <div class="left flex flex-col ">
                                <img src="./img/logo/CHINESE TAIPEI UNDERWATER FEDERATION-white logo.png"
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
        </footer>
    </div>
    @yield('js')

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>
