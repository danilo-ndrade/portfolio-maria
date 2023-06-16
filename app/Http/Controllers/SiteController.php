<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    public function viewHomepage()
    {
        return view('home');
    }

    public function loginPage()
    {
        return view('login-page');
    }

    public function publicacoesPage()
    {
        return view('publicacoes');
    }
    
}
