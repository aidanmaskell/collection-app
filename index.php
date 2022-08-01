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
            <?echo createTable($chilliData)?>
        </table>
    </body>
</html>