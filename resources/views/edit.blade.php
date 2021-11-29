<script>
    $(document).ready(
        function() {
            $('#type option[value=' + $Info->type + ']')
                .prop('selected', true);
        });
</script>

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

        <form action="{{ route('update') }}" method="POST">
            @csrf
            <h3>Upravte ľubovolné vlastnosti</h3>
            <hr>
            <input type="hidden" name="cid" value="{{ $Info->id }}">
            <div class="form-group">
                <div class="form-item">
                    <label for="name">Názov</label>
                    <input id="name" type="text" class="form-control" name="name" placeholder="názov zariadenia"
                        value="{{ $Info->name }}">
                    <span style="color: red">@error('name'){{ $message }} @enderror</span>
                </div>

                <div class="form-item">
                    <label for="quantity">Počet</label>
                    <input id="quantity" type="number" class="form-control" name="quantity" min="1"
                        value="{{ $Info->quantity }}">
                    <span style="color: red">@error('quantity'){{ $message }} @enderror</span>
                </div>
            </div>

            <div class="form-item">
                <label for="category">Určenie</label>
                <select name="category" id="category" option="{{ $Info->category }}">
                    <option value="audio">audio</option>
                    <option value="video">video</option>
                    <option value="svetlá">svetlá</option>
                    <option value="iné">iné</option>
                </select>
                <span style="color: red">@error('category'){{ $message }} @enderror</span>
            </div>
            <div class="form-item">
                <label for="type">Typ</label>
                <select name="type" id="type" value="{{ $Info->type }}">
                    <optgroup label="audio">
                        <option value="mic">mic</option>
                        <option value="PA">PA</option>
                        <option value="dibox">dibox</option>
                        <option value="stagebox">stagebox</option>
                    <optgroup label="video">
                        <option value="obrazovka">obrazovka</option>
                        <option value="projektor">projektor</option>
                        <option value="kamera">kamera</option>
                        <option value="objektív">objektív</option>
                    <optgroup label="svetlá">
                        <option value="svetlo">svetlo</option>
                    <optgroup label="všeobecné">
                        <option value="mixpult">mixpult</option>
                        <option value="kábel">kábel</option>
                        <option value="obal">obal</option>
                        <option value="stojan">stojan</option>
                        <option value="redukcia">redukcia</option>
                        <option value="iné">iné</option>
                </select>
                <span style="color: red">@error('type'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                <div class="form-item">
                    <label for="inputs">Inputy</label>
                    <input id="inputs" type="text" class="form-control" name="inputs" placeholder="..."
                        value="{{ $Info->inputs }}">
                    <span style="color: red">@error('inputs'){{ $message }} @enderror</span>
                </div>
                <div class="form-item">
                    <label for="outputs">Outputy</label>
                    <input id="outputs" type="text" class="form-control" name="outputs" placeholder="..."
                        value="{{ $Info->outputs }}">
                    <span style="color: red">@error('outputs'){{ $message }} @enderror</span>
                </div>
            </div>


            <div class="form-item">
                <label for="docs">Manuál</label>
                <input id="docs" type="file" class="form-control" name="docs" value="{{ $Info->docs }}">
                <span style="color: red">@error('docs'){{ $message }} @enderror</span>
            </div>
            <div class="form-item">
                <label for="image">Obrázok</label>
                <input id="image" type="file" class="form-control" name="image" value="{{ $Info->image }}">
                <span style="color: red">@error('image'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">ULOŽIŤ</button>
            </div>
        </form>
    </div>
@endsection
