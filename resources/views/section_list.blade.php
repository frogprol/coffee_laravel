<!doctype html>
<html lang="ru">
<head>
    <style>
        .w{
            display: flex;
            margin: 20px;
        }
        .er{
            margin-left: 20px;
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

<a href="{{ route('section.create') }}">Создать секцию</a>

<a class="main" href="{{ route('admin_panel') }}">Главная</a>

    @foreach($sss as $section)
      <div class="w">
        <div>{{ $section->name_section }}</div>

        <div class="er">
        <a href="{{ route('section.edit', ['section'=>$section->id]) }}">Редактировать</a>

        <form action="{{ route('section.destroy', ['section'=>$section->id]) }}" method="post">
            @csrf
            @method('delete')

            <button>DELETE</button>

        </form>
        </div>
      </div>
    @endforeach

</body>
</html>
