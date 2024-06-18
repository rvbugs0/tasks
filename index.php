<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TASKS APP</title>
  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <div class="left">
    <h1>Tasks App</h1>
    <div>
      <input type="text" placeholder="Type your task..." />
      
    </div>
  </div>

  <div class="right">

    <?php


    require_once ("TaskData.php");
    $taskData = new TaskData();
    $tasks = $taskData->getTasks();
    foreach ($tasks as $task) {
      $taskcontent = $task['content'];
      $taskid = $task['id'];
      echo "<div class='task'>";
      echo "<span>$taskcontent</span> &nbsp;<span class='deleteBtn' id='$taskid'>X</span>";
      echo "</div>";
        
    
    }


    ?>

  </div>
</body>

</html>