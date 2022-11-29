@extends('master_admin')

@section('title', 'Edit Postingan')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambahkan Postingan</h4>
       
        <form class="forms-sample" action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
          <div class="form-group">
            <label for="exampleInputName1">Judul</label>
            <input type="text" class="form-control @error('namaProduk') is-invalid @enderror" id="" placeholder="Masukkan judul postingan" value="{{ $post->judul }}" name="judul">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Tanggal Dibuat</label> 
            <input type="date" class="form-control @error('tanggalDibuat') is-invalid @enderror" id="" placeholder="Masukkan tanggal postingan" value="{{ $post->tanggalDibuat }}" name="tanggalDibuat">
          </div>
        
          <div class="form-group">
            <label for="exampleSelectGender">Produk</label>
              <select class="form-control @error('produk_id') is-invalid @enderror" id="exampleSelectGender" name="produk_id">
                <option selected disabled value="{{ $post->produk_id }}">{{ $post->produk->namaProduk }}</option>
                <option  disabled value="">Pilih Produk</option>
                @foreach($produk as $k)
                <option value="{{ $k->id }}">{{ $k->namaProduk }}</option>
                @endforeach
              </select>
            </div>
          <div class="form-group">
            <label for="exampleTextarea1">Isi</label>
            <textarea class="form-control @error('isi') is-invalid @enderror" id="exampleTextarea1" name="isi" rows="4">{{ $post->isi }}</textarea>
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