<?php

$dbPath = __DIR__.'/database.sqlite';

$pdo = new PDO("sqlite:{$dbPath}");
$pdo->exec('CREATE TABLE videos (id INTEGER PRIMARY KEY , url TEXT, title TEXT)');