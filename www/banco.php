<?php

$servidor = "localhost"; #definindo servidor.
$usuario = "root"; #definindo usuario do bd.
$password = ""; #definindo senha do bd.
$db = "wfsystem"; #definindo o banco de dados na qual vai usar.
if ($conect = mysqli_connect($servidor, $usuario, $password, $db)) {
     echo "CONECTADO A O BANCO DE DADOS";
} else {
     echo "ERRO A O SE CONECTAR AO BANCO DE DADOS";
}

$query = "SELECT * FROM `tb_usuarios`";

