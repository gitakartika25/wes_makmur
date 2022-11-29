@extends('master_admin')

@section('title', 'Data Produk')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Produk</h4>
        <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  No
                </th>
                <th>
                  Foto
                </th>
                <th>
                  Produk
                </th>
                <th>
                  Harga
                </th>
                <th>
                  Kategori
                </th>
                <th>
                  Deskripsi
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
            @foreach($produk as $p)
              <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td class="py-1">
                  <img src="{{ asset('storage/' .$p->foto) }}" alt="image"/>
                </td>
                <td>
                    {{ $p->namaProduk }}
                </td>
                <td>
                    {{ $p->harga }}
                </td>
                <td>
                    {{ $p->kategori->namaKategori }}
                </td>
                <td>
                    {{ $p->descProduk }}
                </td>
                <td>
                    {{ $p->status }}
                </td>
                <td>
                    <a href="/produk/edit/{{ $p->id }}" class="btn btn-primary">Edit</a>
                    <a href="deleteproduk/{{ $p->id }}" class="btn btn-danger">Delete</a>
                    @if($p->status == 'aktif')
                    <a href="/produk/hide/{{ $p->id }}" class="btn btn-warning">Sembunyikan</a>
                    @else
                    <a href="/produk/show/{{ $p->id }}" class="btn btn-success">Tampilkan</a>
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