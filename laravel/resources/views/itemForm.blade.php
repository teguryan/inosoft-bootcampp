<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Form</title>
</head>
<body>
    <form action="{{url('/item/post')}}" method="POST">
        @csrf
        <label for="">nama item : </label>
        <input name="nama_item" value="" type="text">
        <label for="">harga item : </label>
        <input name="harga_item" value="" type="text">

        <button type="submit">submit</button>
    </form>
</body>
</html>