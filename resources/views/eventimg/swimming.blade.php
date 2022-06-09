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
                    <h3 style="font-size:32px;">游泳活動照片</h3>
                </div>
                <table id="example" class="display" style="width:100%;">
                    <thead>
                        <tr class="flex justify-between" style="border-bottom:1px solid blackk;">
                            <td class="flex  " style="width:100%;">活動名稱</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $i)
                            <td class="flex  " style="width:100%;">
                                <a href="swimming/{{ $i->id }}" class="flex w-full">
                                    <img src="{{ asset('img/popular courses-03.jpg') }}" alt=""
                                        style="width: 150px;height:150px;border-radius:5px;">
                                    <div class="flex justify-center items-center ml-12" style="font-size:24px;">
                                        {{ $i->eventimg_name }}
                                    </div>
                                </a>
                                    <div class="flex items-center justify-end" style="width: 20%; margin-left:auto;">
                                        <a href="/eventimg/swimming/edit/{{$i->id}}">
                                            <button
                                                style="padding: 10px;background-color:green; color:white;border-radius:5px; margin-right:10px;">編輯</button></a>

                                        <button onclick="document.querySelector('#deleteForm{{ $i->id }}').submit()"
                                            style="padding: 10px;background-color:red; color:white;border-radius:5px;">刪除</button>
                                    </div>
                                    <form action="/eventimg/swimming/del/{{ $i->id }}" id="deleteForm{{ $i->id }}"
                                        method="POST" hidden>
                                        @csrf
                                    </form>

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
    </script>
@endsection
