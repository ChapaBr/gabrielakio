<?php 
    require('../Model/Projetos.php');
    session_start();

    $nomeUser = $_POST['nome'];
    $prioridade = $_POST['prioridade'];
    $linkProjeto = $_POST['linkProjeto'];
    $fileDesktop = $_FILES['imgDesktop'];
    $fileMobile = $_FILES['imgMobile'];

    $imgDesktop = '';
    $imgMobile = '';
    
    /* $imgDesktop = 'assets/img/'.$imgDesktop;
    $imgMobile = 'assets/img/'.$imgMobile; */

    $fileSize = $_FILES['imgDesktop']['size'];
    if($fileDesktop['size'] > 0){
        $fileNameOld = $_FILES['imgDesktop']['name'];
        $fileExt = explode('.', $fileNameOld);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png', 'svg');
        if(in_array($fileActualExt, $allowed)){
            $fileError = $_FILES['imgDesktop']['error'];
            if($fileError === 0){
                $fileTmpName = $_FILES['imgDesktop']['tmp_name'];
                $fileNameNew = uniqid('', true)."-desktop.".$fileActualExt;
                $fileDestination = '../assets/img/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $imgDesktop = 'assets/img/'.$fileNameNew;
            } else {
                // Houve um erro ao tentar carregar o seu arquivo!
                header('../novoProjeto.php?alert=error');
            }
        } else {
            // Você não pode enviar arquivos desse tipo!
            header('../novoProjeto.php?alert=extend');
        }
    }

    $fileSize = $_FILES['imgMobile']['size'];
    if($fileMobile['size'] > 0){
        $fileNameOld = $_FILES['imgMobile']['name'];
        $fileExt = explode('.', $fileNameOld);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png', 'svg');
        if(in_array($fileActualExt, $allowed)){
            $fileError = $_FILES['imgMobile']['error'];
            if($fileError === 0){
                $fileTmpName = $_FILES['imgMobile']['tmp_name'];
                $fileNameNew = uniqid('', true)."-mobile.".$fileActualExt;
                $fileDestination = '../assets/img/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $imgMobile = 'assets/img/'.$fileNameNew;
            } else {
                // Houve um erro ao tentar carregar o seu arquivo!
                header('../novoProjeto.php?alert=error');
            }
        } else {
            // Você não pode enviar arquivos desse tipo!
            header('../novoProjeto.php?alert=extend');
        }
    }

    $projetos = new projetos;

    $projetos->setProject($nomeUser, $prioridade, $linkProjeto, $imgDesktop, $imgMobile);
?>
