var autoscroll = true;

document.addEventListener("DOMContentLoaded", function () {
  getTasks();



  addTaskInputListener();


  autoscroll = document.getElementById("autoscroll").checked;
  
});

function autoscrollEvent(){
  autoscroll = document.getElementById("autoscroll").checked;
  console.log(autoscroll)
}

function addTaskInputListener() {
  taskInput = document.getElementById("taskInput");
  taskInput.addEventListener("keyup", function (event) {
    // console.log(event.target.value);
    if (event.key === "Enter") {
      textContent = event.target.value.trim();
      if (textContent.length > 0) {
        insertTask(textContent);
        event.target.value = "";
      }
    }
  });
}

function getTasks() {
  let taskContainer = document.getElementById("taskContainer");
  fetch("data.json")
    .then((response) => {
      return response.json();
    })
    .then((tasks) => {
      let fullStr = "";
      tasks.forEach((task) => {
        let str = "<div class='task'>";
        str +=
          "<span>" +
          task.content +
          "</span> &nbsp;<span class='deleteBtn' id='" +
          task.id +
          "' onclick=deleteTask(" +
          task.id +
          ",this) >X</span>";
        str += "</div>";
        fullStr += str;
      });
      taskContainer.innerHTML = fullStr;
    });
}

function deleteTask(id, e) {
  // fetch("api.php", { body: JSON.stringify({ id: id }), method: "DELETE" })
  //   .then((response) => response.json())
  //   .then((response) => {
  //     e.parentElement.style.display = "none";
  //   });

  e.parentElement.style.display = "none";
}

function insertTask(content) {


  
  let taskContainer = document.getElementById("taskContainer");

  let children = taskContainer.childNodes;
  let lastid=taskContainer.childNodes[children.length-1].childNodes[2].id;
  let task = {content:content,id:lastid+1};

  let str = "<div class='task'>";
  str +=
    "<span>" +
    task.content +
    "</span> &nbsp;<span class='deleteBtn' id='" +
    task.id +
    "' onclick=deleteTask(" +
    task.id +
    ",this) >X</span>";
  str += "</div>";

  taskContainer.innerHTML =  taskContainer.innerHTML+str;

  if(autoscroll){
    taskContainer.scrollTop = taskContainer.scrollHeight;
  }
}
