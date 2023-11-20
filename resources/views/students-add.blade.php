@extends('layout.mainlayout')
@section('title','students-add')

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

        <form action="students" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="name" id="Name">
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">
                <option value="">select one</option>
                <option value="L">L</option>
                <option value="P">P</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Nis">NIS</label>
                <input type="text" class="form-control" name="nis" id="nis">
            </div>
            <div class="mb-3">
                <label for="class_id">Class</label>
                <select name="class_id" id="class_id" class="form-control">
                <option value="">select one</option>
                @foreach ($class as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="input-group">
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
            <div class="mb-3">
                <label for="extracurriculars_id">ekskul</label>
                <select name="extracurriculars_id" id="extracurriculars_id" class="select2 form-control">
                <option value="">pilih eskul</option>
                @foreach ($extracurricular as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
                </select>
            </div>
            <br>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function(){
    $("#extracurriculars_id").select2({
        dropdownParent:$('#extracurriculars_id'),
    })
})
    </script>
@endsection
