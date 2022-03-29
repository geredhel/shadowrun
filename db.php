<?php


try{
    $pdo = new PDO("mysql:host=localhost;dbname=shadowrun;charset=utf8", "root", "");

} catch(Exception  $e){
    $e->getMessage();
}

$req = "SELECT * FROM test";
$prep = $pdo->prepare($req);
$prep->execute();
$messages = $prep->fetchAll();

foreach($messages as $message){
    echo "<pre>";
    var_dump($message['name']);
    echo "</pre>";
}


