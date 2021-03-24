<?php
    require( "../../functies.php" );

    addUser($_POST, $_POST["color"]);
    header( "Location: ../index.php" );
?>