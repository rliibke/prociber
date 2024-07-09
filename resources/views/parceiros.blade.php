@extends('template')

@section('contents')
<!-- Start Page Title Section -->
	<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Programa de Parceria</h2>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Section -->
	
	<!-- Start About Section -->
	<section class="about-area section-padding">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="about-image">
						<img src="assets/img/money.jpg" alt="image">
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="about-content">
						<h6 class="sub-title">Obrigado pelo interesse!</h6>
						<h2>Nosso programa de parceria</h2>
						<p align="justify">Junte-se ao nosso Programa de Parceria e comece a ganhar comissões de forma simples e eficaz! 
                                                </p>    
                                                <p align="justify">Ao indicar novos clientes para nossos serviços, você receberá uma comissão mensal sobre a mensalidade de cada cliente indicado. É uma maneira fácil de aumentar sua renda e fortalecer nosso crescimento juntos. Participe e aproveite os benefícios de ser um parceiro de sucesso!.</p>
                                        </div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Section -->
	
	<!-- Start About Section -->
	<section class="about-area pb-100">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="about-content about-content-2">
						<h6 class="sub-title">Benefícios</h6>
						<h2>Programa de Indicação</h2>
						<p align="justify">Ganhar comissão sobre cobrança recorrente é uma garantia de uma renda extra todo mês.</p>
                                                <p align="justify">Nossa comissão é bem atrativa, converse com nossa equipe comercial e entenda como funciona o processo de cadastro.</p>
                                                  <p align="justify">Além de oferecer uma ferramenta de segurança muito importante para seus parceiros, você irá lucrar com a gente.</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="about-image about-image-2">
						<img src="assets/img/parceria.jpg" alt="image">
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Section -->
        
        <section class="about-area pb-100">
		<div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-12">
                     <h3>Formulário de interesse:</h3>
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
                            <input type="hidden" name="assunto" id="assunto" value="Contato Site, Interesse de parceria">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="telefone" id="telefone" required class="form-control" placeholder="Seu telefone">
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
        </section>
        
        
	

        
@endsection
