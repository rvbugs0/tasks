<?php

require_once ("DBConnection.php");

class UserData
{

    public function getFullName()
    {

        $connection = DBConnection::getConnection();
        $result = $connection->query("select first.id,firstname,lastname from tbl_first as first 
        inner join tbl_last as last on first.id=last.id");
        $r_array = [];

        while ($row = $result->fetch_assoc()) {

            array_push($r_array,$row);
        }
        echo json_encode(($r_array));

    }

}


$ud = new UserData();
$ud->getFullName();


?>