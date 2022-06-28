<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/photo.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet"> -->
@extends('template.template')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <!-- flowbite CDN 彈出式視窗 -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/photo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav&footer.css') }}">



    <title>活動照片</title>
    <style>

    </style>
@endsection

@section('main')
    <div class="container flex flex-row  flex-wrap justify-between max-w-full" id="page">
        <div class="album_section  flex flex-row  flex-wrap">
            @foreach ($album as $item)
                <div class="album flex flex-col" onclick="location.href='/photo/{{ $item->id }}'">

                    <div class="album_img mb-6"
                        style="background-image:url({{ asset('img/jcob-nasyr-hZPYwYR02Yo-unsplash.jpeg') }})"></div>
                    <span class="date" style="font-size:14px;font-weight:500;line-height:20px">
                        @if ($item->eventimg_type == 1)
                            Windsurf board
                        @elseif ($item->eventimg_type == 2)
                            SUP
                        @elseif ($item->eventimg_type == 3)
                            Diving
                        @elseif ($item->eventimg_type == 4)
                            Swimming
                        @else
                            Life Saving
                        @endif
                        ·
                        {{ substr($item->updated_at, 0, 4) }}-{{ substr($item->eventimg_name, 0, 2) }}-{{ substr($item->eventimg_name, 2, 2) }}
                    </span>
                    <span class="title" onclick="location.href='/photo/{{ $item->id }}'"
                        style="">
                        {{ $item->eventimg_name }}</span>
                </div>
            @endforeach

        </div>

    </div>
@endsection



@section('js')
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script></script>
@endsection
{{-- </body>

</html> --}}
