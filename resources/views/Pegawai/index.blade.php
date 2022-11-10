<!DOCTYPE html>
<html>

<head>
    <title>Tugas3</title>
    <link rel="stylesheet" href="/css/table.css">
</head>

<body>
    <div class="user">
        <center>
            <h1>Data User</h1>
        </center>
        <div>
           <a href="/create" class="tambah"> + Tambah User Baru</a>
        </div>
        <br>
        <center>
            <table class="table" border="2">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th colspan="2">Opsi</th>
                </tr>
                @foreach ($pegawai as $p)
                    <tr>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>
                            <a href="{{route('pegawai.edit',$p->id)}}">Edit</a>
                            <a href="{{route('pegawai.delete',$p->id)}}">Delete</a>   
                        </td>
                    </tr>
                @endforeach
            </table>
        </center>
    </div>
</body>
</html>