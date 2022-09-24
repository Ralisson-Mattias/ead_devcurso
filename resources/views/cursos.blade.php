@extends('layouts.app')
@section('conteudo')

<body>
    <div class="pageheaderbg">
        <div class="cards">

            @foreach($cursos as $curso)

            <div class="card">
                <a href="/curso/{{ $curso->id }}"><img class="card_image" src="{{ URL::asset('img/' . $curso->imagem) }}" alt=""></a>
                <div class="card_content">
                    <h1 class="title_card"> {{ $curso->nome }} </h1>
                    <a>{{ $curso->descricao }}
                    </a>
                </div>
                <div class="card_info">
                    R$ {{ $curso->valor }}
                    <a href="/curso/{{ $curso->id }}" style="background-color: white; padding: 6px;">Acessar</a>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</body>
@endsection('conteudo')
@include('layouts.partials.menu')