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
            <form method="post" action="{{ route('doses.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name"> ID </label>
                    <input type="text" class="form-control" name="medication_id"/>
                </div>
                <div class="form-group">
                    <label for="name">Time</label>
                    <input type="text" class="form-control" name="time"/>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
