<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/add')}}" method="POST">
        @csrf
        <label for="">Enter Name: </label>
        <input type="text" name="name">

        <input type="submit" value="Add">
    </form>
</body>
</html>