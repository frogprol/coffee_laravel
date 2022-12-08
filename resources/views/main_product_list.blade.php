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

<a href="{{ route('main_product.create') }}">Cоздать главный продукт</a>

<a class="main" href="{{ route('admin_panel') }}">Главная</a>

@foreach($mp as $main_pr)

    <div class="qwe">
        <img src="{{ Storage::url($main_pr->file) }}" alt="" width="200">
        <div class="asd">
            <div>{{ $main_pr->price }}</div>
            <div>{{ $main_pr->old_price }}</div>
            <div>{{ $main_pr->name }}</div>
        </div>

        <div>
            <a href="{{ route('main_product.edit', ['main_product'=>$main_pr->id]) }}">редактировать</a>

            <form method="post" action="{{ route('main_product.destroy', ['main_product'=>$main_pr->id]) }}">
                @method('delete')
                @csrf

                <button>DELETE</button>
            </form>

        </div>
    </div>
@endforeach



</body>
</html>
