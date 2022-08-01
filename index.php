<?php

require_once 'functions.php'; 
$db = getdb();
$chilliData = collectDBData($db);

?>
<html>
    <head>

    </head>
    <body>
        <table>
            <?createTable($chilliData)?>
        </table>
    </body>
</html>