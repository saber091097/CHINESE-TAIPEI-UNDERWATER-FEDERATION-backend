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
                    <h3 style="font-size:32px;">最新消息發布</h3>
                    <a href="event/create" style="margin-left: auto;"><button style="padding: 10px;background-color:green; color:white;border-radius:5px;">新增消息</button></a>
                </div>
                <table id="example" class="display" style="width:100%;">
                    <thead>
                        <tr class="flex justify-between" style="border-bottom:1px solid blackk;">
                            <td class="flex  "style="width:10%;">活動種類</td>
                            <td class="flex  "style="width:10%;">公告種類</td>
                            <td class="flex  "style="width:50%;">活動名稱</td>
                            <td class="flex  "style="width:10%;">發布人</td>
                            <td class="flex justify-center "style="width:20%;">功能</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="flex justify-between" style="border-bottom:1px solid blackk;">
                            <td class="flex  "style="width:10%;">風浪板</td>
                            <td class="flex  "style="width:10%;">好消息</td>
                            <td class="flex  "style="width:50%;"> 夏季班 自由潛水開課</td>
                            <td class="flex  "style="width:10%;">pennon</td>
                            <td class="flex justify-center"style="width:20%;">
                                <a href="/event/edit/">
                                    <button style="padding: 10px;background-color:green; color:white;border-radius:5px; margin-right:10px;">編輯</button></a>

                                    <button onclick="document.querySelector('#deleteForm id').submit()"
                                         style="padding: 10px;background-color:red; color:white;border-radius:5px;">刪除</button>
                                    <form action="/event/del/" id="deleteForm id" method="POST"
                                        hidden>
                                        @csrf
                                    </form>
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
