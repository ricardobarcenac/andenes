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
                     <a class="nav-link" href="<?= base_url() ?>\es\acai">ES</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url() ?>\en\acai">EN</a>
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
             <a class="nav-link" href="<?= base_url() ?>\es\acai"><strong>ES</strong></a>
           </div>
           <div class="col-4 text-center">
             <a class="nav-link" href="<?= base_url() ?>\en\acai"><strong>EN</strong></a>
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
                  <img class="d-block w-100" src="<?= base_url() ?>\public\assets\images\productos\frutas\acai-banner-cn.png" alt="" loading="lazy">
               </div>
            </div>
         </div>
      </div>
      <div class="row mx-0">
        <div class="col-12 col-md-12 col-lg-12 text-justify">
          <h2>Descripción</h2>
          <p>巴西莓是一種熱帶森林水果，似於藍莓，盛產於秘魯和巴西的亞馬遜森林。</p>
          <p>巴西大量栽種這種水果，秘魯正逐漸推廣它。</p>
          <p>巴西莓以其高含量的花青素化合物而聞名，類似於紅葡萄酒中的成分，這使它們成為強大的抗氧化劑。 富含健康脂肪酸和膳食纖維，可改善心血管和消化系統。</p>
        </div>
        <div class="col-12 col-md-12 col-lg-6 text-justify">
          <h2>益處</h2>
          <ul>
            <li>富含鐵、鈣、纖維和維他命A</li>
            <li>富含花青素成分，如白藜蘆醇和氰化和阿魏酸，以及類黃酮，以保護身體免受有害的自由基。</li>
            <li>豐富的花青素能量。</li>
            <li>富含有益的脂肪酸，如油酸，橄欖油中發現的油之一</li>
            <li>大量的膳食纖維有助於維持生理系統平恆。</li>
            <li>預防關節炎，發炎，肥胖症，勃起功能障礙，氧化壓力，心臟病、癌症、神經系統疾病和過敏。</li>
          </ul>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center text-white align-middle" style="background-color: #4c8e4c;">微量營養素</th>
                <th class="text-center text-white align-middle" style="background-color: #4c8e4c;">維生素</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center align-middle">鈣</td>
                <td class="text-center align-middle">維他命A</td>
              </tr>
              <tr>
                <td class="text-center align-middle">鐵</td>
                <td class="text-center align-middle"></td>
              </tr>
              <tr>
                <td class="text-center align-middle">氰化物</td>
                <td class="text-center align-middle"></td>
              </tr>
              <tr>
                <td class="text-center align-middle">黃酮類化合物</td>
                <td class="text-center align-middle"></td>
              </tr>
              <tr>
                <td class="text-center align-middle">白藜芦醇</td>
                <td class="text-center align-middle"></td>
              </tr>
              <tr>
                <td class="text-center align-middle">阿魏酸</td>
                <td class="text-center align-middle"></td>
              </tr>
              <tr>
                <td class="text-center align-middle">油酸</td>
                <td class="text-center align-middle"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-12 col-md-12 col-lg-12">
          <h2>形式</h2>
          <div class="row justify-content-center">
            <div class="col-4 col-md-4 col-lg-3">
              <img class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\presentacionesCN\deshidratado.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-4 col-lg-3">
              <img class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\presentacionesCN\polvo.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-4 col-lg-3">
              <img class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\presentacionesCN\atomizado.png" alt="" loading="lazy">
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12">
          <h2>認證</h2>
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
