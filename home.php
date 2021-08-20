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
    
    <title>Gabriel Akio - Controle Projetos</title>

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
                    <a class="nav-link btnNavItem active" aria-current="page" href="novoProjeto.php">Novo Projeto</a>
                    <a class="nav-link btnNavItem active" aria-current="page" href="#">Atualizar Projeto</a>
                    <a class="nav-link btnNavItem active" aria-current="page" href="Controllers/LogoutController.php">Sair</a>
                </div>
                </li>
            </ul>
        </div>
    </nav>

    <section style="margin-top: 76px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Projeto Atuais</h1>     
                </div>

                <div class="col-12 mt-2">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="respostas" role="tabpanel" aria-labelledby="home-tab">
                            <div class="form-row">
                                <div class="col-12 mt-4 mb-5">
                                    <table id="resultados"
                                        class="table table-striped table-bordered w-100 table-resultados">
                                        <thead>
                                            <tr>
                                                <th scope="col">Detalhes</th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Prioridade</th>
                                                <th scope="col">Nome Projeto</th>
                                                <th scope="col">Imagem Desktop</th>
                                                <th scope="col">Imagem Mobile</th>
                                                <th scope="col">Link Projeto</th>
                                                <th scope="col">Data Criação</th>
                                                <th scope="col">Data Atualização</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $projetos = new projetos;
                                            
                                                $resultados = $projetos->getProjects();
                                                
                                                foreach($resultados as $item){
                                            ?>
                                            <tr class="row-table-item">
                                                <td class='text-center'>
                                                    <button type="button" class="btn-custom" data-toggle="modal"
                                                        data-target="#modalDetalhes-<?php echo $item['id']; ?>">
                                                        <i class="fas fa-info"></i>
                                                    </button>
                                                </td>
                                                <td scope="row"> <?php echo $item['id']; ?> </td>
                                                <td><?php echo $item['prioridade']; ?></td>
                                                <td><?php echo $item['nomeProjeto']; ?></td>
                                                <td><a href="<?php echo $item['imgDesktop'];?>" target="_blank" title="Arquivos do Gabriel Akio">Imagem</a></td>
                                                <td><a href="<?php echo $item['imgMobile'];?>" target="_blank" title="Arquivos do Gabriel Akio">Imagem</a></td>
                                                <td><a href="<?php echo $item['linkProjeto'];?>" target="_blank" title="Arquivos do Gabriel Akio">Link</a></td>
                                                <td><?php echo $item['dataCriacao']; ?></td>
                                                <td><?php echo $item['dataAtualizacao']; ?></td>
                                            </tr>

                                            <!-- Modal -->
                                            <div class="modal modal-custom-resultado fade"
                                                id="modalDetalhes-<?php echo $item['id']; ?>" tabindex="-1" role="dialog"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="d-flex flex-column">
                                                                <div class="item">
                                                                    <h5>Assunto</h5>
                                                                    <p><?php echo $item['assunto']; ?></p>
                                                                </div>

                                                                <div class="item">
                                                                    <h5>Area</h5>
                                                                    <p><?php echo $item['area']; ?></p>
                                                                </div>

                                                                <div class="item">
                                                                    <h5>Descrição</h5>
                                                                    <p><?php echo $item['descricao']; ?></p>
                                                                </div>

                                                                <div class="item">
                                                                    <h5>Anexos</h5>
                                                                    <a href="http://thon-thon.camposcompany.com.br/uploads/<?php echo $item['fileName'];?>"
                                                                        target="_blank" class="btn btn-info w-100"
                                                                        title="Arquivos do Thon-Thon">
                                                                        Arquivos
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Fechar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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