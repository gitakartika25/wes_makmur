@extends('master_admin')

@section('title', 'Create Kategori')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambahkan Kategori</h4>
       
        <form class="forms-sample" action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Nama Kategori</label>
            <input type="text" class="form-control @error('namaKategori') is-invalid @enderror" id="" placeholder="Masukkan nama kategori" name="namaKategori">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Deskripsi Kategori</label>
            <input type="text" class="form-control @error('descKategori') is-invalid @enderror" id="" placeholder="Masukkan deskripsi kategori" name="descKategori">
          </div>
         
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        
        </form>
      </div>
    </div>
  </div>

  @section('js')
      <!-- Plugin js for this page -->
   <script src="{{ asset('template/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
   <script src="{{ asset('template/vendors/select2/select2.min.js') }}"></script>
   <!-- End plugin js for this page -->
   <!-- inject:js -->
   <script src="{{ asset('template/js/off-canvas.js') }}"></script>
   <script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
   <script src="{{ asset('template/js/template.js') }}"></script>
   <script src="{{ asset('template/js/settings.js') }}"></script>
   <script src="{{ asset('template/js/todolist.js') }}"></script>
   <!-- endinject -->
   <!-- Custom js for this page-->
   <script src="{{ asset('template/js/file-upload.js') }}"></script>
   <script src="{{ asset('template/js/typeahead.js') }}"></script>
   <script src="{{ asset('template/js/select2.js') }}"></script>
   <!-- End custom js for this page-->
  @endsection
@endsection