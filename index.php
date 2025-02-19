<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index,follow" />
  <meta name="MobileOptimized" content="320" />
  <meta name="HandheldFriendly" content="True" />
  <!-- <meta name="theme-color" content="#f50505"/> -->
  <!-- <meta name="msapplication-TileColor" content="#f50505"/> -->
  <meta name="google" content="notranslate" />
  <meta name="keywords" content="" />
  <meta name="author" content="Dev: Guilherme Arroio" />
  <meta name="description" content="" />

  <meta property="og:locale" content="pt_BR" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="/assets/img/og_img.png">
  <meta property="og:image:secure_url" content="/assets/img/og_img.png" />
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:alt" content="Thumbnail" />
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="627">
  <meta property="og:site_name" content="" />

  <meta name="twitter:title" content="" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:creator" content="" />
  <meta name="twitter:description" content="" />
  <meta name="twitter:image" content="/assets/img/og_img.png" />
  <meta name="twitter:image:src" content="/assets/img/og_img.png" />
  <meta name="twitter:image:alt" content="Thumbnail" />
  <meta name="twitter:image:width" content="1200" />
  <meta name="twitter:image:height" content="627" />

  <link rel="icon" type="image/svg" sizes="32x32" href="assets/img/logo.svg"/>
  <link rel="icon" type="image/svg" sizes="16x16" href="assets/img/logo.svg"/>
  <link rel="icon" href="assets/img/logo.svg" type="image/svg"/>
  <link rel="canonical" href="https://gabrielakio.com.br/index.html"/>

  <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="libs/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="libs/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
  <link href="assets/css/main.css?v=2" rel="stylesheet">
</head>

<body>
  <title>Portfólio of Gabriel Akio</title>

  <nav class="nav-bar navbar-light">
    <div class="container p-md-0">
        <ul class="listMenuMobile">
            <li><a href="#"><img class="logoMenu" src="assets/img/logo.svg" alt="Logo da InnerWay"></a></li>
            <li class="btnMenu" style="z-index: 999999;">
              <div id="nav-icon">
                  <!-- <span></span> -->
                  <span></span>
                  <span></span>
                  <!-- <span></span> -->
              </div>
            </li>
        </ul>
        <ul class="listMenu scrolling">
            <li class="d-none d-md-block"><a href="#"><img class="logoMenu w-75" src="assets/img/logo.svg" alt="Logo da InnerWay"></a></li>
            <li>
              <div class="listItems d-flex flex-column flex-md-row">
                <a href="contato.html" class="btnNavItem">Contato</a>
                <a href="sobre.html" class="btnNavItem">Sobre Mim</a>
              </div>
            </li>
        </ul>
    </div>
  </nav>

  <section id="testeId">
    <div class="container">
      <div class="row contentBox">
        <div class="owl-carousel p-0">
          <?php
            include('Model/Projetos.php');
            $projetos = new projetos;
            $resultados = $projetos->getProjects();
            foreach($resultados as $item){
          ?>
            <div class="carouselBox"> 
              <a href="<?php echo $item['linkProjeto'] ?>">
                <img src="<?php echo $item['imgDesktop'] ?>" class="d-none d-lg-block">
                <img src="<?php echo $item['imgMobile'] ?>" class="d-lg-none">
              </a>
            </div>
          <?php 
            }
          ?>
        </div>
        <div class="leftContentContainer d-lg-none"><span>Personal Branding</span></div>
        <div class="rightContentContainer d-lg-none"><span>2021</span></div>
      </div>
    </div>
    <div class="leftContentContainer d-none d-lg-flex"><span>Personal Branding</span></div>
    <div class="rightContentContainer d-none d-lg-flex"><span>2021</span></div>
  </section>
  <footer id="footerIndex">
    <div class="footerBox">
      <ul>
        <li><a href="https://www.behance.net/gabrielakio" target="_blank"><img src="assets/img/behance.svg"></a></li>
        <li><a href="https://www.linkedin.com/in/gabrielakio/" target="_blank"><img src="assets/img/linkedin.svg"></a>
        </li>
        <li><a href="https://www.instagram.com/gabriel.akioo/" target="_blank"><img
              src="assets/img/instagram.svg"></a></li>
      </ul>
    </div>
  </footer>

  <script src="assets/js/jquery.min.js"></script>
  <script src="libs/bootstrap/js/bootstrap.min.js"></script>
  <script src="libs/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/js/mainProjects.js?v=2"></script>
</body>

</html>