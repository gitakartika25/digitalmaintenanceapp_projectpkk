@extends('master.index')
@section('title', 'dashboard')

@section('content')

{{-- <h1>Halaman Categori</h1> --}}

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Product Categories</h4>
    
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>No</th>
              {{-- <th>Id</th> --}}
              <th>Category</th>
              {{-- <th>Status</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach($category as $c)
            <tr>
              <td scope="row">
                {{  $loop->iteration }}
              </td>
              <td>{{ $c->category }}</td>
             
            </tr>
            @endforeach
          
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection