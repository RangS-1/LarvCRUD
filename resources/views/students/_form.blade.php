@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<p style="margin: 5px;">
    <label style="font-size: 20px; font-weight: bold;">NIS</label><br>
    <input type="number" name="nis" value="{{ old('nis', $student->nis ?? '') }}" style="border-style: solid; border-radius: 5px; padding: 5px;">
</p>
<p style="margin: 5px;">
    <label style="font-size: 20px; font-weight: bold;">Nama</label><br>
    <input type="text" name="nama" value="{{ old('nama', $student->nama ?? '') }}" style="border-style: solid; border-radius: 5px; padding: 5px;">
</p>
<p style="margin: 5px;">
    <label style="font-size: 20px; font-weight: bold;">Rombel</label><br>
    <input type="text" name="rombel" value="{{ old('rombel', $student->rombel ?? '') }}" style="border-style: solid; border-radius: 5px; padding: 5px;">
</p>
<p style="margin: 5px;">
    <label style="font-size: 20px; font-weight: bold;">Rayon</label><br>
    <input type="text" name="rayon" value="{{ old('rayon', $student->rayon ?? '') }}" style="border-style: solid; border-radius: 5px; padding: 5px;">
</p>
<p style="margin: 5px;">
    <label style="font-size: 20px; font-weight: bold;">No_Telp</label><br>
    <input type="number" name="no_telp" value="{{ old('no_telp', $student->no_telp ?? '') }}" style="border-style: solid; border-radius: 5px; padding: 5px;">
</p>
<p style="margin: 5px;">
    <label style="font-size: 20px; font-weight: bold;">Jenis Kelamin</label><br>
    <select name="kelamin" id="kelamin" class="form-control" required style="border-style: solid; border-radius: 5px; padding: 5px;">
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="Laki-Laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</p>
<p style="margin: 5px;">
    <label style="font-size: 20px; font-weight: bold;">Alamat</label><br>
    <input type="text" name="alamat" value="{{ old('alamat', $student->alamat ?? '') }}" style="border-style: solid; border-radius: 5px; padding: 5px;">
</p>
<p style="margin: 5px;">
    <label style="font-size: 20px; font-weight: bold;">Email</label><br>
    <input type="email" name="email" value="{{ old('email', $student->email ?? '') }}" style="border-style: solid; border-radius: 5px; padding: 5px;">
</p>