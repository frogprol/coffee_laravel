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

    <form action="{{ route('section.update', ['section'=>$ssss->id]) }}" method="post">
        @csrf
        @method('put')

        <input type="text" name="name_section" value="{{ $ssss->name_section }}">
        <button>Отправить</button>
    </form>

</body>
</html>
