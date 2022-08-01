<?php

//connect to db
$db = new PDO('mysql:host=db; dbname=chillis', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`, `origin`, `shu` FROM `chillis`;");
$query->execute();
$chilliData = $query->fetchAll();

echo '<pre>';
var_dump($chilliData);
echo '</pre>';







?>