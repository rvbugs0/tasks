<?php
require("DBConnection.php");
class CreateTable {
    public function createMyTables(){
$connection = DBConnection::getConnection();
$sql = "CREATE TABLE first_table (id INT(6) PRIMARY KEY, firstname VARCHAR(30) NOT NULL";
if ($connection->query($sql)==TRUE){
    echo "First table created successfully.";
} else {
    echo "Error: ".$connection->error;
}

$sql2 = "CREATE TABLE last_table (id INT(6) PRIMARY KEY, lastname VARCHAR(30) NOT NULL";
if ($connection->query($sql2)==TRUE){
    echo "Last table created successfully.";
}
else{
    echo "Error: ".$connection->error;
}

    }
}

$create = new CreateTable();
$create->createMyTables();

?>