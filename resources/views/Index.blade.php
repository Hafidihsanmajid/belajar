@extends('layout.main')
@section('content')
{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> --}}
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
        <center>
          <h1 lass="fw-bold">Daftar Produk</h1>
        </center>
          {{-- <p class="fw-bold">Daftar Produk</p> --}}

            <div class="card">
              <div class="card-header">
                {{-- <h3 class="card-title">Tabel Produk</h3> --}}
                <a href="{{route('products.create')}}"class="btn btn-primary mb-1">Tambah Data</a>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <br>
                
              </div>
            
              <div class="card-body table-responsive p-0">
                {{-- <table class="table table-hover text-nowrap"> --}}
                <table class="table table-bordered">

                  <thead class="table-primary">
                    <tr>
                      <th>No</th>
                      <th>Nama Produk</th>
                      <th>Kategori</th>
                      <th>Harga</th>
                      <th>Diskon</th>
                      <th>Aksi</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->product_name}}</td>
                            <td>{{$d->category}}</td>
                            <td>Rp. {{$d->price}}</td>
                            <td>Rp. {{$d->discount}}</td>
                            <td>
                                <a href="{{route('user.edit',['id'=> $d->id]) }}"class="btn btn-primary"><i class="fas fa-pen">Edit</i></a>
                                <a data-toggle="modal" data-target="#modal-hapus{{ $d->id }}"class="btn btn-danger"><i class="fas fa-trash-alt">Delete</i></a>
                            </td>    
                        </tr>
                        <div class="modal fade" id="modal-hapus{{ $d->id }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah Anda Ingin Menghapus Produk? {{$d->name}}</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <form action="{{ route('products.delete',['id' => $d->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn btn-danger">Hapus</button>
                              </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                    @endforeach
     
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  {{-- </div> --}}

@endsection