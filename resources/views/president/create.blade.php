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
            height: calc(100vh - 137px);
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
@endsection

@section('main')
    <div class="past-presidents">
        <div class="flex flex-col bg-white" style="width:80%; margin:32px 0;border-radius:10px;">
            <div class="shopbox bg-light " style="padding: 0 10%;">
                <div class="top flex items-center" style="margin-top:40px; margin-bottom:25px;">
                    <h3 style="font-size:32px;">新增理事長</h3>
                </div>
            </div>
            <form action="/presidents/store" method="POST">
                @csrf
                <div class="content flex" style="padding:0 10%">
                    <div class="date" style="margin-right: 15px;">
                        日期 (year)
                        <input type="number" name="date" id="date" style="width: 100px;">
                    </div>
                    <div class="name" style="margin-right: 15px;">
                        姓名:
                        <input type="text" name="name" id="name" style="width: 150px;">
                    </div>
                    <div class="president" style="margin-right: 30px;">
                        職稱:
                        <input type="text" name="president" id="president" style="width: 150px;">
                    </div>
                    <div class="president">
                        <button type="submit"
                            style="padding: 10px;background-color:green; color:white;border-radius:5px; ">新增</button>
                    </div>
                </div>
            </form>
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
