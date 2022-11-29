@extends('master_admin')

@section('title', 'Data User')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data User</h4>
        <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah User</a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  No
                </th>
                <th>
                  Nama
                </th>
                <th>
                  Email
                </th>
                <th>
                  Role
                </th>
                <th>
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach($user as $p)
              <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
            
                <td>
                    {{ $p->name }}
                </td>
                <td>
                    {{ $p->email }}
                </td>
                <td>
                    {{ $p->role->namaRole }}
                </td>
                
                <td>
                    <a href="/user/edit/{{ $p->id }}" class="btn btn-primary">Edit</a>
                    <a href="deleteuser{{ $p->id }}" class="btn btn-danger">Delete</a>
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