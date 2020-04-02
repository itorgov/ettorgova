<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class MainController extends Controller
{
    public function index(): Renderable
    {
        return view('index');
    }
}
