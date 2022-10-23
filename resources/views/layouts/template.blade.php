<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fim Styles -->
    
	<!-- Scripts -->
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fim Scripts -->

	<!-- Início Template -->
	<title> @yield('title') </title>
	<!-- Fim Template -->

	<!-- Início Template -->
	<style>
		@yield('estilo')
		html{
			height: 100vh;
		}
		body{
			background-color: #333333;
			display: flex;
    		flex-direction: column;
    		min-height: 100vh;
		}
		footer{
			margin-top: auto;
		}
	</style>
	<!-- Fim Template -->

</head>
<body>
	<!-- Inicio menu -->
	 <header>
		<nav class="navbar navbar-expand-md navbar-light shadow-sm py-3" style="background-color: #616161;">
            <div class="container">
            @guest
                @if (Route::has('login') && Auth::user() == null)
                <a class="navbar-brand" href="{{ route('login') }}">
                        <span class="text-white" style="font-size: 18pt;">dio</span>
                        <span style="color: #039be5; font-size: 18pt;">docs</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                @elseif (Route::has('login') && Auth::user())
                <a class="navbar-brand" href="{{ route('home') }}">
                        <span class="text-white" style="font-size: 18pt;">dio</span>
                        <span style="color: #039be5; font-size: 18pt;">docs</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                @endif

                @if (Route::has('register'))
                @endif
                    @else
                    @if (Auth::user()->isAdmin())
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <span class="text-white" style="font-size: 18pt;">dio</span>
                        <span style="color: #039be5; font-size: 18pt;">docs</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            @else
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span class="text-white" style="font-size: 18pt;">dio</span>
                    <span style="color: #039be5; font-size: 18pt;">docs</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            @endif
            @endguest

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            @endif

                            @if (Route::has('register'))
                            @endif
                        @else
                            @if (Auth::user()->isAdmin())
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <a class="nav-link text-light" href="{{ route('listausuarios') }}">Usuários</a>
                                    <a class="nav-link text-light" href="{{ route('listatiposdio') }}">Tipos de DIO(s)</a>
                                </ul>
                            </div>
                            @elseif (Auth::user()->isLeitor())
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <a class="nav-link text-light" href="{{ route('listatiposdio') }}">Tipos de DIO(s)</a>
                                    </ul>
                                </div>
                            @elseif (Auth::user()->isTecnico())
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <a class="nav-link text-light" href="{{ route('listatiposdio') }}">Tipos de DIO(s)</a>
                                    </ul>
                                </div>
                            @endif
                        @endguest

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item me-1">
                                    <a class="btn btn-light" href="{{ route('login') }}" role="button">Entrar</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            {{ __('Sair') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
  	<!-- Fim menu -->

  	<!-- Início Template -->
	@yield('nav&footer')
	<!-- Fim Template -->

  	<!-- Footer -->
	<footer class="footer py-3" style="background-color: #616161;">
	    <div class="container text-center">
	        <span class="text-white" style="font-size: 18pt;">dio</span>
            <span style="color: #039be5; font-size: 18pt;">docs</span><br>
            <span class="text-white" style="font-size: 12pt;">Plataforma WEB para documentação de distribuidores internos ópticos.</span><br><br>
	    </div>
  	</footer>
    <!-- Fim footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>