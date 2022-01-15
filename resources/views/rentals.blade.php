@extends("layouts.master")
@section('obsah')
    @if (sizeof($list) != 0)
        @foreach ($list as $item)
            <div class="rent-card container-account">
                <div class="item-25">
                    <div class="container-card rental-name">
                        <h4><b>{{ $item->event_name }}</b></h4>
                    </div>
                </div>
                <div class="item-50">
                    <p><b>Dátum zapožičania: </b>{{ $item->date_of_rent }}</p>
                    <p><b>Zapožičané veci: </b></p>
                </div>
                @if ($item->date_of_return == null)
                    <div class="item-25">
                        {{-- <form action="{{ route('rentals-return', $item->id) }}" method="POST" enctype="multipart/form-data"> --}}
                            {{-- @csrf --}}
                            <button type="button" class="btn-rentals" onclick="confirmAction('return', '{{$item->event_name}}', '{{ $item->id }}')">VRÁTIŤ</button>
                        {{-- </form> --}}
                    </div>
                @else
                    <div class="item-25">
                        <p><b>Dátum vrátenia: </b>{{ $item->date_of_return }}</p>
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
@endsection
