<h1>edit data</h1>
<form action="/mus/{{$mus->id}}" method="POST">
    @method('put')
    @csrf

    <input type="text" name="nama" placeholder="Nama" value=><br>
    <input type="text" name="rw" placeholder="nik"><br>
    <input type="text" name="detail" placeholder="nokk"><br>


    <input type="submit" name="submit" value="save">

</form>

</html>