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
                     <a class="nav-link" href="<?= base_url() ?>\es\cafe">ES</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url() ?>\en\coffee">EN</a>
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
             <a class="nav-link" href="<?= base_url() ?>\es\cafe"><strong>ES</strong></a>
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
                  <img class="d-block w-100" src="<?= base_url() ?>\public\assets\images\productos\cacao_cafe\cafe-banner-cn.png" alt="" loading="lazy">
               </div>
            </div>
         </div>
      </div>
      <div class="row mx-0">
        <div class="col-12 col-md-12 col-lg-12 text-justify">
          <h2>說明</h2>
          <ul>
            <li>卡哈馬卡(Cajamarca)：100％阿拉比卡咖啡：帝比卡種(Typica) 95％和波旁種(Bourbon) 5％.</li>
            <li>比利亞里卡省(Villarica)、錢查馬約省(Chanchamayo)和薩蒂波(Satipo) ：原產於坦博河谷的有機咖啡，正好在秘魯亞馬遜的中心。 當地豐富的生物多樣性以巨嘴鳥最為出名</li>
            <li>普諾(Puno)：原產於坦波帕塔山谷的有機咖啡，當地豐富的生物多樣性以秘魯國鳥Tunki最為出名．</li>
          </ul>
        </div>
        <div class="col-12 col-md-12 col-lg-6 text-justify">
          <h2>卡哈馬卡(Cajamarca)</h2>
          <p>杯測分數83</p>
          <ul>
            <li>香氣：巧克力</li>
            <li>酸度：中等</li>
            <li>醇度：中等</li>
            <li>口感：柑橘香巧克力風味</li>
          </ul>
          <h2>比利亞里卡省(Villarica)、錢查馬約省(Chanchamayo)和薩蒂波(Satipo)</h2>
          <p>杯測分數81-82</p>
          <ul>
            <li>香氣：巧克力</li>
            <li>酸度：中等</li>
            <li>醇度：中等</li>
            <li>口感：柑橘香巧克力風味</li>
          </ul>
          <h2>普諾(Puno)</h2>
          <p>品嚐分數85-87</p>
          <ul>
            <li>香氣：花香</li>
            <li>酸度：高</li>
            <li>醇度：濃厚</li>
            <li>口感：巧克力風味</li>
          </ul>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
          <p class="text-center">
            <img class="d-block w-100 text-center mx-auto" src="<?= base_url() ?>\public\assets\images\productos\cacao_cafe\infografia-cafe.png" alt="" loading="lazy">
          </p>
        </div>
        <div class="col-12 col-md-12 col-lg-12">
          <h2>形式</h2>
          <div class="row justify-content-center">
            <div class="col-4 col-md-4 col-lg-3">
              <img class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\presentacionesCN\granos.png" alt="" loading="lazy">
            </div>
            <div class="col-4 col-md-4 col-lg-3">
              <img class="d-block mx-auto" src="<?= base_url() ?>\public\assets\images\presentacionesCN\tostado.png" alt="" loading="lazy">
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12">
          <h2>認證</h2>
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
