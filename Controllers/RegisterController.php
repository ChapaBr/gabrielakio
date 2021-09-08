<?php 
    require('../Model/User.php');
    session_start();

    /* $email = $_POST['email'];
    $senha = $_POST['senha']; */

    $nomeUser = $_POST['nome'];
    $emailUser = $_POST['email'];
    $senhaUser = md5($_POST['senha']);
    $senhaUserConfirm = md5($_POST['senhaConfirm']);

    if($senhaUser !== $senhaUserConfirm){
        header('Location: ../register.php?error=senha');
    }

    $user = new User;

    $user->register($nomeUser, $emailUser, $senhaUser);
    
    $nick = explode(' ', $user->getNome());
    $_SESSION["idUser"] = $user->getId();
    $_SESSION["userName"] = $user->getNome();
    $_SESSION["userEmail"] = $user->getEmail();

    header('Location: ../home.php');
?>