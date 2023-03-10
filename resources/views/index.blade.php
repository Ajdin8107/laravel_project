@extends('layouts.main')

@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">SNACK & CAFFE</h2>
                        <h1 class="display-1 text-white m-0">WAGNER</h1>
                        <h2 class="text-white m-0"></h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">SNACK & CAFFE</h2>
                        <h1 class="display-1 text-white m-0">WAGNER</h1>
                        <h2 class="text-white m-0"></h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">O nama</h4>
                <h1 class="display-4">S vama od 2019</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Na??a pri??a</h1>
                    <h5 class="mb-3">Snack and Caffe ???Wagner??? je novo ime na staroj lokaciji uz veliki broj noviteta.

Bogat izbor kola??a i delicija kakve ??ete na??i samo u Wagneru gdje je va??e najdra??e osoblje priprema veliki izbor pala??inka, kola??a i torti. 
Pored ukusnih delicija osoblje Wagnera za Vas sprema i ukusne sendvi??e.
Planira se jo?? mnogo noviteta u budu??nosti.</p>

Svi ste dobrodo??li u Snack and Caffe ???Wagner???.</p>
                    <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Saznajte vi??e</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/wagnerprof.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Na??a vizija</h1>
                    <p>Hvala vam na povjerenju koje nam poklanjate svakoga dana od 2019.</p>
                    <p>Od srca va??, Snack and Caffe ???Wagner???</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Najljubaznija usluga</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Najukusnija hrana</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Lijep provod</h5>
                    <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Saznajte vi??e</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Na??a usluga</h4>
                <h1 class="display-4">Najbolji u gradu</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('img/service-1.jpg')}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Najbr??a dostava</h4>
                            <p class="m-0">Dostavljamo hranu na ??eljenu adresu</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('img/service-2.jpg')}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-coffee service-icon"></i>Uvijek dobra kafa</h4>
                            <p class="m-0">Priu??ti sebi nezaboravne trenutke opu??tanja uz prefinjenu i senzualnu kafu, bogate pjene i nje??ne arome.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('img/service-3.jpg')}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>Kafa i mlijeko</h4>
                            <p class="m-0">Jednu kafu sa mlijekom!
Ova ustaljena narud??ba ima svoje korijene u sada ve?? dalekoj historiji.
Naime, ljudi su po??eli dodavati mlijeko u kafu 1600-te godine, kada je jedan francuski ljie??nik po??eo predlagati ovu praksu svojim pacijentima.
Da li ste i vi ljubitelj bla??ih kafe okusa?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('img/service-4.jpg')}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-table service-icon"></i>Mjesto za odmor</h4>
                            <p class="m-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Meni i Cijene</h4>
                <h1 class="display-4">Competitive Pricing</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Hot Coffee</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('img/menu-1.jpg')}}" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Black Coffee</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('img/menu-2.jpg')}}" alt="">
                            <h5 class="menu-price">$7</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Chocolete Coffee</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('img/menu-3.jpg')}}" alt="">
                            <h5 class="menu-price">$9</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Coffee With Milk</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Cold Coffee</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('img/menu-1.jpg')}}" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Black Coffee</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('img/menu-2.jpg')}}" alt="">
                            <h5 class="menu-price">$7</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Chocolete Coffee</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('img/menu-3.jpg')}}" alt="">
                            <h5 class="menu-price">$9</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Coffee With Milk</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->





    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h4>
                <h1 class="display-4">Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{asset ('img/testimonial-1.jpg')}}" alt="">
                        <div class="ml-3">
                            <h4>Client Name</h4>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{asset ('img/testimonial-2.jpg')}}" alt="">
                        <div class="ml-3">
                            <h4>Client Name</h4>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{asset ('img/testimonial-3.jpg')}}" alt="">
                        <div class="ml-3">
                            <h4>Client Name</h4>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{asset ('img/testimonial-4.jpg')}}" alt="">
                        <div class="ml-3">
                            <h4>Client Name</h4>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection