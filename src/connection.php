<?php
$base_root = dirname(__DIR__);

#$pdo = new PDO('mysql:host=localhost;dbname=ballers', 'root', '1234');
$pdo = new PDO("sqlite:$base_root/db_teste.sqlite3");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

