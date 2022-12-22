
@extends('backend-dashboard.app')
@section('title')
    Admin | Dashboard | Tambah Pegawai
@endsection
@section('judul')
    Dashboard | Tambah Pegawai
    
@endsection
@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('pegawai.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control " name="name" id="name" aria-describedby="emailHelp" placeholder="Input name here...">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control " name="email" id="email" aria-describedby="emailHelp" placeholder="Input email here...">
                  </div>
                  <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Input alamat here...">
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Tambah Data</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
          
          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
@section('js')
    
@endsection
