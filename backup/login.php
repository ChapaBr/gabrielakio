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
        <link href="libs/owlcarousel/owl.carousel.min.css" rel="stylesheet">
        <link href="libs/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
        <link href="assets/css/main.css?v=2" rel="stylesheet">
    </head>
    <body>
        <?php
            include('includes/header.php');
            if($_SESSION['idUser'] == TRUE){
                header('Location: home.php');
            }
        ?>
        <section>
            <div class="container">
                <div class="row vh-100">
                    <div class="col-12 col-md-4 m-auto">
                        <div class="card">
                            <form action="Controllers/LoginController.php" method="POST">
                                <div class="form-group">
                                    <div class="card-header text-center">
                                        <a href="index.html" class="d-block w-100 h-100"><img src="assets/img/logo.svg" title="Logo Gabriel Akio" alt="Logo Gabriel Akio"></a>
                                    </div>
                                    <div class="card-body">
                                        <h2 class="card-title text-center">Login</h2>
                                        <div class="form-group mb-3">
                                            <label for="emailUser" class="mb-1">Email</label>
                                            <input type="email" class="form-control" id="emailUser" name="email" aria-describedby="emailUser" placeholder="email@examplo.com" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="senhaUser" class="mb-1">Senha</label>
                                            <input type="password" class="form-control" id="senhaUser" name="senha" aria-describedby="senhaUser" placeholder="Senha" required>
                                        </div>
                                        <?php if($_GET['login'] == "error"){?>
                                            <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                                                <strong>Falha na Autenticação</strong>
                                                <p class="m-0">Por favor tente fazer login novamente</p>
                                                <button type="button" class="btnClone" data-dismiss="alert" aria-label="Close" style="position: absolute;top: 0;right: 7px;border: none;background: transparent;">
                                                    <span aria-hidden="true" style="font-size: 20px">&times;</span>
                                                </button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button type="submite" class="btn btn-success">Fazer Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/owlcarousel/owl.carousel.min.js"></script>
    <script>
        $('.btnClone').click(function(){
            $('.alert').fadeOut();
        });
    </script>
</body>

</html>