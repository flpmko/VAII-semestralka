<div class="top-nav">
    <a href="{{route('home-page')}}" class="left">
        <img src="../imgs/ez-logo.svg" class="logo-image" alt="logo">
        DOMOV
    </a>
    <a href="{{route('items-page')}}" class="{{Request::routeIs("items-page") ? "active" : ""}}">INVENTÁR</a>
    <a href="{{route('rentals-page')}}" class="{{Request::routeIs("rentals-page") ? "active" : ""}}">PÔŽIČKY</a>
    <a href="{{route('sets-page')}}" class="{{Request::routeIs("sets-page") ? "active" : ""}}">SETY</a>
    <a href="{{route('account-page')}}" class="{{Request::routeIs("account-page") ? "active right" : "right"}}" >
        <img class="logo-image"
             alt="account icon"
             src="../imgs/icons/user-off.png"/>
        ÚČET
    </a>
</div>