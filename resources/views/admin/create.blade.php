@extends('master.index')
@section('title', 'add user')

@section('content')

    <div class="card">
        <div class="card-body ">
            <h4 class="card-title">Add Product</h4>
            <form action="{{ route('userCRUD.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <div class="form-group">
                    <label for="exampleInputName1">id</label>
                    <input type="number" class="form-control" name="Id" placeholder="input product's name...">
                </div> --}}
                    {{-- <select class="form-control @error('category_id') is-invalid @enderror"
                        aria-label="Default select example" name="category_id">
                        <option selected value="" disabled>Select Category</option>
                        {{-- @foreach ($category as $c)
                            <option value="{{ $c->id }}" @selected(old('category_id') == $c->id)>{{ $c->category }}</option>
                        @endforeach --}}
                    {{-- </select>  --}}
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="input Name">
                    {{-- <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">Rp</span>
                        </div>
                        <input type="number" class="form-control" name="price" placeholder="input price..." aria-label="Amount (to the nearest rupiah)">
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div> --}}
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">email</label>
                    <input type="text" class="form-control" name="email" placeholder="input email">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">password</label>
                    <input type="text" class="form-control" name="password" placeholder="input specification...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">address</label>
                    <input type="text" class="form-control" name="address" placeholder="input packaging...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">telephone</label>
                    <input type="text" class="form-control" name="telephone" placeholder="input material...">
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="foto" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Photo">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                  </div>

                
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                {{-- <button  class="btn btn-light">Cancel</button> --}}
            </form>
        </div>
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
