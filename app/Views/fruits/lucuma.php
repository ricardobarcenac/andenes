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
                     <a class="nav-link" href="<?= base_url() ?>\es\lucuma">ES</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url() ?>\cn\lucuma">繁體</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url() ?>\cs\lucuma">簡體</a>
                  </li>
               </ul>
             </div>
          </div>
       </nav>
       <nav class="nav nav-underline d-md-none d-lg-none" aria-label="Secondary navigation">
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\es\lucuma"><strong>ES</strong></a>
           </div>
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\cn\lucuma"><strong>繁體</strong></a>
           </div>
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\cs\lucuma"><strong>簡體</strong></a>
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
                  <img class="d-block w-100" src="<?= base_url() ?>\public\assets\images\productos\frutas\lucuma-banner-en.png" alt="" loading="lazy">
               </div>
            </div>
         </div>
      </div>
      <div class="row mx-0">
        <div class="col-12 col-md-12 col-lg-12 text-justify">
          <h2>Description</h2>
          <p>Lucuma is a native specie originally form the altoandinos of Peru, being used in its cuisine and gastronomy for over a millennia in the pre-incas culture from the north Peruvian valleys.</p>
          <p>Rich in beta-carotenes, a powerful antioxidant with anti-aging and skin protective attributes.</p>
        </div>
        <div class="col-12 col-md-12 col-lg-6 text-justify">
          <h2>Health Benefits</h2>
          <p>Contains antioxidants that delay the aging process and repairs skin cells.</p>
          <p>Splendid source of minerals.</p>
          <p>Recommended for diabetic people as a sugar replacement.</p>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center text-white align-middle" style="background-color: #4c8e4c;">Micronutrients</th>
                <th class="text-center text-white align-middle" style="background-color: #4c8e4c;">Vitamins</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center align-middle">Iron</td>
                <td class="text-center align-middle">Zinc</td>
              </tr>
              <tr>
                <td class="text-center align-middle">Vitamin B3</td>
                <td class="text-center align-middle"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-12 col-md-12 col-lg-12">
          <h2>Presentations</h2>
          <div class="row justify-content-center">
            <div class="col-4 col-md-4 col-lg-3">
              <img class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\presentacionesEN\deshidratado.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-4 col-lg-3">
              <img class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\presentacionesEN\polvo.png" alt="" loading="lazy">
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
              <img style="width: 80px" class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\caracteristicas\AllergensFree.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-2 col-lg-2 py-3">
              <img style="width: 80px" class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\caracteristicas\GlutenFree.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-2 col-lg-2 py-3">
              <img style="width: 80px" class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\caracteristicas\GMOFree.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-2 col-lg-2 py-3">
              <img style="width: 80px" class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\caracteristicas\Native.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-2 col-lg-2 py-3">
              <img style="width: 80px" class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\caracteristicas\RAW.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-2 col-lg-2 py-3">
              <img style="width: 80px" class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\caracteristicas\SuperFood.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-2 col-lg-2 py-3">
              <img style="width: 80px" class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\caracteristicas\Vegan.png" alt="" loading="lazy">
            </div>
          </div>
        </div>
      </div>
