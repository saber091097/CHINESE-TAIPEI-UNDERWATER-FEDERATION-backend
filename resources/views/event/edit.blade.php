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
                <form action="/event/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    <div class="event_type">
                        活動種類：
                        <select name="event_type" id="event_type" style="padding:4px 40px 4px 12px; border-radius:5px;">
                            <option value="1" @if ($data->event_type == 1) selected @endif>風浪板</option>
                            <option value="2" @if ($data->event_type == 2) selected @endif>SUP立式浪板</option>
                            <option value="3" @if ($data->event_type == 3) selected @endif>潛水</option>
                            <option value="4" @if ($data->event_type == 4) selected @endif>游泳</option>
                            <option value="5" @if ($data->event_type == 5) selected @endif>救生</option>
                            <option value="6" @if ($data->event_type == 6) selected @endif>其他</option>
                        </select>
                    </div>
                    <div class="anno_type" style="margin: 10px 0;">
                        公告種類：
                        <select name="anno_type" id="anno_type" style="padding:4px 40px 4px 12px; border-radius:5px;">
                            <option value="1" @if ($data->anno_type == 1) selected @endif>公告</option>
                            <option value="2" @if ($data->anno_type == 2) selected @endif>好消息</option>
                        </select>
                    </div>
                    <div class="event">
                        活動名稱：
                        <input type="text" name="event" id="event" style="border-radius: 5px; width:50%;"
                            value="{{ $data->event }}">
                    </div>
                    <div class="event_img" style="margin: 10px 0;">
                        活動介紹照片：
                        <input type="file" name="event_img[]" id="event_img" class="border-0" multiple accept="image/*">
                    </div>
                    <div class="event_img">
                        目前活動介紹照片：
                        <div class="flex flex-col">
                            @foreach ($data->imgs as $i)
                                <div class="flex ">
                                    <div class="flex  justify-between" style="width:150px; height:auto; margin-top:10px;">
                                        <img src="{{ $i->img_path }}" alt="">
                                    </div>
                                    <div class="ml-4 flex items-center">
                                        <button type="button" onclick="delete_img({{ $i->id }})" id="sup_img{{$i->id}}"
                                            style="padding: 4px 8px;background-color:red;color:white;border-radius:5px;">刪除圖片</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="event_intr flex" style="margin: 10px 0;">
                        <div>活動介紹：</div>
                        <textarea name="event_intr" id="event_intr" cols="90" rows="10" style="border-radius:5px;">{{ $data->event_intr }}</textarea>
                    </div>
                    <div class="event_proc flex">
                        <div>課程流程：</div>
                        <textarea name="event_proc" id="event_proc" cols="90" rows="10" style="border-radius:5px;">{{ $data->event_proc }}</textarea>
                    </div>
                    <div class="event_dire flex" style="margin: 10px 0;">
                        <div>指導單位：</div>
                        <textarea name="event_dire" id="event_dire" cols="90" rows="5" style="border-radius:5px;">{{ $data->event_dire }}</textarea>
                    </div>
                    <div class="event_notice flex">
                        <div>注意事項：</div>
                        <textarea name="event_notice" id="event_notice" cols="90" rows="10" style="border-radius:5px;">{{ $data->event_notice }}</textarea>
                    </div>
                    <div class="flex justify-center" style="margin: 10px;">
                        <button type="submit"
                            style="padding: 8px 16px;background-color:seagreen;color:white;border-radius:5px;">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function delete_img(id){
            let formData = new FormData();
            formData.append('_method', 'DELETE');
            formData.append('_token', '  {{ csrf_token() }}');
            fetch("/event/delete_img/"+id, {
                method: "POST",
                body: formData
            }).then(function(response) {
                let element = document.querySelector('#sup_img'+id)
                element.parentNode.removeChild(element);
            })
        }
    </script>
@endsection
