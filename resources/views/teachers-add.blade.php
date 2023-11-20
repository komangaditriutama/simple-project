@extends('layout.mainlayout')
@section('title','teachers-add')

@section('content')
    <div class="mt-5 col-8 m-auto">
        <form action="teachers" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="name" id="Name" required>
            </div>
            {{-- <div class="mb-3">
                <label for="class_id">Class</label>
                <select name="class_id" id="class_id" class="form-control">
                <option value="">select one</option>
                @foreach ($class as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
                </select>
            </div> --}}
            <div class="input-group">
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
            <br>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection