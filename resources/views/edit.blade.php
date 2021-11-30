<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // window.onload = function() {
    //     document.getElementById('category').getElementsByTagName('option')[2].selected = 'selected'
    // };
    // $(document).ready(function() {
    //     $("#docs").change(function() {

    //         if ($("#docs") && $('#docs').val() == '') {
    //             console.log("null");
    //             $("#docs-button").addClass("hidden");

    //         }
    //         if ($("#docs") && $('#docs').val() != '') {
    //             console.log("not null");
    //             $("#docs-button").removeClass("hidden");
    //         }
    //     });
    // // // });
    if ($("#docs") && $('#docs').length == 0) {
        console.log("fun");
        // console.log(`image`, $Info->image);
        $("#docs-button").addClass("hidden");
    }
    if ($("#docs") && $('#docs').length != 0) {
        console.log($('#docs') ,"not null");
        $("#docs-button").removeClass("hidden");
    }
    
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

        <form action="{{ route('update') }}" method="POST" enctype=multipart/form-data>
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
                <select name="category" id="category">
                    @foreach (['audio', 'video', 'svetlá', 'iné'] as $item)
                        <option value="{{ $item }}" @if ($item == $Info->category)
                            selected
                    @endif
                    >{{ $item }}</option>
                    @endforeach
                </select>
                <span style="color: red">@error('category'){{ $message }} @enderror</span>
            </div>
            <div class="form-item">
                <label for="type">Typ</label>
                <select name="type" id="type">
                    <optgroup label="audio">
                        @foreach (['mic', 'PA', 'dibox', 'stagebox'] as $audioItem)
                            <option value="{{ $audioItem }}" @if ($audioItem == $Info->type)
                                selected
                        @endif
                        >{{ $audioItem }}</option>
                        @endforeach
                    <optgroup label="video">
                        @foreach (['obrazovka', 'kamera', 'objektív', 'projektor'] as $videoItem)
                            <option value="{{ $videoItem }}" @if ($videoItem == $Info->type)
                                selected
                        @endif
                        >{{ $videoItem }}</option>
                        @endforeach
                    <optgroup label="svetlá">
                        @foreach (['svetlo'] as $lightItem)
                            <option value="{{ $lightItem }}" @if ($lightItem == $Info->type)
                                selected
                        @endif
                        >{{ $lightItem }}</option>
                        @endforeach
                    <optgroup label="všeobecné">
                        @foreach (['mixpult', 'kábel', 'obal', 'stojan', 'redukcia', 'iné'] as $otherItem)
                            <option value="{{ $otherItem }}" @if ($otherItem == $Info->type)
                                selected
                        @endif
                        >{{ $otherItem }}</option>
                        @endforeach
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
                <div class="file-group">
                    <div class="form-item">
                        <input id="docs" type="file" class="form-control" name="docs" value="{{ $Info->docs }}"><span
                            style="color: red">@error('docs'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-item">
                        <button id="docs-button" type="button" onclick="clearInputFile('docs')"><img
                                src="../imgs/icons/remove.png" alt="remove"
                                class="{{($Info->docs) ? "form-icon hidden" : "form-icon"}}"></button>
                    </div>
                </div>
            </div>

            <div class="form-item">
                <label for="image">Obrázok</label>
                <div class="file-group">
                    <div class="form-item">
                        <input id="image" type="file" class="form-control" name="image" value="{{ $Info->image }}">
                        <span style="color: red">@error('image'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-item">
                        <button id="image-button" type="button" onclick="clearInputFile('image')"><img
                                src="../imgs/icons/remove.png" alt="remove" class="form-icon"></button>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">ULOŽIŤ</button>
            </div>
        </form>
    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
@endsection
