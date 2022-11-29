@extends('master_admin')

@section('title', 'Data Postingan')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Postingan</h4>
        <a href="{{ route('post.create') }}" class="btn btn-primary">Tambah Postingan</a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  No
                </th>
                <th>
                  Judul
                </th>
                <th>
                  Produk
                </th>
                <th>
                  Isi
                </th>
                <th>
                  Tanggal Dibuat
                </th>
                <th>
                  Status
                </th>
                <th>
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach($post as $p)
              <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $p->judul }}
                </td>
                <td>
                    {{ $p->produk->namaProduk }}
                </td>
                <td>
                    {{ $p->isi }}
                </td>
                <td>
                    {{ $p->tanggalDibuat }}
                </td>
                <td>
                    {{ $p->status }}
                </td>
                <td>
                    <a href="/post/edit/{{ $p->id }}" class="btn btn-primary">Edit</a>
                    <a href="deletepost/{{ $p->id }}" class="btn btn-danger">Delete</a>
                    @if($p->status == 'aktif')
                    <a href="/post/hide/{{ $p->id }}" class="btn btn-warning">Sembunyikan</a>
                    @else
                    <a href="/post/show/{{ $p->id }}" class="btn btn-success">Tampilkan</a>
                    @endif
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