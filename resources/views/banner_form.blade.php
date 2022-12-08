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
<form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="big_title" placeholder="big_title">
    <input type="text" name="long_title" placeholder="long_title">
    <input type="text" name="white_title" placeholder="white_title">
    <button>Отправить</button>
</form>
</body>
</html>
