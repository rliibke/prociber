
@extends('template')

@section('contents')

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Zabke Tecnologia</h1>

                            <h6 class="text-center">Sua parceira no mundo da tecnologia</h6>

                            @if($msg ?? '') 
                            
                                <center><blockquote>
                                    <h3>{{ $msg }}</h3>
                                </blockquote>
                                </center>
                            @endif
                            <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                
                            </form>
                        </div>

                    </div>
                </div>
            </section>
            
            
            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                               
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">WebAssist</h5>

                                            <p class="mb-0">Software para gerenciamento de ordens de serviço.</p>
                                        </div>
                                    </div>
                                <a href="https://demo.webassist.com.br" target="_blank" class="btn custom-btn mt-2 mt-lg-3">Acesse a demo online</a>
                                
                                    <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                    <a href="https://play.google.com/store/apps/details?id=br.com.zabke.zabketickets&pcampaignid=web_share" target='_blank'><i class="bi bi-google-play social-icon-link"></i></a>
                              
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">WebPrinter</h5>

                                            <p class="text-white">Software para gerenciamento de impressões, utilize nosso software e reduza até 30% dos seus custos com impressões</p>
                                            

                                            <a href="https://demo.webprinter.com.br" target="_blank" class="btn custom-btn mt-2 mt-lg-3">Acesse a demo online</a><BR><BR>
                                           
                                            
                                        </div>
                                    </div>

                                    <div class="social-share d-flex">
                                        <p class="text-white me-4">Redes Sociais:</p>

                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="https://www.instagram.com/zabketecnologia/" target='_blank' class="social-icon-link bi-instagram"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="https://www.facebook.com/zabketecnologia" target='_blank' class="social-icon-link bi-facebook"></a>
                                            </li>
                                        
                                        <li class="social-icon-item">
                                                <a href="https://wa.me/+554533035840" target='_blank' class="social-icon-link bi-whatsapp"></a>
                                        </li>
                                        
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="explore-section section-padding" id="section_2">
                @include('planos')
            </section>

            <section class="topics-detail-section section-padding section-bg" id="section_3">
                @include('webassist')
            </section>

            <section class="topics-detail-section section-padding section-bg" id="section_4">
                @include('webprinter')
            </section>

            <section class="faq-section section-padding" id="section_5">
                @include('faq')
            </section>
            
            <section class="faq-section section-padding" id="section_6">    
                @include('clientes')
            </section>

            <section class="contact-section section-padding section-bg" id="section_7">
                   @include('parceiros')
            </section>

            <section class="contact-section section-padding section-bg" id="section_8">
                   @include('contact')
            </section>

            

@endsection