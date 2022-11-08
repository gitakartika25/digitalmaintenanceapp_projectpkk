@extends('master.index')
@section('title', 'Add Orders')

@section('content')

    <div class="card">
        <div class="card-body ">
            <h4 class="card-title">Add Product</h4>
            <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Employ</label>
                    <select class="form-control" name="employid" >
                        <option selected disabled>Select Employ</option>
                        @foreach ($employ as $e)
                            <option value="{{ $e->id }}" @selected(old('employid') == $e->id)>{{ $e->name }}</option>
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
                    <label for="exampleInputName1">Status</label>
                    <input type="text" class="form-control" name="status" placeholder="input status...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Token</label>
                    <input type="number" class="form-control" name="token" placeholder="input token...">
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
