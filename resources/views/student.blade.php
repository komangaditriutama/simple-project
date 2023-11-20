@extends('layout.mainlayout')
@section('title','students')

@section('content')

    <h1>ini halaman student</h1>
    <h3>Student List</h3>
    <div class="my-5 d-flex justify-content-between">
        <a href="students-add" class="btn btn-primary">add data</a>
        <a href="student-deleted-list" class="btn btn-info">Show Deleted Data</a>
    </div>

    @if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('Massage') }}
      </div>
    @endif

    <form class="d-flex" role="search" method="GET">
        <input class="form-control me-2" name="searching" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Searching</button>
      </form>

    <table class = 'table'>
        <thead>
            <tr>
                <th>NO</th>
                <th>name</th>
                <th>gender</th>
                <th>Nis</th>
                <th>class</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($studentList as $data)
           <tr>
                <td>{{$loop -> iteration}}</td>
                <td>{{$data -> name}}</td>
                <td>{{$data -> gender}}</td>
                <td>{{$data -> nis}}</td>
                <td>{{$data->class->name }}</td>
                <td><a class="btn btn-primary" href="student/{{ $data->id }}">detail</a></td>
               <td><a class="btn btn-primary" href="student-edit/{{ $data->id }}">Edit</a></td>
                <td><a class="btn btn-primary" href="student-delete/{{ $data->id }}">Delate</a></td>
           </tr>
        @endforeach
        </tbody>
    </table>

    {{$studentList->withQueryString()->links() }}
    
@endsection 
 