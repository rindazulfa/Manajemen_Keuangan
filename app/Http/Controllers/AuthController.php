<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        if(Auth::check()){
            return redirect('/dashboard');
        }
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }else{
            $user = new User;
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->password = Hash::make($request->get('password'));
            $user->save();
            return redirect('/login');
        }



    }


    public function login()
    {
        if(Auth::check()){
            return redirect('/dashboard');
        }
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'email'  => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator->errors());
        }else{
            $email = $request->get('email');
            $password = $request->get('password');
            if(Auth::attempt(['email' => $email, 'password' => $password])){
                Auth::user();
                return redirect('/dashboard');
            }
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
