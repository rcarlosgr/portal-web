@extends('layouts.app')
@section('title', "Consultoria")

@section('content')

    <section class="container">
        <h3>Ponemos a tu disposición un conjunto de consultorías en:</h3>
        <div class="consultancy">
            <div class="content-consultancy">
                <div class="consultancy-item" id="consultancyItemOne">
                    <div class="consultancy-item-header">
                        <img src="{{ secure_asset('images/consultancy/img1.png') }}" alt="">
                    </div>
                    <div class="consultancy-item-body">
                        <h4>Servicios de consultoría en automatización industrial</h4>
                    </div>
                </div>
                <div class="modal-consultancy" id="modalConsultancyOne">
                    <div class="content-modal-consultancy" id="contentModalConsultancyOne">
                        <div class="modal-consultancy-header">
                            <h4 class="modal-consultancy-title">Servicios de consultoría en automatización industrial</h4>
                            <div class="icon-close-modal-consultancy" id="closeModalConsultancyOne">X</div>
                        </div>
                        <div class="modal-consultancy-body">
                            <div>
                                <article>
                                    <p>
                                        Optimización de la sintonización de controladores PID a través del uso de herramientas no convencionales (Inteligencia Artificial):
                                    </p>
                                    <ul>
                                        <li>Disminución de uso de recursos</li>
                                        <li>Disminución del Setling Time (Tiempo de llegada al Valor Deseado)</li>
                                        <li>Suavización del transitorio de procesos frágiles (Overshoot)</li>
                                        <li>Disminución de efectos generados por agentes externos (Disturbios: Temperatura Ambiente, Contaminación sonora, Vibraciones, etc.)</li>
                                    </ul>
                                </article>
                                <article>
                                    Modelamiento de procesos industriales con herramientas inteligentes, a través de la adquisición de data de sensores previamente instalados, para la simulación y evaluación del comportamiento de los procesos en condiciones desconocidas.
                                </article>
                            </div>
                            <div>
                                <article>
                                    Implementación de sensores y centros de adquisición de data para el Modelamiento de Procesos y Toma de Decisiones.
                                </article>
                                <article>
                                    Diseño, simulación, análisis e implementación de sistemas de automatización con: PID o Entornos Programables, PLC, etc. Con los objetivos del Incremento de Productividad, Aumento de Eficiencia, Aumento de Calidad, Disminución de Costos, Disminución del Riesgo Humano y Disminución del Error Humano.
                                </article>
                                <article>
                                    Automatización de procesos digitales, lo que permitirá a nuestros clientes, automatizar procesos repetitivos que realicen por medios digitales - como la redacción de informes, rescate de información, procesos digitales engorrosos y repetitivos, entre otros - lo que les permitirá ahorrar un recurso tan importante como lo es EL TIEMPO y que, además, permitirá disminuir la cantidad de errores que se podrían cometer tras el cansancio por hacer una misma tarea repetidas veces.

                                </article>
                            </div>
                        </div>
                        <div class="modal-consultancy-footer">
                            <a href="{{ secure_url('contacto') }}"><button class="btn btn-primary">Quiero cotizar</button></a>
                        </div>
                    </div>
                </div>


                <div class="consultancy-item" id="consultancyItemTwo">
                    <div class="consultancy-item-header">
                        <img src="{{ secure_asset('images/consultancy/img2.png') }}" alt="">
                    </div>
                    <div class="consultancy-item-body">
                        <h4>Servicio de consultoría en localización y distribución de plantas, almacenes y sucursales</h4>
                    </div>
                </div>
                <div class="modal-consultancy" id="modalConsultancyTwo">
                    <div class="content-modal-consultancy" id="contentModalConsultancyTwo">
                        <div class="modal-consultancy-header">
                            <h4 class="modal-consultancy-title">Servicio de consultoría en localización y distribución de plantas, almacenes y sucursales</h4>
                            <div class="icon-close-modal-consultancy" id="closeModalConsultancyTwo">X</div>
                        </div>
                        <div class="modal-consultancy-body">
                            <div>
                                <article>
                                    <p>
                                        Localización optimizada (optimización de la ubicación) para una nueva planta industrial, almacenes o expansión de planta a través del estudio de:
                                    </p>
                                    <ul>
                                        <li>Estudio de mercado</li>
                                        <li>Estudio del transporte y distribución</li>
                                        <li>Estudio de proximidad de la materia prima e insumos</li>
                                        <li>Impacto ambiental</li>
                                        <li>Aceptación social</li>
                                        <li>Factores políticos y legales</li>
                                        <li>Disponibilidad y calidad de recursos</li>
                                        <li>Estudio de la mano de obra</li>
                                        <li>Estudio de competencia y proveedores</li>
                                        <li>Estudio de costos y gastos</li>
                                    </ul>
                                </article>
                            </div>
                            <div>
                                <article>
                                    <p>
                                        Distribución optimizada de plantas industriales, almacenes, sucursales existentes o de nueva instalación a través de:
                                    </p>
                                    <ul>
                                        <li>Dimensionamiento de las máquinas en función del espaciamiento y requerimiento del cliente</li>
                                        <li>Distribución de maquinarias, materiales e instalaciones (baños, comedor, oficinas, etc.)</li>
                                        <li>Distancias mínimas de seguridad para las personas y máquinas</li>
                                        <li>Lineamientos legales de distribución</li>
                                        <li>Señalizaciones</li>
                                    </ul>
                                </article>
                            </div>
                        </div>
                        <div class="modal-consultancy-footer">
                            <a href="{{ secure_url('contacto') }}"><button class="btn btn-primary">Quiero cotizar</button></a>
                        </div>
                    </div>
                </div>


                <div class="consultancy-item" id="consultancyItemThree">
                    <div class="consultancy-item-header">
                        <img src="{{ secure_asset('images/consultancy/img3.png') }}" alt="">
                    </div>
                    <div class="consultancy-item-body">
                        <h4>Servicio de consultoría en gestión de materiales e inventarios, pronóstico de la demanda y estudio de mermas.</h4>
                    </div>
                </div>
                <div class="modal-consultancy" id="modalConsultancyThree">
                    <div class="content-modal-consultancy" id="contentModalConsultancyThree">
                        <div class="modal-consultancy-header">
                            <h4 class="modal-consultancy-title">Servicio de consultoría en gestión de materiales e inventarios, pronóstico de la demanda y estudio de mermas.</h4>
                            <div class="icon-close-modal-consultancy" id="closeModalConsultancyThree">X</div>
                        </div>
                        <div class="modal-consultancy-body">
                            <div>
                                <article>
                                    Implementación de sistemas de gestión de materiales e inventarios con el objetivo de llevar y mantener un sistema de inventarios que maximice el beneficio de la rotación, control estricto y orden de los materiales e insumos.
                                </article>
                                <article>
                                    Implementación de sistemas de pronóstico de la demanda con el uso de inteligencia artificial con el objetivo de diseñar e implementar un modelo de pronóstico de la demanda con un error mínimo que le permita realizar su función de predecir con un resultado altamente cercano a la realidad.
                                </article>
                            </div>
                            <div>
                                <article>
                                    Estudio de aprovechamiento de mermas con el objetivo de minimizar los costos de proceso y establecer formas inteligentes para aumentar su factor ecoamigable.
                                </article>
                            </div>
                        </div>
                        <div class="modal-consultancy-footer">
                            <a href="{{ secure_url('contacto') }}"><button class="btn btn-primary">Quiero cotizar</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    </div>
@endsection
