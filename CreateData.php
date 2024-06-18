<?php
require ("DBConnection.php");

class CreateData
{

    public function createTables()
    {
        $connection = DBConnection::getConnection();
        $sql = "CREATE TABLE tbl_tasks (id INT PRIMARY KEY AUTO_INCREMENT, content VARCHAR(100) NOT NULL)";
        if ($connection->query($sql) == TRUE) {
            echo "table created successfully.";
        } else {
            echo "Error: " . $connection->error;
        }


    }

    public function createDemoTasks()
    {
        $tasks = ["Homework-1 due on wednesday", "25gms protein per meal", "Exercise at 6pm", "Yoga session at 9", ];
        $connection = DBConnection::getConnection();
        // create first table
        $i = 0;
        while ($i < count($tasks)) {


            $task = $tasks[$i];
            $sql = "INSERT INTO tbl_tasks (content) VALUES ('$task')";

            if (!$connection->query($sql) == TRUE) {
                echo "Error: " . $connection->error;
            }
            $i++;
        }

        $connection->close();
        echo "Demo tasks inserted.";
    }
}


$cd = new CreateData();

$cd->createTables();
$cd->createDemoTasks();






?>