@extends('template.template')


@section('css')
<link rel="stylesheet" href="{{asset('css/organization .css')}}">
<title>組織架構</title>

@endsection

@section('main')

<div class="container flex justify-center max-w-full flex-wrap">
    <div class="organization w-full flex-warp flex-col flex">
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
                <li class="inpage">組織架構</li>
            </ul>
        </div>
        <div class="content max-w-full">
            <div class="content-title flex flex-wrap">
                <div class="color-line flex">
                    <div class="blue1"></div>
                    <div class="blue2"></div>
                </div>
                組織架構
            </div>
            <div class="img flex justify-center">
                <img src="./img/組織架構.jpg" alt="">
            </div>
        </div>
    </div>
</div>
@endsection


