<div class="top-nav">
    <a href="{{ route('home-page') }}" class="left">
        <img src="../imgs/ez-logo.svg" class="logo-image" alt="logo">
        DOMOV
    </a>
    <a href="{{ Auth::user() ? route('items-page') : route('login') }}"
        class="{{ Request::routeIs('items-page') ? 'active' : '' }}">INVENTÁR</a>
    <a href="{{ Auth::user() ? route('rentals-page') : route('login') }}"
        class="{{ Request::routeIs('rentals-page') ? 'active' : '' }}">PÔŽIČKY</a>
    <a href="{{ route('help-page') }}" class="{{ Request::routeIs('help-page') ? 'active' : '' }}">POMOC</a>

    <div id="slide">
        <a id="toggle" href="{{ Auth::user() ? route('account-page') : route('login') }}"
            class="{{ Request::routeIs('account-page') ? 'active right account-section' : 'right account-section' }}">
            <img id="account-icon" class="logo-image" alt="account icon" src="../imgs/icons/user-off.png" />
            ÚČET
        </a>

        <div class="hide">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                @auth
                    <button id="logOutButton" type="submit" class="log-out-button">
                        <img src="../imgs/icons/log-out.png" alt="log-out" class="logo-image-small">
                        Odhlásiť
                    </button>
                @endauth

            </form>

            @guest
                <a id="logInButton" href="login">
                    <img src="../imgs/icons/login.png" alt="login" class="logo-image-small">
                    Prihlásiť
                </a>

                <a id="regButton" href="register">
                    <img src="../imgs/icons/register.png" alt="register" class="logo-image-small">
                    Registrovať
                </a>
            @endguest
        </div>
    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>

</div>
