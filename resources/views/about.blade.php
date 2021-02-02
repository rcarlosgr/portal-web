@extends('layouts.app')
@section('title', "Acerca de nosotros")

@section('content')

    <section class="container">
        <div class="row">
            <!-- main content -->
            <section class="col-sm-8 maincontent">
                <h3>Acerca de nosotros</h3>
                <p>
                    <img src="{{ secure_asset('images/about.jpg') }}" alt="" class="img-rounded pull-right" width="300">
                    Somos una empresa que apuesta por el uso de herramientas convencionales y
                    no convencionales (inteligentes) para dar solución a problemas de nueva
                    instalación, adaptación o expansión de nuestros clientes, y de la automatización
                    de sus procesos físicos y/o digitales, de la mano de profesionales experimentados
                    y apasionados por la investigación e innovación.
                </p>
            </section>

            <aside class="col-sm-4 sidebar sidebar-right">
                <div class="panel">
                    <h4></h4>
                    <ul class="list-unstyled list-spaces">
                        <li><a href="{{ secure_url('consultoria') }}">Nuestros servicios de consultoria.</a><br>
                            <span >Servicios de consultoría en automatización industrial.</span>
                            <span>Servicio de consultoría en localización y distribución de plantas, almacenes y sucursales.</span>
                            <span>Servicio de consultoría en gestión de materiales e inventarios, pronóstico de la demanda y estudio de mermas.</span>
                        </li>
                        <li><a href="{{ secure_url('cursos') }}">Nuestos cursos.</a><br>
                            <span >Matlab y Simulink, Python, Macros, Sistemas de automatización PID, Power Bi, R y MiniTab</span></li>
                    </ul>
                </div>
            </aside>
               <!-- /Sidebar -->

        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 center767">
                <h3>
                    Nuestra Visión
                </h3>
                {{-- <img src="{{ secure_asset('images/about.jpg') }}" alt=""> --}}
                <p>
                    Nos proyectamos a ser un centro líder de consultoría que plantee y aplique modelos
                    o sistemas con el enfoque I+D+i que solucionen eficientemente los problemas en la
                    industria peruana convencional y generen su transformación parcial o total a la
                    industria 4.0, teniendo como pilar fundamental el impacto ambiental positivo.
                </p>
                <p>
                    Buscamos ser un referente en la calidad de enseñanza superior, capacitando a nivel
                    nacional e internacional en lenguajes de programación y herramientas necesarias
                    para el desarrollo de la industria 4.0.
                </p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3>
                    Nuestra Misión
                </h3>
                <p>
                    Somos una consultora que ofrece soluciones con enfoque I+D+i a los problemas de las organizaciones del sector industrial, optimizando sus procesos productivos y sus funciones empresariales para lograr ventajas competitivas, sostenibilidad empresarial, y generar un impacto ambiental positivo.
                </p>
                <p>
                    Funcionamos para contribuir con la formación profesional, capacitando en ejes fundamentales de ciencias ingenieriles, infraestructura digital y automatización de procesos, buscando incrementar conocimientos y desarrollar capacidades en aprendizajes sofisticados.
                </p>

            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                {{-- <h3>
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
                </p> --}}
                <h3>Forma parte de nuestra misión:</h3>
                <ul class="more-mision">
                    <li>Reducir costos y lograr tiempos más productivos en las empresas   del sector industrial.</li>
                    <li>Contribuir con la investigación científica.</li>
                    <li>Fomentar la industria 4.0</li>
                    <li>Infundir conocimientos altamente calificados.</li>
                    <li>Desarrollar el talento humano.</li>
                </ul>
            </div>
        </div>
        <div class="our-values">
            <h3>Valores</h3>
            <ul class="content-our-values">
                <li class="our-values-item">
                    <h4>Ética profesional</h4>
                    <p>
                        Hacemos lo correcto para entregarle el mejor servicio a nuestros clientes externos e internos. Esto también nos permite crecer como empresa de confianza.
                    </p>
                </li>
                <li class="our-values-item">
                    <h4>Respeto</h4>
                    <p>
                        En nuestra familia: colaborativa y clientes, todos somos iguales. Todos merecemos la misma atención y respeto.
                    </p>
                </li>
                <li class="our-values-item">
                    <h4>Excelencia en el servicio</h4>
                    <p>
                        No nos cansamos hasta alcanzar la satisfacción de nuestros clientes. Si el servicio que recibes es de calidad, es un servicio de A & Z CONSULT S.A.C.
                    </p>
                </li>
                <li class="our-values-item">
                    <h4>Innovación</h4>
                    <p>
                        Somos flexibles ante el entorno altamente cambiante del siglo XXI. Investigamos y continuamente nos capacitamos para optimizar los procesos de nuestros clientes y nuestros procesos internos.
                    </p>
                </li>
                <li class="our-values-item">
                    <h4>Compromiso con el medio ambiente</h4>
                    <p>
                        Contribuir a salvar el medio ambiente es nuestra principal motivación. Buscamos siempre la mejor alianza entre la industria sostenible y el cuidado de nuestro hogar.
                    </p>
                </li>
            </ul>
        </div>
        <div class="our-team">
            <h3>Nuestro equipo</h3>
            <div class="content-our-team">
                <div class="our-team-item" id="ourTeamOne">
                    <div class="team-item-header">
                        <img src="{{ secure_asset('images/teachers/metodos-numericos.png') }}" alt="">
                    </div>
                    <div class="our-team-body">
                        <h4>Juan Carlos López Espinoza</h4>
                        <h5>
                            Métodos numéricos
                        </h5>
                    </div>
                </div>
                <div class="modal-team" id="modalTeamOne">
                    <div class="content-modal-team" id="contentModalTeamOne">
                        <div class="modal-team-header">
                            <div class="close-modal-team" id="closeModalTeamOne">X</div>
                            <img src="{{ secure_asset('images/teachers/metodos-numericos.png') }}" alt="">
                        </div>
                        <div class="modal-team-body">
                            <h4>Juan Carlos López Espinoza</h4>
                            <h5>
                                Métodos numérico
                            </h5>
                        </div>
                        <div class="modal-team-footer">
                            <p>
                            Bachiller de la carrera de Ingeniería Mecánico-Eléctrica en la Universidad de
                            Piura (UDEP), con conocimientos en sistemas eléctricos, automatización y
                            diseño mecánico. Responsable, con capacidad de organización, planificación,
                            trabajo en equipo y disposición para adquirir nuevos conocimientos.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="our-team-item" id="ourTeamTwo">
                    <div class="team-item-header">
                        <img src="{{ secure_asset('images/teachers/python.png') }}" alt="">
                    </div>
                    <div class="our-team-body">
                        <h4 class="our-team-title">Juan Francisco Arebalo Rojas</h4>
                        <h5>
                            Python
                        </h5>
                    </div>
                </div>
                <div class="modal-team" id="modalTeamTwo">
                    <div class="content-modal-team" id="contentModalTeamTwo">
                        <div class="modal-team-header">
                            <div class="close-modal-team" id="closeModalTeamTwo">X</div>
                            <img src="{{ secure_asset('images/teachers/python.png') }}" alt="">
                        </div>
                        <div class="modal-team-body">
                            <h4>Juan Francisco Arebalo Rojas</h4>
                            <h5>
                                Python
                            </h5>
                        </div>
                        <div class="modal-team-footer">
                            <p>
                                Soy una persona proactiva con un
                                gran sentido de responsabilidad y
                                honestidad, capaz de liderar equipos
                                para lograr objetivos. Me gusta
                                enfrentar nuevos desafíos y estar en
                                constante aprendizaje. Soy aficionado
                                a las nuevas tecnologías.
                                Busco desarrollarme en una
                                institución donde pueda contribuir con
                                mis habilidades blandas y técnicas,
                                donde pueda innovar y resolver
                                problemas para mejorar la vida de
                                otras personas.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="our-team-item" id="ourTeamThree">
                    <div class="team-item-header">
                        <img src="{{ secure_asset('images/teachers/bi.png') }}" alt="">
                    </div>
                    <div class="our-team-body">
                        <h4 class="our-team-title">RUBY DONNA VILLASECA NUÑEZ</h4>
                        <h5>
                            BI
                        </h5>
                    </div>
                </div>
                <div class="modal-team" id="modalTeamThree">
                    <div class="content-modal-team" id="contentModalTeamThree">
                        <div class="modal-team-header">
                            <div class="close-modal-team" id="closeModalTeamThree">X</div>
                            <img src="{{ secure_asset('images/teachers/bi.png') }}" alt="">
                        </div>
                        <div class="modal-team-body">
                            <h4>RUBY DONNA VILLASECA NUÑEZ</h4>
                            <h5>
                                BI
                            </h5>
                        </div>
                        <div class="modal-team-footer">
                            <p>
                                Magister en ingeniería Sistemas con mención en
                                tecnologías de la información, Ing. Informática
                                Colegiada con capacidad de decisión, manejo
                                de grupos, habilidades comunicativas y sociales,
                                con más de 5 años de experiencia en diferentes
                                rubros. Tengo compromiso y responsabilidad
                                con mis funciones, proactiva, creativa, con alto
                                grado de empatía, sociable, con actitud positiva
                                hacia la vida y con habilidad para crear
                                soluciones prácticas a cualquier situación.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="team-content">
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
    </section> --}}
@endsection
