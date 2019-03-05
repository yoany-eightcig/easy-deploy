<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public $webroot = [
        "laravel" => "/public",
        "python" => "/",
        "symfony" => "/web",
        "php" => "/",
        "html" => "/",
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with(["webroot" => $this->webroot]);
    }
}
