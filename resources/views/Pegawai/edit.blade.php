<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas2</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body> 
    <div class="wrapper">
        <center>
            <h1>Tambah Data</h1>
        </center>
        <form action="{{route('pegawai.update',$pegawai->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" value="{{$pegawai->name}}" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" value="{{$pegawai->email}}" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" value="{{$pegawai->alamat}}" name="alamat" id="alamat">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>