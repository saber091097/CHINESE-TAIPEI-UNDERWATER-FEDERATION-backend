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
                <div class="top flex items-center" style="margin-top:40px; margin-bottom:25px;">
                    <h3 style="font-size:32px;">會員編輯</h3>
                    <a href="new/create" style="margin-left: auto;"><button
                            style="padding: 10px;background-color:green; color:white;border-radius:5px;">新增消息</button></a>
                </div>
                <div id="section2">
                    <div class="content">
                        <form class="flex flex-col" action="/account/update/{{$account->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="mail">使用者帳號</label>
                            <input type="email" id="mail" readonly  value="{{$account->email}}">

                            <label for="name">使用者名稱</label>
                            <input type="text" name="name" id="name" value="{{$account->name}}">

                            <label for="password">使用者密碼</label>
                            <input type="password" name="password" id="password" value="{{$account->password}}">

                            <label for="power">使用者權限</label>
                            <select name="power" id="power">
                                <option value="1" @if ($account->power == 1) selected @endif >管理者</option>
                                <option value="2" @if ($account->power == 2) selected @endif >一般會員</option>
                            </select>

                            <div class="button-box flex justify-center "style="margin:15px;">
                                <button  style="padding: 4px 8px;background-color:red;color:white;border-radius:5px;margin-right:15px;" type="reset" onclick="location.href='/account'">取消</button>
                                <button  style="padding: 4px 8px;background-color:green;color:white;border-radius:5px;" type="submit">儲存</button>
                            </div>
                        </form>
                    </div>
                </div>
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
            $('#account_list').DataTable();
        });
    </script>
@endsection
