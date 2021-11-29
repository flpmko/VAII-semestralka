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
                    <button id="logOutButton" type="submit">
                        Odhlásiť
                    </button>
                @endauth

            </form>

            @guest
                <a id="logInButton" href="login">
                    Prihlásiť
                </a>

                <a id="regButton" href="register">
                    Registrovať
                </a>
            @endguest
        </div>
    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>

</div>
