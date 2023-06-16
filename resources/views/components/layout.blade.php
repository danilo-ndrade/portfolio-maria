<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/publicacoes.css') }}" rel="stylesheet">
    <link href='https://css.gg/css' rel='stylesheet'>
    <title>Maria Sucar</title>
</head>
<body>

    <div class="toggle-sidebar">
        <button>
            <i class="gg-math-plus"></i>
        </button>
    </div>

    {{-- SITE HEADER --}}
    <aside class="sidebar show-sidebar">
        <div class="sidebar-content">
            <header class="sidebar-header">
                <h1 class="title homepage-title">Maria Sucar</h1>
            </header>
            <nav>
                <ul class="nav-menu">
                    <li class="nav-menu-item"><a href="/">início</a></li>
                    <li class="nav-menu-item"><a href="/publicacoes">publicações</a></li>
                    <li class="nav-menu-item"><a href="">trabalhos</a></li>
                    <li class="nav-menu-item"><a href="">sobre</a></li>
                    <li class="nav-menu-item"><a href="">contato</a></li>
                </ul>
                @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button class="log-out-button">sair</button>
                </form>
                @endauth
            </nav>
        </div>
    </aside>
    {{-- SITE HEADER END --}}
    {{-- SITE CONTENT --}}
    <main class="main">
        {{$slot}}
    </main>
    {{-- SITE CONTENT END --}}

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>