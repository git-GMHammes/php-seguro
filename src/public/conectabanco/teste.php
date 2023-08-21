<?php
$host = 'mysql02-farm5.proderj.net';
$db = 'GaloAzul';
$user = 'HomemAranha';
$pass = 'PneuT0rtO';

// Estabelecer conexão
$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
die('Erro ao se conectar');
}
print_r('Conexão bem-sucedida' . "<br>");
?>
