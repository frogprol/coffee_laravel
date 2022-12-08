<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    // поскольку имя не в единственном числе , нет свзи между моделью и
    // таблицей в БД, прописывам команду на какую таблицу в БД должна сотреть эта модель
    protected $table = 'news';
}
