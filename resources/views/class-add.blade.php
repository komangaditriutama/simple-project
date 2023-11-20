@extends('layout.mainlayout')
@section('title','class-add')

@section('content')
    <div class="mt-5 col-8 m-auto">
        <form action="class" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="Name">class name</label>
                <input type="text" class="form-control" name="name" id="Name" required>
            </div>
            <div class="mb-3">
                <label for="teachers_id">teacher</label>
                <select name="teachers_id" id="teachers_id" class="form-control">
                <option value="">select one</option>
                @foreach ($teacher as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection