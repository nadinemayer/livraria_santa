<?php
require ('../model/usuario.php');

function encrypt(){
    $email = $_POST['email'];
    $senha = "senacrs||devWeb||".$_POST['senha'];
    $algoritmo = "AES-256-CBC";
    $chave = 'senac@2127';
    $iv = "asdPkToVlerBaull";

    $cript = openssl_encrypt($senha, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);

    $cript64 = base64_encode($cript);
    $create = create($email, $cript64);

    return $create;
}
?>

