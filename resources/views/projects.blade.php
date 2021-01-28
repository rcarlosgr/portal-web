@extends('layouts.app')
@section('title', "Proyectos")

@section('content')
    <section class="container">
        <h2>Proyectos</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero debitis consectetur at. Quibusdam esse at quam beatae ipsa cum laborum sapiente, alias libero, illo deserunt tempore dolores, dolorum facilis laboriosam!
        </p>
        <div class="projects">
            <div class="project-item" id="projectItemOne">
                <div class="project-item-header">
                    <img src="{{ secure_asset('images/portfolio/img1.jpg') }}" alt="">
                </div>
                <div class="project-item-body">
                    <p class="proyect-item-title">
                        Lorem ipsum dolor, sit amet consectetur adipisic
                    </p>
                </div>
            </div>
            <div class="modal-project" id="modalProjectOne">
                <div class="content-modal-project" id="contentModalProjectOne">
                    <div class="modal-project-header">
                        <img src="{{ secure_asset('images/portfolio/img1.jpg')}}" alt="">
                        <div class="icon-close" id="modalProjectCloseOne">X</div>
                    </div>
                    <div class="modal-project-body">
                        <p class="modal-project-title">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="modal-project-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora repellendus ad temporibus vero perferendis illum placeat qui odit sit impedit, minima, tempore error vel, a provident in nemo deserunt quae!
                        </p>
                    </div>
                </div>
            </div>

            <div class="project-item" id="projectItemTwo">
                <div class="project-item-header">
                    <img src="{{ secure_asset('images/portfolio/img2.jpg') }}" alt="">
                </div>
                <div class="project-item-body">
                    <p class="proyect-item-title">
                        Lorem ipsum dolor, sit amet consectetur adipisic
                    </p>
                </div>
            </div>
            <div class="modal-project" id="modalProjectTwo">
                <div class="content-modal-project" id="contentModalProjectTwo">
                    <div class="modal-project-header">
                        <img src="{{ secure_asset('images/portfolio/img2.jpg')}}" alt="">
                        <div class="icon-close" id="modalProjectCloseTwo">X</div>
                    </div>
                    <div class="modal-project-body">
                        <p class="modal-project-title">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="modal-project-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora repellendus ad temporibus vero perferendis illum placeat qui odit sit impedit, minima, tempore error vel, a provident in nemo deserunt quae!
                        </p>
                    </div>
                </div>
            </div>

            <div class="project-item" id="projectItemThree">
                <div class="project-item-header">
                    <img src="{{ secure_asset('images/portfolio/img3.jpg') }}" alt="">
                </div>
                <div class="project-item-body">
                    <p class="proyect-item-title">
                        Lorem ipsum dolor, sit amet consectetur adipisic
                    </p>
                </div>
            </div>
            <div class="modal-project" id="modalProjectThree">
                <div class="content-modal-project" id="contentModalProjectThree">
                    <div class="modal-project-header">
                        <img src="{{ secure_asset('images/portfolio/img3.jpg')}}" alt="">
                        <div class="icon-close" id="modalProjectCloseThree">X</div>
                    </div>
                    <div class="modal-project-body">
                        <p class="modal-project-title">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="modal-project-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora repellendus ad temporibus vero perferendis illum placeat qui odit sit impedit, minima, tempore error vel, a provident in nemo deserunt quae!
                        </p>
                    </div>
                </div>
            </div>

            <div class="project-item" id="projectItemFour">
                <div class="project-item-header">
                    <img src="{{ secure_asset('images/portfolio/img4.jpg') }}" alt="">
                </div>
                <div class="project-item-body">
                    <p class="proyect-item-title">
                        Lorem ipsum dolor, sit amet consectetur adipisic
                    </p>
                </div>
            </div>
            <div class="modal-project" id="modalProjectFour">
                <div class="content-modal-project" id="contentModalProjectFour">
                    <div class="modal-project-header">
                        <img src="{{ secure_asset('images/portfolio/img4.jpg')}}" alt="">
                        <div class="icon-close" id="modalProjectCloseFour">X</div>
                    </div>
                    <div class="modal-project-body">
                        <p class="modal-project-title">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="modal-project-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora repellendus ad temporibus vero perferendis illum placeat qui odit sit impedit, minima, tempore error vel, a provident in nemo deserunt quae!
                        </p>
                    </div>
                </div>
            </div>

            <div class="project-item" id="projectItemFive">
                <div class="project-item-header">
                    <img src="{{ secure_asset('images/portfolio/img5.jpg') }}" alt="">
                </div>
                <div class="project-item-body">
                    <p class="proyect-item-title">
                        Lorem ipsum dolor, sit amet consectetur adipisic
                    </p>
                </div>
            </div>
            <div class="modal-project" id="modalProjectFive">
                <div class="content-modal-project" id="contentModalProjectFive">
                    <div class="modal-project-header">
                        <img src="{{ secure_asset('images/portfolio/img5.jpg')}}" alt="">
                        <div class="icon-close" id="modalProjectCloseFive">X</div>
                    </div>
                    <div class="modal-project-body">
                        <p class="modal-project-title">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="modal-project-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora repellendus ad temporibus vero perferendis illum placeat qui odit sit impedit, minima, tempore error vel, a provident in nemo deserunt quae!
                        </p>
                    </div>
                </div>
            </div>
            <div class="project-item" id="projectItemSix">
                <div class="project-item-header">
                    <img src="{{ secure_asset('images/portfolio/img6.jpg') }}" alt="">
                </div>
                <div class="project-item-body">
                    <p class="proyect-item-title">
                        Lorem ipsum dolor, sit amet consectetur adipisic
                    </p>
                </div>
            </div>
            <div class="modal-project" id="modalProjectSix">
                <div class="content-modal-project" id="contentModalProjectSix">
                    <div class="modal-project-header">
                        <img src="{{ secure_asset('images/portfolio/img6.jpg')}}" alt="">
                        <div class="icon-close" id="modalProjectCloseSix">X</div>
                    </div>
                    <div class="modal-project-body">
                        <p class="modal-project-title">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="modal-project-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora repellendus ad temporibus vero perferendis illum placeat qui odit sit impedit, minima, tempore error vel, a provident in nemo deserunt quae!
                        </p>
                    </div>
                </div>
            </div>
            <div class="project-item" id="projectItemSeven">
                <div class="project-item-header">
                    <img src="{{ secure_asset('images/portfolio/img7.jpg') }}" alt="">
                </div>
                <div class="project-item-body">
                    <p class="proyect-item-title">
                        Lorem ipsum dolor, sit amet consectetur adipisic
                    </p>
                </div>
            </div>
            <div class="modal-project" id="modalProjectSeven">
                <div class="content-modal-project" id="contentModalProjectSeven">
                    <div class="modal-project-header">
                        <img src="{{ secure_asset('images/portfolio/img7.jpg')}}" alt="">
                        <div class="icon-close" id="modalProjectCloseSeven">X</div>
                    </div>
                    <div class="modal-project-body">
                        <p class="modal-project-title">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="modal-project-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora repellendus ad temporibus vero perferendis illum placeat qui odit sit impedit, minima, tempore error vel, a provident in nemo deserunt quae!
                        </p>
                    </div>
                </div>
            </div>
            <div class="project-item" id="projectItemEight">
                <div class="project-item-header">
                    <img src="{{ secure_asset('images/portfolio/img8.jpg') }}" alt="">
                </div>
                <div class="project-item-body">
                    <p class="proyect-item-title">
                        Lorem ipsum dolor, sit amet consectetur adipisic
                    </p>
                </div>
            </div>
            <div class="modal-project" id="modalProjectEight">
                <div class="content-modal-project" id="contentModalProjectEight">
                    <div class="modal-project-header">
                        <img src="{{ secure_asset('images/portfolio/img8.jpg')}}" alt="">
                        <div class="icon-close" id="modalProjectCloseEight">X</div>
                    </div>
                    <div class="modal-project-body">
                        <p class="modal-project-title">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="modal-project-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora repellendus ad temporibus vero perferendis illum placeat qui odit sit impedit, minima, tempore error vel, a provident in nemo deserunt quae!
                        </p>
                    </div>
                </div>
            </div>
            <div class="project-item" id="projectItemNine">
                <div class="project-item-header">
                    <img src="{{ secure_asset('images/portfolio/img9.jpg') }}" alt="">
                </div>
                <div class="project-item-body">
                    <p class="proyect-item-title">
                        Lorem ipsum dolor, sit amet consectetur adipisic
                    </p>
                </div>
            </div>
            <div class="modal-project" id="modalProjectNine">
                <div class="content-modal-project" id="contentModalProjectNine">
                    <div class="modal-project-header">
                        <img src="{{ secure_asset('images/portfolio/img9.jpg')}}" alt="">
                        <div class="icon-close" id="modalProjectCloseNine">X</div>
                    </div>
                    <div class="modal-project-body">
                        <p class="modal-project-title">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="modal-project-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora repellendus ad temporibus vero perferendis illum placeat qui odit sit impedit, minima, tempore error vel, a provident in nemo deserunt quae!
                        </p>
                    </div>
                </div>
            </div>



        </div>
    </section>
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> --}}
@endsection
