@extends('master.index')
@section('title', 'Add Orders In')

@section('content')

    <div class="card">
        <div class="card-body ">
            <h4 class="card-title">Add Product</h4>
            <form action="{{ route('ordersin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Product</label>
                    <select class="form-control" name="productid">
                        <option selected disabled>Select Product</option>
                        @foreach ($product as $p)
                            <option value="{{ $p->id }}" @selected(old('productid') == $p->id)>{{ $p->product_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Customer</label>
                    <select class="form-control" name="customerid">
                        <option selected disabled>Select Customer</option>
                        @foreach ($customer as $c)
                            <option value="{{ $c->id }}" @selected(old('customerid') == $c->id)>{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Quantity</label>
                    <input type="number" class="form-control" name="quantity" placeholder="input quantity...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Rental Date</label>
                    <input type="date" class="form-control" name="rentdate" placeholder="input rent date...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Return Date</label>
                    <input type="date" class="form-control" name="returndate" placeholder="input return date...">
                </div>
                <div class="form-group">
                    {{-- <label for="exampleInputName1">Payment Status</label> --}}
                    <input type="hidden" class="form-control" name="status" value="Paid">
                </div>
                <div class="form-group">
                    {{-- <label for="exampleInputName1">Payment Status</label> --}}
                    <input type="hidden" class="form-control" name="token" value="1">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                {{-- <button  class="btn btn-light">Cancel</button> --}}
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
