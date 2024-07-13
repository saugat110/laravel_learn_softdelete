<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            border:1px solid black
        }
        td, th{
            border:1px solid black;
        }
        td:last-child{
            padding: 0px 7px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach ($trashedcustomers as $customer)
            <tr>
                <td> {{$customer -> c_id}} </td>
                <td> {{$customer -> name}} </td>
                <td>
                    <button><a href="{{url('/restore')}}/{{$customer->c_id}}">Restore</a></button>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>