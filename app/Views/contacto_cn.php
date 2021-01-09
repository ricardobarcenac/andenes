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
                      <a class="nav-link" href="#">ES</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="#">EN</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="#">簡體</a>
                   </li>
                </ul>
             </div>
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
                  <img class="d-block w-100" src="<?= base_url() ?>\public\assets\images\slides\banner_contacto.png" alt="" loading="lazy">
               </div>
            </div>
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
        <div class="row justify-content-center py-5">
          <div class="col-12 col-md-8 col-lg-8">
            <h2>¡Comunícate con nosotros!</h2>
            <form action="contacto_cn" method="post">
              <div class="form-group">
                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres y apellidos" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
              </div>
              <div class="form-group">
                <input type="mail" class="form-control" id="correo" name="correo" placeholder="Correo electrónico">
              </div>
              <!--<div class="form-group">
                <label>Estoy interesado en:</label>
                <select id="inputState" class="form-control">
                  <option selected>Elija un producto</option>
                  <option value="quinua">Granos y Semillas - Quinua</option>
                  <option value="kiwicha">Granos y Semillas - Kiwicha</option>
                  <option value="canihua">Granos y Semillas - Cañihua</option>
                  <option value="chia">Granos y Semillas - Chia</option>
                  <option value="sesamo">Granos y Semillas - Sésamo</option>
                  <option value="aguaymanto">Frutas - Aguaymanto</option>
                  <option value="camucamu">Frutas - Camu Camu</option>
                  <option value="acai">Frutas - Acai</option>
                  <option value="lucuma">Frutas - Lúcuma</option>
                  <option value="arandanos">Frutas - Arándanos</option>
                  <option value="cacao">Frutas - Cacao</option>
                  <option value="cafe">Frutas - Café</option>
                  <option value="jengibre">Tubérculos - Jengibre</option>
                  <option value="maca">Tubérculos - Maca</option>
                  <option value="yacon">Tubérculos - Yacón</option>
                  <option value="nuezamazonas">Frutos Secos - Nuez del Amazonas</option>
                  <option value="nueznogal">Frutos Secos - Nuez del Nogal</option>
                  <option value="pecanas">Frutos Secos - Pecanas</option>
                  <option value="sachainchi">Frutos Secos - Sacha Inchi</option>
                  <option value="almendras">Frutos Secos - Almendras</option>
                  <option value="polen">Florales y Plantas - Polen</option>
                  <option value="miel">Florales y Plantas - Miel</option>
                  <option value="panela">Florales y Plantas - Panela</option>
                  <option value="andeanporcini">Florales y Plantas - Andean Porcini</option>
                </select>
              </div>-->
              <div class="form-group">
                <textarea class="form-control" id="consulta" name="consulta" cols="40" rows="10" placeholder="Mensaje" style="min-height: 200px"></textarea>
              </div>
              <p class="text-center">Al enviar este formulario, usted acepta nuestros <a href="#">Términos y Condiciones</a></p>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-success rounded-0 px-5 py-2" href="#" role="button"><i class="far fa-envelope"></i><small> ¡QUIERO QUE ME CONTACTEN!</small></button>
              </div>
            </form>
          </div>
        </div>
      </div>
