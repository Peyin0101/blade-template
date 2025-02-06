<nav id="nav">
    <ul>
        <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">About</a></li>
        <li><a href="{{ route('get-started') }}" class="{{ Route::currentRouteName() == 'get-started' ? 'active' : '' }}">Get Started</a></li>
        <li><a href="{{ route('contact') }}" class="{{ Route::currentRouteName() == 'home' ? 'contact' : '' }}">Contact</a></li>
    </ul>
</nav>