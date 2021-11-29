@extends("layouts.master")
@section('obsah')

    <body>
        <div class="centered-text new-item">
            <div class="row">
                <div class="col-md-6">
                    <h3>{{ $Title }}</h3>

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

                    <form action="{{route('update')}}" method="POST">
                        @csrf
                        <input type="hidden" name="cid" value="{{ $Info->id }}">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name"
                                value="{{ $Info->name }}">
                            <span style="color: red">@error('name'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Favorite Color</label>
                            <input type="text" class="form-control" name="favoriteColor" placeholder="Enter Favorite Color"
                                value="{{ $Info->favoritecolor }}">
                            <span style="color: red">@error('favoriteColor'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email"
                                value="{{ $Info->email }}">
                            <span style="color: red">@error('email'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
