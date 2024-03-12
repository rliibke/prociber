
@extends('template')
  
@section('contents')
    

        <!-- Slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-7 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">Soluções<br> Inteligentes</h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">Somos uma empresa dedicada a oferecer soluções inteligentes e personalizadas para impulsionar o crescimento e o desempenho de empresas em diversos setores.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="/contato" class="btn hero-btn">Entre em contato</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="hero__img d-none d-lg-block" data-animation="fadeInRight" data-delay="1s">
                                    <img src="assets/img/hero/hero_right.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-7 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">We Collect<br> High Quality Leads</h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravi.</p>
                                 
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="industries.html" class="btn hero-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="hero__img d-none d-lg-block" data-animation="fadeInRight" data-delay="1s">
                                    <img src="assets/img/hero/hero_right.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <!-- Slider Area End-->
        <!-- What We do start-->
        <div class="what-we-do we-padding">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-tittle text-center">
                            <h2>O que oferecemos para seu negócio ?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-do text-center mb-30">
                            <div class="do-icon">
                                <span  class="flaticon-tasks"></span>
                            </div>
                            <div class="do-caption">
                                <h4>Software WebAssist</h4>
                              <ul class="list-group list-group-flush">
                            <li class="list-group-item">Para empresas de pequeno e médio porte</li>
                              <li class="list-group-item">Controle de Ordens de Serviço 100% Online</li>
                            <li class="list-group-item">Possui aplicativo para Técnicos de Campo</li>
                            <li class="list-group-item">Espaço Ilimitado para anexos</li>
                            <li class="list-group-item">Portal do Cliente (abertura e acompanhamento)</li>
                              <li class="list-group-item">Sem taxas de implantação</li>

                          </ul>
                                
                            </div>
                            <p></p>
                            <div class="do-btn">
                                <a href="/webassist"><i class="ti-arrow-right"></i> Saiba mais...</a>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="single-do active text-center mb-30">
                            <div class="do-icon">
                                <span  class="flaticon-social-media-marketing"></span>
                            </div>
                            <div class="do-caption">
                                <h4>Software WebPrinter</h4>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item">Para empresas de médio a grande porte</li>
                                <li class="list-group-item">Gerencie as impressões da sua empresa<li>
                                <li class="list-group-item">Reduza custos operacionais desnecessários<li>
                                <li class="list-group-item">Controle de Cotas (Impressora, Grupo e Individual)</li>
                                <li class="list-group-item">Impressão com autenticação na Estação de Trabalho</li>
                              
                               <li class="list-group-item">Sem taxas de implantação</li>

                              </ul>
                            </div>
                            <p></p>
                            <div class="do-btn">
                                <a href="/webprinter"><i class="ti-arrow-right"></i> Saiba mais...</a>
                            </div>
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
        <!-- What We do End-->
      

       
         <!-- have-project Start-->
         <div class="have-project">
            <div class="container">
                <div class="haveAproject"  data-background="assets/img/team/have.jpg">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-7 col-lg-9 col-md-12">
                            <div class="wantToWork-caption">
                                <h2>Tem algo em mente ?</h2>
                                <p>Se voce tem algum projeto em mente entre em contato conosco para avaliarmos.</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-3 col-md-12">
                           <div class="wantToWork-btn f-right">
                                <a href="/contato" class="btn btn-ans">Contato</a>
                           </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- have-project End -->

  
   
@endsection	
