<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{ route('product.update', ['product' => $ppp->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <img src="{{ Storage::url($ppp->file) }}" alt="" width="200">
    <input type="file" name="file">
    <input type="text" name="price" value="{{ $ppp->price }}">
    <input type="text" name="old_price" value="{{ $ppp->old_price }}">
    <input type="text" name="name" value="{{ $ppp->name }}">
    <button>отправить</button>
</form>

</body>
</html>
