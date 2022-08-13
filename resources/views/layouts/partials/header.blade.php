<header>
    <img src="{{ asset('img/logo.png') }}" />
    <ul class="menu">
        @yield("menu_principal")
    </ul>

    <div class="profile">
        <i class="fa-solid fa-circle-user" style="font-size: 24px"></i>
        <span>@yield('usuario')</span>
    </div>
</header>