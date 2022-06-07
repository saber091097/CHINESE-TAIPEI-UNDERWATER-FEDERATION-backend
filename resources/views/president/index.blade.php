@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/Pastpresidents.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        .container{
            background-color: gray;
            height: 100%;
        }
    </style>
@endsection

@section('main')
<div class="past-presidents w-full flex-warp flex-col flex">
    <div class="breadcrumb">
        <ul class="flex items-center justify-start">
            <li><a href="index.html">首頁</a></li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                </svg>
            </li>
            <li><a href="about-us.html">關於我們</a></li>
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
</div>
    <div class="past-presidents">
        <div class="row w-100 d-flex justify-content-center">
            <div class="shopbox bg-light ">
                <div class="top">
                    <h3>理事長管理</h3>
                    <a href="presidents/create"><button>新增理事長</button></a>
                </div>
                <table id="presidents_list" class="display w-100">
                    <thead>
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
        </div>
    </div>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('banner').DataTable();
        });
    </script>
@endsection
