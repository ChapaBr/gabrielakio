<?php 
    require('../Model/User.php');
    session_start();

    /* $email = $_POST['email'];
    $senha = $_POST['senha']; */

    $emailUser = $_POST['email'];
    $senhaUser = md5($_POST['senha']);

    $user = new User;

    $user->login($emailUser, $senhaUser);
    
    $nick = explode(' ', $user->getNome());
    $_SESSION["idUser"] = $user->getId();
    $_SESSION["userName"] = $user->getNome();
    $_SESSION["userEmail"] = $user->getEmail();

    header('Location: ../home.php');
?>
