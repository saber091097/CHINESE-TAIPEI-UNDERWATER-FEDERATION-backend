@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/Pastpresidents.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <style>
        .past-presidents {
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
            <div class="shopbox flex flex-col" style="padding: 0 10%;">
                <div class="top flex items-center" style="margin-top:40px; margin-bottom:25px;">
                    <h3 style="font-size:32px;">最新消息發布</h3>
                </div>
                <thead>
                    <tr class="flex justify-between" style="border-bottom:1px solid blackk;">
                        <td class="flex  "style="width:20%;">大頭照</td>
                        <td class="flex  "style="width:10%;">姓名</td>
                        <td class="flex  "style="width:40%;">電話</td>
                        <td class="flex justify-center "style="width:20%;">身分證</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <a href="/joinlist/{{$item->id}}">
                        <tr class="flex">
                            <td class="flex" style="width:20%;">
                                <img src="{{$item->headshot->headshot}}" alt="">
                            </td>
                            <td class="flex  "style="width:10%;">{{$item->name}}</td>
                            <td class="flex  "style="width:40%;">{{$item->phone}}</td>
                            <td class="flex justify-center "style="width:20%;">{{$item->id_card}}</td>
                        </tr>
                    </a>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>
@endsection
