<header class="header">
    <div class="container header-container">
        <a href="{{ Route::has('home') ? route('home') : '/' }}" class="logo">
            <img src="/image/logo.svg" alt="Car Selling">
        </a>
        <nav class="nav">
            <a href="{{ Route::has('car.create') ? route('car.create') : '#' }}" class="btn btn-primary">Add New</a>
            <a href="{{ Route::has('signup') ? route('signup') : '#' }}" class="nav-link">Sign Up</a>
            <a href="{{ Route::has('login') ? route('login') : '#' }}" class="nav-link">Login</a>
        </nav>
    </div>
</header>
