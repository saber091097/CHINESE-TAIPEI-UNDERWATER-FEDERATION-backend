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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <!-- flowbite CDN 彈出式視窗 -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('css/photo_div.css') }}">
    <title>照片內頁</title>
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



@section('main')
    <div class="flex flex-col" id="page">
        <div class="bread_list flex flex-row" style="font-size:14px;font-weight:400;line-height:25px">
            <span style="color:#3B54F3;cursor:pointer;" onclick="location.href='/index'">首頁</span>
            <div class="arrow_r"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z"
                        fill="#141414" />
                </svg>
            </div>
            <span style="color:#3B54F3;cursor:pointer;" onclick="location.href='/album'">活動照片</span>
            <div class="arrow_r"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z"
                        fill="#141414" />
                </svg>
            </div>
            <span style="opacity: 0.5;">
                {{-- @php
                    dd($album)
                @endphp --}}
                {{ $album[0]->eventimg_name }}
                {{-- @if ($photo[0]->event_type == 1)
                    風浪板
                @elseif ($photo[0]->event_type == 2)
                    立式划槳
                @elseif ($photo[0]->event_type == 3)
                    潛水
                @elseif ($photo[0]->event_type == 4)
                    游泳
                @else
                    水上救生
                @endif --}}
            </span>
        </div>

        <div class="title_section flex flex-col">
            @if ($photo[0]->event_type == 1)
                {{-- 抓活動日期?相簿上傳日期?相簿更新日期? --}}
                <span id="en_title">Windsurf board ·
                    {{ substr($album[0]->updated_at, 0, 4) }}-{{ substr($album[0]->eventimg_name, 0, 2) }}-{{ substr($album[0]->eventimg_name, 2, 2) }}</span>
            @elseif ($photo[0]->event_type == 2)
                <span id="en_title">SUP ·
                    {{ substr($album[0]->updated_at, 0, 4) }}-{{ substr($album[0]->eventimg_name, 0, 2) }}-{{ substr($album[0]->eventimg_name, 2, 2) }}</span>
            @elseif ($photo[0]->event_type == 3)
                <span id="en_title">Diving ·
                    {{ substr($album[0]->updated_at, 0, 4) }}-{{ substr($album[0]->eventimg_name, 0, 2) }}-{{ substr($album[0]->eventimg_name, 2, 2) }}</span>
            @elseif ($photo[0]->event_type == 4)
                <span id="en_title">Swimming ·
                    {{ substr($album[0]->updated_at, 0, 4) }}-{{ substr($album[0]->eventimg_name, 0, 2) }}-{{ substr($album[0]->eventimg_name, 2, 2) }}</span>
            @else
                <span id="en_title">Life Saving ·
                    {{ substr($album[0]->updated_at, 0, 4) }}-{{ substr($album[0]->eventimg_name, 0, 2) }}-{{ substr($album[0]->eventimg_name, 2, 2) }}</span>
            @endif

            {{-- 抓相簿名稱 --}}
            <span id="tw_title">{{ $album[0]->eventimg_name }}</span>
        </div>
        <div class="photo_section flex flex-row  flex-wrap" thumbsSlider="">
            {{-- 套資料庫 --}}
            @foreach ($photo as $item)
                <div data-modal-toggle="popup-modal" style="background-image: url({{ $item->img_path }})">
                </div>
            @endforeach

        </div>


        <div id="popup-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-8xl h-auto">
                <!-- Modal content -->
                <div id="modal" class="dark:bg-gray-700">
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
                            @foreach ($photo as $item)
                                <div class="swiper-slide">
                                    <img class="slide_img" src="{{ $item->img_path }}" alt="">
                                </div>
                            @endforeach

                        </div>

                        <div id="next" class="swiper-button-next absolute">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z"
                                    fill="#141414" />
                            </svg>
                        </div>
                        <div id="prev" class="swiper-button-prev absolute">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
        // 點選圖片檔名時，迴圈圖片陣列，建立sliders，新增到swiper container，同時獲取點選圖片的索引號；
        // var photo_array = $album;
        // console.log(photo_array);
        // const swiper_wrapper= document.querySelector('.swiper-wrapper');
        // console.log($album[].length);


        var swiper = new Swiper(".mySwiper", {
            initialSlide: 0,
            observer: true,
            observeParents: true,
            direction: 'horizontal',
            slidesPerView: 1,
            loop: false,


            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

        });
        $('.mySwiper').show();

        mySwiper.slideTo(index);
    </script>
    {{-- <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 10,
          slidesPerView: 4,
          freeMode: true,
          watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
          spaceBetween: 10,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          thumbs: {
            swiper: swiper,
          },
        });
      </script> --}}
@endsection
{{-- </body>
</html> --}}
