    <footer class="bg-secondary text-white">
       <div class="container text-center text-md-center text-lg-justify text-lg-left pt-4 pb-4">
          <div class="row">
             <div class="col-12 col-sm-12 col-md-12 col-lg-4 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-2">秘魯總部辦公室 (HQ Peru)</h5>
                <p class="mb-0"><i class="fas fa-map-marker-alt"></i> 地址:Av. Del Río 484, Pueblo Libre</p>
                <p class="mb-0"><i class="fas fa-flag"></i> Lima, Perú</p>
                <p class="mb-0"><i class="fas fa-phone-alt"></i> +511 433 28 16 / +51 976 576 464</p>
                <p class="mb-0"><i class="fas fa-envelope"></i> sales@glintglobal.com</p>
             </div>
             <hr class="clearfix w-100 d-lg-none">
             <div class="col-12 col-sm-12 col-md-12 col-lg-4 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-2">亞洲分公司</h5>
                <p class="mb-0"><i class="fas fa-map-marker-alt"></i> (世界貿易中心展覽一館)臺灣110台 北市信義區信義路五段5號 Room. 7D02</p>
                <p class="mb-0"><i class="fas fa-flag"></i> (TWTC, Taipei World Trade Centre, Hall1), Taiwan</p>
                <p class="mb-0"><i class="fas fa-phone-alt"></i> +886 960 744 969</p>
                <p class="mb-0"><i class="fas fa-envelope"></i> info@glintglobal.com</p>
             </div>
             <hr class="clearfix w-100 d-lg-none">
             <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-sm-center text-md-center mx-auto">
               <div class="row">
                 <div class="col-12">
                   <img src="<?= base_url() ?>\public\assets\images\footer\footer.png" alt="" loading="lazy">
                 </div>
               </div>
             </div>
          </div>
       </div>
       <!--<hr>-->
       <!-- Footer Elements -->
       <!--<div class="container">
          <ul class="list-unstyled list-inline text-center">
             <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/TarapotoViajesOficial" target="_blank">
                <i class="fab fa-facebook-f"> </i>
                </a>
             </li>
             <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1" href="https://www.instagram.com/tarapotoviajes/" target="_blank">
                <i class="fab fa-instagram"> </i>
                </a>
             </li>
          </ul>
       </div>-->
       <!-- Copyright -->
       <div class="footer-copyright text-center py-3 bg-brown text-white">
          © <?php echo date("Y") ?> Copyright: <a href="https://www.glintglobal.com/" target="_blank" class="text-white"> Glint S.A.C.</a><br/>
            Desarrollado y optimizado por <a href="https://wa.link/autsu9" class="text-white"> Ricardo Bárcena</a>
       </div>
       <!-- Copyright -->
    </footer>
    </div>
  </div>

  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="<?php echo base_url() ?>\public\assets\js\jquery.min.js"></script>
  <!-- OWL CAOURSEL -->
  <script src="<?php echo base_url() ?>\public\assets\js\owl.carousel.min.js"></script>
  <!-- Popper.JS -->
  <script src="<?php echo base_url() ?>\public\assets\js\popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="<?php echo base_url() ?>\public\assets\js\bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });
            $(".owl-carousel").owlCarousel({
              loop:true,
              margin:10,
              responsiveClass:false,
              responsive:{
                  0:{
                      items:1,
                      nav:true
                  },
                  600:{
                      items:3,
                      nav:false
                  },
                  1000:{
                      items:3,
                      nav:true,
                      loop:false
                  }
              }
            });
        });
    </script>
  </body>
</html>
