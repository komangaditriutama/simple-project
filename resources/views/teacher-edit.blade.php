@extends('layout.mainlayout')
@section('title','students')

@section('content')

    <div class="mt-5 col-8 m-auto">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 

        <form action="/teachers/{{ $teacher->id }}" method="POST">
        @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="name" id="Name" value="{{ $teacher->name }}" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection