<nav class="navbar navbar-expand-sm  gap-3">
    <div class="container-fluid">
    <a class="navbar-brand" href="/">Logo</a>
    <button class="navbar-toggler">&#9776;</button>
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Nos projets</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Palette de votre appartement</a></li>
        <li class="nav-item"><a class="nav-link" href="#">À propos de</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        <li class="nav-item" >
            <a class="nav-link cart-icon" href="#" onclick="toggleCart(event)">
                <img src="{{ asset('images/shop-cart.png') }}" alt="Explore votre shopping cart" height="25" width="25" style="padding-left:5px;">    
            </a>
        </li>
        @if (Route::has('login'))
            @auth
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}" style="width: 100%;height: 100%;">
                        @csrf
                        <button type="submit" class="nav-link" style="background: none;border:none;width: 100%;height: 100%; cursor: pointer;">Logout</button>
                    </form>
                </li>
                @if(Auth::check() && !Auth::user()->is_admin)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/user/espace_user') }}" >Profile</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/admin/espace_admin') }}" >Profile Admin</a>
                </li>
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" >Log in</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" >Register</a>
                    </li>
                @endif
            @endauth
        @endif
    </ul>
    @include('components.cart-shopping')
    @yield('content')
</div>
</nav>