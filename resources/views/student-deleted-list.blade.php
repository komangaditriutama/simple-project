@extends('layout.mainlayout')
@section('title','student-deleted-list')

@section('content')
 <h1>ini halaman student yang sudah di deleted</h1>

 <div class="my-5">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <a href="/students" class="btn btn-primary">Back</a>
 </div>

 <div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Nis</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>
                        <a href="/students/{{ $item->id }}/restore" class="btn btn-primary">Restore</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
 </div>
@endsection