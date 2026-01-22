@extends('layouts.app')
@section('title', 'Daftar Siswa')
@section('content')
    <h2>Daftar Siswa</h2>
    <ul>
        @foreach($siswa as $s)
            <li>{{ $s['nama'] }} - {{ $s['nilai'] }}</li>
        @endforeach
    </ul>
@endsection
