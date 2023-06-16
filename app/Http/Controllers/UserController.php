<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $incomingFields = $request->validate([
            'user' => 'required',
            'password' => 'required' 
        ]);

       if(auth()->attempt(['name' => $incomingFields['user'], 'password' => $incomingFields['password']])) {
        $request->session()->regenerate();
        return redirect('/');
       }else {
        return redirect('/login-page');
       }

    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/login-page');
    }

    public function register(Request $request) {
        $incomingFields = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        User::create($incomingFields);
    }
}
