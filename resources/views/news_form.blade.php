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

<form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="file" name="file" >
    <input type="text" name="title">
    <input type="text" name="text">
    <input type="date" name="date">
    <button>отправить</button>
</form>

</body>
</html>
