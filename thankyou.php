<?php 

require_once 'functions.php';

$fields = ['name' , 'origin', 'shu'];

if(!isset($_POST['name']) && !isset($_POST['origin']) && !isset($_POST['shu'])) {
    header('Location: index.php');
}


$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
$origin = filter_var($_POST['origin'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$shu = filter_var($_POST['shu'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if(strLength($name) && strLength($origin) && (intLength($shu))) {

}




//sanitisation (placeholders)

//link to db

//add info

//button to return to homepage

?>