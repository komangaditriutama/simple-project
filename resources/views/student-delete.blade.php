@extends('layout.mainlayout')
@section('title','student-delete')

@section('content')
    <div class="mt-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        apakah kamu yakin menghapus data?: {{ $students->name }} ({{ $students->nis }}) <br>
    <form style="display: inline-block" action="/student-destroy/{{ $students->id }} " method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger"> delete</button>
    </form>
        <a href="/students" class="btn btn-primary">Cancel</a>
    </div>
@endsection