@extends('master.index_user')
@section('title', 'About')

@section('content')

<div class="site-blocks-cover overlay" style="background-image: url('../template_user/images/hero_bg_2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto align-self-center">
          <div class="site-block-cover-content text-center">
            <h1 class="mb-0">About <strong class="text-primary">Laborative</strong></h1>
            <div class="row justify-content-center mb-5">
              <div class="col-lg-6 text-center">
                <p>Expert bussines partner to rental tools or device about laboratorium all categories.</p>
              </div>
            </div>
            {{-- <p><a href="" class="btn btn-primary px-5 py-3">Shop Now</a></p> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="site-section py-5" data-aos="fade">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h3 class="text-black h4">Why Us</h3>
          <p>We are the best rental service with branches all over the city.</p>
          
        </div>
        <div class="col-lg-4">
          <h3 class="text-black h4">History</h3>
          <p>We have served various customers from individuals to large companies</p>
          
        </div>
        <div class="col-lg-4">
          <h3 class="text-black h4">Awards</h3>
          <p>We got the award as the biggest rental in the world.</p>
          
        </div>
      </div>
    </div>
  </div>    

  <div class="site-section bg-light custom-border-bottom" data-aos="fade">
    <div class="container">
      <div class="row justify-content-center mb-5">


        <div class="title-section text-center col-md-7">
          <h2>Our <strong class="text-primary">Leadership</strong></h2>
        </div>

      </div>
      <div class="row">
        <div class="col-md-6 col-lg-6 mb-5">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="{{ asset('template_user/images/IMG_9218.JPG') }}" alt="Image placeholder" class="mb-4">
                <h3 class="block-38-heading h4">Muhammad Dhomanhuri Malik Illyas A., Md. S., Tr., T.</h3>
                <p class="block-38-subheading">Head Electronics Laborative</p>
              </div>
              <div class="block-38-body">
                <p>President director of company laborative branch Electronics </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 mb-5">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="{{ asset('template_user/images/gita.jpeg') }}" alt="Image placeholder" class="mb-4">
                <h3 class="block-38-heading h4">Gita Kartika Pariwara A.Md.Kom</h3>
                <p class="block-38-subheading">Head Informatics Laborative</p>
              </div>
              <div class="block-38-body">
                <p>President director of company laborative branch Informatics </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-5">
  
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="{{ asset('template_user/images/arya.jpeg') }}" alt="Image placeholder" class="mb-4">
                <h3 class="block-38-heading h4">Arya Putra Hadi Yulianto S., Tr., T.</h3>
                <p class="block-38-subheading">Head Telekomunication Laborative</p>
              </div>
              <div class="block-38-body">
                <p>President director of company laborative branch Telekomunication. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 mb-5">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="{{ asset('template_user/images/person_1.jpg') }}" alt="Image placeholder" class="mb-4">
                <h3 class="block-38-heading h4">Azzam</h3>
                <p class="block-38-subheading">Head Kimia Laborative</p>
              </div>
              <div class="block-38-body">
                <p>President director of company laborative branch Kimia. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-image overlay" style="background-image: url('../template_user/images/hero_bg_2.jpg');">
    <div class="container">
      <div class="row justify-content-center text-center">
       <div class="col-lg-7">
         <h3 class="text-white">Sign up for free</h3>
         <p class="text-white">please register to be able to get free facilities to see our collection.</p>
         <p class="mb-0"><a href="#" class="btn btn-outline-white">Sign up</a></p>
       </div>
      </div>
    </div>
  </div>

  <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
          <div class="icon mr-4 align-self-start">
            <span class="icon-truck text-primary"></span>
          </div>
          <div class="text">
            <h2>Free Shipping</h2>
            <p>We provide free shipping services if the goods are picked up by yourself.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
          <div class="icon mr-4 align-self-start">
            <span class="icon-refresh2 text-primary"></span>
          </div>
          <div class="text">
            <h2>Free Returns</h2>
            <p>You don't have to pay a return fee because the payment has been made when you pick it up.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
          <div class="icon mr-4 align-self-start">
            <span class="icon-help text-primary"></span>
          </div>
          <div class="text">
            <h2>Customer Support</h2>
            <p>We provide customer support services that are active 24/7.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection