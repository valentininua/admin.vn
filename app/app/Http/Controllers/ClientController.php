<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|min:11|numeric',

        ]);
        $client = new Client();
//        $user->name = $validatedData['name'];
//        $user->email = $validatedData['phone'];
//        $user->password = bcrypt($validatedData['password']);
//        $user->save();

       $uid = uniqid($validatedData['phone'].$validatedData['name'], true);

        dd( $uid );


        dd($request->get('name'));
        dd($request->all());
        return view('client.create.save', ['link'=>'http://localhost/client']);
//         - имя пользователя;
//         - Номер телефона.
//
//        После регистрации пользователь получает сгенерированную уникальную ссылку на главную
//        страницу, доступ к которой будет доступен в течение семи дней по этому уникальному
//        ссылкой. По истечении времени – ссылка становится недействительной.
    }

    public function main($id)
    {
        dd($id);
    }

//    public function save()
//    {
//        return view('client.create');
//
//        //страницу, доступ к которой будет доступен в течение семи дней по этому уникальному
//        //ссылкой. По истечении времени – ссылка становится недействительной.
//    }
//
//
//    public function  save()
//    {
//        // проверяем   ссылку она становится недействительной через 7 дней
//        //- кнопка для генерирования новой уникальной ссылки;
//        //- кнопка для деактивации текущей уникальной ссылки;
//    }



}
