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
 

        <form action="/students/{{ $students->id }}" method="POST">
        @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="name" id="Name" value="{{ $students->name }}" required>
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="{{ $students->gender }}">{{ $students->gender }}</option>
                    @if ($students->gender == 'P')
                         <option value="L">L</option>
                         @else
                         <option value="P">P</option>
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label for="Nis">NIS</label>
                <input type="text" class="form-control" name="nis" id="nis" value="{{ $students->nis }}" required>
            </div>
            <div class="mb-3">
                <label for="class_id">Class</label>
                <select name="class_id" id="class_id" class="form-control">
                    <option value="{{ $students->class->id }}">{{ $students->class->name }}</option>
                    @foreach ($class as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection