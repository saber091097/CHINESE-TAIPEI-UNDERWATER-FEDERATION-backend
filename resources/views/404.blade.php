@extends('template.template')
<link rel="stylesheet" href="{{asset('css/404.css')}}">
<title>404</title>
@endsection

@section('main')
<!------------------------------ main ---------------------------------->
<main class="min-h-screen flex items-center container mx-auto">
    <div class="flex-1 max-wfull mx-auto my-20 p-8 grid  md:flex md:justify-center md:my-40">


    <div class="404_img mx-auto md:w-3/6 md:mr-10">
        <img src="./img/img_surfer404.svg" alt="">
    </div>

    <div class="text_content flex justify-center flex-col items-center md:items-start md:w-3/6">
        <h1 class="h1 mb-6">404</h1>
        <h2 class="h2 mb-2">網頁發生錯誤</h2>
        <p class="paragraph mb-6 text-center md:text-left">目前系統繁忙中，請稍候再試或通知系統服務人員，謝謝!</p>
        <a href="/index.html" class="main_btn py-3 px-6">返回首頁</a>
    </div>
    </div>

</main>
@endsection

