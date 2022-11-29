@extends('master_admin')

@section('title', 'Create User')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambahkan User</h4>
       
        <form class="forms-sample" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group">
                <label for="exampleSelectGender">Role</label>
                  <select class="form-control @error('role_id') is-invalid @enderror" id="exampleSelectGender" name="role_id">
                    <option selected disabled value="">Pilih Role</option>
                    @foreach($role as $k)
                    <option value="{{ $k->id }}">{{ $k->namaRole }}</option>
                    @endforeach
                  </select>
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