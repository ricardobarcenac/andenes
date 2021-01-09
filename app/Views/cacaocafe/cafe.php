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
                  <li class="nav-item active">
                     <a class="nav-link" href="<?= base_url() ?>\en\coffee">EN</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url() ?>\cn\cafe">繁體</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url() ?>\cs\cafe">簡體</a>
                  </li>
               </ul>
             </div>
          </div>
       </nav>
       <nav class="nav nav-underline d-md-none d-lg-none" aria-label="Secondary navigation">
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\en\coffee"><strong>EN</strong></a>
           </div>
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\cn\cafe"><strong>繁體</strong></a>
           </div>
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\cs\cafe"><strong>簡體</strong></a>
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
                  <img class="d-block w-100" src="<?= base_url() ?>\public\assets\images\productos\cacao_cafe\cafe-banner.png" alt="" loading="lazy">
               </div>
            </div>
         </div>
      </div>
      <div class="row mx-0">
        <div class="col-12 col-md-12 col-lg-12 text-justify">
          <h2>Descripción</h2>
          <p>100% café arabica orgánico del norte, centro y sur del Perú. Una gran variedad de matices y sabores, destacan en cada uno de sus únicos orígenes.</p>
          <ul>
            <li>Cajamarca: Typica, Caturra y Bourbon.</li>
            <li>Villarica, Chanchamayo y Satipo: Café orgánico en el Valle de Rio Tambo (Satipo), en el centro del Amazonas en Perú. Entre su diversidad destaca los tucanes Toco.</li>
            <li>Cuzco y Puno: Pioneros en la producción de café orgánico. En el Valle de Tambopata. Entre su biodiversidad se encuentra el “Gallito de las rocas” o “Tunki”, el cual está protegido por los miembros de la cooperativa.</li>
          </ul>
        </div>
        <div class="col-12 col-md-12 col-lg-6 text-justify">
          <h2>Beneficios para la salud</h2>
          <p>Además de la cafeína, el café es rico en antioxidantes (principalmente ácidos cafeicos hidroxicinámicos y polifenoles).</p>
          <ul>
            <li>Incrementa la energía física y mental</li>
            <li>Ayuda a quemar grasas</li>
            <li>Ayuda a combatir el estrés y la depresión, mejorando instantáneamente el estado de ánimo</li>
          </ul>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
          <p class="text-center">
            <img class="d-block w-100 text-center mx-auto" src="<?= base_url() ?>\public\assets\images\productos\cacao_cafe\infografia-cafe.png" alt="" loading="lazy">
          </p>
        </div>
        <div class="col-12 col-md-12 col-lg-12">
          <h2>Presentaciones</h2>
          <div class="row justify-content-center">
            <div class="col-4 col-md-4 col-lg-3">
              <img class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\presentaciones\granos.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-4 col-lg-3">
              <img class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\presentaciones\tostado.png" alt="" loading="lazy">
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12">
          <h2>Certificaciones</h2>
          <div class="row justify-content-center">
            <div class="col-4 col-md-2 col-lg-2 py-3">
              <img style="width: 80px" class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\certificados\usda.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-2 col-lg-2 py-3">
              <img style="width: 80px" class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\certificados\oeu.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-2 col-lg-2 py-3">
              <img style="width: 80px" class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\certificados\rtpo.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-2 col-lg-2 py-3">
              <img style="width: 80px" class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\certificados\kiwa.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-2 col-lg-2 py-3">
              <img style="width: 80px" class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\caracteristicas\GMOFree.png" alt="" loading="lazy">
            </div>
          </div>
        </div>
      </div>
