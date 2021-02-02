@extends('layouts.app')
@section('title', "Contacto")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="section-title">Envianos tu mensaje</h3>

                <form class="form-light mt-20" role="form" id="formContact">
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo electronico</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Corro electronico">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Celular">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Motivo</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo">
                    </div>
                    <div class="form-group">
                        <label>Mensaje</label>
                        <textarea class="form-control" name="message" id="message" placeholder="Escriba su mensaje aqui" required style="height:100px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnSendMessage">Enviar mensaje</button><p><br/></p>
                    <div id="messageForm"></div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Mas información</h3>
                        <div class="contact-info">
                            {{-- <h5>Dirección</h5>
                            <p>5th Street, Carl View - United States</p> --}}

                            <h5>Email</h5>
                            <p>palvarado@businesscons</p>
                            <p>ulting.com.pe</p>
                            <p>informes@businessconsu</p>
                            <p>lting.com.pe</p>
                            <p>azconsultsac@gmail.com</p>

                            <h5>Celular</h5>
                            <p>+51 956600862</p>
                            <p>+51 993092269</p>
                            <p>+51 945359186</p>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <h3 class="section-title">Timings</h3>
                        <div class="contact-info">
                            <h5>Monday - Friday</h5>
                            <p>09:00 AM - 6:30 PM</p>

                            <h5>Saturday</h5>
                            <p>Closed</p>

                            <h5>Sunday</h5>
                            <p>Closed</p>
                        </div>
                    </div> --}}
                </div>
            </div>


        </div>
        <h3>Formas de pago</h3>
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
                    <a href="https://www.viabcp.com/" target="_blank"><button class="btn btn-primary">Ir al banco BCP</button></a>
                </div>
            </div>
            <div class="payment-item">
                <div class="payment-item-header">
                    <img src="{{ secure_asset('images/interbank.png') }}" alt="interbank">
                </div>
                <div class="payment-item-body">
                    <h4>interbank</h4>
                    <p>Puede realizar una tranferencia via "Operaciones en linea " de Interbank.</p>
                    <p>CUENTA CORRIENTE: 7323003096226</p>
                    <p>CCI: 00373200300309622657</p>
                    <p>A NOMBRE DE: AYZ CONSULT (RUC: 20607183466)</p>

                    <a href="https://interbank.pe/" target="_blank"><button class="btn btn-primary">Ir a Interbank</button></a>
                </div>
            </div>
            <div class="payment-item">
                <div class="payment-item-header">
                    <img src="{{ secure_asset('images/visa.png') }}" alt="visa">
                </div>
                <div class="payment-item-body">
                    <h4>Visa & Mastercard</h4>
                    <p>Aceptamos tarjetas de débito y crédito.</p>
                    <a href="https://www.visa.com.pe/" target="_blank"><button class="btn btn-primary">Ir a Visa</button></a>
                </div>
            </div>
            <div class="payment-item">
                <div class="payment-item-header">
                    <img src="{{ secure_asset('images/agentes-all.png') }}" alt="">
                </div>
                <div class="payment-item-body">
                    <h4>Para pago por Agente de cuanquier banco.</h4>
                    <p>CCI: 00389801317245446343</p>
                    <p>A NOMBRE DE: Sergio Jair Alvarado Reyes (Gerente de A & Z Consult SAC - 4.0 Academy )</p>
                </div>
            </div>
        </div>
    </div>
@endsection
