@extends('template.template')
<link rel="stylesheet" href="{{asset('css/createAccount.css')}}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<link rel="stylesheet" href="./css/locomotive-scroll.css" />
<title>註冊帳號</title>
@endsection

@section('main')
<div class="container flex justify-center max-w-full flex-wrap " data-scroll-container>
    <div class="nav flex md:items-center justify-between " data-scroll-section>
        <div class="left ">
            <a href="./index.html">
                <div class="logo flex">
                    <img src="./img/logo/only_logo.svg" alt="">
                    <div class="name flex flex-col hidden lg:block">
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
        <div class="left flex justify-end ml-auto lg:block hidden">
            <ul class="flex items-center">
                <li><a href="./news.html">最新消息</a></li>
                <li>
                    <button class="flex" id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar">
                        關於我們
                        <img src="./img/icon/ic_arrow-down.svg" alt="">
                    </button>
                </li>
                <li><a href="./classes.html">課程</a></li>
                <li><a href="#">活動照片</a></li>
                <li><a href="#footer">聯繫我們</a></li>
                <li data-modal-toggle="authentication-modal">登入</li>
            </ul>
        </div>
    </div>
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full authentication">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent"
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
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">登入</h3>
                    <form class="space-y-6" action="#">
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">電子信箱</label>
                            <input type="email" name="email" id="email"
                                class="text-gray-900 text-sm block w-full p-2.5"
                                placeholder="name@company.com" >
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">密碼</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="text-gray-900 text-sm block w-full p-2.5">
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value=""
                                        class="w-4 h-4">
                                </div>
                                <label for="remember"
                                    class="ml-2 text-sm font-medium text-gray-900">記住我</label>
                            </div>
                            <a href="#" class="text-sm text-blue-700 hover:underline ">忘記密碼</a>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">登入</button>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                            Not registered? <a href="#"
                                class="text-blue-700 hover:underline dark:text-blue-500" data-modal-toggle="create-modal">Create account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="create-modal" tabindex="-1" aria-hidden="true" class="createAccount hidden fixed">
        <div class="w-full h-full content flex flex-col">
            <div class="w-full contentTop flex justify-end">
                <button id="btn-close1" onclick="close()" data-modal-toggle="create-modal" class="rounded-full">
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
            </div>
            <div class="contentBtm flex flex-col w-full">
                <div class="contentBtmInnerbox flex flex-col w-full">
                    <h1 class="h1">建立帳戶</h1>
                    <div class="ps">
                        <span class="ts">已經有帳號了嗎？</span>
                        <a href="" class="tsb">登入</a>
                    </div>
                    <form name="formCreate" class=" w-full" action="" method="">
                        <div class="innerbox-nickName flex flex-col w-full">
                            <label class="" for="nickName"><span class="ts ts75">暱稱</span><span class="ts star">*</span></label>
                            <input class="input-text w-full focus:outline-none" id="nickName" type="text" name="nickName" value="" placeholder="輸入暱稱">
                        </div>

                        <div class="innerbox-mail flex flex-col w-full">
                            <label class="" for="mail"><span class="ts ts75">電子郵件地址</span><span class="ts star">*</span></label>
                            <input class="input-text w-full focus:outline-none" id="mail" type="text" name="mail" value="" placeholder="輸入電子郵件地址">
                        </div>

                        <div class="innerbox-password flex flex-col w-full">
                            <label class="" for="password"><span class="ts ts75">密碼</span><span class="ts star">*</span></label>
                            <input class="input-text w-full focus:outline-none" id="password" type="text" name="password" value="" placeholder="輸入 8 個字元，包含大小寫英文或數字">
                        </div>

                        <div class="innerbox-pwCheck flex flex-col w-full">
                            <label class="" for="pwCheck"><span class="ts ts75">確認密碼</span><span class="ts star">*</span></label>
                            <input class="input-text w-full focus:outline-none" id="pwCheck" type="text" name="pwCheck" value="" placeholder="再次輸入密碼">
                        </div>
                    </form>
                    <span class="right ts">點選「建立帳戶」，即表示您同意接受 隱私權保護政策</span>
                </div>
                <div class="btnCreate flex justify-end">
                    <button class="btn-next rounded flex justify-center items-center" onclick="create()" type="button">建立帳戶</button>
                </div>
            </div>
        </div>
    </div>
    <div id="dropdownNavbar" class="hidden z-10 dropdownNavbar">
        <ul class="bg-white">
            <li>
                <a href="./about.html"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">關於我們</a>
            </li>
            <li>
                <a href="./past-presidents.html"
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
</div>
@endsection
@section('js')
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>

<script src="{{asset('ja/createAccount.ja')}}"></script>

@endsection

