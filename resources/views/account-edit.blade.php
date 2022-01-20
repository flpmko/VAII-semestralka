@extends("layouts.master")
@section('obsah')

    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif

    <form action="{{ route('account-update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-account top">
            <div class="item-75 account-greet">
                <h1 class="">Môj účet</h1>
                <h2 class="">Ahoj{{ Auth::user() ? ' ' . Auth::user()->name : '' }}!</h2>
                <h2 class="">Odtiaľto si môžeš menežovať svoj profil a osobné údaje.</h2>
            </div>
            <div class="item-25 item-avatar">
                <img class="avatar" src="../imgs/account.png" alt="avatar">
            </div>
        </div>
        <div class="container-heading-account">
            <img src="../imgs/icons/user-off.png" class="info-img" alt="user icon">
            <h3>OSOBNÉ ÚDAJE</h3>
            <button class="account-submit-button" type="submit">
                <img src="../imgs/icons/save.png" alt="edit icon" class="info-img edit">
            </button>
        </div>
        <div class="container-account">
            <div class="item-25 right">
                <p>krstné meno: </p>
                <p>priezvisko: </p>
                <p>používateľské meno: </p>
                <p>heslo: </p>
                <p>dátum narodenia: </p>
                <p>pohlavie: </p>
            </div>
            <div class="item-25 input" id="credentials">
                <input type="hidden" name="cid" value="{{ $Info->id }}">
                <p>
                    <input id="name" name="name" type="text" value="{{ old('name', $Info->name) }}">
                    <label for="name"></label>
                </p>
                <p>
                    <input id="surname" name="surname" type="text" value="{{ old('surname', $Info->surname) }}">
                    <label for="surname"></label>
                </p>
                <p>
                    <input id="username" name="username" type="text" value="{{ old('username', $Info->username) }}">
                    <label for="username"></label>
                </p>
                <p>
                    <input id="password" type="password" name="password" value="{{ old('password', $Info->password) }}">
                    <label for="password"></label>
                </p>
                <p>
                    <input id="birthdate" type="date" name="birthdate" value="{{ old('birthdate', $Info->birthdate) }}">
                    <label for="birthdate"></label>
                </p>
                <p>
                    <input id="male" type="radio" value="MALE" name="sex" {{ $Info->sex == 'MALE' ? 'checked' : '' }}>
                    <label for="male">muž</label>
                    <input id="female" type="radio" value="FEMALE" name="sex"
                        {{ $Info->sex == 'FEMALE' ? 'checked' : '' }}>
                    <label for="female">žena</label>
                </p>
            </div>
            <div class="item-50" id="errors-1">
                <p style="color: red">@error('name'){{ $message }} @enderror</p>
                <p style="color: red">@error('surname'){{ $message }} @enderror</p>
                <p style="color: red">@error('username'){{ $message }} @enderror</p>
                <p style="color: red">@error('password'){{ $message }} @enderror</p>
                <p style="color: red">@error('birthdate'){{ $message }} @enderror</p>
                <p style="color: red">@error('sex'){{ $message }} @enderror</p>
            </div>

        </div>
        <div class="container-heading-account">
            <img src="../imgs/icons/email-off.png" class="info-img" alt="email icon">
            <h3>KONTAKT</h3>
        </div>
        <div class="container-account">
            <div class="item-25 right">
                <p>mail: </p>
                <p>tel. číslo: </p>
            </div>
            <div class="item-25 input" id="contact-enabled">
                <p>
                    <input id="email" type="email" name="email" value="{{ old('email', $Info->email) }}">
                    <label for="email"></label>
                </p>
                <p>
                    <input id="phone" type="tel" name="phone" placeholder="0901 234 567" pattern="[0-9]{4} [0-9]{3} [0-9]{3}"
                        value="{{ old('phone', $Info->phone) }}">
                    <label for="phone"></label>
                </p>
            </div>
            <div class="item-50" id="errors-2">
                <p style="color: red">@error('email'){{ $message }} @enderror</p>
                <p style="color: red">@error('phone'){{ $message }} @enderror</p>
            </div>

        </div>
        <div class="container-heading-account">
            <img src="../imgs/icons/address-off.png" class="info-img" alt="user icon">
            <h3>ADRESA</h3>
        </div>
        <div class="container-account">
            <div class="item-25 right">
                <p>ulica: </p>
                <p>mesto: </p>
                <p>kraj: </p>
                <p>PSČ: </p>
                <p>štát: </p>
            </div>
            <div class="item-25 input" id="address-enabled">
                <p>
                    <input id="street" type="text" name="street" placeholder="Národná 1" value="{{ old('street', $Info->street) }}">
                    <label for="street"></label>
                </p>
                <p>
                    <input id="city" type="text" name="city" placeholder="Bratislava" value="{{ old('city', $Info->city) }}">
                    <label for="city"></label>
                </p>
                <p>
                    <input id="county" type="text" name="county" placeholder="Bratislavský" value="{{ old('county', $Info->county) }}">
                    <label for="county"></label>
                </p>
                <p>
                    <input id="psc" type="text" name="psc" placeholder="01001" value="{{ old('psc', $Info->psc) }}">
                    <label for="psc"></label>
                </p>
                <p>
                    <input id="state" type="text" name="state" placeholder="Slovensko" value="{{ old('state', $Info->state) }}">
                    <label for="state"></label>
                </p>
            </div>
            <div class="item-50" id="errors-3">
                <p style="color: red">@error('street'){{ $message }} @enderror</p>
                <p style="color: red">@error('city'){{ $message }} @enderror</p>
                <p style="color: red">@error('county'){{ $message }} @enderror</p>
                <p style="color: red">@error('psc'){{ $message }} @enderror</p>
                <p style="color: red">@error('state'){{ $message }} @enderror</p>
            </div>
        </div>
    </form>
@endsection
