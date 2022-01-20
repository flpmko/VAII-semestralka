@extends("layouts.master")
@section('obsah')
    <div class="box-sized">
        <div style="text-align:center">
            <br>
            <h2>NÁVOD AKO POUŽÍVAŤ NÁŠ FIREMNÝ WEB PORTÁL</h2>
        </div>

        @foreach ($articles as $article)
            @if ($loop->odd)
                <div class="container box-sized">
                    <div class="row box-sized">
                        <div class="column-66 box-sized">
                            <h1 class="xlarge-font"><b>{{ $article->heading }}</b></h1>
                            <p style="font-size:20px">{{ $article->text }}</p>
                            @auth
                                @if (Auth::user()->admin == 'Y')
                                    <button class="items-dummy-button"
                                        onclick="confirmAction('delete', 'article', '{{ $article->heading }}', '{{ $article->id }}')">
                                        <img src="../imgs/icons/remove.png" alt="remove" class="table-icon">
                                    </button>
                                    <a href="article-edit/{{ $article->id }}">
                                        <img src="../imgs/icons/pencil.png" alt="pencil" class="table-icon">
                                    </a>
                                @endif
                            @endauth
                        </div>
                        <div class="column-33 box-sized">
                            <img class="image" src="{{ asset('storage/' . $article->image) }}" alt="image">
                        </div>
                    </div>
                </div>
            @else
                <div class="container" style="background-color:#f1f1f1">
                    <div class="row">
                        <div class="column-33 box-sized">
                            <img class="image" src="{{ asset('storage/' . $article->image) }}" alt="image">
                        </div>
                        <div class="column-66 box-sized">
                            <h1 class="xlarge-font"><b>{{ $article->heading }}</b></h1>
                            <p style="font-size:20px">{{ $article->text }}</p>
                            @auth
                                @if (Auth::user()->admin == 'Y')
                                    <button class="items-dummy-button"
                                        onclick="confirmAction('delete', 'article', '{{ $article->heading }}', '{{ $article->id }}')">
                                        <img src="../imgs/icons/remove.png" alt="remove" class="table-icon">
                                    </button>
                                    <a href="article-edit/{{ $article->id }}">
                                        <img src="../imgs/icons/pencil.png" alt="pencil" class="table-icon">
                                    </a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        @auth
            @if (Auth::user()->admin == 'Y')
                <div class="help-button">
                    <div class="row">
                        <button type="button" class="btn-items" onclick="return location.href = 'article-new';">+</button>
                    </div>
                </div>
            @endif
        @endauth
    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
@endsection
