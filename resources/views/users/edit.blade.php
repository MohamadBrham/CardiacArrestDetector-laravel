@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Patient
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
            <form method="post" action="{{ route('users.update', $share->id) }}">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name"value={{ $share->name }} />
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="text" class="form-control" name="password" value={{ $share->password }} />
                </div>
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="text" class="form-control" name="phone"value={{ $share->phone }} />
                </div>
                <div class="form-group">
                    <label for="name">Age</label>
                    <input type="text" class="form-control" name="age" value={{ $share->age }} />
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
