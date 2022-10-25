@extends('master.index')
@section('title', 'edit product')

@section('content')
@error('any')
<h1>error</h1>
@enderror
    <div class="card">
        <div class="card-body ">
            <h4 class="card-title">Edit Product</h4>
            <form action="{{ url('product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleInputName1">Product</label>
                    <input type="text" class="form-control @error('product') is-invalid @enderror" name="product_name" value="{{ $product->product_name }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Category</label>
                    <select class="form-control @error('category_id') is-invalid @enderror"
                        aria-label="Default select example" name="category_id">
                        <option disabled value>Select Category</option>
                        <option  value="{{ $product->category_id }}" >{{ $product->category->category }}</option>
                        @foreach ($category as $c)
                            <option value="{{ $c->id }}" @selected(old('category_id') == $c->id)>{{ $c->category }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">Rp</span>
                        </div>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" aria-label="Amount (to the nearest rupiah)">
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Stock</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="stock" value="{{ $product->stock }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Specification</label>
                    <input type="text" class="form-control @error('specification') is-invalid @enderror" name="specification" value="{{ $product->specification }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Packaging</label>
                    <input type="text" class="form-control @error('packaging') is-invalid @enderror" name="packaging" value="{{ $product->packaging }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Material</label>
                    <input type="text" class="form-control @error('material') is-invalid @enderror" name="material" value="{{ $product->material }}">
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <div></div>
                    <img src="{{ asset('storage/' .$product->image) }}" alt="" width="200px">
                    <br>
                    <input type="file" name="image" class="file-upload-default @error('material') is-invalid @enderror" value="{{ old('image') }}">
                    <div></div>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                  </div>

                <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="" name="description" rows="4">{{ $product->description }}</textarea>
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
