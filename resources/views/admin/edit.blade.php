@extends('master.index')
@section('title', 'edit user')

@section('content')

<div class="card">
    <div class="card-body ">
        <h4 class="card-title">Edit Categories</h4>      
                <form action="{{ route('userCRUD.edit', $data->id) }}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                 {{-- <div class="form-group">
                    <label for="exampleInputName1">id</label>
                    <input type="number" class="form-control" name="Id" placeholder="input product's name...">
                </div> --}}

                <div class="form-group">
                  <label>name</label>
                  <input  class="form-control" @error('name') id-invalid @enderror name="name" value="{{ old('name') }}">
              </div>
              <div class="form-group">
                  <label>email</label>
                  <input type="text" class="form-control" @error('email') id-invalid @enderror name="email" value="{{ old('email') }}">
              </div>
              <div class="form-group">
                  <label>password</label>
                  <input type="text" class="form-control" @error('password') id-invalid @enderror name="password" value="{{ old('password') }}">
              </div>
              <div class="form-group">
                  <label>address</label>
                  <input  class="form-control" @error('address') id-invalid @enderror name="address" value="{{ old('address') }}">
              </div>
              <div class="form-group">
                  <label>telephone</label>
                  <input  class="form-control" @error('telephone') id-invalid @enderror name="telephone" value="{{ old('telephone') }}">
              </div>

              

              <div class="form-group">
                  <label>File upload</label>
                  <input type="file" name="photo" class="file-upload-default">
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
    </div>


@endsection