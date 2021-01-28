@extends('layouts.app')
@section('title', "Cursos")

@section('content')
    <div id="courses">
        <section class="container">
            <h3>Cursos</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="course-item" id="courseItemOne">
                        <i class="fa fa-cogs fa-5x"></i>
                        <div class="text">
                            <h3>Responsive Design</h3>
                        </div>
                    </div>
                </div>
                <div class="container-course-modal" id="modalCourseOne">
                    <div class="content-course-modal" id="contentModalCourseOne">
                        <div class="course-modal-header">
                            <div class="icon-close" id="closeModalCourseOne">X</div>
                            <h3>Responsive Design</h3>
                        </div>
                        <div class="course-modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                        <div class="course-modal-footer">
                            <a href="{{ secure_url('contacto') }}"><button type="button" class="btn btn-success">Inscripcion</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-item" id="courseItemTwo">
                        <i class="fa fa-leaf fa-5x"></i>
                        <div class="text">
                            <h3>HTML5/CSS3</h3>
                        </div>
                    </div>
                </div>
                <div class="container-course-modal" id="modalCourseTwo">
                    <div class="content-course-modal" id="contentModalCourseTwo">
                        <div class="course-modal-header">
                            <div class="icon-close" id="closeModalCourseTwo">X</div>
                            <h3>HTML5/CSS3</h3>
                        </div>
                        <div class="course-modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                        <div class="course-modal-footer">
                            <a href="{{ secure_url('contacto') }}"><button type="button" class="btn btn-success">Inscripcion</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-item" id="courseItemThree">
                        <i class="fa fa-tachometer fa-5x"></i>
                        <div class="text">
                            <h3>Web Designing</h3>
                        </div>
                    </div>
                </div>
                <div class="container-course-modal" id="modalCourseThree">
                    <div class="content-course-modal" id="contentModalCourseThree">
                        <div class="course-modal-header">
                            <div class="icon-close" id="closeModalCourseThree">X</div>
                            <h3>Web Designing</h3>
                        </div>
                        <div class="course-modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                        <div class="course-modal-footer">
                            <a href="{{ secure_url('contacto') }}"><button type="button" class="btn btn-success">Inscripcion</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="course-item" id="courseItemFour">
                        <i class="fa fa-eye fa-5x"></i>
                        <div class="text">
                            <h3>Web App Dev</h3>
                        </div>
                    </div>
                </div>
                <div class="container-course-modal" id="modalCourseFour">
                    <div class="content-course-modal" id="contentModalCourseFour">
                        <div class="course-modal-header">
                            <div class="icon-close" id="closeModalCourseFour">X</div>
                            <h3>Web App Dev</h3>
                        </div>
                        <div class="course-modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                        <div class="course-modal-footer">
                            <a href="{{ secure_url('contacto') }}"><button type="button" class="btn btn-success">Inscripcion</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-item" id="courseItemFive">
                        <i class="fa fa-quote-right fa-5x"></i>
                        <div class="text">
                            <h3>Data Base</h3>
                        </div>
                    </div>
                </div>
                <div class="container-course-modal" id="modalCourseFive">
                    <div class="content-course-modal" id="contentModalCourseFive">
                        <div class="course-modal-header">
                            <div class="icon-close" id="closeModalCourseFive">X</div>
                            <h3>Data Base</h3>
                        </div>
                        <div class="course-modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                        <div class="course-modal-footer">
                            <a href="{{ secure_url('contacto') }}"><button type="button" class="btn btn-success">Inscripcion</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-item" id="courseItemSix">
                        <i class="fa fa-arrows fa-5x"></i>
                        <div class="text">
                            <h3>Mobile App Dev</h3>
                        </div>
                    </div>
                </div>
                <div class="container-course-modal" id="modalCourseSix">
                    <div class="content-course-modal" id="contentModalCourseSix">
                        <div class="course-modal-header">
                            <div class="icon-close" id="closeModalCourseSix">X</div>
                            <h3>Mobile App Dev</h3>
                        </div>
                        <div class="course-modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                        <div class="course-modal-footer">
                            <a href="{{ secure_url('contacto') }}"><button type="button" class="btn btn-success">Inscripcion</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
		<div class="row">
			<!-- Article content -->
			<section class="col-sm-12 maincontent">
				<h3>Testimonios de alumnos</h3>
				<!-- <p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<h3>Bootstrap</h3>
				<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> -->
			</section>
		</div>
		<!-- <div class="row offs1">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thumbnail thumbnail4">
                            <img src="assets/images/news2.jpg" alt="">

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
                                <a href="#" data-title="Read More" class="btn-link"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thumbnail thumbnail4">
                            <img src="assets/images/news3.jpg" alt="">

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
                        <div class="thumbnail thumbnail4">
                            <img src="assets/images/news4.jpg" alt="">

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

        </div> -->
		<div class="comments" id="comments">
            <div class="content-comments">
                <div class="comment-item">
                    <div class="comment-item-header">
                        <div class="comment-img">
                            <img src="{{ secure_asset('images/photo-1.jpg') }}" alt="">
                        </div>
                        <div class="comment-title">
                            <p class="comment-title-text">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="comment-item-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dicta voluptatum ullam dolores exercitationem, omnis cupiditate et quas ipsum cumque fuga assumenda fugiat provident inventore, ex minima quae, consequatur repudiandae.
                        </p>
                    </div>
                </div>
                <div class="comment-item">
                    <div class="comment-item-header">
                        <div class="comment-img">
                            <img src="{{ secure_asset('images/photo-2.jpg') }}" alt="">
                        </div>
                        <div class="comment-title">
                            <p class="comment-title-text">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="comment-item-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dicta voluptatum ullam dolores exercitationem, omnis cupiditate et quas ipsum cumque fuga assumenda fugiat provident inventore, ex minima quae, consequatur repudiandae.
                        </p>
                    </div>
                </div>
                <div class="comment-item">
                    <div class="comment-item-header">
                        <div class="comment-img">
                            <img src="{{ secure_asset('images/photo-3.jpg') }}" alt="">
                        </div>
                        <div class="comment-title">
                            <p class="comment-title-text">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="comment-item-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dicta voluptatum ullam dolores exercitationem, omnis cupiditate et quas ipsum cumque fuga assumenda fugiat provident inventore, ex minima quae, consequatur repudiandae.
                        </p>
                    </div>
                </div>
                <div class="comment-item">
                    <div class="comment-item-header">
                        <div class="comment-img">
                            <img src="{{ secure_asset('images/photo-4.jpg') }}" alt="">
                        </div>
                        <div class="comment-title">
                            <p class="comment-title-text">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="comment-item-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dicta voluptatum ullam dolores exercitationem, omnis cupiditate et quas ipsum cumque fuga assumenda fugiat provident inventore, ex minima quae, consequatur repudiandae.
                        </p>
                    </div>
                </div>
                <div class="comment-item">
                    <div class="comment-item-header">
                        <div class="comment-img">
                            <img src="{{ secure_asset('images/photo-3.jpg') }}" alt="">
                        </div>
                        <div class="comment-title">
                            <p class="comment-title-text">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="comment-item-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dicta voluptatum ullam dolores exercitationem, omnis cupiditate et quas ipsum cumque fuga assumenda fugiat provident inventore, ex minima quae, consequatur repudiandae.
                        </p>
                    </div>
                </div>
                <div class="comment-item">
                    <div class="comment-item-header">
                        <div class="comment-img">
                            <img src="{{ secure_asset('images/photo-4.jpg') }}" alt="">
                        </div>
                        <div class="comment-title">
                            <p class="comment-title-text">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="comment-item-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dicta voluptatum ullam dolores exercitationem, omnis cupiditate et quas ipsum cumque fuga assumenda fugiat provident inventore, ex minima quae, consequatur repudiandae.
                        </p>
                    </div>
                </div>




            </div>
        </div>

        {{-- <div class="pic-ctn">
            <div class="comment-item pic">
				<div class="comment-item-header">
                    <div class="comment-img">
                        <img src="{{ secure_asset('images/photo-1.jpg') }}" alt="">
                    </div>
                    <div class="comment-title">
                        <p class="comment-title-text">Carlos Gonzales Ramos</p>
					</div>
				</div>
				<div class="comment-item-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dicta voluptatum ullam dolores exercitationem, omnis cupiditate et quas ipsum cumque fuga assumenda fugiat provident inventore, ex minima quae, consequatur repudiandae.
                    </p>
                </div>
			</div>
        </div> --}}
    </div>
@endsection
