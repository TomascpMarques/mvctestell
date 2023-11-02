<?php

namespace App\Http\Controllers\Teste;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Teste01Controller extends Controller
{
    public function Fabout(): View|Factory
    {
        return view('about');
    }

    public function Fcontactos(): View|Factory
    {
        return view('contactos');
    }
}
