<?php
    require( "../../functies.php" );
    $id = $_GET["id"];
    createTask( $_POST, $_GET["id"] );
    header( "Location: ../../home/project2.php?id= $id ");
?>