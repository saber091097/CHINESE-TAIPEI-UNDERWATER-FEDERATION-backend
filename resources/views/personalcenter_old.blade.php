
@extends('template.template')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <!-- flowbite CDN 彈出式視窗 -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <title>個人中心</title>
    <link rel="stylesheet" href="{{asset('css/personalcenter.css')}}">
@endsection


    @section('main')
    <div class="container flex justify-between max-w-full" id="page">
        <!-- 顯示個人資料區 -->
        <div id="infocard" class="infocard">
            <div id="avator" class="avator mt-6"><img src="./img/icon/Avatar.png" alt=""></div>
            <div class="flex flex-col">
                <span id="name" class="name">王小明</span>
                <span id="email" class="email">test123@gmail.com</span>
            </div>
            <button id="edit">編輯</button>
        </div>
        <!-- 編輯個人資料區 -->
        <div id="infocard_edit" class="infocard">
            <div id="avator" class="avator mt-6"><img src="./img/icon/Avatar.png" alt=""></div>
            <div id="namebox" class="flex flex-col">
                <span id="name" class="name">姓名</span>
                <!-- 編輯 -->
                <input id="editname" class="" type="text">
            </div>
            <div id="emailbox" class="flex flex-col">
                <span id="email" class="email">Email</span>
                <!-- 編輯 -->
                <input id="editemail" type="text">
            </div>
            <div class="buttonsection flex flex-row justify-between">
                <button id="cancel_button">取消</button>
                <button id="edityes_button">確定修改</button>
            </div>
        </div>

        <div id="tab" class="">
            <div id="tablist" class="">
                <ul class="nav nav-tabs flex flex-row md:flex-row  list-none border-b-0 pl-0 mb-4" id="tabs-tab"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="#tabs-home" class="
            nav-link
            leading-tight
            border-x-0 border-t-0 border-b-2 border-transparent
            hover:border-transparent
            focus:border-transparent
            active
          " id="tabs-home-tab" data-bs-toggle="pill" data-bs-target="#tabs-home" role="tab" aria-controls="tabs-home"
                            aria-selected="true">
                            <span>報名紀錄</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#tabs-profile" class="
            nav-link
            leading-tight
            border-x-0 border-t-0 border-b-2 border-transparent
            hover:border-transparent
            focus:border-transparent
          " id="tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile" role="tab"
                            aria-controls="tabs-profile" aria-selected="false">
                            <span>我的證照</span></a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="tabs-tabContent">
                <div class="tab-pane fade show active" id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab">
                    <table class="table-auto" id="record_table">
                        <thead>
                            <tr>
                                <th class="year "><span>年份</span></th>
                                <th class="month"><span>月份</span></th>
                                <th class="event"><span>活動名稱</span></th>
                                <th class="event_rwd"><span>活動</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="year"><span>2021</span></td>
                                <td class="month"><span>0617-0618</span></td>
                                <td class="event"><span>日月潭SUP三合一</span></td>
                            </tr>
                            <tr>
                                <td class="year"><span>2021</span></td>
                                <td class="month"><span>0617-0618</span></td>
                                <td class="event"><span>日月潭SUP三合一</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- tab我的證照表格 -->
                <div class="tab-pane fade" id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
                    <table class="table-fixed" id="certificate_table">
                        <thead>
                            <tr>
                                <th class="year"><span>活動名稱</span></th>
                                <th class="month"><span>證照預覽</span></th>
                                <th class="event"><span>證照下載</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="year"><span>水肺潛水初級</span></td>
                                <td class="month"><span class="preview" id="preview" onclick="openmodal()"
                                        data-modal-toggle="popup-modal">預覽</span>
                                </td>
                                <td class="event">
                                    <svg class="download" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 19H21V21H3V19ZM13 13.172L19.071 7.1L20.485 8.514L12 17L3.515 8.515L4.929 7.1L11 13.17V2H13V13.172Z"
                                            fill="#3B54F3" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="year"><span>水肺潛水中級</span></td>
                                <td class="month"><span class="preview" id="preview" onclick="openmodal()"
                                        data-modal-toggle="popup-modal">預覽</span>
                                </td>
                                <td class="event">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 19H21V21H3V19ZM13 13.172L19.071 7.1L20.485 8.514L12 17L3.515 8.515L4.929 7.1L11 13.17V2H13V13.172Z"
                                            fill="#3B54F3" />
                                    </svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <nav id="pagination" class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                aria-label="Pagination">
                <a href="#"
                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <!-- Heroicon name: solid/chevron-left -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                <a href="#" aria-current="page"
                    class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    1 </a>
                <a href="#"
                    class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    2 </a>
                <a href="#"
                    class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden sm:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                    3 </a>
                <a href="#"
                    class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden sm:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                    4 </a>

                <a href="#"
                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <!-- Heroicon name: solid/chevron-right -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </nav>
        </div>
    </div>
    @endsection
    

    @section('js')
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script>
        //自介框
        var edit = document.querySelector('#edit');
        var infocard = document.querySelector('#infocard');
        var infocard_edit = document.querySelector('#infocard_edit');
        var cancel = document.querySelector('#cancel_button')
        edit.addEventListener('click', function () {
            infocard.style.display = "none"
            infocard_edit.style.display = "block"
        })
        cancel.addEventListener('click', function () {
            infocard.style.display = "block"
            infocard_edit.style.display = "none"
        })

    </script>
    @endsection
{{-- </body>

</html> --}}
