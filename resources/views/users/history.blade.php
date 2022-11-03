@extends('master.index_user')
@section('title', 'Detail Produk')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">History User</h4>
        <p class="card-description">
          Riwayat transaksi user
        </p>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>image</th>
                <th>Product</th>
                <th>price</th>
                <th>quantity</th>
                <th>total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jacob</td>
                <td>Photoshop</td>
                <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                <td><label class="badge badge-danger">Pending</label></td>
              </tr>

              {{-- @foreach ($data as $d)
              <tr>
                <td> <img src="{{ asset('storage/'.$d->image) }}" alt="">
                
                </td>
                <td> {{ $d->id }}</td>
                <td> {{ $d->image }}</td>
                <td> {{ $d->product }}</td>
                <td> {{ $d->price }}</td>
                <td> {{ $d->quantity }}</td>
                <td> {{ $d->total }}</td>
              </tr> --}}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>








@endsection