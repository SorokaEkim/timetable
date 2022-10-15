<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function save(Request $request) {
        if(Auth::check()) {
            return redirect(route('user.personal-area'));
        }

        $validateFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required',
        ]);

        if(User::where('email', $validateFields['email'])->exists()) {
            return redirect()->to(route('user.registration'))->withErrors([
                'email' => 'Такой пользователь уже зарегистрирован'
            ]);
        }


        $user = new User();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->save();

        if($user){
            Auth::login($user);
            return redirect()->to(route('user.personal-area'));
        }

        return redirect()->to(route('user.login'))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
}
