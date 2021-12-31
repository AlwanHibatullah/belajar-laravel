<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'title' => 'About',
            'name' => 'Alwan Hibatullah',
            'email' => 'alwanhibatullah@gmail.com',
            'image' => 'poto.jpg'
        ]);
    }
}
