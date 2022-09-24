<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursosController extends Controller
{
    public function index()
    {
        $cursos = DB::select("select * from cursos");
        return view('cursos', compact('cursos'));
    }

    public function show_cursos($id)
    {
        $curso = Curso::where('id', '=', $id)->get();
        return view('curso', compact('curso'));
    }

    public function cadastro()
    {
        $professores = $this->_getAllTeachers();
        return view('cad_cursos', compact('professores'));
    }

    public function salvar_curso(Request $request)
    {
        Curso::create($request->all());
        $professores = $this->_getAllTeachers();
        return view("cad_cursos", compact('professores'));
    }

    private function _getAllTeachers()
    {
        return User::where("grupo", "=", "professor-admin")->orWhere("grupo", "=", "professor")->get();
    }
}
