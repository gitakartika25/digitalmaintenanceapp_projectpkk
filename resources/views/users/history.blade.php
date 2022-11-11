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
                <th>No</th>
                <th>Employ</th>
              
                <th>Product</th>
                <th>Quantity</th>
                <th>Rent date</th>
                <th>Return date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($historyUser as $h)
              <tr>
                 
                  <td scope="row">{{ $loop->iteration }}</td>
                  <td> {{ $h->name }}</td>
                  {{-- <td> {{ $h->cname }}</td> --}}
                   <td> {{ $h->product_name }}</td> 
                  <td> {{ $h->quantity}}</td>
                  <td> {{ $h->rent_date }}</td>
                  <td> {{ $h->return_date }}</td>
                  <td> <label class="badge badge-success">{{ $h->status }}</label></td>
              </tr>
          @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>








@endsection