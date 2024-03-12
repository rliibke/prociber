<footer>

       <!-- Footer Start-->
      <div class="footer-main" data-background="assets/img/shape/footer_bg.png">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-4 col-sm-8">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo">
                                 <a href="/"><img src="images/logos/Zabke-logo1.png" alt="" style='width:95%'></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p class="info1">ZABKE TECNOLOGIA LTDA</p>
                                     <p class="info1">R. Carlos Bartolomeu Cancelli </p>
                                        <p class="info1">N. 950, Bairro Cancelli</p>
                                       <p class="info1">Cascavel - PR - 85811-280</p>
                                        <p class="info2">comercial@zabke.com.br</p>
                                        <p class="info2">Fone (45) 3303 5840</p>
                                     
                                </div>
                             </div>
                             <div class="footer-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                         </div>
                       </div>
                    </div>
                    <!--<div class="col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="about.html">Features</a></li>
                                    <li><a href="single-blog.html">Pricing</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>-->
                     <!--<div class="col-lg-2 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#"> Sitemap</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Report a bugb</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>-->
                     <!--<div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Core Features</h4>
                                <ul>
                                 <li><a href="#">Email Marketing</a></li>
                                 <li><a href="#"> Offline SEO</a></li>
                                 <li><a href="#">Social Media Marketing</a></li>
                                 <li><a href="#">Lead Generation</a></li>
                                 <li><a href="#"> 24/7 Support</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg" style="display:none">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center">
                         <div class="col-xl-12 ">
                             <div class="footer-copy-right text-center">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
      </div>
       <!-- Footer End-->

   </footer>

        
  

<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>
             <script src="./js/swal.js"></script>
		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
          </body>
</html>

<script>
    
      @if($msg ?? '') 
                            
                            
                            swal({
                            title: "Contato enviado!",
                            text: "{{ $msg }}",
                            icon: "success",
                            button: "Fechar!",
                          });

                               
                            @endif
                            </script>