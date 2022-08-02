<?php

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
    echo $retorno['usuario'];

    echo $retorno['senha'];

    }
    else
        echo "sai dai seu imundo sem conhecimento de nada";
    

}



}