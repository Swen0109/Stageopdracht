<?php
    require( "../../functies.php" );
    $id = $_GET["id"];
    updateAllFromProject( $_POST, $id );
    header( "Location: ../../home/project2.php?id= $id" );
?>