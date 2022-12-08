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

    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="file" name="file">
        <input type="number" name="price">
        <input type="number" name="old_price">
        <input type="text" name="name">
        <button>Отправить</button>
    </form>

</body>
</html>
