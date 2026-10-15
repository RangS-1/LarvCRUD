@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
    <p><a href="{{ route('students.create') }}">+ Tambah Siswa</a></p>

    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Rombel</th>
                <!--
                <th>Rayon</th>
                <th>No_Telp</th>
                <th>Alamat</th>
                <th>Email</th>
                -->
                <th>Tombol</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->rombel }}</td>
                    <!--
                    <td>{{ $student->rayon }}</td>
                    <td>{{ $student->no_telp }}</td>
                    <td>{{ $student->alamat }}</td>
                    <td>{{ $student->email }}</td>
                    -->
                    <td>
                        <a href="{{ route('students.edit', $student) }}">Edit</a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST"
                              style="display:inline"
                              onsubmit="return confirm('Hapus data?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                        <a href="{{ route('students.show', $student) }}">Lihat</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Data siswa tidak ada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection