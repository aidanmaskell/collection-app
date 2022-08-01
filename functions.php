<?php

function getdb() {
    $db = new PDO('mysql:host=db; dbname=chillis', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function collectDBData($db) :array {
    $query = $db->prepare("SELECT `name`, `origin`, `shu` FROM `chillis`;");
    $query->execute();
    $chilliData = $query->fetchAll();
    return $chilliData;
}

function createTable($dbQuery) {
    echo '
            <tr>
                <td>Name</td>
                <td>Country of Origin</td>
                <td>Scoville Heat Units</td>
            </tr>' ; 
            foreach($dbQuery as $data) {
                        echo '<tr>' . 
                            '<td>' . $data["name"] . '</td>' .
                            '<td>' . $data["origin"] . '</td>' .
                            '<td>' . $data["shu"] . '</td>' . 
                            '</tr>';
                }

}





?>