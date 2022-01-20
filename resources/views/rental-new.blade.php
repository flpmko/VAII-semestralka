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

        <form action="rental-add" method="POST" enctype=multipart/form-data>
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="date_of_rent" value="{{ date('Y-m-d') }}">
            <div class="form-group">
                <a href="/items"><img src="../imgs/icons/back.png" alt="back" class="edit-page-back"></a>
                <h3>Vytvorenie novej pôžičky</h3>
            </div>

            <hr>
            <div class="form-group">
                <div class="form-item">
                    <label for="event_name">*Názov akcie</label>
                    <input id="event_name" type="text" class="form-control" name="event_name" placeholder="názov akcie"
                        value="{{ old('event_name') }}">
                    <span style="color: red">@error('event_name'){{ $message }} @enderror</span>
                </div>
            </div>

            @foreach ($items as $item)

                <div class="form-group">
                    <div class="form-item item-25">
                        <input data-id="{{ $item->id }}" type="checkbox" name="borrow[{{ $item->id }}]">
                    </div>
                    <div class="form-item item-50">
                        <span>{{ $item->name }}</span>
                    </div>
                    <div class="form-item item-25">
                        <input type="number" class="form-control" name="items[{{ $item->id }}]" min="0"
                            value="{{ old('items[' . $item->id . ']') ? old('items[' . $item->id . ']') : '0' }}"
                            max="{{ $item->quantity }}" {{ $item->quantity > 0 ? null : 'disabled' }}>
                        <span style="color: red">@error('items[{{ $item->id }}]'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-item item-25">
                        <p>max. {{ $item->quantity }}</p>
                    </div>
                </div>

            @endforeach

            <hr>
            <p>polia označené * sú povinné</p>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">VYTVORIŤ</button>
            </div>

        </form>
    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
@endsection
