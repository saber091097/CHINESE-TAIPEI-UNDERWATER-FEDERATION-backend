@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/Pastpresidents.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        .past-presidents{
            background-color: #3B54F3;
            width: 100%;
            display: flex;
            justify-content: center;
        }
    </style>
@endsection

@section('main')
    <div class="past-presidents">
        <div class=" bg-white" style="width:80%; margin:32px 0;border-radius:10px;">
            <div class="shopbox" style="padding: 0 10%;">
                <div class="top flex items-center" style="margin-top:40px; margin-bottom:25px;">
                    <h3 style="font-size:32px;">活動照片</h3>
                    <a href="eventimg/create" style="margin-left: auto;"><button style="padding: 10px;background-color:green; color:white;border-radius:5px;">新增相片</button></a>
                </div>
                <table id="example" class="display" style="width:100%;">
                    <thead>
                        <tr class="flex justify-between" style="border-bottom:1px solid blackk;">
                            <td class="flex  "style="width:100%;">活動種類</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="flex  "style="width:100%;">
                                <a href="eventimg/windsurf" class="flex w-full">
                                <img src="{{asset('img/popular courses-03.jpg')}}" alt="" style="width: 150px;height:150px;border-radius:5px;">
                                <div class="flex items-center ml-12" style="font-size:24px;">
                                    風浪板
                                </div>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="flex "style="width:100%;">
                                <a href="eventimg/diving" class="flex w-full">
                                <img src="{{asset('img/S__14082097.jpg')}}" alt="" style="width: 150px;height:150px;border-radius:5px;">
                                <div class="flex items-center ml-12" style="font-size:24px;">
                                    潛水
                                </div>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="flex  "style="width:100%;">
                                <a href="eventimg/sup" class="flex w-full">
                                <img src="{{asset('img/sup-2.png')}}" alt="" style="width: 150px;height:150px;border-radius:5px;">
                                <div class="flex items-center ml-12" style="font-size:24px;">
                                    SUP立式划槳
                                </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="flex  "style="width:100%;">
                                <a href="eventimg/swimming" class="flex w-full">
                                <img src="{{asset('img/pexels-mali-maeder-1415810.jpg')}}" alt="" style="width: 150px;height:150px;border-radius:5px;">
                                <div class="flex items-center ml-12" style="font-size:24px;">
                                    游泳
                                </div>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="flex  "style="width:100%; margin-bottom:15px;">
                                <a href="eventimg/lifesaving" class="flex w-full">
                                    <img src="{{asset('img/lifebuoy-g7352a0456_1920.jpg')}}" alt="" style="width: 150px;height:150px;border-radius:5px;">
                                    <div class="flex items-center ml-12" style="font-size:24px;">
                                        救生
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="flex  "style="width:100%; margin-bottom:15px;">
                                <a href="eventimg/other" class="flex w-full">
                                    <img src="{{asset('img/Rectangle78.png')}}" alt="" style="width: 150px;height:150px;border-radius:5px;">
                                    <div class="flex items-center ml-12 w-full" style="font-size:24px;">
                                        其他
                                    </div>
                                </a>
                            </td>
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
            $('#example').DataTable();
        });
    </script>
@endsection
