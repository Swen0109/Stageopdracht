<?php 
    require("../../functies.php");
    deleteProject($_GET["id"]);
    header("location: ../index.php");

?>