<?php

require_once 'functions.php'; 
$db = getdb();
$chilliData = collectDBData($db);

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
        <header>
                <h1>CHILLIS</h1>
        </header>
        <main>
            <div>
                <h1>The Collection</h1>
            </div>
            <table>
                <?php echo createTable($chilliData)?>
            </table>
        </main>
    </body>
</html>