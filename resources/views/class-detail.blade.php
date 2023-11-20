@extends('layout.mainlayout')
@section('title','class-detail')
@section('content')
    <h1>anda sedang melihat detail data dari kelas {{ $class->name }}</h1>
<div class="mt-5 mb-5">
     <Strong>Wali Kelas :</Strong> {{ $class->teacher->name }} <br>
    <Strong>Nama Siswa yang berada di kelas{{ $class->name }} : </Strong> <br>
      @foreach ($class->students as $item)
            - {{ $item->name }}<br>
        @endforeach
</div>
@endsection
