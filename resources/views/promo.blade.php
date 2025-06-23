<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Barang     : <b>{{ $a }}</b> <br>
    Kode Promo      : <b>{{ $b }}</b> <br>
    @if($b > 100)
    Promo 
    @elseif ($b > 50)
    Promo 70%
    @else
    Anda Tidak dapat Promo
    @endif
</body>
</html>