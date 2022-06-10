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
        .btn:hover{
            color: blue;
            text-decoration: underline;
        }
    </style>
@endsection

@section('main')
    <div class="past-presidents">
        <div class=" bg-white" style="width:80%; margin:32px 0;border-radius:10px;">
            <div class="shopbox" style="padding: 0 10%;">
                <div class="top flex items-center" style="margin-top:40px; margin-bottom:25px;">
                    <h3 style="font-size:32px;">帳號管理</h3>
                    <a href="account/create" style="margin-left: auto;"><button
                            style="padding: 10px;background-color:green; color:white;border-radius:5px;">新增帳號</button></a>
                </div>
                <table id="account_list" class="display">
                    <thead>
                        <tr>
                            <th>使用者名稱</th>
                            <th class="flex justify-strat">信箱</th>
                            <th class="">權限</th>
                            <th>功能</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td class="flex justify-center">{{$item->name}}</td>
                            <td >{{$item->email}}</td>
                            <td>
                                <div>
                                    @if ($item->power == 1)
                                        管理者
                                    @else
                                        一般會員
                                    @endif
                                </div>
                            </td>
                            <td class="flex justify-center">
                                <button class="btn btn-success" style="margin-right: 5px;" onclick="location.href='/account/edit/{{$item->id}}'">編輯</button>
                                <button class="btn btn-danger" onclick="document.querySelector('#deleteForm{{$item->id}}').submit();">刪除</button>
                                <form action="/account/del/{{$item->id}}" method="post" hidden id="deleteForm{{$item->id}}">
                                    @csrf
                                    @method('DELETE')
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
            $('#account_list').DataTable();
        });
    </script>
@endsection
