<?php 

require_once 'functions.php';

if(!isset($_POST['name']) && !isset($_POST['editName'])) {
    header('Location: index.php');
}

if(isset($_POST['name']) && isset($_POST['origin']) && isset($_POST['shu'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $origin = filter_var($_POST['origin'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $shu = filter_var($_POST['shu'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $addingToDB = false;
}

if(isset($_POST['editName']) && isset($_POST['editOrigin']) && isset($_POST['editShu'])){
    $editName = filter_var($_POST['editName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $editOrigin = filter_var($_POST['editOrigin'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $editShu = filter_var($_POST['editShu'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $editDB = false;
}

if(isset($addingToDB) && strLength($name) && strLength($origin) && (intLength($shu))) {
    $db = getdb();
    addToDB($db, $name, $origin, $shu);
    $addingToDB = true;
} else {
    $addingToDB = false;
}

// if name doesnt match db
$db = getdb();
$chilliNames = selectFromDB($db, 'name');


if(isset($editDB) && strLength($editName) && strLength($editOrigin) && (intLength($editShu))) {
    $db = getdb();
    editDB($db, $editName, $editOrigin, $editShu);
    $editDB = true;
} else {
    $editDB = false;
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
        <main class='page2'>
            <div>
                <? if($addingToDB || $editDB) {
                    echo '<h1>Thank you for adding to the database!</h1>';
                } else {
                    echo '<h1>Your data is in the wrong format, please try again</h1>';
                } ?>
            </div>
            <div>
                <form class='page2' action="thankyou.php" method="post">
                    <input type='submit' value='Back To Homepage'>
                </form>
            </div>
        </main>
        <header>
        </header>
    </body>
</html>