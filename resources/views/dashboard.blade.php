
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
<link href="{{ asset('css/cart-shopping.css') }}" rel="stylesheet">

@include('components.navbar')
    <div class="container">
        @yield('content')
    </div>
