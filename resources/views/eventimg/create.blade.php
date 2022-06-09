@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/Pastpresidents.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
                <form action="/eventimg/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="event_type">
                        活動種類：
                        <select name="event_type" id="event_type" style="padding:4px 40px 4px 12px; border-radius:5px;">
                            <option value="1">風浪板</option>
                            <option value="2">SUP立式浪板</option>
                            <option value="3">潛水</option>
                            <option value="4">游泳</option>
                            <option value="5">救生</option>
                            <option value="6">其他</option>
                        </select>
                    </div>
                    <div class="event">
                        活動名稱：
                        <input type="text" name="event" id="event" style="border-radius: 5px; width:50%; padding:4px 0;">
                    </div>
                    <div class="event_img" style="margin: 10px 0;">
                        上傳活動照片：
                        <input type="file" name="event_img[]" id="event_img" class="border-0" multiple accept="image/*">
                    </div>
                    <div class="flex justify-center" style="margin: 10px;">
                        <button type="submit"
                            style="padding: 8px 16px;background-color:seagreen;color:white;border-radius:5px;">發布</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
