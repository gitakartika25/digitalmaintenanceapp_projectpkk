@extends('master.index_user')
@section('title', 'Detail Produk')

@section('content')

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a
                        href="shop.html">Store</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">{{ $product->product_name }}</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mr-auto">
                    <div class="border text-center">
                        <img src="{{ asset('storage/' . $product->image) }}" style="width: 800px" alt="Image" class="img-fluid p-3">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-black">{{ $product->product_name }}</h2>
                    <p>{{ $product->description }}</p>


                    <p><strong class="text-primary h4">Rp{{ $product->price }}</strong></p>


                <form action="{{url('addtocard')}}" method="get">
                    <div class="mb-5">
                        <div class="input-group mb-3" style="max-width: 220px;">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input name="products" type="hidden" value="{{ $product->id }}">
                            <input name="userid" type="hidden" value="{{ Auth::user()->id }}">
                            <input name="qua" type="text" class="form-control text-center" value="1" placeholder=""
                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                            </div>
                        </div>

                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="Add to cart">
                </form>
                    <div class="mt-5">
                        {{-- <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                  aria-controls="pills-home" aria-selected="true">Ordering Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                  aria-controls="pills-profile" aria-selected="false">Specifications</a>
              </li>
          
            </ul> --}}

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <table class="table custom-table">
                                    <thead>
                                        <th>Material</th>
                                        <th>Specification</th>
                                        <th>Packaging</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $product->material }}</th>
                                            <td>{{ $product->specification }}</td>
                                            <td>{{ $product->packaging }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
