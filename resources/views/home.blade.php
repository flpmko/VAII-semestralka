@extends("layouts.master")
@section('obsah')
<div class="container-home">
    <img src="../imgs/home.jpg" class="home-img" alt="sound board">
    <div class="centered welcome-text">Vitaj ferko!</div>
</div>
<div class="container-heading">
    <h3>NAPOSLEDY POŽIČANÉ</h3>
</div>
<div class="carrousel">
    <div class="card">
        <img src="{{URL::asset('/imgs/items/sm58.jpg')}}" alt="item1" class="card-img">
        <div class="container-card">
            <h4><b>Shure SM58</b></h4>
        </div>
    </div>
    <div class="card">
        <img src="../imgs/items/sm57.jpeg" alt="item2" class="card-img">
        <div class="container-card">
            <h4><b>Shure SM57</b></h4>
        </div>
    </div>
    <div class="card">
        <img src="../imgs/items/beta52.jpg" alt="item3" class="card-img">
        <div class="container-card">
            <h4><b>Shure Beta 52A</b></h4>
        </div>
    </div>
    <div class="card">
        <img src="../imgs/items/km184.jpg" alt="item4" class="card-img">
        <div class="container-card">
            <h4><b>Neumann KM184</b></h4>
        </div>
    </div>
</div>
<div class="container-heading">
    <h3>NEVRÁTENÉ PÔŽIČKY</h3>
</div>
<div class="carrousel">
    <div class="card">
        <img src="../imgs/items/na.png" alt="item1" class="card-img">
        <div class="container-card">
            <h4><b>NIČ</b></h4>
        </div>
    </div>
</div>
<div class="container-heading">
    <h3>MOJE SETY</h3>
</div>
<div class="carrousel">
    <div class="card">
        <img src="../imgs/camp.jpg" alt="item1" class="card-img">
        <div class="container-card">
            <h4><b>KECY</b></h4>
        </div>
    </div>
    <div class="card">
        <img src="../imgs/recording.jpeg" alt="item2" class="card-img">
        <div class="container-card">
            <h4><b>Nahrávanie</b></h4>
        </div>
    </div>
    <div class="card">
        <img src="../imgs/livestream.jpeg" alt="item3" class="card-img">
        <div class="container-card">
            <h4><b>Live stream</b></h4>
        </div>
    </div>
</div>
@endsection