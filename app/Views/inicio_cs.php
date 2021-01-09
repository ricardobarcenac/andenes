  <!-- Page Content  -->
  <div id="content">
       <nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-md-block d-lg-block">
          <div class="container-fluid">
             <button type="button" id="sidebarCollapse" class="btn btn-info">
             <i class="fas fa-align-left"></i>
             <span>Toggle Sidebar</span>
             </button>
             <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <i class="fas fa-align-justify"></i>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                   <li class="nav-item">
                      <a class="nav-link" href="<?= base_url() ?>\es">ES</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="<?= base_url() ?>\en">EN</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="<?= base_url() ?>\cn">繁體</a>
                   </li>
                </ul>
             </div>
          </div>
       </nav>
       <nav class="nav nav-underline d-md-none d-lg-none" aria-label="Secondary navigation">
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\es"><strong>ES</strong></a>
           </div>
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\en"><strong>EN</strong></a>
           </div>
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\cn"><strong>繁體</strong></a>
           </div>
       </nav>
      <div class="col-12 p-0">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!--<ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>-->
            <div class="carousel-inner">
              <div class="carousel-item active">
                 <img class="d-block w-100" src="<?= base_url() ?>\public\assets\images\slides\slide1CS.png" alt="" loading="lazy">
              </div>
              <div class="carousel-item">
                 <img class="d-block w-100" src="<?= base_url() ?>\public\assets\images\slides\slide2CS.png" alt="" loading="lazy">
              </div>
              <div class="carousel-item">
                 <img class="d-block w-100" src="<?= base_url() ?>\public\assets\images\slides\slide3CS.png" alt="" loading="lazy">
              </div>
              <div class="carousel-item">
                 <img class="d-block w-100" src="<?= base_url() ?>\public\assets\images\slides\slide4CS.png" alt="" loading="lazy">
              </div>
              <div class="carousel-item">
                 <img class="d-block w-100" src="<?= base_url() ?>\public\assets\images\slides\slide5CS.png" alt="" loading="lazy">
              </div>
              <div class="carousel-item">
                 <img class="d-block w-100" src="<?= base_url() ?>\public\assets\images\slides\slide6CS.png" alt="" loading="lazy">
              </div>
           |</div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <div class="col-12">
        <div class="owl-carousel owl-theme d-lg-none">
            <div class="item">
              <div class="card mb-2">
                <img class="card-img-top"
                  src="<?= base_url() ?>\public\assets\images\carousel\granos-semillas.png" alt="Card image cap">
                <div class="card-body text-center">
                  <h4 class="card-title">Granos y Semillas</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-success" href="<?= base_url() ?>\cs\quinua">Ver más</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card mb-2">
                <img class="card-img-top"
                  src="<?= base_url() ?>\public\assets\images\carousel\frutas.png" alt="Card image cap">
                <div class="card-body text-center">
                  <h4 class="card-title">Frutas</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-success" href="<?= base_url() ?>\cs\aguaymanto">Ver más</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card mb-2">
                <img class="card-img-top"
                  src="<?= base_url() ?>\public\assets\images\carousel\cacao-cafe.png" alt="Card image cap">
                <div class="card-body text-center">
                  <h4 class="card-title">Cacao y Café</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-success" href="<?= base_url() ?>\cs\cacao">Ver más</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card mb-2">
                <img class="card-img-top"
                  src="<?= base_url() ?>\public\assets\images\carousel\tuberculos.png" alt="Card image cap">
                <div class="card-body text-center">
                  <h4 class="card-title">Tubérculos</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-success" href="<?= base_url() ?>\cs\jengibre">Ver más</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card mb-2">
                <img class="card-img-top"
                  src="<?= base_url() ?>\public\assets\images\carousel\frutos-secos.png" alt="Card image cap">
                <div class="card-body text-center">
                  <h4 class="card-title">Frutos Secos</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-success" href="<?= base_url() ?>\cs\nuez">Ver más</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card mb-2">
                <img class="card-img-top"
                  src="<?= base_url() ?>\public\assets\images\carousel\florales-plantas.png" alt="Card image cap">
                <div class="card-body text-center">
                  <h4 class="card-title">Florales y Plantas</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-succes" href="<?= base_url() ?>\cs\polen">Ver más</a>
                </div>
              </div>
            </div>
          </div>
         <div id="rueda" class="d-none d-lg-block text-center">
           <div>
              <a href="<?= base_url() ?>\cs\polen"><img class="img-fluid" src="<?= base_url() ?>\public\assets\images\rueda\rueda1CS.png" alt="" loading="lazy"></a>
              <a href="<?= base_url() ?>\cs\quinua"><img class="img-fluid" src="<?= base_url() ?>\public\assets\images\rueda\rueda2CS.png" alt="" loading="lazy"></a>
              <a href="<?= base_url() ?>\cs\aguaymanto"><img class="img-fluid" src="<?= base_url() ?>\public\assets\images\rueda\rueda3CS.png" alt="" loading="lazy"></a>
           </div>
           <div>
              <a href="<?= base_url() ?>\cs\cacao"><img class="img-fluid" src="<?= base_url() ?>\public\assets\images\rueda\rueda4CS.png" alt="" loading="lazy"></a>
              <a href="<?= base_url() ?>\cs\jengibre"><img class="img-fluid" src="<?= base_url() ?>\public\assets\images\rueda\rueda5CS.png" alt="" loading="lazy"></a>
              <a href="<?= base_url() ?>\cs\nuez"><img class="img-fluid" src="<?= base_url() ?>\public\assets\images\rueda\rueda6CS.png" alt="" loading="lazy"></a>
           </div>
         </div>
      </div>
