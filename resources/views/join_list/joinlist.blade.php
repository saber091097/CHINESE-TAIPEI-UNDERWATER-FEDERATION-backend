@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/Pastpresidents.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
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
                <div class="top flex items-center justify-between" style="margin-top:40px; margin-bottom:25px;">
                    <h3 style="font-size:32px;">{{$event->event->event}}</h3>
                    <a href="/excelexport/{{$event->event_id}}" style="background-color: #3B54F3;padding:6px 8px;border-radius:5px;color:white;">下載詳細名單</a>
                </div>
                <table id="example" class="display" >
                    <thead>
                        <tr class="w-full" style="border-bottom:1px solid blackk;">
                            <th >大頭照</th>
                            <th >姓名</th>
                            <th >電話</th>
                            <th >身分證</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr >
                            <a href="/joinlist/{{$item->id}}" class="flex w-full">
                                <td class="flex justify-center">
                                    <img src="{{$item->headshot->headshot}}" alt="" style="width: 150px;height:150px;">
                                </td>
                                <td style="text-align:center;">{{$item->name}}</td>
                                <td style="text-align:center;">{{$item->phone}}</td>
                                <td style="text-align:center;">{{$item->id_card}}</td>
                            </a>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
