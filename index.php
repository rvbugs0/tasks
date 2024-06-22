<?php

if (isset($_GET["user"])) {

  $user = $_GET["user"];
  include_once ("task-dashboard.php");


} else {

  include_once ("home-nouser.php");

}

?>