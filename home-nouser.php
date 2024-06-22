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


        <a href=""><h1 >Tasks App</h1></a>
        <div>
            <input type="text" id="usernameInput" placeholder="Create/Enter your username" />

        </div>
    </div>

    <div class="right" id="taskContainer">






    </div>

    <script type="text/javascript">
        function addUsernameInputListener() {

            usernameInput = document.getElementById("usernameInput");
            usernameInput.addEventListener("keyup", function (event) {

                // console.log(event.target.value);
                if (event.key === "Enter") {

                    textContent = event.target.value.trim();
                    if (textContent.length > 3) {
                        usernameInput.classList.remove("unavailable")
                        usernameInput.classList.add("available")
                        
                        // event.target.value = "";
                    }else{
                        usernameInput.classList.remove("available")
                        usernameInput.classList.add("unavailable")
                        
                    }


                }
            });
        }

        addUsernameInputListener();

    </script>
</body>

</html>