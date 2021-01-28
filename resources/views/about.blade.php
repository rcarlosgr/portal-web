@extends('layouts.app')
@section('title', "Acerca de nosotros")

@section('content')
    {{-- <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>About us</h1>
                </div>
            </div>
        </div>
    </header> --}}

    <section class="container">
        <div class="row">
            <!-- main content -->
            <section class="col-sm-8 maincontent">
                <h3>Acerca de nosotros</h3>
                <p>
                    <img src="{{ secure_asset('images/about.jpg') }}" alt="" class="img-rounded pull-right" width="300">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.
                </p>
                <p>Consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihiequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae solul nesciunt unde veniam magnam repudiandae sapiente.</p>
            </section>
               <!-- /main -->
               <!-- Sidebar -->
            <aside class="col-sm-4 sidebar sidebar-right">
                <div class="panel">
                    <h4>Latest News</h4>
                    <ul class="list-unstyled list-spaces">
                        <li><a href="">Responsive Design</a><br>
                            <span >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span></li>
                        <li><a href="">HTML5, CSS3 and JavaScript</a><br>
                            <span >Consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam</span></li>
                        <li><a href="">Bootstrap</a><br>
                            <span >Eveniet, consequuntur eius repellendus eos aliquid molestiae ea</span></li>
                        <li><a href="">Clean Template</a><br>
                            <span >Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li>
                    </ul>
                </div>
            </aside>
               <!-- /Sidebar -->

        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 center767">
                <h3>
                    Nuestra mision
                </h3>
                <img src="{{ secure_asset('images/about.jpg') }}" alt="">
                <h4>
                    Proin in neque id nisl blandit
                </h4>

                <p>
                    Aliquam eu aliquet quam. Proin in neque id nisl blandit consectetur placerat venenatis mi.
                    Vestibulum ac mauris justo. Vestibulum magna ligula, venenatis in lacus nec, sodales cursus
                    ligula.
                    <br>
                    <br>
                    Morbi ac enim tellus. Aliquam quis condimentum risus. Ut eu arcu non eros tristique blandit
                    vel vel turpis. Duis justo elit, iaculis iaculis mauris at dipisicing elit. Eveniet, unde veniam magnam repudiandae sapiente.
                </p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3>
                    Nuestra vision
                </h3>
                <strong>2015</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consptates placeat consectetur quam aliquam!</p>
                <strong>2013</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laboctetur quam aliquam!</p>
                <strong>2012</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudauam!</p>
                <strong>2011</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <h3>
                    Nuestros proyectos
                </h3>

                <p>
                    Morbi ac enim tellus. Aliquam quis condimentum risus. Ut eu arcu non eros tristique blandit
                    vel vel turpis. Duis justo elit, iaculis iaculis mauris at, aliquet volutpat mauris.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                </p>
                <p>
                <b>
                    vel vel turpis. Duis justo elit, iaculis iaculis mauris at, aliquet volutpat mauris.
                </b>
                </p>
                <ul>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Constetuer adipiscing esent</a></li>
                    <li><a href="#">Vestibulum molestie lacus eno</a></li>
                    <li><a href="#">Nummy hendrerit mauris</a></li>
                    <li><a href="#">Phasellus port usce suscipit</a></li>
                    <li><a href="#">Cum sociis natoque penatibu</a></li>
                    <li><a href="#">Magnis dis parturient</a></li>
                </ul>
                <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed
                    ullamcorper eleifen d neque nec aliquam. Vivamus nec sagittis enim. Curab itur non nisl
                    aliquet, ornare justo at, tristique metus.
                    Duis pharetra lorem et sem vestibulum, velondime ntum leo imperdiet. Mauris accum
                </p>
            </div>
        </div>
    </section>

    <section class="team-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Our Team</h3>
                    <p>Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.</p>
                    <br />
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member card-hover">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="{{ secure_asset('images/photo-1.jpg') }}" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>John Doe</h4>
                        <!-- Designation -->
                        <span class="pos">CEO</span>
                        <!-- <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark card-hover">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="{{ secure_asset('images/photo-2.jpg') }}" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>Larry Doe</h4>
                        <!-- Designation -->
                        <span class="pos">Director</span>
                        <!-- <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark card-hover">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="{{ secure_asset('images/photo-3.jpg') }}" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>Ranith Kays</h4>
                        <!-- Designation -->
                        <span class="pos">Manager</span>
                        <!-- <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark card-hover">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="{{ secure_asset('images/photo-4.jpg') }}" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>Joan Ray</h4>
                        <!-- Designation -->
                        <span class="pos">Creative</span>
                        <!-- <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
