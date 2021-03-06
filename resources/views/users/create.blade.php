@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Patient
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('users.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name"> Name </label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="text" class="form-control" name="password"/>
                </div>
                <div class="form-group">
                    @csrf
                    <label for="name"> Phone </label>
                    <input type="text" class="form-control" name="phone"/>
                </div>
                <div class="form-group">
                    <label for="name">Age</label>
                    <input type="text" class="form-control" name="age"/>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
