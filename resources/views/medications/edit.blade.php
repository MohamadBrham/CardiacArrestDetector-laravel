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
            <form method="post" action="{{ route('medications.update', $share->id) }}">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="name">User ID</label>
                    <input type="text" class="form-control" name="user_id"value={{ $share->user_id }} />
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value={{ $share->name }} />
                </div>
                <div class="form-group">
                    <label for="name">Start</label>
                    <input type="text" class="form-control" name="start" value={{ $share->start }} />
                </div>
                <div class="form-group">
                    <label for="name">End</label>
                    <input type="text" class="form-control" name="end" value={{ $share->end }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
