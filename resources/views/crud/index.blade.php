@extends("layouts.master")
@section('obsah')

    <body>
        <div class="centered-text new-item">
            <div class="row">
                <div class="col-md-6">
                    <form action="add" method="POST">

                        @if (Session::get('success'))
                            <div class="aler talert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if (Session::get('fail'))
                            <div class="aler talert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif

                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name"
                                value="{{ old('name') }}">
                            <span style="color: red">@error('name'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Favorite Color</label>
                            <input type="text" class="form-control" name="favoriteColor" placeholder="Enter Favorite Color"
                                value="{{ old('favoriteColor') }}">
                            <span style="color: red">@error('favoriteColor'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email"
                                value="{{ old('email') }}">
                            <span style="color: red">@error('email'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">SAVE</button>
                        </div>
                    </form>
                    <br>

                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Favorite color</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->favoritecolor }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="delete/{{$item->id}}">Delete</a>
                                            <a href="edit/{{$item->id}}">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
