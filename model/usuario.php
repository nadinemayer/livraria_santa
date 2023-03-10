<?php

require('connection.php');

function get($email, $senha){
    $conn = getConnection();
    $sql = 'SELECT * FROM usuario WHERE email = ? AND senha = ?';

    $stmt= $conn->prepare($sql);
    
    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $senha);

    $stmt->execute();

    if($stmt->rowCount() > 0){
        return true;
    }else{
        return false;
    }
}

function create($email, $senha){
    $conn = getConnection();
    $sql = 'INSERT INTO usuario (email, senha) VALUE (?, ?)';

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $senha);

    try{
        $stmt->execute();
        return 'Usuário criado com sucesso!';
    }catch(PDOException $e){
        return $e->getMessage();
    }
    

}