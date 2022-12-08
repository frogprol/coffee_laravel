<!doctype html>
<html lang="ru">
<head>
    <style>
        .rr{
            display: flex;
            margin: 20px;
        }
        .cc{
            margin-left: 20px;
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

<a href="{{ route('product.create') }}">Создать продукт</a>

<a class="main" href="{{ route('admin_panel') }}">Главная</a>

    @foreach($ppp as $product)
        <div class="rr">
            <img src="{{ Storage::url($product->file) }}" alt="" width="200">

            <div class="cc">
                <div>{{ $product->price }}</div>
                <div>{{ $product->old_price }}</div>
                <div>{{ $product->name }}</div>
            </div>

            <div>

                <a href="{{ route('product.edit', ['product'=>$product->id]) }}">редактировать</a>

                <form action="{{ route('product.destroy', ['product'=>$product->id]) }}" method="post">
                    @csrf
                    @method('delete')

                    <button>DELETE</button>
                </form>

            </div>
        </div>

    @endforeach

</body>
</html>
