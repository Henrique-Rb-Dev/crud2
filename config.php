<?php



// host
$host = 'http://localhost/conteudos/crud-php-mysql-procedural/';

// db
$db_name = 'crud'; //nome do banco de dados
$db_host = 'localhost'; //provedor/hospedador de arquivos
$db_user = 'root'; //nome do usuário
$db_pass = ''; //senha do bando de dados


try {
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
  throw $th;
}