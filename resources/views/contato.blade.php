@extends('template')

@section('contents')

<!-- Start Page Title Section -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contato</h2>
                    <ul>
                        <li><a href="index.html">Home</a>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Section -->

<!-- Start Contact Section -->
<div class="contact-section contact-page-form section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="contact-information-box-1">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="single-contact-info-box">
                                <div class="contact-info">
                                    <h6>Endereço:</h6>
                                    <p>Rua Antonina 1174</p>
                                    <p>Cascavel, PR</p>
                                </div>
                                <div class="contact-info-bg-icon">
                                    <i class="pe-7s-map-marker"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="single-contact-info-box">
                                <div class="contact-info">
                                    <h6>Telefone:</h6>
                                    <p>(45) 3197 2328</p>
                                </div>
                                <div class="contact-info-bg-icon">
                                    <i class="pe-7s-call"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="single-contact-info-box">
                                <div class="contact-info">
                                    <h6>Email:</h6>
                                    <p>comercial@prociber.com.br</p>
                                </div>
                                <div class="contact-info-bg-icon">
                                    <i class="pe-7s-mail"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                     <h3>Formulário de contato:</h3>
                <div class="contact-form contact-form-1">
               
                    <form id="contact-form" class="form" action="/contato" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required placeholder="Seu Nome">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required placeholder="Seu e-mail">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" required class="form-control" placeholder="Seu telefone">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required placeholder="Informe aqui sua mensagem"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">ENVIAR <span></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Section -->



@endsection	
