<?php

/**
 * Returns chilli database
 *
 * @return PDO chillis database
 */
function getdb() {
    $db = new PDO('mysql:host=db; dbname=chillis', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * Retrieves query from database
 *
 * @param PDO $db the database to be searched
 * @return array $chilliData the array returned from the query
 */
function collectDBData(PDO $db) :array {
    $query = $db->prepare("SELECT `name`, `origin`, `shu` FROM `chillis`;");
    $query->execute();
    $chilliData = $query->fetchAll();
    return $chilliData;
}

/**
 * Creates a table from a database query
 *
 * @param array $dbQuery a database query
 * @return string a table made up from the database query
 */
function createTable(array $dbQuery) {
    $table = '<tr>' .
                '<td>Name</td>' .
                '<td>Country of Origin</td>' .
                '<td>Scoville Heat Units</td>'. 
            '</tr>' ; 
            foreach($dbQuery as $data) {
                        $table.= '<tr>' . 
                            '<td>' . $data["name"] . '</td>' .
                            '<td>' . $data["origin"] . '</td>' .
                            '<td>' . $data["shu"] . '</td>' . 
                            '</tr>';
                }
                return $table;

}





?>