@extends('layouts.app')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Tambah Data Pegawai</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Pegawai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('pegawai.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Nama</label>
                          <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Email</label>
                          <input type="email"  name="email" class="form-control" id="email" >
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Alamat</label>
                          <input type="alamat"  name="alamat" class="form-control" id="alamat">
                        </div>
                        <button type="submit" class="btn btn-info btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection