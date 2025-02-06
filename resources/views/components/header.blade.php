<header id="header" class="{{ Route::currentRouteName() == 'home' ? 'alt' : '' }}">
    <span class="logo"><img src="{{ asset('images/logo.svg') }}" alt="" /></span>
    @if(Route::currentRouteName() == 'home')
    <h1>Stellar</h1>
    <p>Just another free, fully responsive site template<br /> built by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a>.</p>
    @else
    <header id="header">
        <h1>Generic</h1>
        <p>Ipsum dolor sit amet nullam</p>
    </header>
    @endif
</header>
<x-nav />