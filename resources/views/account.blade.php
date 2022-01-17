@extends("layouts.master")
@section('obsah')
    @auth
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
            <a class="info-img edit" href="/account-edit/{{ Auth::user()->id }}">
                <img src="../imgs/icons/edit.png" alt="edit icon" class="info-img edit">
            </a>
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

            <div class="item-75" id="credentials-disabled">
                <p>
                    <input id="name" type="text" value="{{ Auth::user() ? Auth::user()->name : 'NA' }}" disabled>
                    <label for="name"></label>
                </p>
                <p>
                    <input id="surname" type="text" value="{{ Auth::user() ? Auth::user()->surname : 'NA' }}" disabled>
                    <label for="surname"></label>
                </p>
                <p>
                    <input id="username" type="text" value="{{ Auth::user() ? Auth::user()->username : 'NA' }}" disabled>
                    <label for="username"></label>
                </p>
                <p>
                    <input id="password" type="password" value="{{ Auth::user() ? Auth::user()->password : 'NA' }}" disabled>
                    <label for="password"></label>
                </p>
                <p>
                    <input id="birthdate" type="birthdate" value="{{ Auth::user() ? Auth::user()->birthdate : 'NA' }}"
                        disabled>
                    <label for="date"></label>
                </p>
                <p>
                    <input id="male" type="radio" value="MALE" name="sex-dis"
                        {{ Auth::user()->sex == 'MALE' ? 'checked' : '' }} disabled>
                    <label for="male">muž</label>
                    <input id="female" type="radio" value="FEMALE" name="sex-dis"
                        {{ Auth::user()->sex == 'FEMALE' ? 'checked' : '' }} disabled>
                    <label for="female">žena</label>
                </p>
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

            <div class="item-75" id="contact-disabled">
                <p>
                    <input id="email" type="mail" value="{{ Auth::user() ? Auth::user()->email : 'NA' }}" disabled>
                    <label for="email"></label>
                </p>
                <p>
                    <input id="phone" type="tel" placeholder="0901 234 567" pattern="[0-9]{4} [0-9]{3} [0-9]{3}"
                        value="{{ Auth::user() ? Auth::user()->phone : 'NA' }}" disabled>
                    <label for="phone"></label>
                </p>
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

            <div class="item-75" id="address-disabled">
                <p>
                    <input id="street" type="text" placeholder="Národná 1"
                        value="{{ Auth::user() ? Auth::user()->street : 'NA' }}" disabled>
                    <label for="street"></label>
                </p>
                <p>
                    <input id="city" type="text" placeholder="Bratislava"
                        value="{{ Auth::user() ? Auth::user()->city : 'NA' }}" disabled>
                    <label for="city"></label>
                </p>
                <p>
                    <input id="county" type="text" placeholder="Bratislavský"
                        value="{{ Auth::user() ? Auth::user()->county : 'NA' }}" disabled>
                    <label for="county"></label>
                </p>
                <p>
                    <input id="psc" type="text" placeholder="01001" value="{{ Auth::user() ? Auth::user()->psc : 'NA' }}"
                        disabled>
                    <label for="psc"></label>
                </p>
                <p>
                    <input id="state" type="text" placeholder="Slovensko"
                        value="{{ Auth::user() ? Auth::user()->state : 'NA' }}" disabled>
                    <label for="state"></label>
                </p>
            </div>
        </div>
    @endauth
@endsection
