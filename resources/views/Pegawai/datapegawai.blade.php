@extends('layouts.app')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container col-10">
      <a href="/tambah" type="button" class="btn btn-success mb-2"> + Tambah Data</a>
      <div class="row justify-content-center">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pegawai as $p)
                  <tr>
                      <td>{{ $p->name }}</td>
                      <td>{{ $p->email }}</td>
                      <td>{{ $p->alamat }}</td>
                      <td>
                          <a href="{{route('pegawai.edit',$p->id)}}" type="button" class="btn btn-info">Edit</a>
                          <a href="{{route('pegawai.delete',$p->id)}}" type="button" class="btn btn-danger">Delete</a>   
                      </td>
                  </tr>
              @endforeach
        </tbody>
      </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection