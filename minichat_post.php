<?php
try{
    $bd = new PDO("mysql:host=localhost;port=3307;dbname=minichat;charset=utf8",'root','');
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

    $req=$bd->prepare('INSERT INTO users_minichat(pseudo, message) VALUES(?, ?)');
    $req->execute(array($_POST['pseudo'],$_POST['message']));

    header('location: index.php');
    ?>
?>