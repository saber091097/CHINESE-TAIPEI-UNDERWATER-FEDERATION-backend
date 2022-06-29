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
                    <h3 style="font-size:32px;">理事長管理</h3>
                    <a href="presidents/create" style="margin-left: auto;"><button style="padding: 10px;background-color:green; color:white;border-radius:5px;">新增理事長</button></a>
                </div>
                <table id="example" class="display" style="width:100%;">
                    <thead>
                        <tr class="flex justify-between" style="border-bottom:1px solid blackk;">
                            <td class="flex items-center "style="width:25%;">年份</td>
                            <td class="flex items-center "style="width:25%;">姓名</td>
                            <td class="flex items-center "style="width:25%;">職稱</td>
                            <td class="flex items-center "style="width:25%;">功能</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $i)
                        <tr class="flex justify-between">
                            <td class="flex items-center year "style="width:25%;">{{$i->year}}</td>
                            <td class="flex items-center "style="width:25%;">{{$i->name}}</td>
                            <td class="flex items-center "style="width:25%;">{{$i->position}}</td>
                            <td class="flex items-center flex-wrap"style="width:25%;">
                                <a href="/presidents/edit/{{$i->id}}">
                                <button style="padding: 10px;background-color:green; color:white;border-radius:5px;">編輯</button></a>

                                <button onclick="document.querySelector('#deleteForm{{ $i->id }}').submit()"
                                     style="padding: 10px;background-color:red; color:white;border-radius:5px;">刪除</button>
                                <form action="/presidents/del/{{ $i->id }}" id="deleteForm{{ $i->id }}" method="POST"
                                    hidden>
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
