@extends('template.template')

    @section('css')
    <link rel="stylesheet" href="{{asset('css/Pastpresidents.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav&footer.css')}}">
    <title>歷屆理事長</title>
    @endsection

        @section('main')
        <div class="past-presidents w-full flex-warp flex-col flex mt-20">
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
                        @foreach ($data as $item)
                        <tr class="flex" style="width:1000px">
                            <td class="flex items-center year">{{$item->year}}</td>
                            <td class="flex items-center">{{$item->name}}</td>
                            <td class="flex items-center" style="width: 300px;">{{$item->position}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        @endsection

