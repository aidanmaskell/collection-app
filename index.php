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
</head>
    <body>
        <header>
                <h1>CHILLIS</h1>
        </header>
        <nav>
            <div></div>
        </nav>
        <main>
            <table>
                <?echo createTable($chilliData)?>
            </table>
        </main>
    </body>
</html>