@extends("layouts.master")
@section('obsah')
    <div class="search-bar">
        <button type="button" class="btn-items"><a href="item-new">PRIDAŤ</a></button>
        <button type="button" class="btn-items">POŽIČAŤ</button>
        <input id="search-bar" type="search" class="search-bar-input" onkeyup="searchItems()" placeholder="vyhľadaj položku">
        {{-- <img src="../imgs/icons/search.png" alt="search icon" class="search-bar-icon"> --}}
    </div>
    <div style="overflow-x: auto; min-height: 80vh;">
        <table id="items-table">
            <thead>
                <th></th>
                {{-- <th>č.</th> --}}
                <th>Položka</th>
                <th>ks</th>
                <th>qty</th>
                <th>Určenie</th>
                <th>Typ</th>
                <th>Inputy</th>
                <th>Outputy</th>
                <th>Dokumenty</th>
            </thead>
            <tbody>
                @foreach ($list as $item)
                    <tr>
                        <td><a id="delete-icon">
                            <button class="items-dummy-button" onclick="confirmAction('delete', '{{$item->name}}', '{{ $item->id }}')">
                                <img src="../imgs/icons/remove.png" alt="remove" class="table-icon">
                            </button>
                            </a><a href="item-edit/{{ $item->id }}">
                                <img src="../imgs/icons/pencil.png" alt="pencil" class="table-icon">
                            </a></td>
                        {{-- <td>{{ $item->id }}</td> --}}
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td><label><input type="number" class="small" value="0" min="0"
                                    max="{{ $item->quantity }}"></label></td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->inputs }}</td>
                        <td>{{ $item->outputs }}</td>
                        <td><img src="{{asset("storage/".$item->docs)}}" alt="-"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
@endsection
