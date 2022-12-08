<!doctype html>
<html lang="ru">
<head>
    <style>
        .q{
            display: flex;
            background-repeat: no-repeat;
        }
        .w{
            margin: 20px;
        }
        .main{
            margin-left: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>редактор баннера</title>
</head>
<body>

<a href="{{ route('banner.create') }}">Cоздать баннер</a>

<a class="main" href="{{ route('admin_panel') }}">Главная</a>
    @foreach($bbb as $banner)
        <div class="q">
            <img src="{{ Storage::url($banner->file) }}" alt="" width="200">


        <div class="w">
            <div>{{ $banner->title }}</div>
            <div>{{ $banner->big_title }}</div>
            <div>{{ $banner->long_title }}</div>
            <div>{{ $banner->white_title }}</div>
        </div>

        <div>

            <a href="{{ route('banner.edit', ['banner'=>$banner->id]) }}">редактировать</a>

            <form method="post" action="{{ route('banner.destroy', ['banner'=>$banner->id]) }}">
                @csrf
                @method('delete')

                <button>DELETE</button>
            </form>

        </div>
            <div>
    @endforeach



</body>
</html>
