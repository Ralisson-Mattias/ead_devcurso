@extends('layouts.app')
@section('conteudo')

<body>
    <div class="form_users">
        <form method="POST" action="{{ route('salvar_usuario') }}">
            <label>Nome do curso</label> <br>
            <input type="text" name="nome" /><br>
            <label>Descricao do curso</label><br>
            <input type="text" name="descricao" /><br>
            <label>Requisitos do curso</label><br>
            <input type="text" name="requisitos" /><br>
            <label>URL do Vimeo ou Youtube</label><br>
            <input type="text" name="video" /><br>
            <label>valor</label><br>
            <input type="text" name="valor" /><br>
            <label>Tempo Expiracao</label><br>
            <input type="date" name="tempo_expiracao" /><br>
            <button type="submit">Salvar</button>
        </form>
    </div>
</body>
@endsection('conteudo')
@include('layouts.partials.menu')