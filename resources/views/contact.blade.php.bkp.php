

<div class="container">
    <div class="row">

        <div class="col-lg-12 col-12 text-center">
            <h2 class="mb-5">Nosso Contato</h2>
        </div>

        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.309583026354!2d-53.474138323324944!3d-24.955579614292155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f3d5e6727425d3%3A0x4f9784421f01ce3!2sR.%20Visc.%20do%20Rio%20Branco%2C%202366%20-%20Centro%2C%20Cascavel%20-%20PR%2C%2085801-240!5e0!3m2!1spt-BR!2sbr!4v1697551215370!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
            <h4 class="mb-3">Suporte</h4>

            <p>Rua Visconde do Rio Branco,2366 - Centro, Cascavel/PR</p>

            <hr>

            <p class="d-flex align-items-center mb-1">
                <span class="me-2">Telefone:</span>

                <a href="tel: 4533035841" class="site-footer-link">
                    (45) 3303-5841
                </a>
            </p>

            <p class="d-flex align-items-center">
                <span class="me-2">Email:</span>

                <a href="mailto:suporte@zabke.com.br" class="site-footer-link">
                    suporte@zabke.com.br
                </a>
            </p>
        </div>

        <div class="col-lg-3 col-md-6 col-12 mx-auto">
            <h4 class="mb-3">Comercial</h4>

            <p>Rua Visconde do Rio Branco,2366 - Centro, Cascavel/PR</p>

            <hr>

            <p class="d-flex align-items-center mb-1">
                <span class="me-2">Telefone:</span>

                <a href="tel:4533035840 " class="site-footer-link">
                    (45) 3303-5840
                </a>
            </p>

            <p class="d-flex align-items-center">
                <span class="me-2">Email:</span>

                <a href="mailto:comercial@zabke.com.br" class="site-footer-link">
                    comercial@zabke.com.br
                </a>
            </p>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">

        <div class="col-lg-12 col-12">
            <h3 class="mb-4 pb-2">Preencha o formulário abaixo:</h3>
        </div>



        <div class="col-lg-12 col-12">

            <form action="/contact" method="post" class="custom-form contact-form" role="form">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-floating">
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nome" required="required" value="{{ old('name') }}">

                            <label for="floatingInput">Nome</label>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12"> 
                        <div class="form-floating">
                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required="" value="{{ old('email') }}">

                            <label for="floatingInput">Email</label>

                        </div>
                    </div>

                    <div class="col-lg-12 col-12">
                        <div class="form-floating ">
                            <input type="text" name="assunto" id="assunto" class="form-control @error('assunto') is-invalid @enderror" placeholder="Assunto" required="" value="{{ old('assunto') }}">

                            <label for="floatingInput">Assunto</label>

                        </div>

                        <div class="form-floating">
                            <textarea class="form-control  @error('mensagem') is-invalid @enderror" id="mensagem" name="mensagem" placeholder="Mensagem">{{ old('mensagem') }}</textarea>

                            <label for="floatingTextarea">Mensagem</label>

                        </div>
                    </div>

                    <div class="col-lg-4 col-12 ms-auto">
                        <button type="submit" class="form-control">Enviar</button>
                    </div>

                </div>
            </form>
        </div>



    </div>
</div>


