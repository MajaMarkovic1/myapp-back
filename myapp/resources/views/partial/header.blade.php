<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <div class="navbar-brand">MyApp</div>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            
                <!-- Authentication Links -->
                @guest
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Sign up') }}</a>
                        @endif
                    </li>
                </ul>
                @else
                    <div class="navbar-brand">{{ auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                    

                        <a class="nav-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                
                @endguest
            
        </div>
    </div>
</nav>