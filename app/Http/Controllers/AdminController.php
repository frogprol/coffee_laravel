<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    // 1. функция для маршрута который выводит форму авторизации
    public function form_admin(){
        //  вставляем название вьюшки для авторизации
        return view('form_admin');
    }
    // 2. функция для обработки формы авторизации админа
    // добавляем в скобки реквест для того, чтобы прочитать данные из формы (админа)
    public function log_in_admin(Request $request){
        //dd($request->all());


        // собираем данные из формы

        $data = $request->all();

        // проверяем auth

        // в массиве ключем является имя столбца базы данных в
        // таблице админ, а значение это данные из формы (собираем реквестом)

        $result = Auth::attempt([
            'login' => $data['login'],
            'password' => $data['password']
        ]);

        if ($result) {
            // указываем новый маршрут где будет админская панель
            return redirect('/admin_panel');
        } else {
            return back();
        }
    }

    public function admin_panel(){
        return view('admin_panel');
    }
}
