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
                    <h3 style="font-size:32px;">風浪板活動照片</h3>
                    <a href="/eventimg/windsurf"
                        style="padding: 4px 8px; background-color:#3B54F3;color:white;border-radius:5px;">上一頁</a>
                </div>
                <table id="example" class="display" style="width:100%;">
                    <thead>
                        <tr class="flex justify-between" style="border-bottom:1px solid blackk;">
                            <td class="flex  " style="width:100%;">活動名稱</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data->eventimg as $i)
                            <td class="flex  " style="width:100%;">
                                <div class="flex " id="sup_img{{ $i->id }}">
                                    <div class="flex  justify-between"
                                        style="width:150px; height:auto; margin-top:10px;">
                                        <img src="{{ $i->img_path }}" alt="">
                                    </div>
                                    <div class="ml-4 flex items-center">
                                        <button type="button" onclick="delete_img({{ $i->id }})"
                                            style="padding: 4px 8px;color:blue;border-radius:5px;">刪除圖片</button>
                                    </div>
                                </div>
                            </td>
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
