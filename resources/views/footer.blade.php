


<!-- Start Footer Section -->
<section class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-box-item">
                <div class="footer-about footer-list">
                    <a class="footer-logo" href="/">
                        <img src="assets/img/logo.png" class="white-logo" alt="logo">
                    </a>
                    <p>"A necessidade é a mãe da invenção." – Platão</p>
                    <ul class="footer-social-icon">
                        <li><a href="index.html#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index.html#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="index.html#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="index.html#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-box-item">
                <div class="footer-list">
                    <h5 class="title">Informacões de Contato</h5>
                    <div class="footer-contact-info">
                        <ul class="footer-contact-list">
                            <li><i class="fa fa-location-dot"></i> Rua Antonina 1174, Centro</li>
                               <li><i class="fa fa-location-dot"></i> Cascavel - PR</li>
                            <li><i class="fa fa-mobile-screen-button"></i> <a href="tel:554531972328">45 3197 2328</a></li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:comercial@prociber.com.br">comercial@prociber.com.br</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-box-item">
                <div class="footer-list">
                    <h5 class="title">Nossos Serviços</h5>
                    <ul class="footer-nav-links">
                        <li><a href="/backup">Backup em Nuvem</a></li>
                        <li><a href="/seguranca">Segurança Digital</a></li>
                
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-box-item">
                <div class="footer-list">
                    <h5 class="title">Seja nosso parceiro</h5>
                    <div class="footer-info-newsletter">
                        <form class="newsletter-form" action="/contato" method="POST" onsubmit="documento.getElementById('btn_salvar_parceira_footer').disabled=true">
                             @csrf
                              <input type="hidden" name="assunto" id="assunto" value="Contato Site, Interesse de parceria">
                               <input type="hidden" name="name" id="name" value="NAO INFORMADO">
                              <input type="hidden" name="phone" id="phone" value="">
                            <input type="email" class="input-newsletter" placeholder="Informe seu e-mail" name="email" id="email" required="" autocomplete="off">
                            <button id="btn_salvar_parceira_footer" id="btn_salvar_parceira_footer" class="default-btn" type="submit">Inscrever-se <span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer Section -->

<!-- Start Footer Copyright Section -->
<div class="copyright-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <p>© 2024 - Todos Direitos Reservados - Desenvolvido por <span class="author-name"><a href='https://www.zabke.com.br' target='_blank'>Zabke</a></span></p>
            </div>
            <div class="col-lg-6 col-md-6">
                <ul>
                    <li> <a href="terms-condition.html">Termos e Condições</a></li>
                    <li> <a href="/politica">Política de Privacidade</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Copyright Section -->


<!-- Start Go Top Section -->
<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
</div>
<!-- End Go Top Section -->

<!-- jQuery Min JS -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap Min JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Mean Menu JS  -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- Appear Min JS -->
<script src="assets/js/jquery.appear.min.js"></script>
<!-- CounterUp Min JS -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Owl Carousel Min JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup Min JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope Min JS -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- Swiper Min JS -->
<script src="assets/js/swiper.min.js"></script>
<!-- WOW Min JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>