<?php
session_start();

if(!isset($_SESSION['count'])) $_SESSION['count'] = 0;
require "../Infastructure/config.php";
if (isset($_SESSION['count'])) {
    $_SESSION['count'] += 1;
}

$sql = "select users.name as nome 
from users 
left join erollement on erollement.id_user = users.idU 
where erollement.id_user = null;";
$data = mysqli_prepare($connectiondb, $sql);
mysqli_stmt_execute($data);
$resultat = mysqli_stmt_get_result($data);
$users = mysqli_fetch_all($resultat,MYSQLI_ASSOC);

foreach ($users as $user) {
    echo $user['nome'];
}
echo $_SESSION['count'];
