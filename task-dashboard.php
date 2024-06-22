
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
            <input type="text" id="taskInput" placeholder="Type your task..." />
            <form style="width:0px;height:0px"><input type="hidden" id="userid" value="<?php echo $user;?>"></form>
        </div>
    </div>

    <div class="right" id="taskContainer">






    </div>

    <script type="text/javascript" src="index.js"></script>
</body>

</html>

