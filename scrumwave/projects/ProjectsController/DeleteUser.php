<?php
    require( "../../functies.php" );

    deleteUser( $_POST["color"] );
    header( "Location: ../index.php" );
?>