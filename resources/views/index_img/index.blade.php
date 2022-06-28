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
        img{
            width: 300px;
            height: 300px;
        }
    </style>
@endsection

@section('main')
    <div class="past-presidents">
        <div class=" bg-white" style="width:80%; margin:32px 0;border-radius:10px;">
            <div class="shopbox" style="padding: 0 10%;">
                <div class="top flex items-center" style="margin-top:40px; margin-bottom:25px;">
                    <h3 style="font-size:32px;">首頁圖片</h3>
                </div>
                <table id="example" class="display" style="width:100%;">
                    <tr class="w-full">
                        <th style="width:300px;text-align:left;">圖片</th>
                        <th style="width:300px;text-align:center;">位置</th>
                        <th style="width:300px;text-align:center;">更換圖片</th>
                    </tr>
                    <tbody >
                        <tr>
                            <td><img src="{{asset('img/img_sup.png')}}" alt="" style="border-radius: 10px;margin-top:20px;"></td>
                            <td style="text-align: center;">風浪板</td>
                            <td class="flex items-center" style="height: 320px;">
                                <div>
                                    <form action="/indeximg/update/windsurf" method="post">
                                        <input type="file" name="indexwindsurf" id="indexwindsurf" class="border-0" multiple accept="image/*">
                                        @csrf
                                        <button type="submit" style="padding: 6px 8px;color:white;background-color:#3B54F3;border-radius:5px;">保存</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
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

