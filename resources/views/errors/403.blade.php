<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/nav&footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/404.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <title>404</title>
</head>

<body>
    <main class="min-h-screen flex items-center container mx-auto" style="height: 100vh;">
        <div class="flex-1 max-wfull mx-auto my-20 p-8 grid  md:flex md:justify-center md:my-40">


        <div class="404_img mx-auto md:w-3/6 md:mr-10">
            <img src="./img/img_surfer404.svg" alt="">
        </div>

        <div class="text_content flex justify-center flex-col items-center md:items-start md:w-3/6">
            <h1 class="h1 mb-6">403</h1>
            <h2 class="h2 mb-2">網頁發生錯誤</h2>
            <p class="paragraph mb-6 text-center md:text-left">目前系統繁忙中，請稍候再試或通知系統服務人員，謝謝!</p>
            <a href="/" class="main_btn py-3 px-6">返回首頁</a>
        </div>
        </div>

    </main>

</body>

</html>

