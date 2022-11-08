@extends('master.index')
@section('title', 'Edit Orders')

@section('content')

    <div class="card">
        <div class="card-body ">
            <h4 class="card-title">Add Product</h4>
            {{-- <p>{{ $transaksi['id'] }}</p> --}}
            <form action="{{ route('orders.update', $transaksi['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Employ</label>
                    <select class="form-control" name="employid">
                        @foreach ($employ as $e)
                            <option value="{{ $e->id }}">{{ $e->name }}</option>
                        @endforeach
                        @foreach($employall as $ea)
                            <option value="{{ $ea->id }}">{{ $ea->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Customer</label>
                    <select class="form-control" name="customerid">
                        @foreach ($customer as $c)
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                        @foreach($customerall as $ca)
                            <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Quantity</label>
                    <input type="number" class="form-control" name="quantity" value="{{ $transaksi['quantity'] }}" placeholder="input quantity...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Rental Date</label>
                    <input type="date" class="form-control" name="rentdate" value="{{ $transaksi['rent_date'] }}" placeholder="input rent date...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Return Date</label>
                    <input type="date" class="form-control" name="returndate" value="{{ $transaksi['return_date'] }}" placeholder="input return date...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Status</label>
                    <input type="text" class="form-control" name="status" value="{{ $transaksi['status'] }}" placeholder="input status...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Token</label>
                    <input type="number" class="form-control" name="token" value="{{ $transaksi['token'] }}" placeholder="input token...">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
        </div>
    </div>
    

@section('js')
<script src="{{ asset('template/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset('template/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('template/js/file-upload.js') }}"></script>
<script src="{{ asset('template/js/typeahead.js') }}"></script>
<script src="{{ asset('template/js/select2.js') }}"></script>
@endsection

@endsection
