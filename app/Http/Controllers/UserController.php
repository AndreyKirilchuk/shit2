<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('pages/login');
    }

    public function getSignup()
    {
        return view('pages/signup');
    }

    public function postLogin(Request $request)
    {
        $v = Validator::make($request->all(),[
           'login' => 'required|string',
           'password' => 'required|string|min:6'
        ]);

        if($v->fails())
        {
            return redirect()->back()->withErrors($v);
        }

        if(auth()->attempt($request->only('login', 'password')))
        {
            return redirect('/');
        }
        else
        {
            return redirect()->back()->withErrors('Не верный логин или пароль');
        }
    }

    public function postSignup(Request $request)
    {
        $v = Validator::make($request->all(),[
            'login' => 'required|string|unique:users',
            'name' => 'required|string',
            'email' => 'required|string|email',
            'number' => 'required|string',
            'password' => 'required|string|min:6'
        ]);

        if($v->fails())
        {
            return redirect()->back()->withErrors($v);
        }

        if($request->password !== $request->password2)
        {
            return redirect()->back()->withErrors('Пароли не совпадают');
        }

        if(auth()->attempt($request->only('login', 'password')))
        {
            return redirect('/');
        }
        else
        {
            return redirect()->back()->withErrors('Не верный логин или пароль');
        }

        $user = User::create([
           'login' => $request->login,
            'name' => $request->name,
           'email' => $request->email,
            'number' => $request->number,
            'password' => Hash::make($request->password),
            'level' => 'user'
        ]);

        auth()->login($user);

        return redirect('/');
    }

    public function logout()
    {
        auth()->guard('web')->logout();

        return redirect('/login');
    }
}
