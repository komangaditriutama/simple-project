@extends('layout.mainlayout')
@section('title','extracurricular-detail')

@section('content')
<h2>anda berada dihalaman extracurricular {{ $extracurricular->name }}</h2>
<table class="table">
    <tr>
        <th>Nama siswa</th>
        <th>Nama Ekskul</th>
    </tr>
    <tr>
       
       
            <td>
                @foreach ($extracurricular->students as $item)
                    <li>{{ $item->name }}</li><br>
                @endforeach
            </td>
      
        <td>
            {{ $extracurricular->name }}
        </td>
       
    </tr>
</table>

@endsection 