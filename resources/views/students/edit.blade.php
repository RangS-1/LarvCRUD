@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')
    <h2 style="font-size: 20px; font-weight: bold; padding: 5px;">Edit Siswa</h2>

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        @include('students._form')
        <button type="submit" style="font-size: 20px; font-weight: bold; background-color:aqua">Perbarui</button>
        <a href="{{ route('students.index') }}" style="font-size: 20px; font-weight: bold; background-color:aqua"   >Batal</a>
    </form>
@endsection