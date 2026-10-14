@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')
    <h2>Edit Siswa</h2>

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        @include('students._form')
        <button type="submit">Perbarui</button>
        <a href="{{ route('students.index') }}">Batal</a>
    </form>
@endsection