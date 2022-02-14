<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function signup(Request $request)
    {
        if ($request->username == "a" && $request->password == "1") //Amorcito 21102017
        {
            return redirect('/home');
        }
        else
        {
            return back()->withErrors(['password' => ['Porfis ingresa bien los datos.']]);
        }
    }
}
