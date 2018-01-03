<?php session_start(); ?>
<?php
require '../config/config.php';
require '../config/routes.php';
require '../admin/seguranca.php';

if(empty($caminho[0])){
    include 'header.php';
    include 'home.php';
    include 'footer.php';
}
else if ((in_array($caminho[0], $paginasSessao) && !isset($caminho[1])) && isset($_POST['login'])){
    include("../admin/header.php");
    include("../admin/valida_login.php");
    include("../admin/footer.php");
}
else if (in_array($caminho[0], $paginasSessao) && !isset($caminho[1])){
    include("../admin/header.php");
    include("../admin/index.php");
    include("../admin/footer.php");
}