@extends("layouts.master")
@section('obsah')
    <div class="search-bar">
        <button class="btn-items"><a href="new-item">PRIDAŤ</a></button>
        <button class="btn-items">POŽIČAŤ</button>
        <input type="search" class="search-bar-input" placeholder="vyhľadaj položku">
        <img src="../imgs/icons/search.png" alt="search icon" class="search-bar-icon">
    </div>
    <div style="overflow-x: auto">
        <table>
            <thead>
                <th></th>
                <th>č.</th>
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
                        <td><a href="edit/{{$item->id}}">Upraviť</a></td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td><label><input type="number" class="small" value="0"></label></td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->inputs }}</td>
                        <td>{{ $item->outputs }}</td>
                        <td>{{ $item->docs }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
