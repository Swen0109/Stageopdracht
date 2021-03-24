<?php
    require( "../../functies.php" );

    createTask( $_POST, $_POST["ProjectId"] );
    header( "Location: ../index.php" );
?>