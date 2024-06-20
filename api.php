<?php


require_once ("TaskData.php");

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "GET") {
    // fetch tasks
    $taskData = new TaskData();
    $tasks = $taskData->getTasks();
    echo json_encode($tasks);
} elseif ($method == "POST") {
    // create new task
    $taskData = new TaskData();
    $task = json_decode(file_get_contents("php://input"), true);
    
    echo json_encode($taskData->insertTask($task['content']));

} elseif ($method == "DELETE") {

    $taskData = new TaskData();
    $task = json_decode(file_get_contents("php://input"), true);
    $id = $task["id"];
    $taskData->deleteTask($id);
    echo '{"success":"true"}';
}


?>