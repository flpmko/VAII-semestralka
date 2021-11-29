<div class="top-nav">
    <a href="{{ route('home-page') }}" class="left">
        <img src="../imgs/ez-logo.svg" class="logo-image" alt="logo">
        DOMOV
    </a>
    <a href="{{ route('items-page') }}" class="{{ Request::routeIs('items-page') ? 'active' : '' }}">INVENTÁR</a>
    <a href="{{ route('rentals-page') }}" class="{{ Request::routeIs('rentals-page') ? 'active' : '' }}">PÔŽIČKY</a>
    <a href="{{ route('sets-page') }}" class="{{ Request::routeIs('sets-page') ? 'active' : '' }}">SETY</a>

    <div id="slide">
        <a id="toggle" href="{{ route('account-page') }}"
            class="{{ Request::routeIs('account-page') ? 'active right account-section' : 'right account-section' }}">
            <img id="account-icon" class="logo-image" alt="account icon" src="../imgs/icons/user-off.png" />
            ÚČET
        </a>

        <div class="hide">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                @auth
                    <div class="logout-container">
                        <img src="../imgs/icons/log-out.png" alt="log-out" class="logo-image-small">
                        <button id="logOutButton" type="submit">
                            Odhlásiť
                        </button>
                    </div>
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
