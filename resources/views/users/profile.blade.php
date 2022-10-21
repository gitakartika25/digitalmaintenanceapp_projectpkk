@extends('master.index_user')
@section('title', 'Contact')

@section('content')

<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0">
          <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
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
  
          <form action="#" method="post">
            {{-- <input type="file" onchange="preview()"> --}}
            <div class="p-3 p-lg-5 border">
              <div class="form-group d-flex justify-content-center row">
                <img id="frame" src="" width="150px" height="150px" style="border:1px solid black; border-radius: 50%"/>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Foto </label>
                  <input type="file" class="form-control" onchange="preview()" id="c_fname" name="c_fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Username </label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_email" class="text-black">First Name </label>
                  <input type="text" class="form-control" id="c_email" name="c_email" placeholder="">
                </div>
                <div class="col-md-6">
                  <label for="c_email" class="text-black">Last Name </label>
                  <input type="text" class="form-control" id="c_email" name="c_email" placeholder="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="c_subject" class="text-black">Province/Provinsi </label>
                  <input type="text" class="form-control" id="c_subject" name="c_subject">
                </div>
                <div class="col-md-3">
                  <label for="c_subject" class="text-black">City/Kota </label>
                  <input type="text" class="form-control" id="c_subject" name="c_subject">
                </div>
                <div class="col-md-3">
                  <label for="c_subject" class="text-black">Districts/Kecamatan </label>
                  <input type="text" class="form-control" id="c_subject" name="c_subject">
                </div>
                <div class="col-md-3">
                  <label for="c_subject" class="text-black">Ward/Kelurahan </label>
                  <input type="text" class="form-control" id="c_subject" name="c_subject">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_subject" class="text-black">Address </label>
                  <input type="text" class="form-control" id="c_subject" name="c_subject">
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