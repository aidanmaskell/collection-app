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
                <h2>Welcome to my chilli collection</h2>
        </header>
        <nav>
            <div>
                <!-- <form action='results.php' method='get' />
                <label for='chillis'>Search for your favourite tennis player</label>
                <input type='text' name='chillis' />
                <input type='submit' />
                </form> -->
            </div>
        </nav>
        <main>
            <table>
                <?echo createTable($chilliData)?>
            </table>
        </main>
    </body>
</html>