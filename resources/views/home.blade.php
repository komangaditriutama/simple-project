@extends('layout.mainlayout')
@section('title','home')

@section('content')
    <h2>Hallo,selamat datang  {{ Auth::user()->name }}, anda adalah 
        {{ Auth::user()->role->name }}
    </h2>
@endsection 

 