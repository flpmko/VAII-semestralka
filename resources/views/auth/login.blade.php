@extends("layouts.master")
@section('obsah')
    <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
            
            <div class="form-group">
                <a href="/"><img src="../imgs/icons/back-black.png" alt="back" class="edit-page-back"></a>
                <h1>Prihlásenie</h1>
            </div>
            @csrf

            <div class="container-login">
                <!-- Email -->
                <div class="container-login-item">
                    <label for="email" class="login-label">E-mail</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="e-mail" required
                        autofocus />
                </div>

                <!-- Password -->
                <div class="container-login-item">
                    <label for="password" class="login-label">Heslo</label>
                    <input id="password" type="password" name="password" placeholder="heslo" required
                        autocomplete="current-password" />
                    <span style="color: black; font-style: italic">@error('email'){{ $message }} @enderror</span>
                </div>

                <div>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            Zabudli ste heslo?
                        </a>
                    @endif

                    <button type="submit">Prihlásiť sa</button>
                </div>

                <!-- Remember Me -->
                <div>
                    <label for="remember_me">
                        <input id=" remember_me" type="checkbox" name="remember" checked>
                        <span>Zapamätaj si ma</span>
                    </label>
                </div>
            </div>


        </form>
    </div>
@endsection
