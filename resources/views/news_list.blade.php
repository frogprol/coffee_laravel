<!doctype html>
<html lang="ru">
<head>
    <style>
        .qwe{
            display: flex;
            margin-top: 20px;
        }
        .asd{
            margin-right: 20px;

        }
        .main{
            margin-left: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="{{ route('news.create') }}">Cоздать новость</a>

<a class="main" href="{{ route('admin_panel') }}">Главная</a>

@foreach($yyyyy as $list)

    <div class="qwe">
        <img src="{{ Storage::url($list->file) }}" alt="" width="200">
    <div class="asd">
        <div>{{ $list->title }}</div>
        <div>{{ $list->text }}</div>
        <div>{{ $list->date }}</div>
    </div>

        <div>
            <a href="{{ route('news.edit', ['news'=>$list->id]) }}">редактировать</a>

            <form method="post" action="{{ route('news.destroy', ['news'=>$list->id]) }}">
                @method('delete')
                @csrf

                <button>DELETE</button>
            </form>

        </div>
    </div>
@endforeach



</body>
</html>
