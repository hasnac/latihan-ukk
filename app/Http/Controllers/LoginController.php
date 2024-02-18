<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function login_action(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(["username" => $credentials["username"], "password" => $credentials["password"]])) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'admin') {
                return redirect()->intended('/dashboard');
            } elseif (auth()->user()->role == 'staff') {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/');
            }

            return redirect()->intended('/dashboard');
        }
        // if(Auth::attempt(["username"=>$cek["username"], "password"=> $cek["password"]])){
        //     $request->session()->regenerate();
        //     if(auth()->user()->role == 'admin'){
        //         return redirect()->intended('/dashboard');
        //     }elseif(auth()->user()->role == 'staff'){
        //         return redirect()->intended('/dashboard');
        //     }else{
        //         return redirect()->intended('/');
        //     }
        //     return redirect()->intended('/');
        // }
        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }
    public function create()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'nik' => 'required|unique:users',
            'alamat' => 'required',
            'telfon' => 'required|max:13',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ], [
            'name.required' => 'Required',
            'username.required'  => 'Required',
            'username.unique'  => 'Required',
            'nik.required'  => 'Required',
            'nik.unique'  => 'Required',
            'alamat.required' => 'Required',
            'telfon.required' => 'Required',
            'password.required' => 'Password harus diisi',
            'password_confirm.required' => 'Password harus diisi',
        ]);
        User::create($credentials);
        return redirect()->route('login')->with('success', 'Register succses');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
