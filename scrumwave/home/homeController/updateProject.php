<?php
    require("../../functies.php");
    updateAllFromProject($_POST, $_GET["id"]);
    header("location: ../index.php");
?>