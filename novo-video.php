<?php

$dbPath = __DIR__.'/database.sqlite';
$pdo = new PDO("sqlite:{$dbPath}");

$url = $_POST['url'];
$titulo = $_POST['titulo'];

$sql = 'INSERT INTO videos(url, title) VALUES (:url, :title)';

$statement = $pdo->prepare($sql);
$statement->bindValue(':url', $url);
$statement->bindValue(':title', $titulo);

var_dump($statement->execute());
