<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);

// 1. делаем авторизацию админа, отправляемся на форму с логином и паролем
Route::get('/main_admin', [\App\Http\Controllers\AdminController::class, 'form_admin']);

// создаем маршрут для обработки формы заполнения логина и пароля админа, название этой ссылки пишем в action

Route::post('/main_admin', [\App\Http\Controllers\AdminController::class, 'log_in_admin']);



Route::get('/admin_panel', [\App\Http\Controllers\AdminController::class, 'admin_panel'])
->name('admin_panel');

//для редактирования блока с новостями создаем ресурстный маршрут
// указываем имя контроллера без квадратных скобок потому что это ресурс
// создаем новый ресурсный контроллер
Route::resource('news', \App\Http\Controllers\NewsController::class);

Route::resource('banner', \App\Http\Controllers\BannerController::class);

Route::resource('section', \App\Http\Controllers\SectionController::class);

Route::resource('product', \App\Http\Controllers\ProductController::class);

Route::resource('main_product', \App\Http\Controllers\Main_ProductController::class);
