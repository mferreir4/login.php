<?php
session_start();

class Usuario{

public function login($logar, $senha){
    global $pdo;

    $sql = "SELECT * FROM administrador WHERE usuario = :logar AND senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql->bindValue("logar", $logar);
    $sql->bindValue("senha",$senha);
    $sql->execute();
    
    
    if($sql->rowCount() > 0){

    $retorno = $sql->fetch();
    $_SESSION['user'] = $retorno['usuario'];


    
    
    }
    
}

}
