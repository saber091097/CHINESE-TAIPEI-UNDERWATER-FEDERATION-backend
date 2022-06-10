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
        input{
            margin-left: 15px;
        }
        .btn{
            padding: 4px 8px;
            border-radius: 5px;
            color: white;
            margin-bottom: 15px;
        }
    </style>
@endsection

@section('main')
    <div class="past-presidents">
        <div class=" bg-white" style="width:80%; margin:32px 0;border-radius:10px;">
            <div class="shopbox flex flex-col" style="padding: 0 10%;">
                <div class="top flex items-center" style="margin-top:40px; margin-bottom:25px;">
                    <h3 style="font-size:32px;">帳號新增</h3>
                </div>
                <form action="/account/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="section2">
                        <div class="content">
                            <form class="flex flex-col" action="/account/store" method="post" enctype="multipart/form-data">
                                @csrf
                                <div style="margin-top: 15px;">
                                    <label for="name">使用者名稱</label>
                                    <input type="text" name="name" id="name">
                                </div>
                                <div style="margin-top: 15px;">
                                    <label for="email">使用者信箱</label>
                                    <input type="email" name="email" id="email">
                                </div>
                                <div style="margin-top: 15px;">
                                    <label for="password">使用者密碼</label>
                                    <input type="password" name="password" id="password">
                                </div>
                                <div style="margin-top: 15px;">
                                    <label for="password_confirmation">確認密碼：</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation">
                                </div>

                                <div class="button-box flex justify-center mt-2">
                                    <button class="btn btn-secondary me-3" type="reset"
                                        onclick="location.href='/account'" style="background-color:red;margin-right:15px;   ">取消</button>
                                    <button class="btn btn-primary" type="submit" style="background-color:green;">新增管理者</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
