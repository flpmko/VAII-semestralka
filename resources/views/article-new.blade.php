@extends("layouts.master")
@section('obsah')
    <div class="centered-content new-item">

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

        <form action="article-add" method="POST" enctype=multipart/form-data>
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <a href="/help"><img src="../imgs/icons/back.png" alt="back" class="edit-page-back"></a>
                <h3>Vytvorenie nového článku</h3>
            </div>

            <hr>
            <div class="form-group">
                <div class="form-item">
                    <label for="heading">*Názov článku</label>
                    <input id="heading" type="text" class="form-control" name="heading" placeholder="názov článku"
                        value="{{ old('heading') }}">
                    <span style="color: red">@error('heading'){{ $message }} @enderror</span>
                </div>
            </div>

            <div class="form-group">
                <div class="form-item">
                    <label for="article">*Článok</label>
                    <input id="article" type="text" class="form-control" name="article" placeholder="article"
                        value="{{ old('article') }}">
                    <span style="color: red">@error('article'){{ $message }} @enderror</span>
                </div>
            </div>

            <div class="form-group">
                <div class="form-item">
                    <label for="image">*Obrázok</label>
                    <div class="file-group">
                        <div class="form-item">
                            <input id="image" type="file" class="form-control" name="image" accept="image/*">
                        </div>
                        <div class="form-item">
                            <button id="image-button" type="button" onclick="clearInputFile('image')"><img
                                    src="../imgs/icons/remove.png" alt="remove" class="form-icon"></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <span style="color: red">@error('image'){{ $message }} @enderror</span>
            </div>

            <hr>
            <p>polia označené * sú povinné</p>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">VYTVORIŤ</button>
            </div>

        </form>
    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
@endsection
