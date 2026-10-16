@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
    <p style="font-size: 20px; padding: 5px;"><a href="{{ route('students.create') }}">+ Tambah Siswa</a></p>

@endsection