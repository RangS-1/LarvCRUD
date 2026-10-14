@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<p>
    <label>NIS</label><br>
    <input type="text" name="nis" value="{{ old('nis', $student->nis ?? '') }}">
</p>
<p>
    <label>Nama</label><br>
    <input type="text" name="nama" value="{{ old('nama', $student->nama ?? '') }}">
</p>
<p>
    <label>Rombel</label><br>
    <input type="text" name="rombel" value="{{ old('rombel', $student->rombel ?? '') }}">
</p>
<p>
    <label>Rayon</label><br>
    <input type="text" name="rayon" value="{{ old('rayon', $student->rayon ?? '') }}">
</p>
<p>
    <label>No.HP</label><br>
    <input type="text" name="nohp" value="{{ old('nohp', $student->nohp ?? '') }}">
</p>
<p>
    <label>Email</label><br>
    <input type="email" name="email" value="{{ old('email', $student->email ?? '') }}">
</p>