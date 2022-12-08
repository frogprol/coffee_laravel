<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Панель админа</title>
</head>
<body>

 <h1>админ</h1>

{{-- // прописываем в ссылке название маршрута (название маршрута смотрим в списке route:list)--}}
 <a href="{{ route('news.index') }}">Блок новостей</a>
<br><br>
 <a href="{{ route('banner.index') }}">Блок банера</a>
 <br><br>
 <a href="{{ route('section.index') }}">Блок секции</a>
 <br><br>
 <a href="{{ route('product.index') }}">Блок продукции</a>
 <br><br>
 <a href="{{ route('main_product.index') }}">Блок главной продукции</a>

</body>
</html>
