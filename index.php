<?php

//connect to db
$db = new PDO('mysql:host=db; dbname=chillis', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`, `origin`, `shu` FROM `chillis`;");
$query->execute();
$chilliData = $query->fetchAll();


?>
<html>
    <head>

    </head>
    <body>
        <table>
            <tr>
                <td>Name</td>
                <td>Country of Origin</td>
                <td>Scoville Heat Units</td>
            </tr>
            <? foreach($chilliData as $data) {
                        echo '<tr>' . 
                            '<td>' . $data["name"] . '</td>' .
                            '<td>' . $data["origin"] . '</td>' .
                            '<td>' . $data["shu"] . '</td>' . 
                            '</tr>';
                }?>
        </table>
    </body>
</html>