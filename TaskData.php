<?php

require_once ("DBConnection.php");

class TaskData
{

    public function getTasks()
    {

        $connection = DBConnection::getConnection();
        $result = $connection->query("select * from tbl_tasks");
        $r_array = [];

        while ($row = $result->fetch_assoc()) {

            array_push($r_array,$row);
        }
        return $r_array;


    }

}



?>