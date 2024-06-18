<?php
require ("DBConnection.php");

class CreateData
{

    public function createTables()
    {
        $connection = DBConnection::getConnection();
        $sql = "CREATE TABLE tbl_first (id INT PRIMARY KEY AUTO_INCREMENT, firstname VARCHAR(30) NOT NULL)";
        if ($connection->query($sql) == TRUE) {
            echo "First table created successfully.";
        } else {
            echo "Error: " . $connection->error;
        }

        $sql2 = "CREATE TABLE tbl_last (id INT PRIMARY KEY AUTO_INCREMENT, lastname VARCHAR(30) NOT NULL)";
        if ($connection->query($sql2) == TRUE) {
            echo "Last table created successfully.";
        } else {
            echo "Error: " . $connection->error;
        }

    }

    public function createFirstLast()
    {
        $firstnames = ["Ramesh", "Jitesh", "Kartik", "Sunny", "Gopal", "Lalu", "Abhijeet", "Sunil", "Mangesh", "Baldi", "Ramu"];
        $lastnames = ["Jain", "Sharma", "Singh", "Kumar", "Saini", "Patidar", "Mahajan", "Khan", "Manohar", "Porwal", "Lal", "Soni", "Jain", "Lohar", "Pandit", "Saxena"];
        $f_count = count($firstnames);
        $l_count = count($lastnames);

        $connection = DBConnection::getConnection();
        // create first table
        $i = 0;
        while ($i < 100000) {


            $fname = $firstnames[rand(0,$f_count-1)];
            $sql = "INSERT INTO tbl_first (firstname) VALUES ('$fname')";

            if (!$connection->query($sql) == TRUE) {
                echo "Error: " . $connection->error;
            }
            $i++;
        }

        echo "First names inserted.";
        // create last table
        $j = 0;
        while ($j < 100000) {
            $lname = $lastnames[rand(0,$l_count-1)];
            $sql = "INSERT INTO tbl_last (lastname) VALUES ('$lname')";

            if (!$connection->query($sql) == TRUE) {
                echo "Error: " . $connection->error;
            }
            $j++;
        }

        $connection->close();
        echo "last names inserted.";
    }
}


$cd = new CreateData();

$cd->createTables();
$cd->createFirstLast();






?>