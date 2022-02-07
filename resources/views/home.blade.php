@extends("layouts.master")
@section('obsah')
    <div class="container-home">
        <div style="z-index: -1; padding-bottom: 0;">
            <img src="../imgs/home.jpg" class="{{ Auth::user() ? 'home-img' : 'home-img logged-out' }}" alt="sound board">
        </div>
        <div class="centered welcome-text">
            Vitaj{{ Auth::user() ? ' ' . Auth::user()->name : '' }}!
            @guest
                <div class="search-bar logs">
                    <button type="button" class="btn-home"><a href="login">Prihlásiť</a></button>
                    <button type="button" class="btn-home"><a href="register">Registrovať</a></button>
                </div>
            @endguest
        </div>

    </div>
    @auth
        <div class="container-heading">
            <h3>NAPOSLEDY POŽIČANÉ</h3>
        </div>
        <div class="carrousel">
            @if ($lastRented)
                @foreach ($lastRented as $item)
                    <div class="card">
                        <a href="items">
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="item1" class="card-img">
                            @else
                                <img src="../imgs/icons/missing.png" alt="item1" class="card-img">
                            @endif
                        </a>
                        <div class="container-card">
                            <h4><b>{{ $item->name }}</b></h4>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="card">
                    <img src="../imgs/items/na.png" alt="item1" class="card-img">
                    <div class="container-card">
                        <h4><b>NIČ</b></h4>
                    </div>
                </div>
            @endif
        </div>
        <div class="container-heading">
            <h3>NEVRÁTENÉ PÔŽIČKY</h3>
        </div>
        <div class="carrousel">
            @if (!$notReturned || sizeof($notReturned) == 0)
                <div class="card">
                    <img src="../imgs/items/na.png" alt="item1" class="card-img">
                    <div class="container-card">
                        <h4><b>NIČ</b></h4>
                    </div>
                </div>
            @else
                @foreach ($notReturned as $rental)
                    <div class="card">
                        <a href="rentals">
                            <img src="../imgs/icons/rent.png" alt="item" class="card-img">
                        </a>
                        <div class="container-card">
                            <h4><b>{{ $rental->event_name }}</b></h4>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    @endauth
@endsection
