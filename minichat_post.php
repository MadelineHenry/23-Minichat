<?php
include_once("db.php");

$req=$bd->prepare('INSERT INTO users_minichat(pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'],$_POST['message']));

header('location: index.php');
?>
