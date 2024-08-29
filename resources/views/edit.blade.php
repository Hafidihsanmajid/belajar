@extends('layout.main')
@section('content')
{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> --}}
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
      <form action="{{ route('products.update',['id' => $data->id]) }}"  method="POST">
        @csrf
        @method('PUT')
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit data Produk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="text" name="product_name"value="{{ $data->product_name }}"class="form-control" id="exampleInputproductname" placeholder="Masukkan Nama Produk">
                    @error('productname')
                    <small>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori</label>
                    <input type="text" name="category"value="{{ $data->category }}" class="form-control" id="exampleInputcategory" placeholder="Masukkan Jenis Kategori">

                    @error('category')
                    <small>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" name="price"value="{{ $data->price }}" class="form-control" id="exampleInputharga" placeholder="Masukkan Harga">

                    @error('price')
                    <small>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Diskon</label>
                    <input type="text" name="discount"value="{{ $data->discount }}" class="form-control" id="exampleInputdiskon" placeholder="Masukkan Diskon">

                    @error('discount')
                    <small>{{$message}}</small>
                    @enderror
                  </div>
                  {{-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">

                    @error('password')
                    <small>{{$message}}</small>
                    @enderror
                  </div> --}}
 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              
            </div>


          </div>

        </div>
      </Form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->

    <!-- /.content -->
  {{-- </div> --}}

@endsection