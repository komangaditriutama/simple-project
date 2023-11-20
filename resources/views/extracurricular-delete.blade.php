@extends('layout.mainlayout')
@section('title','extracurricular-delete')

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
    apakah kamu yakin menghapus data?: {{ $extracurricular->name }} <br>
    <form style="display: inline-block" action="/extracurricular-destroy/{{ $extracurricular->id }} " method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger"> delete</button>
    </form>
        <a href="/students" class="btn btn-primary">Cancel</a>
    </div>

@endsection