@extends('layout.mainlayout')
@section('title','students')

@section('content')
    <h1 class="d-flex justify-content-center">Hallo {{ $student->name }}</h1>
    <div class="my-3 d-flex justify-content-center ">
       @if ($student->image != '')
       <img src="{{ asset('storage/photo/'.$student->image) }}" alt="" width="100px">
       @else 
       <img src="{{ asset('storage/images/default.jpeg') }}" alt="" width="100px">
       @endif
    </div>
<div class="mt-5 mb-5">
    <table class="table table-bordered">
        <tr>
            <th>Nis</th>
            <th>Gender</th>
            <th>Kelas</th>
            <th>Extracurriculars</th>
        </tr>
        <tr>
            <td>{{ $student->nis }}</td>
            <td>
                @if ($student->gender == 'P')
                    perempuan
                @else 
                    Laki - laki
                @endif
            </td>
            <td>{{ $student->class->name }}</td>
            {{-- <td>{{ $student->teacher->name }}</td> --}}
            <td>{{ $student->extracurriculars->name }}</td>
        </tr>
    </table>
</div>

@endsection

<style>
    th{
        width: 25%
    }
</style>