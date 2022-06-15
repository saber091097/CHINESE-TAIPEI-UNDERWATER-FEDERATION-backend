{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/personalcenter.css">
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
    <title>個人中心</title>
    <link rel="stylesheet" href="{{ asset('css/personalcenter.css') }}">
@endsection


@section('main')
    <div class="container flex justify-between max-w-full" id="page">
        <!-- 顯示個人資料區 -->
        <div id="infocard" class="infocard">
            <div id="avator" class="avator mt-6 relative" style="background-color: gainsboro">
                <span class="absolute"
                    style="top:50%;left:50%;transform:translate(-50%,-50%);font-size:28px;font-weight:500;">{{ substr(Auth::user()->name, 0, 1) }}</span>
            </div>
            <div class="flex flex-col">
                <span id="name" class="name">{{ Auth::user()->name }}</span>
                <span id="email" class="email">{{ Auth::user()->email }}</span>
            </div>
            <button id="edit">編輯</button>
        </div>
        <!-- 編輯個人資料區 -->
        <form id="infocard_edit" class="infocard" name="infocard_edit" action="/personal-center/update/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
            @csrf
            <div id="avator" class="avator mt-6 relative" style="background-color: gainsboro">
                <span class="absolute"
                    style="top:50%;left:50%;transform:translate(-50%,-50%);font-size:28px;font-weight:500;">{{ substr(Auth::user()->name, 0, 1) }}</span>
            </div>
            <div id="namebox" class="flex flex-col">
                <span id="name" class="name">姓名</span>
                <!-- 編輯 -->
                <input id="editname" class="" name="name" value="{{ Auth::user()->name }}" type="text">
            </div>
            <div id="emailbox" class="flex flex-col">
                <span id="email" class="email">Email</span>
                <!-- 不可編輯 -->
                <input id="editemail" name="edit_email" readonly value="{{ Auth::user()->email }}" type="email">
                <div class="mail-warning"></div>
            </div>
            <div class="buttonsection flex flex-row justify-between">
                <button id="cancel_button" type="reset" onclick="location.href='/personal-center'">取消</button>
                <button id="edityes_button" type="button" onclick="check_data()">確定修改</button>
            </div>
        </form>

        <div id="tab" class="">
            <div id="tablist" class="">
                <ul class="nav nav-tabs flex flex-row md:flex-row  list-none border-b-0 pl-0 mb-4" id="tabs-tab"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="#tabs-home"
                            class="
            nav-link
            leading-tight
            border-x-0 border-t-0 border-b-2 border-transparent
            hover:border-transparent
            focus:border-transparent
            active
          "
                            id="tabs-home-tab" data-bs-toggle="pill" data-bs-target="#tabs-home" role="tab"
                            aria-controls="tabs-home" aria-selected="true">
                            <span>報名紀錄</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#tabs-profile"
                            class="
            nav-link
            leading-tight
            border-x-0 border-t-0 border-b-2 border-transparent
            hover:border-transparent
            focus:border-transparent
          "
                            id="tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile" role="tab"
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
                                <td class="year"><span>2022</span></td>
                                <td class="month"><span>0617-0618</span></td>
                                <td class="event"><span>日月潭SUP三合一</span></td>
                            </tr>
                            <tr>
                                <td class="year"><span>2021</span></td>
                                <td class="month"><span>0601-0602</span></td>
                                <td class="event"><span>水肺潛水中級</span></td>
                            </tr>
                            <tr>
                                <td class="year"><span>2021</span></td>
                                <td class="month"><span>0303</span></td>
                                <td class="event"><span>水肺潛水初級</span></td>
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
                    {{-- 證照彈出視窗 --}}
                    <div id="popup-modal" tabindex="-1"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                        <div id="certiwindow" class="relative w-full  h-full md:h-auto">
                            <button id="closeButton" type="button"
                                class="absolute top-8 right-8 text-gray-400 bg-transparent" data-modal-toggle="popup-modal">

                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 22C0 9.84974 9.84974 0 22 0C34.1503 0 44 9.84974 44 22C44 34.1503 34.1503 44 22 44C9.84974 44 0 34.1503 0 22Z"
                                        fill="#F3F6F9" />
                                    <g opacity="0.7">
                                        <path
                                            d="M22.0007 20.586L26.9507 15.636L28.3647 17.05L23.4147 22L28.3647 26.95L26.9507 28.364L22.0007 23.414L17.0507 28.364L15.6367 26.95L20.5867 22L15.6367 17.05L17.0507 15.636L22.0007 20.586Z"
                                            fill="#141414" />
                                    </g>
                                </svg>
                            </button>
                            <div id="certi" class="relative bg-white rounded-lg shadow dark:bg-gray-700" style="background-image: {{asset('img/certification.jpg')}}"></div>
                        </div>
                    </div>
                </div>
            </div>

            <nav id="pagination" class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
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
        edit.addEventListener('click', function() {
            infocard.style.display = "none"
            infocard_edit.style.display = "block"
        })
        cancel.addEventListener('click', function() {
            infocard.style.display = "block"
            infocard_edit.style.display = "none"
        })
    </script>
    <script>
        const editNname = document.querySelector("#editname");
        const namebox = document.querySelector("#namebox");
        const emailbox = document.querySelector("#emailbox");
        const editEmail = document.querySelector("#editemail");


        function check_data() {
            if (infocard_edit.name.value == "") {

                namebox.innerHTML = "";
                namebox.innerHTML = `
                <span id="name" class="name">姓名</span>
                <input id="editname" class="mb-1" name="edit_name" value="" type="text">
                <span class="ts ts-red">姓名不能為空!</span>
                `;
            } else if (infocard_edit.edit_email.value == "") {

                emailbox.innerHTML = "";
                emailbox.innerHTML = `
                <span id="email" class="email">Email</span>
                <input id="editemail" class="mb-1" name="edit_email" value="" type="email">
                <span class="ts ts-red">請輸入有效信箱!</span>
                `;
            } else
                infocard_edit.submit();


            if (infocard_edit.edit_name.value != "") {
                var namevalue = infocard_edit.name.value;
                namebox.innerHTML = "";
                namebox.innerHTML = `
                <span id="name" class="name">姓名</span>
                <input id="editname" class="mb-1" name="edit_name" value="${namevalue}" type="text">
                `;
            }
            if (infocard_edit.edit_email.value != "") {
                var emailvalue = infocard_edit.edit_email.value
                emailbox.innerHTML = "";
                emailbox.innerHTML = `
                <span id="email" class="email">Email</span>
                <input id="editemail" class="mb-1" name="edit_email" value="${emailvalue}" type="email">
                `;
            }

        };
    </script>
@endsection
</body>

</html>
