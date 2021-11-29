@extends("layouts.master")
@section('obsah')
    <div class="register-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Registrácia</h1>
            <p>Prosím vyplňte nasledovné údaje pre vytvorenie účtu</p>
            <hr>

                <div>
                    <label for="name"><b>Meno</b></label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Jožko Mrkvička" required autofocus />
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email"><b>E-mail</b></label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="e-mail@gmail.com" required />
                </div>
                <!-- Password -->
                <div>
                    <label for="password"> <b>Heslo</b></label>
                    <input id="password" type="password" name="password" placeholder="heslo" required autocomplete="new-password" />
                </div>
                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation"><b>Potvrďte heslo</b></label>
                    <input id="password_confirmation" type="password" name="password_confirmation" placeholder="heslo" required />
                </div>
                <div class="signin">
                    <button class="registerbtn" type="submit">
                        Registruj sa
                    </button>

                    <a href="{{ route('login') }}">
                        Už ste zaregistrovaný/á?
                    </a>

                </div>
        </form>
    </div>
@endsection
