<?php

namespace App\Http\Controllers;


use App\Whatsapp;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models= Whatsapp::all();
        return view('home');
    }
}
