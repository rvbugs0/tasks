<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class DBConnection
{
    public static function getConnection()
    {
        $connection = null;
        try {

            $server = "localhost:3306";
            $username = "root";
            $password = "password";
            $dbname = "sqlpractice";
            $connection = new mysqli($server, $username, $password, $dbname);

            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }


        } catch (Exception $exception) {
            echo $exception->getMessage();
        }


        return $connection;

    }
}


// try {
//     echo "hello";
//     $c = DBConnection::getConnection();
//     echo $c;





// } catch (Exception $exception) {
//     echo json_encode($exception);
// }

?>