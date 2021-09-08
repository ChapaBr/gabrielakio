<?php 
    require('../Model/Projetos.php');
    session_start();

    $idProjeto = $_POST['deletaProjeto'];

    $projetos = new projetos;

    $projetos->delProject($idProjeto);

?>