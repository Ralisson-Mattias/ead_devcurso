<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sitema EAD - DEVCURSO</title>
</head>

<body>
    <header>
        <a href='/'><img src="{{ URL::asset('img/logo.png') }}" /></a>
        <ul class="menu">
            @yield('menu_principal')
        </ul>

        <div class="profile">
            <i class="fa-solid fa-circle-user" style="font-size: 24px"></i>
            <span>Roberto Vieira Rezende</span>
        </div>
    </header>