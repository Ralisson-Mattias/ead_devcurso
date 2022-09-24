@extends('layouts.app')
@include('layouts.partials.menu')
@section('menu_lateral')
<nav>
    <h3 class="course_title">{{$curso[0]->nome}}</h3>
    @foreach($curso as $cursos_detalhe)
    <!-- Módulo -->
    @foreach($cursos_detalhe->modulos_exibir as $modulos)
    <div class="module">
        <h4 class="module_title">{{ $modulos->nome }}</h4>
        <ul class="module_list">
            <!-- Aulas-->
            @foreach($modulos->aulas_exibir as $aulas)
            <li><a href="#">{{ $aulas->nome }}</a></li>
            @endforeach
        </ul>
    </div>
    @endforeach
    @endforeach
</nav>
@endsection

@section('conteudo')
Teste de conteúdo
@endsection