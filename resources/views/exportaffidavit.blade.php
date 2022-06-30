<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
          overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
          font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top;font-size: 18px;font-weight:bold;height: 40px;}
        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top;height: 40px;}
        </style>
</head>
<body>
    @foreach ($data as $item)
    <table class="tg" style="undefined;table-layout: fixed; width: 811px">
        <colgroup>
        <col style="width: 164px">
        <col style="width: 209px">
        <col style="width: 139px">
        <col style="width: 138px">
        <col style="width: 140px">
        <col style="width: 140px">
        </colgroup>
        <thead>
          <tr>
            <th class="tg-c3ow" colspan="6" >中華民國台中市水中運動協會</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="tg-c3ow" colspan="6" >{{$item->event->event}}報名表</td>
          </tr>
          <tr>
            <td class="tg-0pky" rowspan="2"><img src="{{asset($drawing)}}" alt=""></td>
            <td class="tg-0pky">開訓日期</td>
            <td class="tg-0pky">{{substr($item->event->event_date,9)}}</td>
            <td class="tg-0pky">選修課程</td>
            <td class="tg-0pky" colspan="2">{{$item->plus}}</td>
          </tr>
          <tr>
            <td class="tg-0pky">結訓日期</td>
            <td class="tg-0pky">{{substr($item->event->event_date,-9)}}</td>
            <td class="tg-0pky">受訓地點</td>
            <td class="tg-0pky" colspan="2">日月潭</td>
          </tr>
          <tr>
            <td class="tg-0pky">中文姓名</td>
            <td class="tg-0pky" colspan="2">{{$item->name}}</td>
            <td class="tg-0pky">身分證字號</td>
            <td class="tg-0pky" colspan="2">{{$item->id_card}}</td>
          </tr>
          <tr>
            <td class="tg-0pky">出生年月日</td>
            <td class="tg-0pky" colspan="2">89.1.1</td>
            <td class="tg-0pky">行動電話</td>
            <td class="tg-0pky" colspan="2">{{$item->phone}}</td>
          </tr>
          <tr>
            <td class="tg-0pky">通訊地址</td>
            <td class="tg-0pky" colspan="5">{{$item->addr}}</td>
          </tr>
          <tr>
            <td class="tg-0pky">LINE ID</td>
            <td class="tg-0pky" colspan="5">{{$item->line_id}}</td>
          </tr>
          <tr>
            <td class="tg-0pky">緊急聯絡人</td>
            <td class="tg-0pky" colspan="2">{{$item->emer_name}}</td>
            <td class="tg-0pky">連絡電話</td>
            <td class="tg-0pky" colspan="2">{{$item->emer_phone}}</td>
          </tr>
          <tr>
            <td class="tg-0pky">聯絡地址</td>
            <td class="tg-0pky" colspan="5">{{$item->addr}}</td>
          </tr>
          <tr>
            <td class="tg-0pky" colspan="6"></td>
          </tr>
          <tr>
            <td class="tg-c3ow" colspan="6" style="font-size: 18px;font-weight:bold;text-decoration:underline">切結書</td>
          </tr>
          <tr>
            <td class="tg-0pky" colspan="6">本人_____________將於 {{substr($item->event->event_date,3)}}年 {{substr($item->event->event_date,4,2)}}月{{substr($item->event->event_date,7,2)}}日〜 {{substr($item->event->event_date,-2)}}日共2日參加中華民國台中市水中運動協會丙級SUP立式划槳教練講習會訓練並願意同意下列事項，如有違規而造成事故時願自行負責。<br>一、心臟病、氣喘、高血壓及身體不適者，請勿參加。<br>二、參加本項活動期間，願意聽從老師及教練之指導及要求。<br>三、活動前已充分了解水域運動安全公約及活動規則，並願意配合遵守所有規定事項。<br>四、本人確認身心健康，適宜從事SUP立式划槳水域活動。</td>
          </tr>
          <tr>
            <td class="tg-0pky" colspan="6">具結人<span style="text-decoration:underline">　　　　　　　  </span>(簽章)   </td>
          </tr>
          <tr>
            <td class="tg-0pky" colspan="6"></td>
          </tr>
          <tr>
            <td class="tg-c3ow" colspan="6">中華民國   {{substr($item->event->event_date,3)}}  年   {{substr($item->event->event_date,4,2)}}  月  {{substr($item->event->event_date,7,2)}}   日      </td>
          </tr>
        </tbody>
    </table>
    @endforeach
</body>
</html>
