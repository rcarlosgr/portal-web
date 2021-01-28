@extends('layouts.app')
@section('title', "Contacto")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="section-title">Envianos tu mensaje</h3>
                <p>
                Lorem Ipsum is inting and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <form class="form-light mt-20" role="form">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo electronico</label>
                                <input type="email" class="form-control" placeholder="Corro electronico">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label>
                                <input type="text" class="form-control" placeholder="Celular">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label>Mensaje</label>
                        <textarea class="form-control" id="message" placeholder="Escriba su mensaje aqui" style="height:100px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-two">Enviar mensaje</button><p><br/></p>
                </form>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="section-title">Direccion de la oficina</h3>
                        <div class="contact-info">
                            <h5>Address</h5>
                            <p>5th Street, Carl View - United States</p>

                            <h5>Email</h5>
                            <p>info@webthemez.com</p>

                            <h5>Phone</h5>
                            <p>+09 123 1234 123</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="section-title">Timings</h3>
                        <div class="contact-info">
                            <h5>Monday - Friday</h5>
                            <p>09:00 AM - 6:30 PM</p>

                            <h5>Saturday</h5>
                            <p>Closed</p>

                            <h5>Sunday</h5>
                            <p>Closed</p>
                        </div>
                    </div>
                </div>
                <h3 class="section-title">Formas de pago</h3>

            </div>


        </div>
        <div class="methods-payment">
            <div class="payment-item">
                <div class="payment-item-header">
                    <img src="{{ secure_asset('images/yape.png') }}" alt="yape">
                </div>
                <div class="payment-item-body">
                    <h4>Yape</h4>
                    <p>Yape es un app del BCP con la que puedes hacer transferencias utilizando únicamente el número de celular de tus contactos.</p>
                </div>
            </div>
            <div class="payment-item">
                <div class="payment-item-header">
                    <img src="{{ secure_asset('images/bcp.png') }}" alt="bcp">
                </div>
                <div class="payment-item-body">
                    <h4>Banco de Crédito del Perú</h4>
                    <p>(Puede realizar una Transferencia via "Operaciones en linea" del BCP.</p>
                    <a href="https://www.viabcp.com/" target="_blank"><button class="btn">Ir al banco BCP</button></a>
                </div>
            </div>
            <div class="payment-item">
                <div class="payment-item-header">
                    <img src="{{ secure_asset('images/interbank.png') }}" alt="interbank">
                </div>
                <div class="payment-item-body">
                    <h4>interbank</h4>
                    <p>Puede realizar una tranferencia via "Operaciones en linea " de Interbank.</p>
                    <a href="https://interbank.pe/" target="_blank"><button class="btn">Ir a Interbank</button></a>
                </div>
            </div>
            <div class="payment-item">
                <div class="payment-item-header">
                    <img src="{{ secure_asset('images/visa.png') }}" alt="visa">
                </div>
                <div class="payment-item-body">
                    <h4>Visa & Mastercard</h4>
                    <p>Aceptamos tarjetas de débito y crédito.</p>
                    <a href="https://www.visa.com.pe/" target="_blank"><button class="btn">Ir a Visa</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
