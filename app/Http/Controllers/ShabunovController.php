<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ShabunovController extends Controller
{
/*ShabunovController был создан командой php artisan make:controller имя контролера. 
3 варианта праса информации с переменных name и date 
    public function index(){
        return view('welcome',);// вывод домашней страницы Laravel
    }
    public function index(){//1
        return view('welcome',
    [
        'name' => 'User',//переменная пользователь
        'date' => date('d-m-Y')//переменная дата с параметрами день, месяц, год
    ]);
    }
    public function index(){//2
        $name = 'User';
        $date = date('d-m-Y');
        return view('welcome', compact('name','date'));
    }
    public function index(){//3
        return view('welcome')->with('name','User')->with('date',date('d-m-y'));
    }
*/
}
