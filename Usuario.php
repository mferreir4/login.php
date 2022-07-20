<?php

class Usuario{

public function login($logar, $senha){
    global $pdo;

    $sql = "SELECT * FROM administrador WHERE usuario = :logar AND senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql->bindValue("logar", $logar);
    $sql->binValue("senha",$senha);
    $sql->execute();


}


}