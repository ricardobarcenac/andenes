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
                     <a class="nav-link" href="<?= base_url() ?>\en\acai">EN</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url() ?>\cn\acai">繁體</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url() ?>\cs\acai">簡體</a>
                  </li>
               </ul>
             </div>
          </div>
       </nav>
       <nav class="nav nav-underline d-md-none d-lg-none" aria-label="Secondary navigation">
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\en\acai"><strong>EN</strong></a>
           </div>
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\cn\acai"><strong>繁體</strong></a>
           </div>
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\cs\acai"><strong>簡體</strong></a>
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
                  <img class="d-block w-100" src="<?= base_url() ?>\public\assets\images\productos\frutas\acai-banner.png" alt="" loading="lazy">
               </div>
            </div>
         </div>
      </div>
      <div class="row mx-0">
        <div class="col-12 col-md-12 col-lg-12 text-justify">
          <h2>Descripción</h2>
          <p>El Açai contiene ácidos grasos saludables como el ácido oleico. Asimismo, se caracteriza por sus niveles de fibra dietética que ayudan a mantener un buen funcionamiento del sistema digestivo.</p>
          <p>El açaí es una fruta de bosque tropical, aceitosa, pequeña y morada oscura, similar a un arándano azul, que se encuentra en abundancia en la selva amazónica peruana y brasileña.</p>
          <p>El açai es conocido por su alto contenido de antocianinas, similar al que se puede encontrar en el maíz morado, que lo convierten en un potente antioxidante.</p>
        </div>
        <div class="col-12 col-md-12 col-lg-6 text-justify">
          <h2>Beneficios para la salud</h2>
          <p>Rico en antocianinas, un poderoso antioxidante con múltiples efectos beneficiosos para la salud.</p>
          <ul>
            <li>Ayuda a reducir el colesterol y controlar la presión arterial</li>
            <li>Tiene efectos antidiabéticos y anticancerígenos</li>
          </ul>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center text-white align-middle" style="background-color: #4c8e4c;">Micronutrientes</th>
                <th class="text-center text-white align-middle" style="background-color: #4c8e4c;">Vitaminas</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center align-middle">Cromo</td>
                <td class="text-center align-middle">Vitamina A</td>
              </tr>
              <tr>
                <td class="text-center align-middle">Zinc</td>
                <td class="text-center align-middle"></td>
              </tr>
              <tr>
                <td class="text-center align-middle">Cobre</td>
                <td class="text-center align-middle"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-12 col-md-12 col-lg-12">
          <h2>Presentaciones</h2>
          <div class="row justify-content-center">
            <div class="col-4 col-md-4 col-lg-3">
              <img class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\presentaciones\deshidratado.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-4 col-lg-3">
              <img class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\presentaciones\polvo.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-4 col-lg-3">
              <img class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\presentaciones\atomizado.png" alt="" loading="lazy">
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12">
          <h2>Certificaciones</h2>
          <div class="row justify-content-center">
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
