<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <title><?= $titulo ?></title>
      <meta name="title" content="<?= $titulo ?>">
      <meta name="description" content="<?= $keywords ?>">
      <meta name="keywords" content="<?= $keywords ?>" />
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="<?= $titulo ?>" />
      <meta property="og:title" content="<?= $titulo ?>" />

      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>\public\assets\images\favicon\apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>\public\assets\images\favicon\favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>\public\assets\images\favicon\favicon-16x16.png">

      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="<?php echo base_url() ?>\public\assets\css\bootstrap.min.css" />

      <!-- OWL CAROUSEL -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>\public\assets\css\owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>\public\assets\css\owl.theme.default.min.css">

      <!-- Font Awesome JS -->
      <script defer src="<?php echo base_url() ?>\public\assets\js\solid.min.js" ></script>
      <link rel="stylesheet" href="<?php echo base_url() ?>\public\assets\css\all.min.css" />

      <!-- Our Custom CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>\public\assets\css\style4.css">
  </head>

  <body>
      <div class="wrapper">
          <nav id="menu" class="d-block d-md-none d-lg-none navbar fixed-top navbar-expand-lg navbar-dark shadow-sm bg-white">
           <div class="container">
              <a class="navbar-brand" href="<?= base_url() ?>\es">
                <img src="<?php echo base_url() ?>\public\assets\images\logo.png" alt="" style="height: 5rem;">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="list-unstyled components">
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\granos_semillas.png">
                            Granos y Semillas
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="<?= base_url() ?>\es\quinua">Quinua</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\kiwicha">Kiwicha</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\canihua">Cañihua</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\chia">Chia</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\sesamo">Sésamo</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#homeSubmenuFrutas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\frutas.png">
                            Frutas
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenuFrutas">
                            <li>
                                <a href="<?= base_url() ?>\es\aguaymanto">Aguaymanto</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\camucamu">Camu Camu</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\acai">Acai</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\lucuma">Lúcuma</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\arandanos">Arándanos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#homeSubmenuCacao" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\cacao_cafe.png">
                            Cacao y Café
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenuCacao">
                            <li>
                                <a href="<?= base_url() ?>\es\cacao">Cacao</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\cafe">Café</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#homeSubmenuTuberculos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\tuberculos.png">
                            Tubérculos
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenuTuberculos">
                            <li>
                                <a href="<?= base_url() ?>\es\jengibre">Jengibre</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\maca">Maca</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\yacon">Yacón</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#homeSubmenuFrutosSecos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\frutos_secos.png">
                            Frutos Secos
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenuFrutosSecos">
                            <li>
                                <a href="<?= base_url() ?>\es\nuez_de_brasil">Nuez del Amazonas</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\nuez_nogal">Nuez del Nogal</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\pecanas">Pecanas</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\sacha_inchi">Sacha inchi</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\almendras">Almendras</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#homeSubmenuFlorales" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\floral_plantas.png">
                            Florales y Plantas
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenuFlorales">
                            <li>
                                <a href="<?= base_url() ?>\es\polen">Polen</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\miel">Miel</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\panela">Panela</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>\es\andean_porcini">Andean Porcini</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>\es\contacto">
                            <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\contacto.png">
                            Contacto
                        </a>
                    </li>
                </ul>
              </div>
           </div>
          </nav>
          <!-- Sidebar  -->
          <nav id="sidebar" class="d-none d-md-block d-lg-block">
              <div class="sidebar-header">
                  <h3>
                    <a href="<?= base_url() ?>\es">
                      <img src="<?= base_url() ?>\public\assets\images\logo.png" alt="" loading="lazy">
                    </a>
                  </h3>
                  <strong>
                    <a href="<?= base_url() ?>\es">
                      <img src="<?= base_url() ?>\public\assets\images\logo2.png" alt="" loading="lazy">
                    </a>
                  </strong>
              </div>

              <ul class="list-unstyled components">
                  <li>
                      <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\granos_semillas.png">
                          Granos y Semillas
                      </a>
                      <ul class="collapse list-unstyled" id="homeSubmenu">
                          <li>
                              <a href="<?= base_url() ?>\es\quinua">Quinua</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\kiwicha">Kiwicha</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\canihua">Cañihua</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\chia">Chia</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\sesamo">Sésamo</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#homeSubmenuFrutas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\frutas.png">
                          Frutas
                      </a>
                      <ul class="collapse list-unstyled" id="homeSubmenuFrutas">
                          <li>
                              <a href="<?= base_url() ?>\es\aguaymanto">Aguaymanto</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\camucamu">Camu Camu</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\acai">Acai</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\lucuma">Lúcuma</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\arandanos">Arándanos</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#homeSubmenuCacao" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\cacao_cafe.png">
                          Cacao y Café
                      </a>
                      <ul class="collapse list-unstyled" id="homeSubmenuCacao">
                          <li>
                              <a href="<?= base_url() ?>\es\cacao">Cacao</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\cafe">Café</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#homeSubmenuTuberculos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\tuberculos.png">
                          Tubérculos
                      </a>
                      <ul class="collapse list-unstyled" id="homeSubmenuTuberculos">
                          <li>
                              <a href="<?= base_url() ?>\es\jengibre">Jengibre</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\maca">Maca</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\yacon">Yacón</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#homeSubmenuFrutosSecos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\frutos_secos.png">
                          Frutos Secos
                      </a>
                      <ul class="collapse list-unstyled" id="homeSubmenuFrutosSecos">
                          <li>
                              <a href="<?= base_url() ?>\es\nuez_de_brasil">Nuez del Amazonas</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\nuez_nogal">Nuez del Nogal</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\pecanas">Pecanas</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\sacha_inchi">Sacha inchi</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\almendras">Almendras</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#homeSubmenuFlorales" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\floral_plantas.png">
                          Florales y Plantas
                      </a>
                      <ul class="collapse list-unstyled" id="homeSubmenuFlorales">
                          <li>
                              <a href="<?= base_url() ?>\es\polen">Polen</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\miel">Miel</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\panela">Panela</a>
                          </li>
                          <li>
                              <a href="<?= base_url() ?>\es\andean_porcini">Andean Porcini</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="<?= base_url() ?>\es\contacto">
                          <img class="iconosProductos" src="<?= base_url() ?>\public\assets\images\iconos\contacto.png">
                          Contacto
                      </a>
                  </li>
              </ul>
          </nav>
