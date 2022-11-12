@extends('master.index_user')
@section('title', 'Home')

@section('content')


    <div class="owl-carousel owl-single px-0">
        <div class="site-blocks-cover overlay" style="background-image: url('../template_user/images/h4.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto align-self-center">
                        <div class="site-block-cover-content text-center">
                            <h1 class="mb-0"><strong class="text-primary">Laborative</strong> Opens 12 Hours</h1>

                            <div class="row justify-content-center mb-5">
                                <div class="col-lg-6 text-center">
                                    <p>Expert bussines partner to rental tools or device about laboratorium all categories.</p>
                                </div>
                            </div>

                            {{-- <p><a href="#" class="btn btn-primary px-5 py-3">Shop Now</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url('../template_user/images/h3.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto align-self-center">
                        <div class="site-block-cover-content text-center">
                            <h1 class="mb-0">Available Laboratory Tools <strong class="text-primary">Everyday</strong>
                            </h1>
                            <div class="row justify-content-center mb-5">
                                <div class="col-lg-6 text-center">
                                    <p>Expert bussines partner to rental tools or device about laboratorium all categories.</p>
                                </div>
                            </div>
                            <p><a href="/store" class="btn btn-primary px-5 py-3">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="site-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature">
                        <span class="wrap-icon flaticon-test-tubes"></span>
                        <h3><a href="#">Biology Laboratory Equipment</a></h3>
                        <p>Provide rental tools or device in biology laboratory equipment.</p>
                        <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span
                                    class="icon-keyboard_arrow_right"></span></a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature">
                        <span class="wrap-icon flaticon-test-tubes"></span>
                        <h3><a href="#">Chemical Laboratory Equipment</a></h3>
                        <p>Provide rental tools or device in Chemical laboratory equipment.</p>
                        <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span
                                    class="icon-keyboard_arrow_right"></span></a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature">
                        <span class="wrap-icon flaticon-test-tubes"></span>
                        <h3><a href="#">Physics Laboratory Equipment</a></h3>
                        <p>Provide rental tools or device in Physics laboratory equipment.</p>
                        <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span
                                    class="icon-keyboard_arrow_right"></span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="title-section text-center col-12">
                    <h2>Laborative <strong class="text-primary">Products</strong></h2>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12 block-3 products-wrap d-flex">
                <div class="nonloop-block-3 owl-carousel">
                    @foreach ($product as $p)
                    <div class="card col-md-12 text-center item mb-3 item-v2 px-auto mx-0 " >
                        <form action="{{ url('detailproduct/' . $p->id) }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            <span class="onsale">Rent</span>
                            <a href="{{ url('detailproduct/' . $p->id) }}"><img src="{{ asset('storage/' . $p->image) }}"
                                    style="width: 100%" class="card-img-top"></a>
                            <div class="card-body">
                                <h3 class="text-dark"><a
                                        href="{{ url('detailproduct/' . $p->id) }}"></a>{{ $p->product_name }}</h3>
                                <p class="price"> Rp{{ $p->price }}</p>
                                <a href="{{ url('detailproduct/' . $p->id) }}" class="btn btn-primary">Detail Product</a>
                            </div>
                        </form>
                    </div>
                @endforeach
                        </div>
                    </div>
            </div>
        </div>
    </div>

    

    <div class="site-section">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="title-section">
                        <h2>Happy <strong class="text-primary">Customers</strong></h2>
                    </div>
                    <div class="block-3 products-wrap">
                        <div class="owl-single no-direction owl-carousel">

                            <div class="testimony">
                                <blockquote>
                                    <img src="{{ asset('template_user/images/IMG_9218.JPG') }}" alt="Image"
                                        class="img-fluid">
                                    <p>&ldquo; as a member, i am very happy to using laborative rental laboratorium
                                        its provide me with the newest and good quality tools&rdquo;</p>
                                </blockquote>

                                <p class="author">&mdash; Muhammad Dhomanhuri Malik Illyas A., Md. S., Tr., T.</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="{{ asset('template_user/images/gita.jpeg') }}" alt="Image"
                                        class="img-fluid">
                                    <p>&ldquo;laborative give me the best experiences when it comes to laboratorium equipment
                                        need and supply&rdquo;</p>
                                </blockquote>

                                <p class="author">&mdash; Gita Kartika Pariwara A.Md.Kom</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="{{ asset('template_user/images/arya.jpeg') }}" alt="Image"
                                        class="img-fluid">
                                    <p>&ldquo;laboratorium is a complex environment, needs the expert solution and maintenance. laborative can provide that solution&rdquo;</p>
                                </blockquote>

                                <p class="author">&mdash; Arya Putra Hadi Yulianto S., Tr., T.</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="{{ asset('template_user/images/person_4.jpg') }}" alt="Image"
                                        class="img-fluid">
                                    <p>&ldquo; i love laborative because its the best and the only one in the world&rdquo;</p>
                                </blockquote>

                                <p class="author">&mdash; Azzam Al Faruq S.Kom </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="title-section">
                        <h2 class="mb-5">Why <strong class="text-primary">Us</strong></h2>
                        <div class="step-number d-flex mb-4">
                            <span>1</span>
                            <p>Expert bussines partner to rental tools or device about laboratorium all categories.</p>
                        </div>

                        <div class="step-number d-flex mb-4">
                            <span>2</span>
                            <p>provide the newest and the best qualities equipment</p>
                        </div>

                        <div class="step-number d-flex mb-4">
                            <span>3</span>
                            <p>provide delivery and weekly maintenance of your equpment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
