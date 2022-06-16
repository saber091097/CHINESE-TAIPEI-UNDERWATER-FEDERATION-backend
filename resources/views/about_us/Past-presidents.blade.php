@extends('template.template')

    @section('css')
    <link rel="stylesheet" href="{{asset('css/Pastpresidents.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav&footer.css')}}">
    <title>歷屆理事長</title>
    @endsection

        @section('main')
        {{-- <div class="past-presidents w-full flex-warp flex-col flex mt-20">
            <div class="breadcrumb">
                <ul class="flex items-center justify-start">
                    <li><a href="/">首頁</a></li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                        </svg>
                    </li>
                    <li><a href="about-us">關於我們</a></li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                        </svg>
                    </li>
                    <li class="inpage">歷屆理事長</li>
                </ul>
            </div>
            <div class="content max-w-full">
                <div class="content-title flex flex-wrap">
                    <div class="color-line flex">
                        <div class="blue1"></div>
                        <div class="blue2"></div>
                    </div>
                    歷屆理事長
                </div>
                <table class="w-full ">
                    <thead >
                        <tr class="flex">
                            <td class="flex items-center">年份</td>
                            <td class="flex items-center">姓名</td>
                            <td class="flex items-center">職稱</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="flex">
                            <td class="flex items-center year">2009年</td>
                            <td class="flex items-center">長莊浩志</td>
                            <td class="flex items-center">榮譽理事</td>
                        </tr>
                        <tr class="flex">
                            <td class="flex items-center year">2009年</td>
                            <td class="flex items-center">曾文樂</td>
                            <td class="flex items-center">創會理事長</td>
                        </tr>
                        <tr class="flex">
                            <td class="flex items-center year">2013年</td>
                            <td class="flex items-center">李清圳</td>
                            <td class="flex items-center">會長</td>
                        </tr>
                        <tr class="flex">
                            <td class="flex items-center year">2017年</td>
                            <td class="flex items-center">文崧仰</td>
                            <td class="flex items-center">理事長</td>
                        </tr>
                        <tr class="flex">
                            <td class="flex items-center year">2021年</td>
                            <td class="flex items-center">詹寓崵</td>
                            <td class="flex items-center">理事長</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div> --}}
        <div class="container flex justify-center max-w-full flex-wrap">
            {{-- <div class="nav flex items-center justify-between">
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
                        <li>聯繫我們</li>
                        <li><img src="./img/icon/ic_user.svg" alt=""></li>
                    </ul>
                </div>
            </div> --}}
            <div class="past-presidents w-full flex-warp flex-col flex mt-20">
                <div class="breadcrumb">
                    <ul class="flex items-center justify-start flex-wrap">
                        <li><a href="/">首頁</a></li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                            </svg>
                        </li>
                        <li><a href="about">關於我們</a></li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                            </svg>
                        </li>
                        <li class="inpage">歷屆理事長</li>
                    </ul>
                </div>
                <div class="content max-w-full">
                    <div class="content-title flex flex-wrap">
                        <div class="color-line flex">
                            <div class="blue1"></div>
                            <div class="blue2"></div>
                        </div>
                        歷屆理事長
                    </div>
                    <table class="w-full table-auto">
                        <thead >
                            <tr class="table-header">
                                <td class="table-year">年份</td>
                                <td class="table-name">姓名</td>
                                <td class="table-title">職稱</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="year">2009</td>
                                <td class="name">長莊浩志</td>
                                <td class="title">榮譽理事</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="year">2009</td>
                                <td class="name">曾文樂</td>
                                <td class="title">創會理事長</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="year">2013</td>
                                <td class="name">李清圳</td>
                                <td class="">會長</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="year">2017</td>
                                <td class="name">文崧仰</td>
                                <td class="title">理事長</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="year">2021</td>
                                <td class="name">詹寓崵</td>
                                <td class="title">理事長</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        @endsection

