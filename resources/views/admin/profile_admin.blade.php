@extends('master.index')
@section('title', 'Profile')

@section('content')
<div class="card">
  <div class="card-body">
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
                  <input type="file" class="form-control" onchange="preview()" id="" name="foto">
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
        {{-- @endforeach --}}
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="c_subject" class="text-black">Province/Provinsi </label>
                  <select class="form-control" id="provinces" name="provinces"  onchange="daerah(id, value)">
                    @isset($pro)  
                      <option value="{{ $pro['id'] }}">{{ $pro['name'] }}</option>
                    @endisset
                    @foreach($prof as $profinsi)
                      <option value="{{ $profinsi['id'] }}">
                          {{ $profinsi['name'] }}
                      </option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="c_subject" class="text-black">City/Kota </label>
                  <select class="form-control" id="regencies" name="regencies" onchange="daerah(id, value)">
                    @isset($reg, $lreg)    
                      <option value="{{ $reg['id'] }}">{{ $reg['name'] }}</option>
                      @foreach($lreg as $profinsi)
                        <option value="{{ $profinsi['id'] }}">
                            {{ $profinsi['name'] }}
                        </option>
                      @endforeach
                    @endisset
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="c_subject" class="text-black">Districts/Kecamatan </label>
                  <select class="form-control" id="districts" name="districts" onchange="daerah(id, value)">
                    @isset($dis, $ldis)    
                      <option value="{{ $dis['id'] }}">{{ $dis['name'] }}</option>
                      @foreach($ldis as $profinsi)
                        <option value="{{ $profinsi['id'] }}">
                            {{ $profinsi['name'] }}
                        </option>
                      @endforeach
                    @endisset
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="c_subject" class="text-black">Ward/Kelurahan </label>
                  <select class="form-control" id="villages" name="villages" onchange="daerah(id, value)">
                    @isset($vil, $lvil)    
                      <option value="{{ $vil['id'] }}">{{ $vil['name'] }}</option>
                      @foreach($lvil as $profinsi)
                        <option value="{{ $profinsi['id'] }}">
                            {{ $profinsi['name'] }}
                        </option>
                      @endforeach
                    @endisset
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label class="text-black">Address/Desa </label>
                  <input type="text" class="form-control" id="addres" name="addres" value="{{ $data->addres }}">
                </div>
              </div>
        @endforeach
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
</div>
@endsection