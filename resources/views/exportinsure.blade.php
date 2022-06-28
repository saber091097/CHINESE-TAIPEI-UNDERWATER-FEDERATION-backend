<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>姓名</th>
            <th>身分證</th>
            <th>性別</th>
            <th>電話</th>
            <th>電子信箱</th>
            <th>地址</th>
            <th>Line ID</th>
            <th>緊急聯絡人姓名</th>
            <th>緊急聯絡人電話</th>
            <th>額外課程</th>
            <th>費用</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $invoice)
            <tr>
                <td>{{ $invoice->name }}</td>
                <td>{{ $invoice->id_card }}</td>
                <td>@if ($invoice->gender  == 1)
                    男
                    @else
                    女
                    @endif
                </td>
                <td>{{ $invoice->phone }}</td>
                <td>{{ $invoice->email }}</td>
                <td>{{ $invoice->addr }}</td>
                <td>{{ $invoice->line_id }}</td>
                <td>{{ $invoice->emer_name }}</td>
                <td>{{ $invoice->emer_phone }}</td>
                <td>{{ $invoice->plus }}</td>
                <td>{{ $invoice->subtotal }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
