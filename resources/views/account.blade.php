@extends("layouts.master")
@section('obsah')
<div class="container-account top">
    <div class="item-75 account-greet">
        <h1 class="">Môj účet</h1>
        <h2 class="">Ahoj ferko!</h2>
        <h2 class="">Odtiaľto si môžeš menežovať svoj profil a osobné údaje.</h2>
    </div>
    <div class="item-25 item-avatar">
        <img class="avatar" src="../imgs/account.png" alt="avatar">
    </div>
</div>
<div class="container-heading-account">
    <img src="../imgs/icons/user-off.png" class="info-img" alt="user icon">
    <h3>OSOBNÉ ÚDAJE</h3>
    <img src="../imgs/icons/edit.png" alt="edit icon" class="info-img edit" onclick="handleClick('credentials')">
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
    <div class="item-75" id="credentials-enabled">
        <p>
            <input id="name" type="text" value="Fero">
            <label for="name"></label>
        </p>
        <p>
            <input id="surname" type="text" value="Mrkvička">
            <label for="surname"></label>
        </p>
        <p>
            <input id="username" type="text" value="ferko">
            <label for="username"></label>
        </p>
        <p>
            <input id="password" type="password" value="12345678">
            <label for="password"></label>
        </p>
        <p>
            <input id="date" type="date" value="1998-04-01">
            <label for="date"></label>
        </p>
        <p>
            <input id="male" type="radio" value="muž" name="sex-en" checked>
            <label for="male">muž</label>
            <input id="female" type="radio" value="žena" name="sex-en">
            <label for="female">žena</label>
        </p>
    </div>
    <div class="item-75" id="credentials-disabled">
        <p>
            <input id="name" type="text" value="Fero" disabled>
            <label for="name"></label>
        </p>
        <p>
            <input id="surname" type="text" value="Mrkvička" disabled>
            <label for="surname"></label>
        </p>
        <p>
            <input id="username" type="text" value="ferko" disabled>
            <label for="username"></label>
        </p>
        <p>
            <input id="password" type="password" value="12345678" disabled>
            <label for="password"></label>
        </p>
        <p>
            <input id="date" type="date" value="1998-04-01" disabled>
            <label for="date"></label>
        </p>
        <p>
            <input id="male" type="radio" value="muž" name="sex-dis" checked disabled>
            <label for="male">muž</label>
            <input id="female" type="radio" value="žena" name="sex-dis" disabled>
            <label for="female">žena</label>
        </p>
    </div>
    
</div>
<div class="container-heading-account">
    <img src="../imgs/icons/email-off.png" class="info-img" alt="email icon">
    <h3>KONTAKT</h3>
    <img src="../imgs/icons/edit.png" alt="edit icon" class="info-img edit" onclick="handleClick('contact')">
</div>
<div class="container-account">
    <div class="item-25 right">
        <p>mail: </p>
        <p>tel. číslo: </p>
    </div>
    <div class="item-75" id="contact-enabled">
        <p>
            <input id="email" type="text" value="ferko@gmail.com">
            <label for="email"></label>
        </p>
        <p>
            <input id="phone" type="text" value="0907 123 456">
            <label for="phone"></label>
        </p>
    </div>
    <div class="item-75" id="contact-disabled">
        <p>
            <input id="email" type="text" value="ferko@gmail.com" disabled>
            <label for="email"></label>
        </p>
        <p>
            <input id="phone" type="text" value="0907 123 456" disabled>
            <label for="phone"></label>
        </p>
    </div>
</div>
<div class="container-heading-account">
    <img src="../imgs/icons/address-off.png" class="info-img" alt="user icon">
    <h3>ADRESA</h3>
    <img src="../imgs/icons/edit.png" alt="edit icon" class="info-img edit" onclick="handleClick('address')">
</div>
<div class="container-account">
    <div class="item-25 right">
        <p>ulica: </p>
        <p>mesto: </p>
        <p>kraj: </p>
        <p>PSČ: </p>
        <p>štát: </p>
    </div>
    <div class="item-75" id="address-enabled">
        <p>
            <input id="street" type="text" value="Národná 12">
            <label for="street"></label>
        </p>
        <p>
            <input id="city" type="text" value="Horná dolná">
            <label for="city"></label>
        </p>
        <p>
            <input id="State" type="text" value="Prešovský">
            <label for="State"></label>
        </p>
        <p>
            <input id="PSC" type="text" value="12345">
            <label for="PSC"></label>
        </p>
        <p>
            <input id="country" type="text" value="Slovensko">
            <label for="country"></label>
        </p>
    </div>
    <div class="item-75" id="address-disabled">
        <p>
            <input id="street" type="text" value="Národná 12" disabled>
            <label for="street"></label>
        </p>
        <p>
            <input id="city" type="text" value="Horná dolná" disabled>
            <label for="city"></label>
        </p>
        <p>
            <input id="State" type="text" value="Prešovský" disabled>
            <label for="State"></label>
        </p>
        <p>
            <input id="PSC" type="text" value="12345" disabled>
            <label for="PSC"></label>
        </p>
        <p>
            <input id="country" type="text" value="Slovensko" disabled>
            <label for="country"></label>
        </p>
    </div>
</div>
<script src="{{ URL::asset('js/account.js') }}"></script>
@endsection