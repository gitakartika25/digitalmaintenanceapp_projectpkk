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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non
                                        quibusdam vel quidem.</p>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non
                                        quibusdam vel quidem.</p>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque
                            labore .</p>
                        <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span
                                    class="icon-keyboard_arrow_right"></span></a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature">
                        <span class="wrap-icon flaticon-test-tubes"></span>
                        <h3><a href="#">Chemical Laboratory Equipment</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque
                            labore .</p>
                        <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span
                                    class="icon-keyboard_arrow_right"></span></a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature">
                        <span class="wrap-icon flaticon-test-tubes"></span>
                        <h3><a href="#">Physics Laboratory Equipment</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque
                            labore .</p>
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

    <div class="site-section bg-image overlay" style="background-image: url('../template_user/images/hero_bg_2.jpg');">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <h3 class="text-white">Sign up for discount up to 55% OFF</h3>
                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem
                        consectetur quam.</p>
                    <p class="mb-0"><a href="#" class="btn btn-outline-white">Sign up</a></p>
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
                                    <img src="{{ asset('template_user/images/person_1.jpg') }}" alt="Image"
                                        class="img-fluid">
                                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis
                                        voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto
                                        eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;</p>
                                </blockquote>

                                <p class="author">&mdash; Kelly Holmes</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="{{ asset('template_user/images/person_2.jpg') }}" alt="Image"
                                        class="img-fluid">
                                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis
                                        voluptatem consectetur quam tempore
                                        obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur
                                        ducimus. Minus ratione sit quaerat
                                        unde.&rdquo;</p>
                                </blockquote>

                                <p class="author">&mdash; Rebecca Morando</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="{{ asset('template_user/images/person_3.jpg') }}" alt="Image"
                                        class="img-fluid">
                                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis
                                        voluptatem consectetur quam tempore
                                        obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur
                                        ducimus. Minus ratione sit quaerat
                                        unde.&rdquo;</p>
                                </blockquote>

                                <p class="author">&mdash; Lucas Gallone</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="{{ asset('template_user/images/person_4.jpg') }}" alt="Image"
                                        class="img-fluid">
                                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis
                                        voluptatem consectetur quam tempore
                                        obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur
                                        ducimus. Minus ratione sit quaerat
                                        unde.&rdquo;</p>
                                </blockquote>

                                <p class="author">&mdash; Andrew Neel</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="title-section">
                        <h2 class="mb-5">Why <strong class="text-primary">Us</strong></h2>
                        <div class="step-number d-flex mb-4">
                            <span>1</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur
                                quam tempore</p>
                        </div>

                        <div class="step-number d-flex mb-4">
                            <span>2</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur
                                quam tempore</p>
                        </div>

                        <div class="step-number d-flex mb-4">
                            <span>3</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur
                                quam tempore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
