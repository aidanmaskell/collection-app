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
                <?= createTable($chilliData)?>
            </table>
        </main>
        <footer>
            <div>
                <h2>Add to the Collection</h2>
            </div>
            <div>
                <form action="thankyou.php" method="post">
                    <label for="name">Chilli Name</label>
                    <input type="text" name="name" id="name" />
                    <label for="origin">Country of Origin</label>
                    <input type="text" name="origin" id="origin" />
                    <label for="shu">Scoville Heat Units</label>
                    <input type="text" name="shu" id="shu" />
                    <input type="submit" value="Submit" />
                </form>
            </div>
            <div>
                <h2>Edit the Collection</h2>
            </div>
            <div>
                <form action="thankyou.php" method="post">
                    <label for="editName">Which chilli would you like to edit:</label>
                    <input type="text" name="editName" id="editName" />
                    <label for="editOrigin">Country of Origin</label>
                    <input type="text" name="editOrigin" id="editOrigin" />
                    <label for="editShu">Scoville Heat Units</label>
                    <input type="text" name="editShu" id="editShu" />
                    <input type="submit" value="Submit" />
                </form>
            </div>
            <div>
                <h2>Delete from the Collection</h2>
            </div>
            <div>
                <form action="thankyou.php" method="post">
                    <label for="delName">Which chilli would you like to delete:</label>
                    <input type="text" name="delName" id="delName" />
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </footer>
    </body>
</html>