
@extends('layout.mainlayout')
@section('title','students-add')

@section('content')
    <div class="mt-5 col-8 m-auto">
        <form action="extracurricular" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="Name">ekskul</label>
                <input type="text" class="form-control" name="name" id="Name">
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection