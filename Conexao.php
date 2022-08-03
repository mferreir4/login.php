<?php
session_start();


$dns= "mysql:host=localhost;dbname=hp";
$username= "root";
$password="";
global $pdo;
try{
    $pdo = new PDO ($dns,$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    

}catch(PDOException $erro){
    echo "ERRO".$erro->getMessage();
    exit();
}





