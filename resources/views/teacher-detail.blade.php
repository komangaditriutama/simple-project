@extends('layout.mainlayout')
@section('title','teacher-detail')

@section('content')
    <h2 class="d-flex justify-content-center">Selamat Datang Mr/Mrs. {{ $teachers->name }}</h2>
    <div class="my-3 d-flex justify-content-center">
        @if ($teachers->image != '')
        <img src="{{ asset('storage/photo/'.$teachers->image) }}" alt="" width="150px">
        @else
        <img src="{{ asset('storage/images/default.jpeg') }}" alt="" width="150px">
        @endif
    </div>
    <h3>Nama siswa dengan Wali kelas {{ $teachers->name }}:</h3>
    @if ($teachers->class)
    @foreach ($teachers->class->students as $item)
    <ol>
        <h3>
           {{ $loop->iteration }}. {{ $item->name }}
       </h3>
    </ol>
@endforeach
 @else
    tidak memiliki siswa
    @endif
     
@endsection