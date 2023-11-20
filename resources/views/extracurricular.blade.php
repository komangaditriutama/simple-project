@extends('layout.mainlayout')
@section('title','Extracurrlicular')

@section('content')
<h1>ini halaman ekskul</h1>

<div class="my-5">
    <a href="extracurricular-add" class="btn btn-primary">add data</a>
</div>

<form class="d-flex" role="search" method="GET">
    <input class="form-control me-2" name="searching" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-primary" type="submit">Searching</button>
</form>

<table class = 'table'>
    <thead>
        <tr>
            <th>NO</th>
            <th>name</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ekskulList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td> 
                <td>{{ $data->name }}</td>
                <td><a class="btn btn-primary" href="extracurricular-detail/{{ $data->id }}">Detail</a></td>
                <td><a class="btn btn-danger" href="extracurricular-delete/{{ $data->id }}">delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection