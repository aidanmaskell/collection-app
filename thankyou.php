<?php 

require_once 'functions.php';

$fields = ['name' , 'origin', 'shu'];

if(!isset($_POST['name']) && !isset($_POST['origin']) && !isset($_POST['shu'])) {
    header('Location: index.php');
}

function strLength(string $entry) :bool {
    if(strlen($entry) < 100) {
        return true;
    } else {
        return false;
    }
}

function intLength(int $entry) :bool {
    if ($entry < 1000000000) {
        return true;
    } else {
        return false;
    }
}

function validateFields(array $post, array $fields) {
    foreach($fields as $text) {
        if isset($text)
    }
}

$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
$origin = filter_var($_POST['origin'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$shu = filter_var($_POST['shu'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if(isset($name) && isset($name) && isset($name)) {
    if(strLength($name) && strLength($origin)) {
        if()

    }

}


//sanitisation (placeholders)

//link to db

//add info

//button to return to homepage

?>