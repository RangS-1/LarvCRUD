@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')
    <h2>Tambah Siswa</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        @include('students._form')
        <button type="submit" style="font-size: 20px; font-weight: bold; background-color:aqua">Simpan</button>
        <a href="{{ route('students.index') }}" style="font-size: 20px; font-weight: bold; background-color:aqua">Batal</a>
    </form>
@endsection