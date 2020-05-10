<header class="min-width-100 width-100 max-width-100 pos-fixed d-flex j-c-space-between a-i-center">
    <i class="material-icons menu pos-absolute">
        menu
    </i>
    {{--<div class="close-bar-container flex-dir-column j-c-space-evenly a-i-center">--}}
    <div class="display-none">
        <div></div>
        <div></div>
    </div>
    @if (Route::has('welcome'))
        <a href="{{ route('welcome') }}" class="logo-container d-flex j-c-center a-i-center">
            <img src="{{ asset('assets/photos/laravel-vue.png') }}" alt="{{ config('app.name', 'Laravel + Vue') }} Logo" title="{{ config('app.name', 'Laravel + Vue') }} Logo" class="logo min-width-auto width-auto max-width-100">
        </a>
    @endif
    <nav class="menu-link-container d-flex j-c-space-evenly a-i-center uppercase cur-point">
        @if (Route::has('welcome'))
            <a href="{{ route('welcome') }}" class="menu-link p-0-16 pos-relative font-primary-color active">
                {{ __('home') }}
            </a>
        @endif
        <a href="" class="menu-link p-0-16 pos-relative font-primary-color">
            {{ __('about') }}
        </a>
        <a href="" class="menu-link p-0-16 pos-relative font-primary-color">
            {{ __('contact') }}
        </a>
        @guest
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="menu-link p-0-16 pos-relative font-primary-color">
                    {{ __('sign up') }}
                </a>
            @endif
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="menu-link p-0-16 pos-relative font-primary-color">
                    {{ __('sign in') }}
                </a>
            @endif
            {{--<a href="{{ route('account.register') }}" class="menu-link p-0-16 pos-relative font-primary-color">
                {{ __('register') }}
            </a>
            <a href="{{ route('account.login') }}" class="menu-link p-0-16 pos-relative font-primary-color">
                {{ __('login') }}
            </a>--}}
        @endguest
        <i class="material-icons font-primary-color p-4 more_vert">
            more_vert
        </i>
    </nav>
</header>
<nav class="mobile-menu-link-container d-flex j-c-space-evenly a-i-center uppercase cur-point pos-fixed p-0-16">
    @if (Route::has('welcome'))
        <div class="min-width-auto width-auto max-width-100 d-flex a-i-center">
            <i class="material-icons pos-absolute">
                arrow_back
            </i>
            <a href="{{ route('welcome') }}" class="logo-container d-flex j-c-center a-i-center">
                <img src="{{ asset('assets/photos/laravel-vue.png') }}" alt="Laravel + Vue" title="Laravel + Vue" class="logo min-width-auto width-auto max-width-100">
            </a>
        </div>
    @endif
    @if (Route::has('welcome'))
        <div class="min-width-auto width-auto max-width-100 d-flex a-i-center">
            <i class="material-icons">
                home
            </i>
            <a href="{{ route('welcome') }}" class="m-l-16">
                {{ __('home') }}
            </a>
        </div>
    @endif
    <div class="min-width-auto width-auto max-width-100 d-flex a-i-center">
        <i class="material-icons">
            info
        </i>
        <a href="" class="m-l-16">
            {{ __('about') }}
        </a>
    </div>
    <div class="min-width-auto width-auto max-width-100 d-flex a-i-center">
        <i class="material-icons">
            contacts
        </i>
        <a href="" class="m-l-16">
            {{ __('contact') }}
        </a>
    </div>
    @guest
        @if (Route::has('register'))
            <div class="min-width-auto width-auto max-width-100 d-flex a-i-center">
                <i class="material-icons">
                    how_to_reg
                </i>
                <a href="{{ route('register') }}" class="m-l-16">
                    {{ __('sign up') }}
                </a>
            </div>
        @endif
        @if (Route::has('login'))
            <div class="min-width-auto width-auto max-width-100 d-flex a-i-center">
                <i class="material-icons">
                    vpn_key
                </i>
                <a href="{{ route('login') }}" class="m-l-16">
                    {{ __('sign in') }}
                </a>
            </div>
        @endif
    @endguest
</nav>
