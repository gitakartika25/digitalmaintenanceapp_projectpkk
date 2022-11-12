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

                  {{-- Modal --}}
                  <div class="modal fade pt-5 mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Testimoni :</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('testimonies.store')}}"  method="POST">
                            @csrf
                            <textarea class="form-control" rows="5" name="testimonies" placeholder="Masukkan testimoni anda. . .">
          
                            </textarea>
                          <button type="submit" class="btn btn-primary mt-3">Submit</button>
                          </form>
                        </div>
                        <div class="modal-footer">
                          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                        </div>
                      </div>
                    </div>
                  </div>

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
                <th>Testimoni</th>
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
                  <td><a class="btn btn-sm btn-success text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Testimoni</a></td>
              </tr>
          @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>








@endsection