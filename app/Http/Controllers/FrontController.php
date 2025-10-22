<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('volontaire.index');
    }

    public function calendar()
    {
        return view('volontaire.calendar');
    }

    public function dashboard()
    {
        return view('volontaire.dashboard');
    }

    public function documents()
    {
        return view('volontaire.documents');
    }

    public function login()
    {
        return view('volontaire.login');
    }

    public function logout()
    {
        return view('volontaire.logout');
    }

    public function messages()
    {
        return view('volontaire.messages');
    }

    public function missions()
    {
        return view('volontaire.missions');
    }

    public function profile()
    {
        return view('volontaire.profile');
    }

    public function register()
    {
        return view('volontaire.register');
    }
}
