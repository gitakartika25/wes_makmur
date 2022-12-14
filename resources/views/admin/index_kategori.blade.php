@extends('master_admin')

@section('title', 'Data Kategori')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Kategori</h4>
        <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Kategori</a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  No
                </th>
                <th>
                  Nama Kategori
                </th>
                <th>
                  Deskripsi Kategori
                </th>
               
                <th>
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach($kategori as $p)
              <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $p->namaKategori }}
                </td>
                <td>
                    {{ $p->descKategori }}
                </td>
              
                <td>
                    <a href="/kategori/edit/{{ $p->id }}" class="btn btn-primary">Edit</a>
                    <a href="deletekategori/{{ $p->id }}" class="btn btn-danger">Delete</a>
                
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection