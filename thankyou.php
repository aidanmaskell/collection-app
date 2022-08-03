<?php 

require_once 'functions.php';

if(!isset($_POST['name']) && !isset($_POST['origin']) && !isset($_POST['shu'])) {
    header('Location: index.php');
}

$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
$origin = filter_var($_POST['origin'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$shu = filter_var($_POST['shu'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$addedToDB = false;

if(strLength($name) && strLength($origin) && (intLength($shu))) {
    $db = getdb();
    addToDB($db, $name, $origin, $shu);
    $addedToDB = true;
} else {
    $addedToDB = false;
}

?>

<!DOCTYPE html>
<html lang="en-gb">
<head>
	<title>Chillis</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="normalize.css" type="text/css" rel="stylesheet" />
	<link href="styles.css" type="text/css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
</head>
    <body>
        <header class="page2">
        </header>
        <main>
            <div>
                <? if($addedToDB === true) {
                    echo '<h1>Thank you for adding to the database!</h1>';
                } else {
                    echo '<h1>Your data is in the wrong format, please try again</h1>';
                } ?>
            </div>
        </main>
    </body>
</html>