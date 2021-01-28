@extends('layouts.app')
@section('title', "inicio")

@section('content')
    <header id="head">
        <div class="container">
            <div class="fluid_container">
                <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                    <div data-thumb="{{ secure_asset('images/slides/thumbs/slide1.jpg') }}" data-src="{{ secure_asset('images/slides/slide1.jpg') }}">
                    </div>
                    <div data-thumb="{{ secure_asset('images/slides/thumbs/slide2.jpg') }}" data-src="{{ secure_asset('images/slides/slide2.jpg') }}">
                    </div>
                    <div data-thumb="{{ secure_asset('images/slides/thumbs/slide3.jpg') }}" data-src="{{ secure_asset('images/slides/slide3.jpg') }}">
                </div>
            </div><!-- #camera_wrap_3 -->
            </div><!-- .fluid_container -->
        </div>
    </header>

    <section id="search">
        <div class="search-panel">
            <h1 class="text-center">Confianza y sostenibilidad</h1>
        </div>
    </section>

    <section class="news-box">
        <div class="container">
            <h2><span>Noticias</span></h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail thumbnail4 card-hover">
                        <img src="{{ secure_asset('images/news2.jpg') }}" alt="">

                        <div class="caption">
                            <h4>
                                <a href="#">
                                    Aliquam eu aliquet quam
                                </a>
                            </h4>

                            <p>
                                Souvlaki ignitus carborundum e pluribus unumfacto lingo est igpay atinlay arquee
                                selectus. non provisio incongruous feline nolo contendre. Gratuitous octopus niacin,
                                sodium glutimate. Quote meon
                            </p>
                            <a href="#" data-title="Read More" class="btn-link"><span>Leer mas</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail thumbnail4 card-hover">
                        <img src="{{ secure_asset('images/news3.jpg') }}" alt="">

                        <div class="caption">
                            <h4>
                                <a href="#">
                                    Factorial non deposit
                                </a>
                            </h4>

                            <p>
                                Enumfacto lingo est igpay atinlay arquee selectus.
                                non provisio incongruous feline nolo contendre. Grat uitous octopus niacin, sodium
                                glutimate. Quote meon an estimate et non interruptus stad
                            </p>
                            <a href="#" data-title="Read More" class="btn-link"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail thumbnail4 card-hover">
                        <img src="{{ secure_asset('images/news4.jpg') }}" alt="">

                        <div class="caption">
                            <h4>
                                <a href="#">
                                    Deposit quid proquo
                                </a>
                            </h4>

                            <p>
                                Arquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus
                                niacin, sodium gluti mate. Quote meon an estimate et non interruptus stad ium. Sic
                                tempus fugit esperanto
                            </p>
                            <a href="#" data-title="Read More" class="btn-link"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="packages" class="secpadding">
        <div class="container">
            <h2><span>Completed Projects</span></h2>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="{{ secure_asset('images/pic/pic-5.jpg') }}" class="img-responsive" alt="">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3>Project Name</h3>
                                <a class=" btn btn-default" href="#">$4600</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  col-sm-6">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="{{ secure_asset('images/pic/pic-6.jpg') }}" class="img-responsive" alt="">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                    <h3>Project Name</h3>
                                <a class=" btn btn-default" href="#">$4600</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  col-sm-6">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="{{ secure_asset('images/pic/pic-7.jpg') }}" class="img-responsive" alt="">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                    <h3>Project Name</h3>
                                <a class=" btn btn-default" href="#">$4600</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  col-sm-6">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="{{ secure_asset('images/pic/pic-8.jpg') }}" class="img-responsive" alt="">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                    <h3>Project Name</h3>
                                <a class=" btn btn-default" href="#">$4600</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </section>
@endsection
