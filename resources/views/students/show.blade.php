@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
    
    <p><a href="{{ route('students.index') }}"> <-- Dashboard Siswa</a></p>
    

    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Rombel</th>
                
                <th>Rayon</th>
                <th>No_Telp</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Email</th>

                
                <th>Tombol</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->rombel }}</td>
                    
                    <td>{{ $student->rayon }}</td>
                    <td>{{ $student->no_telp }}</td>
                    <td>{{ $student->kelamin }}</td>
                    <td>{{ $student->alamat }}</td>
                    <td>{{ $student->email }}</td>
                    
                    <td>
                        <a href="{{ route('students.edit', $student) }}">Edit</a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST"
                              style="display:inline"
                              onsubmit="return confirm('Hapus data?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                        <!--
                        <a href="{{ route('students.show', $student) }}">Lihat</a>
                        -->
                    </td>
                </tr>
        </tbody>
    </table>
@endsection