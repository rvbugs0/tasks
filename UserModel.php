<?php

require_once ("DBConnection.php");
class UserData {

    public function getUserId($username){
        $conn = DBConnection::getConnection();
        $result = $conn->query("select * from tbl_users where username=$username");
        if($row = $result->fetch_assoc()) {
            return $row["id"];
        }
        return -1;

    }

    public function insertUser($username){

        // $username = substr($content,0,99);
        $connection = DBConnection::getConnection();
        $sql = "select * from tbl_users where username = '$username'";
        $result = $connection->query($sql);
        if($result->num_rows == 0) {
            $result = $connection->query("insert into tbl_users (username) values ('$username')");
            return $this->getUserId($username);

        }else{
            return 0;
        }


    }

}

?>