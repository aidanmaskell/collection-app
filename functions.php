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
function collectDBData(PDO $db): array {
    $query = $db->prepare("SELECT `name`, `origin`, `shu` FROM `chillis` WHERE `deleted` = 0;");
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
function strLength(string $entry): bool {
    return strlen($entry) < 100 && strlen($entry) !== 0;
}

/**
 * Checks an integer is less than 1000000000 and returns boolean
 *
 * @param integer $entry integer to be tested
 * @return boolean true if integer is less than 1000000000, else returns false
 */
function intLength(int $entry): bool {
    return $entry < 1000000000 && $entry > 0;
}

/**
 * adds name, origin and shu data to a database
 *
 * @param PDO $db the selected database to be added to
 * @param string $name the name to be added
 * @param string $origin the origin to be added 
 * @param integer $shu the scoville heat units to be added
 * @return void executes db query
 */
function addToDB(PDO $db, string $name, string $origin, int $shu) {
    $query = $db->prepare("INSERT INTO `chillis` (`name`, `origin`, `shu`) VALUES (:name, :origin, :shu);");
    $query->bindParam(':name', $name);
    $query->bindParam(':origin', $origin);
    $query->bindParam(':shu', $shu);
    $query->execute();
}

/**
 * Edits data from within the database.
 *
 * @param PDO $db The database to be edited
 * @param string $name name of the chilli to be edited
 * @param string $origin origin to be edited
 * @param integer $shu shu to be edited
 * @return void executes db query
 */
function editDB(PDO $db, string $name, string $origin, int $shu) {
    $query = $db->prepare("UPDATE `chillis` SET `origin` = :origin, `shu` = :shu WHERE `name` = :name;");
    $query->bindParam(':name', $name);
    $query->bindParam(':origin', $origin);
    $query->bindParam(':shu', $shu);
    $query->execute();
}

/**
 * Selects data from database and returns it
 *
 * @param PDO $db the database to be selected from
 * @param string $fieldname the chosen fieldname to return from the db
 * @return array the selected items from the query
 */
function selectFromDB(PDO $db, string $fieldname): array {
    $query = $db->prepare("SELECT $fieldname FROM `chillis`");
    $query->execute();
    $results = $query->fetchAll();
    foreach($results as $result) {
        $names[] = $result[$fieldname];
    }
    return $names;
}

/**
 * Sets deleted to field to true within db of selected item.
 *
 * @param PDO $db the database to be updated
 * @param string $name the name of the item to be deleted
 * @return bool runs query
 */
function deleteFromDB(PDO $db, string $name) {
    $query = $db->prepare("UPDATE `chillis` SET `deleted` = 1 WHERE `name` = :name;");
    $query->bindParam(':name', $name);
    return $query->execute();
}

/**
 * Returns a message referring to whether there was an error when adding to the database.
 *
 * @param bool $add states whether the db has been added to
 * @param bool $edit states whether the db has been edited
 * @param bool $del states whether the db has been deleted from
 * @return string states the outcome message
 */
function outcomeMessage(bool $add, bool $edit, bool $del): string {
    if($add || $edit) {
        $message = '<h1>Thank you for adding to the database!</h1>';
    } elseif ($del) {
        $message = '<h1>This chilli has been successfully deleted</h1>';
    } else {
        $message = '<h1>Your data is in the wrong format, please try again</h1>';
    } 
    return $message;
}

?>