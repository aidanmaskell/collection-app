<?php 

require_once 'functions.php';

if(!isset($_POST['name']) && !isset($_POST['origin']) && !isset($_POST['shu'])) {
    header('Location: index.php');
}

$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
$origin = filter_var($_POST['origin'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$shu = filter_var($_POST['shu'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if(strLength($name) && strLength($origin) && (intLength($shu))) {
    $db = getdb();
    $query = $db->prepare("INSERT INTO `chillis` (`name`, `origin`, `shu`) VALUES (:name, :origin, :shu);");
    $query->bindParam(':name', $name);
    $query->bindParam(':origin', $origin);
    $query->bindParam(':shu', $shu);
    $query->execute();
    echo 'new chilli added to db!';
} else {
    echo 'the data did not match the criteria';
}

?>