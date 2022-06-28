@extends('template.template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav&footer.css') }}">

    <title>最新消息</title>
@endsection
@section('main')
    <div class="container flex justify-center max-w-full flex-wrap">

        <div class="news flex justify-center mt-20">
            <div class="width80 flex justify-center flex-col">
                <div class="breadcrumb">
                    <ul class="flex justify-start flex-wrap">
                        <li><a href="/">首頁</a></li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.1727 12L8.22266 7.04999L9.63666 5.63599L16.0007 12L9.63666 18.364L8.22266 16.95L13.1727 12Z" />
                            </svg>
                        </li>
                        <li>最新消息</li>
                    </ul>
                </div>
                <div class="content">
                    <div class="content-top">
                        <div class="news-title flex flex-wrap">
                            <div class="color-line flex">
                                <div class="blue1"></div>
                                <div class="blue2"></div>
                            </div>
                            最新消息
                        </div>
                    </div>
                    <div class="class flex">
                        <div class="class-left flex flex-col">
                            <div class="title">年份</div>
                            <select name="year" id="year" class="w-full text-gray-700">
                                <option>2022</option>
                            </select>
                        </div>
                        <div class="class-left flex flex-col">
                            <div class="title">類別</div>
                            <select name="year" id="anno_type" class="w-full text-gray-700">
                                <option value="1" id='type_one' onclick="anno_one()">公告</option>
                                <option value="2" id='type_two' onclick="anno_two()">好消息</option>
                            </select>
                        </div>
                    </div>
                    <div class="placard" style="display: block">
                        {{-- @php
                            dd($news)
                        @endphp --}}
                        @foreach ($news as $item)
                            <div class="placard-news">
                                <a href="/event/{{ $item->id }}" class="flex">
                                    <div class="placard-left mr-auto">
                                        <div class="time">
                                            <label for="event"></label>
                                            <button>
                                                @if ($item->anno_type == 1)
                                                    公告
                                                @else
                                                    好消息
                                                @endif
                                            </button>
                                            <span>{{ substr($item->updated_at, 0, 10) }} updated</span>
                                        </div>
                                        <div class="event">
                                            <span>{{ $item->event }}</span>
                                        </div>
                                    </div>
                                    <div class="placard-right flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="placard" id='content_one' style="display: none">
                        @foreach ($anno_one as $item)
                            <div class="placard-news">
                                <a href="/event/{{ $item->id }}" class="flex">
                                    <div class="placard-left mr-auto">
                                        <div class="time">
                                            <label for="event"></label>
                                            <button>
                                                @if ($item->anno_type == 1)
                                                    公告
                                                @else
                                                    好消息
                                                @endif
                                            </button>
                                            <span>{{ substr($item->updated_at, 0, 10) }} updated</span>
                                        </div>
                                        <div class="event">
                                            <span>{{ $item->event }}</span>
                                        </div>
                                    </div>
                                    <div class="placard-right flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="placard" id='content_two' style="display: none">
                        @foreach ($anno_two as $item)
                            <div class="placard-news">
                                <a href="/event/{{ $item->id }}" class="flex">
                                    <div class="placard-left mr-auto">
                                        <div class="time">
                                            <label for="event"></label>
                                            <button>
                                                @if ($item->anno_type == 1)
                                                    公告
                                                @else
                                                    好消息
                                                @endif
                                            </button>
                                            <span>{{ substr($item->updated_at, 0, 10) }} updated</span>
                                        </div>
                                        <div class="event">
                                            <span>{{ $item->event }}</span>
                                        </div>
                                    </div>
                                    <div class="placard-right flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.172 11L10.808 5.63598L12.222 4.22198L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="nextpage flex items-center justify-between mt-10">
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-center ">
                            <div>
                                <div id="pagination" class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                                    aria-label="Pagination">
                                    <a href="#"
                                        class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300  text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    {{-- 測試中 一筆消息就長一頁 --}}
                                    @php
                                        $count = count($news);
                                        if ($count > 0) {
                                            for ($i = 1; $i <= $count; $i++) {
                                                $a_begin = '<a href="#" aria-current="page"
                                            class="border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">';
                                                $a_end = '</a>';
                                                echo $a_begin, $i, $a_end;
                                            }
                                        }
                                    @endphp
                                    {{-- 測試中 --}}
                                    {{-- <a href="#" aria-current="page"
                                        class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                        1 </a>
                                    <a href="#"
                                        class=" border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                        2 </a>
                                    <a href="#"
                                        class=" border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                                        3 </a>
                                    <span
                                        class="relative inline-flex items-center px-4 py-2 border border-gray-300  text-sm font-medium text-gray-700">
                                        ... </span>
                                    <a href="#"
                                        class=" border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                                        8 </a>
                                    <a href="#"
                                        class=" border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                        9 </a>
                                    <a href="#"
                                        class=" border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                        10 </a> --}}
                                    <a href="#"
                                        class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var anno_type = document.querySelector('#anno_type');

        // console.log(anno_type.value);

        anno_type.addEventListener("change", change_content, false);

        function change_content() {
            var placard = document.querySelector('.placard');
            const content_one = document.querySelector('#content_one');
            const content_two = document.querySelector('#content_two');
            if (anno_type.value == 1) {
                // console.log('找公告');
                placard.style.display = 'none';
                content_two.style.display = 'none';
                content_one.style.display = 'block';
            } else {
                // console.log('找好消息');
                placard.style.display = 'none';
                content_one.style.display = 'none';
                content_two.style.display = 'block';
            }
        }
    </script>

    {{-- <script>
        var news = {!! json_encode($news) !!};
        const i = news.length;
        console.log(i);
        const pagination = document.querySelector('#pagination');
        for (j = 1; j <= news.length; j++) {
            pagination.innerHTML = '';
            pagination.innerHTML += `
            <a href="#"
                                        class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300  text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>

                                    <a href="#" aria-current="page"
                                        class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                         </a>

                                    <a href="#"
                                        class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>

            `
        }
    </script> --}}
@endsection
