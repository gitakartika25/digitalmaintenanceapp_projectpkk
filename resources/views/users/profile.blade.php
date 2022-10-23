@extends('master.index_user')
@section('title', 'Profile')

@section('content')

<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0">
          <a href="/home">Home</a> <span class="mx-2 mb-0">/</span>
          <strong class="text-black">Profile</strong>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="h3 mb-5 text-black">Profile</h2>
        </div>
        <div class="col-md-12">
        @foreach ( $profile as $data )
          <form action="{{ route ('profile.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="p-3 p-lg-5 border">
              <div class="form-group d-flex justify-content-center row">
                <img id="frame" src="{{ asset('storage/'.$data->foto) }}" name="image" width="150px" height="150px" style="border:1px solid black; border-radius: 50%"/>
                {{-- <img id="frame" src="{{ asset('storage/'.$data->foto) }}" name="image" width="150px" height="150px" style="border:1px solid black; border-radius: 50%"/> --}}
              </div>
              <div class="form-group row">
                <div class="col-md-4">
                  <label for="c_fname" class="text-black">Foto </label>
                  <input type="file" class="form-control" onchange="preview()" id="" name="foto" value="{{ $data->foto }}">
                </div>
                <div class="col-md-4">
                  <label class="text-black">Username </label>
                  <input type="text" class="form-control" id="" name="username" value="{{ $data->name }}">
                </div>
                <div class="col-md-4">
                  <label class="text-black">Email </label>
                  <input type="email" class="form-control" id="" name="email" value="{{ $data->email }}">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label class="text-black">First Name </label>
                  <input type="text" class="form-control" id="" name="first_name" value="{{ $data->first_name }}">
                </div>
                <div class="col-md-6">
                  <label class="text-black">Last Name </label>
                  <input type="text" class="form-control" id="" name="last_name" value="{{ $data->last_name }}">
                </div>
              </div>
        @endforeach
              <div class="form-group row">
                {{-- <div class="col-md-3">
                  <label for="c_subject" class="text-black">Province/Provinsi </label>
                  <select class="form-control" id="" name="profinsi" value="{{ old('profinsi') }}">
                    @foreach($prof as $profinsi)
                      <option value="{{ $profinsi['name'] }}">
                          {{ $profinsi['name'] }}
                      </option>
                    @endforeach
                  </select>
                </div> --}}
                {{-- <div class="col-md-3">
                  <label for="c_subject" class="text-black">City/Kota </label>
                  <select class="form-control" id="" name="kota" value="{{ old('kota') }}">
                      @foreach($kot as $kota)
                        <option value="{{ $kota['name'] }}">{{ $kota['name'] }}</option>
                      @endforeach
                  </select>
                </div> --}}
                {{-- <div class="col-md-3">
                  <label for="c_subject" class="text-black">Districts/Kecamatan </label>
                  <select class="form-control" id="" name="kecamatan" value="{{ old('kecamatan') }}">
                    @foreach($kec as $kecamatan)
                      <option value="{{ $kecamatan['name'] }}">
                          {{ $kecamatan['name'] }}
                      </option>
                    @endforeach
                  </select>
                </div> --}}
                {{-- <div class="col-md-3">
                  <label for="c_subject" class="text-black">Ward/Kelurahan </label>
                  <select class="form-control" id="" name="kelurahan" value="{{ old('kelurahan') }}">
                    @foreach($kel as $kelurahan)
                      <option value="{{ $kelurahan['name'] }}">
                          {{ $kelurahan['name'] }}
                      </option>
                    @endforeach
                  </select>
                </div> --}}
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label class="text-black">Address </label>
                  <input type="text" class="form-control" id="" name="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit Profile">
                </div>
              </div>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>



  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-black mb-4">Offices</h2>
        </div>
        <div class="col-lg-4">
          <div class="p-4 bg-white mb-3 rounded">
            <span class="d-block text-black h6 text-uppercase">New York</span>
            <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="p-4 bg-white mb-3 rounded">
            <span class="d-block text-black h6 text-uppercase">London</span>
            <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="p-4 bg-white mb-3 rounded">
            <span class="d-block text-black h6 text-uppercase">Canada</span>
            <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection