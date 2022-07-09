<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaleConoscoController extends Controller
{
    public function index()
    {

        $professores = [
            'Nome' => 'Ralisson',
            'Idade' => 20,
            'Altura' => 1.74,
        ];

        return view('/faleconosco', compact('professores'));
    }
}
