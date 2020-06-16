<header class="min-width-100 width-100 max-width-100 pos-fixed">
    <i class="material-icons menu pos-absolute">
        menu
    </i>
    <div class="display-none">
        <div></div>
        <div></div>
    </div>
    <img src="{{ asset('assets/photos/laravel-vue.png') }}" alt="{{ config('app.name', 'Laravel + Vue') }} Logo" title="{{ config('app.name', 'Laravel + Vue') }} Logo" class="logo min-width-auto width-auto max-width-100">
    <nav class="menu-link-container uppercase cur-point">
        @if (Route::has('welcome'))
            <a href="{{ route('welcome') }}" class="menu-link p-0-16 pos-relative font-black @if (Route::is('welcome')) active @endif">
                {{ __('home') }}
            </a>
        @endif
        <a href="" class="menu-link p-0-16 pos-relative font-black">
            {{ __('about') }}
        </a>
        <a href="" class="menu-link p-0-16 pos-relative font-black">
            {{ __('contact') }}
        </a>
        @guest
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="menu-link p-0-16 pos-relative font-black @if (Route::is('register')) active @endif">
                    {{ __('Register') }}
                </a>
            @endif
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="menu-link p-0-16 pos-relative font-black @if (Route::is('login')) active @endif">
                    {{ __('Login') }}
                </a>
            @endif
            {{--<a href="{{ route('account.register') }}" class="menu-link p-0-16 pos-relative font-black">
                {{ __('register') }}
            </a>
            <a href="{{ route('account.login') }}" class="menu-link p-0-16 pos-relative font-black">
                {{ __('login') }}
            </a>--}}
        @endguest
        <i class="material-icons font-black p-8 more_vert">
            more_vert
        </i>
        <div class="account cur-point">P</div>
    </nav>
</header>
<nav class="mobile-menu-link-container uppercase cur-point pos-fixed p-0-16">
    @if (Route::has('welcome'))
        <div class="min-width-auto width-auto max-width-100 dp-flex a-i-center">
            <i class="material-icons">
                home
            </i>
            <a href="{{ route('welcome') }}" class="m-l-16">
                {{ __('home') }}
            </a>
        </div>
    @endif
    <div class="min-width-auto width-auto max-width-100 dp-flex a-i-center">
        <i class="material-icons">
            info
        </i>
        <a href="" class="m-l-16">
            {{ __('about') }}
        </a>
    </div>
    <div class="min-width-auto width-auto max-width-100 dp-flex a-i-center">
        <i class="material-icons">
            contacts
        </i>
        <a href="" class="m-l-16">
            {{ __('contact') }}
        </a>
    </div>
    @guest
        @if (Route::has('register'))
            <div class="min-width-auto width-auto max-width-100 dp-flex a-i-center">
                <i class="material-icons">
                    how_to_reg
                </i>
                <a href="{{ route('register') }}" class="m-l-16">
                    {{ __('Register') }}
                </a>
            </div>
        @endif
        @if (Route::has('login'))
            <div class="min-width-auto width-auto max-width-100 dp-flex a-i-center">
                <i class="material-icons">
                    vpn_key
                </i>
                <a href="{{ route('login') }}" class="m-l-16">
                    {{ __('Login') }}
                </a>
            </div>
        @endif
    @endguest
</nav>
