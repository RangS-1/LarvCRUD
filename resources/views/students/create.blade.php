@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')
    <h2>Tambah Siswa</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        @include('students._form')
        <button type="submit">Simpan</button>
        <a href="{{ route('students.index') }}">Batal</a>
    </form>
@endsection