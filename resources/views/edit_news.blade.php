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

<form action="{{ route('news.update', ['news'=>$nnn->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')


    <img src="{{ Storage::url($nnn->file) }}" alt="" width="200">
    <input type="file" name="file">
    <input type="text" name="title" value="{{ $nnn->title }}">
    <input type="text" name="text" value="{{ $nnn->text }}">
    <input type="date" name="date" value="{{ $nnn->date }}">
    <button>отправить</button>
</form>

</body>
</html>
