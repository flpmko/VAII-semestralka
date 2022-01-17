@extends("layouts.master")
@section('obsah')
    @auth
        @if ($rentals != null)
            @foreach ($rentals as $rental)
                <div class="rent-card container-account">
                    <div class="item-25">
                        <div class="container-card rental-name">
                            <h4><b>{{ $rental->event_name }}</b></h4>
                        </div>
                    </div>
                    <div class="item-50">
                        <p><b>Dátum zapožičania: </b>{{ $rental->date_of_rent }}</p>
                        <p><b>Zapožičané zariadenia: </b></p>
                        <p>
                            @foreach ($rental->items as $item)
                                {{ $item->name }} ({{ $item->pivot->quantity }} ks)
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </p>
                    </div>
                    @if ($rental->date_of_return == null)
                        <div class="item-25">
                            <form action="{{ route('rentals-return', $rental->id) }}" method="POST"
                                enctype="multipart/form-data"
                                onsubmit="return confirm('Naoazaj chcete vrátiť pôžičku ' + $rental->event_name + '?');">
                                @csrf
                                <br>
                                <button type="submit" class="btn-rentals">VRÁTIŤ</button>
                            </form>
                        </div>
                    @else
                        <div class="item-25">
                            <p><b>Dátum vrátenia: </b>{{ $rental->date_of_return }}</p>
                            <button type="button" class="btn-returned">VRÁTENÉ</button>
                        </div>
                    @endif
                </div>
            @endforeach
        @else
            <div class="rent-card container-account">
                <div class="item-middle">
                    <img src="{{ URL::asset('/imgs/icons/close.png') }}" alt="item1" class="rent-card-img">
                    <div class="container-card">
                        <h4><b>Ešte nemáš žiadne pôžičky...</b></h4>
                    </div>
                </div>
            </div>
        @endif
    @endauth
@endsection
