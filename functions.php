<?php

/**
 * Returns chilli database
 *
 * @return PDO chillis database
 */
function getdb() :PDO {
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
    if($dbQuery === []) {
        return 'There is no data for this database';
    }
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

/**
 * Checks length of string is less than 100 and return boolean
 *
 * @param string $entry string to be tested
 * @return boolean true if length is less than 100, else false.
 */
function strLength(string $entry) :bool {
    if(strlen($entry) < 100 && strlen($entry) !== 0 && isset($entry)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Checks an integer is less than 1000000000 and returns boolean
 *
 * @param integer $entry integer to be tested
 * @return boolean true if integer is less than 1000000000, else returns false
 */
function intLength(int $entry) :bool {
    if ($entry < 1000000000 && $entry > 0 && isset($entry)) {
        return true;
    } else {
        return false;
    }
}

// /**
//  * Checks if field has been filled in and is not empty
//  *
//  * @param string $field field to be tested 
//  * @return boolean true if field has been completed and not empty, else returns false
//  */
// function validateFields(string $field) :bool {
//     if (isset($field) && $field !== ''){
//         return true; 
//     } else {
//         return false;
//     }
// }

?>