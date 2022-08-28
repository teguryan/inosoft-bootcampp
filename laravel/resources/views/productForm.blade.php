<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
</head>
<body>
    <form action="{{url('/product/store')}}" method="POST">
        @csrf
        <label for="">Nama Produk</label>
        <input name="nama_produk" value="" type="text">

        <label for="">Deskripsi</label>
        <input name="deskripsi" value="" type="text">

        <label for="">Harga</label>
        <input name="harga" value="" type="text">

        <label for="">Tipe</label>
        <select name="tipe_produk" id="">
            <option value="sepatu"> Sepatu</option>
            <option value="celana"> Celana</option>
            <option value="baju"> Baju</option>
        </select>

        <button type="submit">submit</button>
    </form>

    @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</body>
</html>