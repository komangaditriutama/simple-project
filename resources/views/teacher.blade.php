@extends('layout.mainlayout')
@section('title','teacher')

@section('content')
<h1>ini halaman teacher</h1>
<div class="my-5">
    <a href="teachers-add" class="btn btn-primary">add data</a>
</div>
@if (Session::has('status'))
<div class="alert alert-success" role="alert">
    {{ Session::get('massage') }}
  </div>
@endif
<table class = 'table'>
    <thead>
        <tr>
            <th>NO</th>
            <th>name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teacher as $data)
            <tr>
                <td>{{ $loop->iteration }}</td> 
                <td>{{ $data->name }}</td>
                <td><a class="btn btn-primary" href="teacher-detail/{{ $data->id }}">Detail</a></td>
                <td><a class="btn btn-primary" href="teacher-edit/{{ $data->id }}">Edit</a></td>
                <td><a class="btn btn-danger" href="teacher-delete/{{ $data->id }}">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection