<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create($validated);

        if ($user) {
            return redirect()->route('login');
        }
    }


    // login 

    public function login(Request $request)
    {
        $dataMatch = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt($dataMatch)){
            return redirect()-> route('admin');
        }
    }

    public function adminPage(){
        if(Auth::check()){
            return view('admin');
        }
        else{
            return redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }
}
