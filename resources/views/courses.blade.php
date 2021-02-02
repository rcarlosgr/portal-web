@extends('layouts.app')
@section('title', "Cursos")

@section('content')
    <div class="container">
        <h3>Cursos</h3>
        <div class="courses">
            <div class="content-courses">
                <div class="course-item" id="courseItemOne">
                    <div class="course-item-header">
                        <img src="{{ secure_asset('images/courses/img1.png') }}" alt="">
                    </div>
                    <div class="course-item-body">
                        <h4 class="course-item-title">Matlab y Simulink</h4>
                    </div>
                </div>
                <div class="modal-course-item" id="modalCourseOne">
                    <div class="content-modal-course">
                        <div class="icon-close-modal-course" id="closeModalCourseOne">X</div>
                        <div class="modal-course-header">
                            <h4>Matlab y Simulink</h4>
                        </div>
                        <div class="modal-course-body">
                            <p>
                                Capacitación en Matlab y Simulink para el modelamiento y simulación de procesos.
                            </p>
                        </div>
                        <div class="modal-course-footer">
                            <a href="{{ secure_url('contacto') }}"><button class="btn btn-primary">Inscripción</button></a>
                        </div>
                    </div>
                </div>


                <div class="course-item" id="courseItemTwo">
                    <div class="course-item-header">
                        <img src="{{ secure_asset('images/courses/img2.png') }}" alt="">
                    </div>
                    <div class="course-item-body">
                        <h4 class="course-item-title">Python</h4>
                    </div>
                </div>
                <div class="modal-course-item" id="modalCourseTwo">
                    <div class="content-modal-course">
                        <div class="icon-close-modal-course" id="closeModalCourseTwo">X</div>
                        <div class="modal-course-header">
                            <h4>Python</h4>
                        </div>
                        <div class="modal-course-body">
                            <p>
                                Capacitación en Python para la implementación de Bases de Datos, Machine Learning y Automatización.
                            </p>
                        </div>
                        <div class="modal-course-footer">
                            <a href="{{ secure_url('contacto') }}"><button class="btn btn-primary">Inscripción</button></a>
                        </div>
                    </div>
                </div>


                <div class="course-item" id="courseItemThree">
                    <div class="course-item-header">
                        <img src="{{ secure_asset('images/courses/img3.png') }}" alt="">
                    </div>
                    <div class="course-item-body">
                        <h4 class="course-item-title">Macros</h4>
                    </div>
                </div>
                <div class="modal-course-item" id="modalCourseThree">
                    <div class="content-modal-course">
                        <div class="icon-close-modal-course" id="closeModalCourseThree">X</div>
                        <div class="modal-course-header">
                            <h4>Macros</h4>
                        </div>
                        <div class="modal-course-body">
                            <p>
                                Capacitación en Macros para la implementación de Bases de Datos y Automatización de procedimientos digitales.
                            </p>
                        </div>
                        <div class="modal-course-footer">
                            <a href="{{ secure_url('contacto') }}"><button class="btn btn-primary">Inscripción</button></a>
                        </div>
                    </div>
                </div>


                <div class="course-item" id="courseItemFour">
                    <div class="course-item-header">
                        <img src="{{ secure_asset('images/courses/img4.png') }}" alt="">
                    </div>
                    <div class="course-item-body">
                        <h4 class="course-item-title">Sistemas de automatización PID</h4>
                    </div>
                </div>
                <div class="modal-course-item" id="modalCourseFour">
                    <div class="content-modal-course">
                        <div class="icon-close-modal-course" id="closeModalCourseFour">X</div>
                        <div class="modal-course-header">
                            <h4>Sistemas de automatización PID</h4>
                        </div>
                        <div class="modal-course-body">
                            <p>
                                Capacitación en sistemas de automatización PID para automatización de procesos continuos.
                            </p>
                        </div>
                        <div class="modal-course-footer">
                            <a href="{{ secure_url('contacto') }}"><button class="btn btn-primary">Inscripción</button></a>
                        </div>
                    </div>
                </div>


                <div class="course-item" id="courseItemFive">
                    <div class="course-item-header">
                        <img src="{{ secure_asset('images/courses/img5.png') }}" alt="">
                    </div>
                    <div class="course-item-body">
                        <h4 class="course-item-title">Power Bi</h4>
                    </div>
                </div>
                <div class="modal-course-item" id="modalCourseFive">
                    <div class="content-modal-course">
                        <div class="icon-close-modal-course" id="closeModalCourseFive">X</div>
                        <div class="modal-course-header">
                            <h4>Power Bi</h4>
                        </div>
                        <div class="modal-course-body">
                            <p>
                                Capacitación en Análisis de Datos con Power Bi.
                            </p>
                        </div>
                        <div class="modal-course-footer">
                            <a href="{{ secure_url('contacto') }}"><button class="btn btn-primary">Inscripción</button></a>
                        </div>
                    </div>
                </div>


                <div class="course-item" id="courseItemSix">
                    <div class="course-item-header">
                        <img src="{{ secure_asset('images/courses/img6.png') }}" alt="">
                    </div>
                    <div class="course-item-body">
                        <h4 class="course-item-title">R y MiniTab</h4>
                    </div>
                </div>
                <div class="modal-course-item" id="modalCourseSix">
                    <div class="content-modal-course">
                        <div class="icon-close-modal-course" id="closeModalCourseSix">X</div>
                        <div class="modal-course-header">
                            <h4>R y MiniTab</h4>
                        </div>
                        <div class="modal-course-body">
                            <p>
                                Capacitación en análisis estadístico con R y MiniTab.
                            </p>
                        </div>
                        <div class="modal-course-footer">
                            <a href="{{ secure_url('contacto') }}"><button class="btn btn-primary">Inscripción</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
		<h3>Testimonios de alumnos</h3>

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
