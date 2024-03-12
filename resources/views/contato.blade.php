
@extends('template')
  
@section('contents')

     
           <div class="what-we-do we-padding">
               <div class="container">
                   <div class="col-lg-12 col-md-6">
                       <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Seu contato é importante</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact" action="/contact" method="POST" id="">
                             @csrf
                             
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100 @error('mensagem') is-invalid @enderror" name="mensagem" id="mensagem" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Informe aqui a sua mensagem'" placeholder="Informe aqui a sua mensagem"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid @error('name') is-invalid @enderror" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Informe seu nome'" placeholder="Informe seu Nome" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid @error('email') is-invalid @enderror" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Informe seu e-mail'" placeholder="Seu e-mail" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control @error('assunto') is-invalid @enderror" name="assunto" id="assunto" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assunto da Mensagem'" placeholder="Assunto da Mensagem" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">ENVIAR</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>Financeiro </h3>
                                 <h3>(45) 3303-5840</h3>
                                  <h3>financeiro@zabke.com.br</h3>
                                <p>Seg. à Sex. 9:00 as 18:00</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>Comercial </h3>
                                 <h3>(45) 3303-5840</h3>
                                  <h3>comercial@zabke.com.br</h3>
                                <p>Seg. à Sex. 9:00 as 18:00</p>
                            </div>
                        </div>
                         <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>Suporte </h3>
                                 <h3>(45) 3303-5841</h3>
                                  <h3>suporte@zabke.com.br</h3>
                                <p>Seg. à Sex. 9:00 as 18:00</p>
                            </div>
                        </div>
                       
                  
                    </div>
                </div>
                   </div>
                   
                   
               </div>
               
           </div>
               
    
    
            
     
  
   
@endsection	
