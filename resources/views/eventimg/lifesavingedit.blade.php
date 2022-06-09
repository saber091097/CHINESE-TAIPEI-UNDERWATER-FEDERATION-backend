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
            <div class="shopbox" style="padding: 0 10%;">
                <div class="top flex items-center justify-between" style="margin-top:40px; margin-bottom:25px;">
                    <h3 style="font-size:32px;">救生活動照片</h3>
                    <a href="/eventimg/lifesaving"
                        style="padding: 4px 8px; background-color:#3B54F3;color:white;border-radius:5px;">上一頁</a>
                </div>
                <form action="/eventimg/lifesaving/update/{{$data->id}}" method="POST" class="flex" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col w-full">
                        <div class="flex w-full">
                            <div class="event flex" style="width: 50%;">
                                活動名稱：
                                <input type="text" name="event" id="event" style="border-radius: 5px; width:70%; padding:4px 0;" value="{{$data->eventimg_name}}">
                            </div>

                        </div>
                        <div class="event_img" style="margin: 10px 0;">
                            上傳活動照片：
                            <input type="file" name="event_img[]" id="event_img" class="border-0" multiple accept="image/*">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <button type="submit"
                                style="padding: 4px 16px;background-color:seagreen;color:white;border-radius:5px; ">更新</button>
                        </div>
                    </div>
                </form>
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

        function delete_img(id) {
            let formData = new FormData();
            formData.append('_method', 'DELETE');
            formData.append('_token', '  {{ csrf_token() }}');
            fetch("/eventimg/delete_img/" + id, {
                method: "POST",
                body: formData
            }).then(function(response) {
                let element = document.querySelector('#sup_img' + id)
                element.parentNode.removeChild(element);
            })
        }
    </script>
@endsection
