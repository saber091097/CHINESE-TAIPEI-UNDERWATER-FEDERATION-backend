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
        .dataTables_wrapper .dataTables_length select{
            width: 4em ;
        }
    </style>
@endsection

@section('main')
    <div class="past-presidents">
        <div class=" bg-white py-12" style="width:80%; margin:32px 0;border-radius:10px;">
            <div class="shopbox" style="padding: 0 10%;">
                <div class="top flex items-center" style="margin-bottom:25px;">
                    <h3 style="font-size:32px;">最新消息發布</h3>
                    <a href="events/create" style="margin-left: auto;"><button style="padding: 10px;background-color:green; color:white;border-radius:5px;">新增消息</button></a>
                </div>
                <table id="example" class="display" style="width:100%;">
                    <thead>
                        <tr class="flex justify-between w-full" style="border-bottom:1px solid blackk;">
                            <td class="flex  "style="width:16%;">id</td>
                            <td class="flex  "style="width:16%;">活動種類</td>
                            <td class="flex  "style="width:16%;">公告種類</td>
                            <td class="flex  "style="width:16%;">活動名稱</td>
                            <td class="flex  "style="width:16%;">發布人</td>
                            <td class="flex justify-center "style="width:16%;">功能</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $i)
                            <tr class="flex justify-between" style="border-bottom:1px solid blackk;">
                                <td>
                                    {{$i->id}}
                                </td>
                                <td class="flex "style="width:20%;">
                                    @if ($i->event_type == 1)
                                        風浪板
                                    @elseif ($i->event_type == 2)
                                        SUP立式浪板
                                    @elseif ($i->event_type == 3)
                                        潛水
                                    @elseif ($i->event_type == 4)
                                        游泳
                                    @elseif ($i->event_type == 5)
                                        救生
                                    @else
                                        其他
                                    @endif
                                </td>
                                <td class="flex "style="width:10%;">
                                    @if ($i->anno_type ==1)
                                        公告
                                    @else
                                        好消息
                                    @endif
                                    </td>
                                <td class="flex "style="width:40%;"> {{$i->event}}</td>
                                <td class="flex "style="width:10%;">{{$i->name}}</td>
                                <td class="flex justify-center"style="width:20%;">
                                    <a href="/events/copy/{{$i->id}}">
                                        <button style="padding: 10px;background-color:blue; color:white;border-radius:5px; margin-right:10px;">複製</button>
                                    </a>
                                    <a href="/events/edit/{{$i->id}}">
                                        <button style="padding: 10px;background-color:green; color:white;border-radius:5px; margin-right:10px;">編輯</button>
                                    </a>
                                    <button onclick="document.querySelector('#deleteForm{{$i->id}}').submit()"
                                        style="padding: 10px;background-color:red; color:white;border-radius:5px;">刪除</button>
                                    <form action="/events/del/{{$i->id}}" id="deleteForm{{$i->id}}" method="POST" hidden>
                                            @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
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
