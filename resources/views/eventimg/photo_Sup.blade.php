{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/photo_div.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet"> --}}
    @extends('template.template')
    @section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <!-- flowbite CDN 彈出式視窗 -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{asset('css/photo_div.css')}}">
    <title>立式划槳活動照片</title>
    <style>
        .swiper_img {
            border-radius: 24px;
            max-width: 100%;
            /* max-height: 100%; */
            height: auto;
            /* position: absolute;
            top: 50%;
            transform: translateY(-50%); */
        }
    </style>
    @endsection

{{-- </head>
<body>
    <div class="container flex justify-center max-w-full">
        <div class="nav flex items-center justify-between">
            <div class="right ">
                <div class="logo flex">
                    <img class="rounded-full" src="./img/getPhoto.jpg" alt="">
                    <div class="name flex flex-col hidden lg:block">
                        <div class="zh-name">
                            <span>台中市水中運動協會</span>
                        </div>
                        <div class="en-name">
                            <span>CHINESE TAIPEI UNDERWATER FEDERATION</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="burger mr-4 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z" />
                </svg>
            </div>
            <div class="left flex justify-end ml-auto lg:block hidden">
                <ul class="flex items-center">
                    <li>最新消息</li>
                    <li class="flex">關於我們
                        <img src="./img/icon/ic_arrow-down.svg" alt="">
                    </li>
                    <li>課程</li>
                    <li>活動照片</li>
                    <li><img src="./img/icon/ic_user.svg" alt="" class="block text-white" type="button"
                            data-modal-toggle="authentication-modal" style="cursor: pointer;"></li>
                </ul>
            </div>
        </div>
        <!-- 以下登入視窗 -->
        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
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
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">登入</h3>
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
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">記住我</label>
                                </div>
                                <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">忘記密碼</a>
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
        <!-- 以上登入視窗 -->
    </div> --}}

@section('main')
    <div class="flex flex-col" id="page">
        <div class="bread_list flex flex-row">
            <span style="color:#3B54F3">首頁</span>
            <div class="arrow_r"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z"
                        fill="#141414" />
                </svg>
            </div>
            <span style="color:#3B54F3">活動照片</span>
            <div class="arrow_r"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z"
                        fill="#141414" />
                </svg>
            </div>
            <span style="opacity: 0.5;">立式划槳</span>
        </div>

        <div class="title_section flex flex-col">
            <span id="en_title">SUP</span>
            <span id="tw_title">立式划槳</span>
        </div>
        <div class="photo_section flex flex-row  flex-wrap">
            {{-- 套資料庫 --}}
            <div data-modal-toggle="popup-modal"></div>
            <div data-modal-toggle="popup-modal"></div>
            <div data-modal-toggle="popup-modal"></div>
            <div data-modal-toggle="popup-modal"></div>
            <div data-modal-toggle="popup-modal"></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>


        <div id="popup-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-8xl h-auto">
                <!-- Modal content -->
                <div id="modal" class="dark:bg-gray-700">
                    <!-- Modal header -->
                    <!-- <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="popup-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div> -->
                    <!-- Modal body -->
                    <!-- <div class="relative p-6 space-y-3 h-auto"> -->
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="popup-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="slide_img" src="./img/S__14082097.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="slide_img" src="./img/S__14082099.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="slide_img" src="./img/S__14082100.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="slide_img" src="./img/S__9109506_0.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="slide_img" src="./img/popular courses-01.jpg" alt="">
                                </div>


                            </div>

                            <div id="next" class="swiper-button-next absolute">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z"
                                        fill="#141414" />
                                </svg>
                            </div>
                            <div id="prev" class="swiper-button-prev absolute">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.828 12L15.778 16.95L14.364 18.364L8 12L14.364 5.63599L15.778 7.04999L10.828 12Z"
                                        fill="#141414" />
                                </svg>
                            </div>
                        </div>

                    <!-- </div> -->

                    <!-- Modal footer -->
                    <!-- <div
                        class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">

                    </div> -->
                </div>
            </div>
        </div>



    </div>

@endsection
    {{-- <footer>
        <div class="container max-w-full">
            <div class="footer flex flex-wrap justify-between">
                <div class="left flex flex-col ">
                    <img src="./img/logo/CHINESE TAIPEI UNDERWATER FEDERATION-white logo.png" alt="">
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
    </footer> --}}

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            // slidesPerView: "auto",
            // spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

@endsection
{{-- </body>
</html> --}}
