@extends('master.index')
@section('title', 'edit user')

@section('content')

<div class="card">
    <div class="card-body ">
        <h4 class="card-title">Edit Categories</h4>      
                <form action="{{ url('userCRUD/' .$data->id) }}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                  
             
              <div class="form-group">
                  <label for="exampleInputName1">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{ $data->name }}">
                 
              </div>
              <div class="form-group">
                  <label for="exampleInputName1">email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ $data->email }}">
              </div>
              <div class="form-group">
                  <label for="exampleInputName1">password</label>
                  <input type="text" class="form-control @error('password') is-invalid @enderror" name="password"  value="{{ $data->password }}">
              </div>
              <div class="form-group">
                  <label for="exampleInputName1">address</label>
                  <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"  value="{{ $data->address }}">
              </div>
              <div class="form-group">
                  <label for="exampleInputName1">telephone</label>
                  <input type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ $data->telephone }}">
              </div>
              <div class="form-group">
                  <label>File upload</label>
                  <div></div>
                    <img src="{{ asset('storage/' .$data->photo) }}" alt="" width="200px">
                    <br>
                    <input type="file" name="photo" class="file-upload-default @error('photo') is-invalid @enderror" value="{{ old('photo') }}">
                    <div></div>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                </div>
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button  class="btn btn-light">Cancel</button> 
                </form>
              </div> 
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