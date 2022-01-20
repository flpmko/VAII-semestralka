@extends("layouts.master")
@section('obsah')
    @auth
        <div class="search-bar">
            <button type="button" class="btn-items" onclick="return location.href = 'item-new';">PRIDAŤ</button>
            <button type="button" class="btn-items" onclick="return location.href = 'rental-new';">POŽIČAŤ</button>
            <input id="search-bar" type="search" class="search-bar-input" onkeyup="searchItems()" placeholder="vyhľadaj položku">
            {{-- <img src="../imgs/icons/search.png" alt="search icon" class="search-bar-icon"> --}}
        </div>
        <div style="overflow-x: auto; min-height: 80vh;">
            <table id="items-table">
                <thead>
                    <tr>
                        <th> </th>
                        <th>Položka</th>
                        <th>ks</th>
                        <th>Určenie</th>
                        <th>Typ</th>
                        <th>Inputy</th>
                        <th>Outputy</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            @if ($userInfo != null && $userInfo[0]->admin == 'Y')
                                <td>
                                    <button class="items-dummy-button"
                                        onclick="confirmAction('delete', '{{ $item->name }}', '{{ $item->id }}')">
                                        <img src="../imgs/icons/remove.png" alt="remove" class="table-icon">
                                    </button>
                                    <a href="item-edit/{{ $item->id }}">
                                        <img src="../imgs/icons/pencil.png" alt="pencil" class="table-icon">
                                    </a>
                                </td>
                            @else
                                <td></td>
                            @endif
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->inputs }}</td>
                            <td>{{ $item->outputs }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endauth
    <script src="{{ URL::asset('js/app.js') }}"></script>
@endsection
