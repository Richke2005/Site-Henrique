<?php
session_start();

include_once ("../DAO/AvaliacaoDAO.php");

$nome     = $_POST['nome'];
$email    = $_POST['email'];
$texto    = $_POST['texto'];
$botao    = $_POST['botao'];

$avaliar = new avaliacaoDAO;

$avaliar->setnome($nome);
$avaliar->setemail($email);
$avaliar->settexto($texto);


if($botao=='cadastrar'){
    $avaliar->cadastrar();

    header('location:../index.php');
}



?>