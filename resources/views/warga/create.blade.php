<h1>create</h1>
<form action="/warga/store" method="POST">
    @csrf

    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="nik" placeholder="nik"><br>
    <input type="text" name="nokk" placeholder="nokk"><br>
    <input type="text" name="alamat" placeholder="alamat"><br>
    <input type="text" name="url" placeholder="alamat"><br>
    <input type="text" name="agama" placeholder="alamat"><br>
    <input type="text" name="jk" placeholder="alamat"><br>
    <input type="text" name="status_ktp" placeholder="alamat"><br>
    <input type="text" name="pekerjaan" placeholder="alamat"><br>
    <input type="text" name="nobpjs" placeholder="alamat"><br>
    <input type="text" name="npwp" placeholder="alamat"><br>
    <input type="text" name="status_menetap" placeholder="alamat"><br>
    <input type="text" name="status_perkawinan" placeholder="alamat"><br>

    <input type="submit" name="submit" value="save">

</form>

</html>