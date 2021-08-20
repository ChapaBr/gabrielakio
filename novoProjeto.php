<!DOCTYPE html>
<html>
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
        <link href="assets/css/main.css?v=2" rel="stylesheet">
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/fc-3.3.1/r-2.2.5/datatables.min.css" />

        <style>
            .btn-custom {
                background-color: #7133FF;
                width: 35px;
                border-radius: 30px;
                color: white;
                height: 32px;
                font-size: 14px;
            }
        </style>

    </head>
    <body class="overflow-auto">
        <?php
            include('includes/header.php');
            if($_SESSION['idUser'] == FALSE){
                header('Location: login.php');
            }
            include('Model/Projetos.php');
        ?>

    <title>Gabriel Akio - Novo Projeto</title>

    <nav class="nav-bar navbar-light fixed-top m-0">
        <div class="container p-md-0">
            <ul class="listMenuMobile">
                <li><a href="index.php"><img class="logoMenu" src="assets/img/logo.svg" alt="Logo da InnerWay"></a></li>
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
                <li class="d-none d-md-block"><a href="index.php"><img class="logoMenu w-75" src="assets/img/logo.svg" alt="Logo da InnerWay"></a></li>
                <li>
                <div class="listItems d-flex flex-column flex-md-row">
                    <a class="nav-link btnNavItem active" aria-current="page" href="home.php">Projetos</a>
                    <a class="nav-link btnNavItem active" aria-current="page" href="#">Atualizar Projeto</a>
                    <a class="nav-link btnNavItem active" aria-current="page" href="Controllers/LogoutController.php">Sair</a>
                </div>
                </li>
            </ul>
        </div>
    </nav>

    <section style="margin-top: 60px;">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-12">
                    <h1>Novo Projeto</h1>
                </div> -->
                <div class="col-12 col-md-8 mt-4">
                    <div class="card">
                        <form action="Controllers/CreateController.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="card-header text-center">
                                    <a href="index.html" class="d-block w-100 h-100"><img src="assets/img/logo.svg" title="Logo Gabriel Akio" alt="Logo Gabriel Akio"></a>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title text-center">Criação de Novo Projeto</h2>
                                    <div class="form-group mb-3">
                                        <label for="emailUser" class="mb-1">Nome do Projeto</label>
                                        <input type="text" class="form-control" id="nomeUser" name="nome" aria-describedby="nomeUser" placeholder="Personal Branding" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="prioridade" class="mb-1">Prioridade</label>
                                        <input type="number" class="form-control" id="prioridade" name="prioridade" aria-describedby="prioridade" placeholder="8" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="linkProjeto" class="mb-1">Url do Projeto</label>
                                        <input type="text" class="form-control" id="linkProjeto" name="linkProjeto" aria-describedby="linkProjeto" placeholder="projeto-05.html" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="imgDesktop" class="mb-1">Imagem Desktop</label><br/>
                                        <input type="file" name="imgDesktop" class="form-control" id="imgDesktop" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="imgMobile" class="mb-1">Imagem Mobile</label><br/>
                                        <input type="file" name="imgMobile" class="form-control" id="imgMobile" required>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submite" class="btn btn-success">Cria Projeto</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/jquery.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/fc-3.3.1/r-2.2.5/datatables.min.js"></script>
    <script src="assets/js/main.js"></script>

    </body>

    <script>
        $(document).ready(function() {
            $('#resultados').DataTable();
            $('#resultadosUsers').DataTable();
        } );
    </script>

</html>