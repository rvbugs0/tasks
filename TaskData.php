<?php

require_once ("DBConnection.php");

class TaskData
{


    public function getTask($id){
        $connection = DBConnection::getConnection();
        $result = $connection->query("select * from tbl_tasks where id =$id");
        

        if($row = $result->fetch_assoc()) {
            return $row;
        }
        return null;
    }

    public function insertTask($content)
    {
        $content = substr($content,0,99);
        $connection = DBConnection::getConnection();
        $result = $connection->query("insert into tbl_tasks (content) values ('$content')");
        $last_id = $connection->insert_id; 
        return $this->getTask($last_id);

    }



    public function getTasks()
    {

        $connection = DBConnection::getConnection();
        $result = $connection->query("select * from tbl_tasks");
        $r_array = [];

        while ($row = $result->fetch_assoc()) {

            array_push($r_array, $row);
        }
        return $r_array;
    }


    public function deleteTask($id)
    {

        $connection = DBConnection::getConnection();
        $connection->query("delete from tbl_tasks where id = $id");
    }

}



?>