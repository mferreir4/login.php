<?php

if(isset($_POST['logar']) && !empty($_POST['logar']) && 
isset($_POST['senha']) && !empty($_POST['senha'])){

require 'Conexao.php';
require 'Usuario.php';


$u = new Usuario();

$logar = $_POST['logar'];
$senha = $_POST['senha'];

$u-> login($logar, $senha);

}else

header('location: login.php');











?>