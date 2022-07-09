<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuemSomosController extends Controller
{
    public function index()
    {
        return view('/quemsomos');
    }
}
